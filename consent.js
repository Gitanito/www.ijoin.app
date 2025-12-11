document.addEventListener('DOMContentLoaded', function() {
    const cookieOverlay = document.getElementById('cookieOverlay');
    const acceptCookiesBtn = document.getElementById('acceptCookies');
    const declineCookiesBtn = document.getElementById('declineCookies');

    // Funktion zum Setzen eines Cookies
    function setCookie(name, value, days) {
        let expires = "";
        if (days) {
            const date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/; SameSite=Lax";
    }

    // Funktion zum Abrufen eines Cookies
    function getCookie(name) {
        const nameEQ = name + "=";
        const ca = document.cookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) === ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    // Prüfen, ob der Benutzer bereits eine Entscheidung getroffen hat
    if (getCookie('cookieConsent') === 'accepted') {
        // Cookies sind bereits akzeptiert, Overlay nicht anzeigen
        return;
    } else if (getCookie('cookieConsent') === 'declined') {
        // Cookies wurden abgelehnt, Overlay nicht anzeigen und keine Tracking-Cookies setzen
        return;
    }

    // Geo-IP-Erkennung (Verwendung eines kostenlosen Dienstes, z.B. ip-api.com)
    fetch('http://ip-api.com/json', {method: "GET", mode: 'cors'})
        .then(response => response.json())
        .then(data => {
            const euCountries = [
                "AT", "BE", "BG", "HR", "CY", "CZ", "DK", "EE", "FI", "FR", "DE", "GR", "HU", "IE", "IT",
                "LV", "LT", "LU", "MT", "NL", "PL", "PT", "RO", "SK", "SI", "ES", "SE"
            ]; // Liste der EU-Länder (ISO 3166-1 alpha-2)

            if (data && euCountries.includes(data.countryCode)) {
                // Benutzer kommt aus der EU, Overlay anzeigen
                cookieOverlay.style.display = 'block';
            }
        })
        .catch(error => {
            console.warn('Geo-IP-Dienst konnte nicht erreicht werden oder Fehler:', error);
            // Fallback: Wenn Geo-IP fehlschlägt, können Sie das Overlay standardmäßig anzeigen
            // oder eine andere Logik anwenden. Für maximale Sicherheit besser anzeigen.
            // cookieOverlay.style.display = 'block';
        });

    // Event Listener für "Akzeptieren"-Button
    acceptCookiesBtn.addEventListener('click', function() {
        setCookie('cookieConsent', 'accepted', 365); // Zustimmung für 1 Jahr speichern
        cookieOverlay.style.display = 'none';
        // Hier können Sie Code hinzufügen, um Tracking-Cookies zu aktivieren
        console.log('Cookies akzeptiert. Tracking kann aktiviert werden.');
    });

    // Event Listener für "Ablehnen"-Button
    declineCookiesBtn.addEventListener('click', function() {
        setCookie('cookieConsent', 'declined', 365); // Ablehnung für 1 Jahr speichern
        cookieOverlay.style.display = 'none';
        // Hier sollten Sie sicherstellen, dass KEINE Tracking-Cookies gesetzt werden
        console.log('Cookies abgelehnt. Keine Tracking-Cookies gesetzt.');
    });
});