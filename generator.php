<?php

// --- 1. KONFIGURATION & SPRACHEN ---

$languages = [
    ["short" => "en", "name" => "English"], ["short" => "de", "name" => "German"], ["short" => "es", "name" => "Spanish"],
    ["short" => "it", "name" => "Italian"], ["short" => "hr", "name" => "Croatian"], ["short" => "fr", "name" => "French"],
    ["short" => "sq", "name" => "Albanian"], ["short" => "bs", "name" => "Bosnian"], ["short" => "nl", "name" => "Dutch"],
    ["short" => "tr", "name" => "Turkish"], ["short" => "uk", "name" => "Ukrainian"], ["short" => "pt", "name" => "Portuguese"],
    ["short" => "ru", "name" => "Russian"], ["short" => "cs", "name" => "Czech"], ["short" => "da", "name" => "Danish"],
    ["short" => "et", "name" => "Estonian"], ["short" => "fi", "name" => "Finnish"], ["short" => "hu", "name" => "Hungarian"],
    ["short" => "sr", "name" => "Serbian"], ["short" => "sk", "name" => "Slovak"], ["short" => "sl", "name" => "Slovenian"],
    ["short" => "sv", "name" => "Swedish"], ["short" => "no", "name" => "Norwegian"], ["short" => "pl", "name" => "Polish"],
    ["short" => "bg", "name" => "Bulgarian"], ["short" => "he", "name" => "Hebrew"], ["short" => "af", "name" => "Afrikaans"],
    ["short" => "ar", "name" => "Arabic"], ["short" => "zh", "name" => "Chinese"], ["short" => "hi", "name" => "Hindi"],
    ["short" => "bn", "name" => "Bengali"]
];

// --- 2. ÜBERSETZUNGEN ---

// Englisch (Fallback für alle Schlüssel)
$t_en = [
    "nav_feat" => "Features", "nav_how" => "How it works", "nav_ben" => "Benefits", "btn_create" => "Create Event",
    "hero_badge" => "Now available", "hero_h1" => "Your guests.", "hero_h2" => "Your event.", "hero_high" => "Just one link.",
    "hero_desc" => "Organize meetups, parties, or meetings without hurdles. Your guests join without installing an app or creating accounts.",
    "btn_start" => "Start for free", "btn_learn" => "Learn more", "no_cc" => "No credit card required. Ready instantly.",
    "why_sub" => "Why {brand}?", "why_h" => "Maximum response rate for your invites", "why_desc" => "We removed all barriers. Your guests don't need to register to reply to you.",
    "f1_t" => "No login needed", "f1_d" => "Guests click the link and reply instantly. No passwords, no app installation, no friction.",
    "f2_t" => "One link for everything", "f2_d" => "WhatsApp, Instagram Bio, Email, or LinkedIn. Copy the link and share it where your friends are.",
    "f3_t" => "\"I'll be late\"", "f3_d" => "Life happens. Guests can not only accept or decline but also indicate if they are running late.",
    "f4_t" => "Plus Ones (+1)", "f4_d" => "Bringing someone along? Guests can easily indicate if they are bringing partners or kids.",
    "f5_t" => "Mobile First", "f5_d" => "Optimized for smartphones. The invitation looks great on every device.",
    "f6_t" => "Real-time Updates", "f6_d" => "Change of location? Update the event, and all guests see the new info instantly.",
    "how_h" => "How it works", "s1_t" => "Create Event", "s1_d" => "Enter title, time, and location. Optional: Add details or polls.",
    "s2_t" => "Share Link", "s2_d" => "You get a unique link. Send it via WhatsApp, Mail, or post it on Social Media.",
    "s3_t" => "Stay Organized", "s3_d" => "Sit back. Watch the guest list fill up. All info in one place.",
    "uc_h" => "Suitable for any occasion", 
    "uc1_t" => "Private Parties", "uc1_d" => "Birthdays, BBQs, or housewarmings. No more WhatsApp group chaos.",
    "uc2_t" => "Clubs & Sports", "uc2_d" => "Who's coming to practice? Who's bringing what? Clarified quickly.",
    "uc3_t" => "Professional Networking", "uc3_d" => "Networking events or workshops. Lower the barrier for registration.",
    "cta_h1" => "Ready for your next event?", "cta_h2" => "Start now for free.", "cta_d" => "No account needed, neither for you nor your guests. Try it in seconds.", "cta_btn" => "Create Event Now",
    "meta_desc" => "Create events and invite guests - no signup required. The easiest way for RSVPs.",
    "title_suffix" => "- Event planning made simple"
];

// Spezifische Übersetzungen (Auszug für wichtige Sprachen)
$translations = [
    "en" => $t_en,
    "de" => [
        "nav_feat" => "Funktionen", "nav_how" => "So geht's", "nav_ben" => "Vorteile", "btn_create" => "Event erstellen",
        "hero_badge" => "Jetzt verfügbar", "hero_h1" => "Deine Gäste.", "hero_h2" => "Dein Event.", "hero_high" => "Nur ein Link.",
        "hero_desc" => "Organisiere Treffen, Partys oder Meetings ohne Hürden. Deine Gäste melden sich an, ohne eine App zu installieren.",
        "btn_start" => "Kostenlos starten", "btn_learn" => "Mehr erfahren", "no_cc" => "Keine Kreditkarte erforderlich. Sofort startklar.",
        "why_sub" => "Warum {brand}?", "why_h" => "Maximale Rücklaufquote für deine Einladungen", "why_desc" => "Wir haben alle Hürden entfernt. Deine Gäste müssen sich nicht registrieren.",
        "f1_t" => "Kein Login nötig", "f1_d" => "Deine Gäste klicken auf den Link und antworten sofort. Keine Passwörter, keine App.",
        "f2_t" => "Ein Link für alles", "f2_d" => "Egal ob WhatsApp, Instagram Bio, E-Mail oder LinkedIn. Kopiere den Link und teile ihn.",
        "f3_t" => "\"Ich komme später\"", "f3_d" => "Das Leben passiert. Gäste können angeben, wenn sie sich verspäten.",
        "f4_t" => "Begleitpersonen (+1)", "f4_d" => "Planst du mit Anhang? Gäste können angeben, ob sie Partner mitbringen.",
        "f5_t" => "Mobile First", "f5_d" => "Perfekt optimiert für das Smartphone. Die Einladung sieht überall gut aus.",
        "f6_t" => "Echtzeit-Updates", "f6_d" => "Ändert sich der Ort? Aktualisiere das Event, alle Gäste sehen es sofort.",
        "how_h" => "So einfach funktioniert's", "s1_t" => "Event anlegen", "s1_d" => "Gib Titel, Zeit und Ort ein. Optional: Details hinzufügen.",
        "s2_t" => "Link teilen", "s2_d" => "Du erhältst einen einzigartigen Link. Sende ihn per WhatsApp oder Mail.",
        "s3_t" => "Überblick behalten", "s3_d" => "Lehn dich zurück. Sieh zu, wie sich die Gästeliste füllt.",
        "uc_h" => "Für jeden Anlass geeignet",
        "uc1_t" => "Private Feiern", "uc1_d" => "Geburtstage, Grillabende. Kein WhatsApp-Gruppen-Chaos mehr.",
        "uc2_t" => "Vereine & Sport", "uc2_d" => "Wer kommt zum Training? Schnell geklärt.",
        "uc3_t" => "Professionelle Netzwerke", "uc3_d" => "Networking-Events oder Workshops. Senke die Hürde.",
        "cta_h1" => "Bereit für dein nächstes Event?", "cta_h2" => "Starte jetzt kostenlos.", "cta_d" => "Kein Account notwendig. Probier es in Sekunden aus.", "cta_btn" => "Event jetzt erstellen",
        "meta_desc" => "Erstelle Events und lade Gäste ein – ganz ohne Anmeldung.",
        "title_suffix" => "- Die einfachste Event-Planung"
    ],
    "es" => [
        "nav_feat" => "Funciones", "nav_how" => "Cómo funciona", "nav_ben" => "Beneficios", "btn_create" => "Crear evento",
        "hero_badge" => "Ya disponible", "hero_h1" => "Tus invitados.", "hero_h2" => "Tu evento.", "hero_high" => "Solo un enlace.",
        "hero_desc" => "Organiza reuniones o fiestas sin barreras. Tus invitados responden sin instalar apps.",
        "btn_start" => "Empezar gratis", "btn_learn" => "Saber más", "no_cc" => "Sin tarjeta de crédito. Listo al instante.",
        "why_sub" => "¿Por qué {brand}?", "why_h" => "Máxima respuesta a tus invitaciones", "why_desc" => "Eliminamos barreras. Sin registro para tus invitados.",
        "f1_t" => "Sin registro", "f1_d" => "Clic en el enlace y respuesta inmediata. Sin contraseñas.",
        "f2_t" => "Un enlace para todo", "f2_d" => "WhatsApp, Instagram, Email. Comparte donde quieras.",
        "f3_t" => "\"Llegaré tarde\"", "f3_d" => "La vida pasa. Los invitados pueden avisar si se retrasan.",
        "f4_t" => "Acompañantes (+1)", "f4_d" => "¿Vienen con alguien? Pueden indicar si traen pareja o niños.",
        "f5_t" => "Móvil primero", "f5_d" => "Optimizado para smartphones.",
        "f6_t" => "Actualizaciones en tiempo real", "f6_d" => "¿Cambio de lugar? Actualiza y todos lo ven al instante.",
        "how_h" => "Cómo funciona", "s1_t" => "Crear evento", "s1_d" => "Pon título, hora y lugar.",
        "s2_t" => "Compartir enlace", "s2_d" => "Envía tu enlace único por WhatsApp o redes.",
        "s3_t" => "Organizarse", "s3_d" => "Mira cómo se llena la lista de invitados.",
        "uc_h" => "Para cualquier ocasión",
        "uc1_t" => "Fiestas privadas", "uc1_d" => "Cumpleaños, barbacoas. Adiós al caos de WhatsApp.",
        "uc2_t" => "Clubes y Deportes", "uc2_d" => "¿Quién viene a entrenar? Aclarado rápido.",
        "uc3_t" => "Networking", "uc3_d" => "Eventos profesionales. Facilita el registro.",
        "cta_h1" => "¿Listo para tu evento?", "cta_h2" => "Empieza gratis.", "cta_d" => "Sin cuentas necesarias.", "cta_btn" => "Crear evento ahora",
        "meta_desc" => "Crea eventos e invita fácilmente sin registros.",
        "title_suffix" => "- Planificación de eventos simple"
    ],
    "fr" => [
        "nav_feat" => "Fonctionnalités", "nav_how" => "Comment ça marche", "nav_ben" => "Avantages", "btn_create" => "Créer un événement",
        "hero_badge" => "Maintenant disponible", "hero_h1" => "Vos invités.", "hero_h2" => "Votre événement.", "hero_high" => "Juste un lien.",
        "hero_desc" => "Organisez des rencontres, des fêtes ou des réunions sans obstacles. Vos invités s'inscrivent sans installer d'application.",
        "btn_start" => "Démarrer gratuitement", "btn_learn" => "En savoir plus", "no_cc" => "Pas de carte de crédit requise. Prêt instantanément.",
        "why_sub" => "Pourquoi {brand} ?", "why_h" => "Taux de réponse maximal pour vos invitations", "why_desc" => "Nous avons supprimé tous les obstacles. Vos invités n'ont pas besoin de s'inscrire.",
        "f1_t" => "Pas de connexion nécessaire", "f1_d" => "Vos invités cliquent sur le lien et répondent immédiatement. Pas de mots de passe, pas d'application.",
        "f2_t" => "Un lien pour tout", "f2_d" => "Que ce soit WhatsApp, la bio Instagram, e-mail ou LinkedIn. Copiez le lien et partagez-le.",
        "f3_t" => "\"J'arrive plus tard\"", "f3_d" => "La vie arrive. Les invités peuvent indiquer s'ils sont en retard.",
        "f4_t" => "Accompagnateurs (+1)", "f4_d" => "Vous planifiez avec un plus un ? Les invités peuvent indiquer s'ils amènent un partenaire.",
        "f5_t" => "Mobile First", "f5_d" => "Parfaitement optimisé pour le smartphone. L'invitation a fière allure partout.",
        "f6_t" => "Mises à jour en temps réel", "f6_d" => "Le lieu change ? Mettez à jour l'événement, tous les invités le voient immédiatement.",
        "how_h" => "C'est aussi simple que ça", "s1_t" => "Créer un événement", "s1_d" => "Entrez le titre, l'heure et le lieu. Facultatif : ajoutez des détails.",
        "s2_t" => "Partager le lien", "s2_d" => "Vous recevrez un lien unique. Envoyez-le par WhatsApp ou par e-mail.",
        "s3_t" => "Garder une vue d'ensemble", "s3_d" => "Détendez-vous. Regardez la liste des invités se remplir.",
        "uc_h" => "Adapté à toutes les occasions",
        "uc1_t" => "Fêtes privées", "uc1_d" => "Anniversaires, barbecues. Fini le chaos des groupes WhatsApp.",
        "uc2_t" => "Associations & Sports", "uc2_d" => "Qui vient à l'entraînement ? C'est vite réglé.",
        "uc3_t" => "Réseaux professionnels", "uc3_d" => "Événements de networking ou ateliers. Réduisez les obstacles.",
        "cta_h1" => "Prêt pour votre prochain événement ?", "cta_h2" => "Démarrez maintenant gratuitement.", "cta_d" => "Pas besoin de compte. Essayez-le en quelques secondes.", "cta_btn" => "Créer un événement maintenant",
        "meta_desc" => "Créez des événements et invitez des invités – sans aucune inscription.",
        "title_suffix" => "- La planification d'événements la plus simple"
    ],
    "it" => [
        "nav_feat" => "Funzioni", "nav_how" => "Come funziona", "nav_ben" => "Vantaggi", "btn_create" => "Crea evento",
        "hero_badge" => "Ora disponibile", "hero_h1" => "I tuoi ospiti.", "hero_h2" => "Il tuo evento.", "hero_high" => "Solo un link.",
        "hero_desc" => "Organizza incontri, feste o riunioni senza ostacoli. I tuoi ospiti si registrano senza installare un'app.",
        "btn_start" => "Inizia gratis", "btn_learn" => "Scopri di più", "no_cc" => "Nessuna carta di credito richiesta. Subito pronto all'uso.",
        "why_sub" => "Perché {brand}?", "why_h" => "Massimo tasso di risposta per i tuoi inviti", "why_desc" => "Abbiamo rimosso ogni ostacolo. I tuoi ospiti non devono registrarsi.",
        "f1_t" => "Nessun login necessario", "f1_d" => "I tuoi ospiti cliccano sul link e rispondono immediatamente. Niente password, niente app.",
        "f2_t" => "Un link per tutto", "f2_d" => "Che sia WhatsApp, biografia Instagram, e-mail o LinkedIn. Copia il link e condividilo.",
        "f3_t" => "\"Arrivo più tardi\"", "f3_d" => "Gli imprevisti capitano. Gli ospiti possono indicare se sono in ritardo.",
        "f4_t" => "Accompagnatori (+1)", "f4_d" => "Stai pianificando con un accompagnatore? Gli ospiti possono indicare se portano un partner.",
        "f5_t" => "Mobile First", "f5_d" => "Perfettamente ottimizzato per lo smartphone. L'invito appare bene ovunque.",
        "f6_t" => "Aggiornamenti in tempo reale", "f6_d" => "Il luogo cambia? Aggiorna l'evento, tutti gli ospiti lo vedono immediatamente.",
        "how_h" => "È così semplice", "s1_t" => "Crea un evento", "s1_d" => "Inserisci titolo, ora e luogo. Opzionale: aggiungi dettagli.",
        "s2_t" => "Condividi il link", "s2_d" => "Riceverai un link unico. Invialo tramite WhatsApp o e-mail.",
        "s3_t" => "Tieni traccia", "s3_d" => "Rilassati. Guarda la lista degli invitati riempirsi.",
        "uc_h" => "Adatto per ogni occasione",
        "uc1_t" => "Feste private", "uc1_d" => "Compleanni, grigliate. Niente più caos nei gruppi WhatsApp.",
        "uc2_t" => "Associazioni & Sport", "uc2_d" => "Chi viene all'allenamento? Risolto rapidamente.",
        "uc3_t" => "Reti professionali", "uc3_d" => "Eventi di networking o workshop. Riduci le barriere.",
        "cta_h1" => "Pronto per il tuo prossimo evento?", "cta_h2" => "Inizia ora gratuitamente.", "cta_d" => "Nessun account necessario. Provalo in pochi secondi.", "cta_btn" => "Crea evento ora",
        "meta_desc" => "Crea eventi e invita ospiti – senza registrazione.",
        "title_suffix" => "- La pianificazione di eventi più semplice"
    ],
    "hr" => [
        "nav_feat" => "Značajke", "nav_how" => "Kako radi", "nav_ben" => "Prednosti", "btn_create" => "Kreiraj događaj",
        "hero_badge" => "Sada dostupno", "hero_h1" => "Vaši gosti.", "hero_h2" => "Vaš događaj.", "hero_high" => "Samo jedna poveznica.",
        "hero_desc" => "Organizirajte sastanke, zabave ili okupljanja bez prepreka. Vaši se gosti prijavljuju bez instaliranja aplikacije.",
        "btn_start" => "Započnite besplatno", "btn_learn" => "Saznajte više", "no_cc" => "Kreditna kartica nije potrebna. Odmah spremno.",
        "why_sub" => "Zašto {brand}?", "why_h" => "Maksimalna stopa odgovora na vaše pozivnice", "why_desc" => "Uklonili smo sve prepreke. Vaši se gosti ne moraju registrirati.",
        "f1_t" => "Nije potrebna prijava", "f1_d" => "Vaši gosti kliknu na poveznicu i odmah odgovore. Nema lozinki, nema aplikacije.",
        "f2_t" => "Jedna poveznica za sve", "f2_d" => "Bilo da je WhatsApp, Instagram biografija, e-pošta ili LinkedIn. Kopirajte poveznicu i podijelite je.",
        "f3_t" => "\"Dolazim kasnije\"", "f3_d" => "Život se događa. Gosti mogu naznačiti ako kasne.",
        "f4_t" => "Pratitelji (+1)", "f4_d" => "Planirate s pratnjom? Gosti mogu naznačiti dovode li partnera.",
        "f5_t" => "Mobilni prioritet", "f5_d" => "Savršeno optimizirano za pametne telefone. Pozivnica izgleda dobro svugdje.",
        "f6_t" => "Ažuriranja u stvarnom vremenu", "f6_d" => "Mijenja se lokacija? Ažurirajte događaj, svi gosti to odmah vide.",
        "how_h" => "Tako je jednostavno", "s1_t" => "Kreirajte događaj", "s1_d" => "Unesite naslov, vrijeme i mjesto. Opcionalno: dodajte detalje.",
        "s2_t" => "Podijelite poveznicu", "s2_d" => "Dobit ćete jedinstvenu poveznicu. Pošaljite je putem WhatsAppa ili e-pošte.",
        "s3_t" => "Držite pregled", "s3_d" => "Opustite se. Gledajte kako se popis gostiju popunjava.",
        "uc_h" => "Pogodno za svaku prigodu",
        "uc1_t" => "Privatne proslave", "uc1_d" => "Rođendani, roštilji. Nema više kaosa u WhatsApp grupama.",
        "uc2_t" => "Udruge & Sport", "uc2_d" => "Tko dolazi na trening? Brzo riješeno.",
        "uc3_t" => "Profesionalne mreže", "uc3_d" => "Mrežni događaji ili radionice. Smanjite prepreke.",
        "cta_h1" => "Spremni za vaš sljedeći događaj?", "cta_h2" => "Započnite sada besplatno.", "cta_d" => "Nije potreban račun. Isprobajte za nekoliko sekundi.", "cta_btn" => "Kreiraj događaj sada",
        "meta_desc" => "Kreirajte događaje i pozovite goste – bez registracije.",
        "title_suffix" => "- Najjednostavnije planiranje događaja"
    ],
    "sq" => [
        "nav_feat" => "Funksionalitetet", "nav_how" => "Si funksionon", "nav_ben" => "Përfitimet", "btn_create" => "Krijo event",
        "hero_badge" => "Tani në dispozicion", "hero_h1" => "Të ftuarit tuaj.", "hero_h2" => "Eventi juaj.", "hero_high" => "Vetëm një link.",
        "hero_desc" => "Organizo takime, festa apo mbledhje pa pengesa. Të ftuarit tuaj regjistrohen pa instaluar asnjë aplikacion.",
        "btn_start" => "Fillo falas", "btn_learn" => "Mëso më shumë", "no_cc" => "Nuk kërkohet kartë krediti. Gati menjëherë.",
        "why_sub" => "Pse {brand}?", "why_h" => "Norma maksimale e përgjigjeve për ftesat tuaja", "why_desc" => "Ne kemi hequr të gjitha pengesat. Të ftuarit tuaj nuk kanë nevojë të regjistrohen.",
        "f1_t" => "Nuk nevojitet hyrje", "f1_d" => "Të ftuarit tuaj klikojnë në link dhe përgjigjen menjëherë. Pa fjalëkalime, pa aplikacion.",
        "f2_t" => "Një link për gjithçka", "f2_d" => "Qoftë WhatsApp, biografia në Instagram, E-mail ose LinkedIn. Kopjo linkun dhe shpërndaje.",
        "f3_t" => "\"Vij më vonë\"", "f3_d" => "Jeta ndodh. Të ftuarit mund të tregojnë nëse do të vonohen.",
        "f4_t" => "Personat shoqërues (+1)", "f4_d" => "Po planifikoni me shoqërues? Të ftuarit mund të tregojnë nëse sjellin një partner.",
        "f5_t" => "Mobile First", "f5_d" => "Optimizuar në mënyrë perfekte për smartphone. Ftesa duket mirë kudo.",
        "f6_t" => "Përditësime në kohë reale", "f6_d" => "Ndryshon vendi? Përditëso eventin, të gjithë të ftuarit e shohin menjëherë.",
        "how_h" => "Është kaq e thjeshtë", "s1_t" => "Krijo eventin", "s1_d" => "Vendos titullin, kohën dhe vendin. Opsionale: shto detaje.",
        "s2_t" => "Ndaje linkun", "s2_d" => "Do të marrësh një link unik. Dërgoje atë përmes WhatsApp ose E-mail.",
        "s3_t" => "Mbaj një pasqyrë", "s3_d" => "Ulu rehat. Shiko listën e të ftuarve që mbushet.",
        "uc_h" => "E përshtatshme për çdo rast",
        "uc1_t" => "Festa private", "uc1_d" => "Ditëlindje, Barbecue. Nuk ka më kaos në grupet e WhatsApp.",
        "uc2_t" => "Shoqata & Sport", "uc2_d" => "Kush vjen në stërvitje? Zgjidhet shpejt.",
        "uc3_t" => "Rrjetet profesionale", "uc3_d" => "Evente networking ose seminare. Ulni barrierën.",
        "cta_h1" => "Gati për eventin tuaj të ardhshëm?", "cta_h2" => "Fillo tani falas.", "cta_d" => "Nuk nevojitet llogari. Provoje në sekonda.", "cta_btn" => "Krijo eventin tani",
        "meta_desc" => "Krijo evente dhe ftoji të ftuar – pa regjistrim.",
        "title_suffix" => "- Planifikimi më i thjeshtë i eventeve"
    ],
    "bs" => [
        "nav_feat" => "Funkcije", "nav_how" => "Kako radi", "nav_ben" => "Prednosti", "btn_create" => "Kreiraj događaj",
        "hero_badge" => "Sada dostupno", "hero_h1" => "Vaši gosti.", "hero_h2" => "Vaš događaj.", "hero_high" => "Samo jedan link.",
        "hero_desc" => "Organizujte sastanke, zabave ili okupljanja bez prepreka. Vaši gosti se prijavljuju bez instaliranja aplikacije.",
        "btn_start" => "Započnite besplatno", "btn_learn" => "Saznajte više", "no_cc" => "Kreditna kartica nije potrebna. Odmah spremno.",
        "why_sub" => "Zašto {brand}?", "why_h" => "Maksimalna stopa odgovora na vaše pozivnice", "why_desc" => "Uklonili smo sve prepreke. Vaši se gosti ne moraju registrovati.",
        "f1_t" => "Nije potrebna prijava", "f1_d" => "Vaši gosti kliknu na link i odmah odgovore. Nema lozinki, nema aplikacije.",
        "f2_t" => "Jedan link za sve", "f2_d" => "Bilo da je WhatsApp, Instagram biografija, e-mail ili LinkedIn. Kopirajte link i podijelite ga.",
        "f3_t" => "\"Dolazim kasnije\"", "f3_d" => "Život se dešava. Gosti mogu naznačiti ako kasne.",
        "f4_t" => "Pratioci (+1)", "f4_d" => "Planirate s pratnjom? Gosti mogu naznačiti dovode li partnera.",
        "f5_t" => "Mobilni prioritet", "f5_d" => "Savršeno optimizovano za pametne telefone. Pozivnica izgleda dobro svugdje.",
        "f6_t" => "Ažuriranja u stvarnom vremenu", "f6_d" => "Mijenja se lokacija? Ažurirajte događaj, svi gosti to odmah vide.",
        "how_h" => "Tako je jednostavno", "s1_t" => "Kreirajte događaj", "s1_d" => "Unesite naslov, vrijeme i mjesto. Opcionalno: dodajte detalje.",
        "s2_t" => "Podijelite link", "s2_d" => "Dobit ćete jedinstven link. Pošaljite ga putem WhatsAppa ili e-pošte.",
        "s3_t" => "Držite pregled", "s3_d" => "Opustite se. Gledajte kako se lista gostiju popunjava.",
        "uc_h" => "Pogodno za svaku priliku",
        "uc1_t" => "Privatne proslave", "uc1_d" => "Rođendani, roštilji. Nema više haosa u WhatsApp grupama.",
        "uc2_t" => "Udruženja & Sport", "uc2_d" => "Ko dolazi na trening? Brzo riješeno.",
        "uc3_t" => "Profesionalne mreže", "uc3_d" => "Mrežni događaji ili radionice. Smanjite prepreke.",
        "cta_h1" => "Spremni za vaš sljedeći događaj?", "cta_h2" => "Započnite sada besplatno.", "cta_d" => "Nije potreban račun. Isprobajte za nekoliko sekundi.", "cta_btn" => "Kreiraj događaj sada",
        "meta_desc" => "Kreirajte događaje i pozovite goste – bez registracije.",
        "title_suffix" => "- Najjednostavnije planiranje događaja"
    ],
    "nl" => [
        "nav_feat" => "Functies", "nav_how" => "Hoe het werkt", "nav_ben" => "Voordelen", "btn_create" => "Evenement aanmaken",
        "hero_badge" => "Nu beschikbaar", "hero_h1" => "Jouw gasten.", "hero_h2" => "Jouw evenement.", "hero_high" => "Slechts één link.",
        "hero_desc" => "Organiseer ontmoetingen, feesten of vergaderingen zonder gedoe. Je gasten melden zich aan zonder een app te installeren.",
        "btn_start" => "Gratis starten", "btn_learn" => "Meer informatie", "no_cc" => "Geen creditcard nodig. Direct klaar voor gebruik.",
        "why_sub" => "Waarom {brand}?", "why_h" => "Maximale respons op jouw uitnodigingen", "why_desc" => "We hebben alle obstakels verwijderd. Je gasten hoeven zich niet te registreren.",
        "f1_t" => "Geen login nodig", "f1_d" => "Je gasten klikken op de link en reageren direct. Geen wachtwoorden, geen app.",
        "f2_t" => "Eén link voor alles", "f2_d" => "Of het nu WhatsApp, Instagram Bio, e-mail of LinkedIn is. Kopieer de link en deel deze.",
        "f3_t" => "\"Ik kom later\"", "f3_d" => "Het leven overkomt ons. Gasten kunnen aangeven als ze te laat zijn.",
        "f4_t" => "Begeleiders (+1)", "f4_d" => "Plan je met aanhang? Gasten kunnen aangeven of ze een partner meenemen.",
        "f5_t" => "Mobile First", "f5_d" => "Perfect geoptimaliseerd voor de smartphone. De uitnodiging ziet er overal goed uit.",
        "f6_t" => "Realtime updates", "f6_d" => "Verandert de locatie? Werk het evenement bij, alle gasten zien het direct.",
        "how_h" => "Zo eenvoudig werkt het", "s1_t" => "Evenement aanmaken", "s1_d" => "Voer titel, tijd en locatie in. Optioneel: voeg details toe.",
        "s2_t" => "Link delen", "s2_d" => "Je ontvangt een unieke link. Stuur deze via WhatsApp of e-mail.",
        "s3_t" => "Overzicht behouden", "s3_d" => "Leun achterover. Kijk hoe de gastenlijst zich vult.",
        "uc_h" => "Geschikt voor elke gelegenheid",
        "uc1_t" => "Privéfeesten", "uc1_d" => "Verjaardagen, barbecues. Geen WhatsApp-groepenchaos meer.",
        "uc2_t" => "Verenigingen & Sport", "uc2_d" => "Wie komt er naar de training? Snel geregeld.",
        "uc3_t" => "Professionele netwerken", "uc3_d" => "Netwerkevenementen of workshops. Verlaag de drempel.",
        "cta_h1" => "Klaar voor je volgende evenement?", "cta_h2" => "Start nu gratis.", "cta_d" => "Geen account nodig. Probeer het binnen enkele seconden uit.", "cta_btn" => "Evenement nu aanmaken",
        "meta_desc" => "Maak evenementen aan en nodig gasten uit – zonder registratie.",
        "title_suffix" => "- De eenvoudigste evenementenplanning"
    ],
    "tr" => [
        "nav_feat" => "Özellikler", "nav_how" => "Nasıl Çalışır", "nav_ben" => "Avantajlar", "btn_create" => "Etkinlik Oluştur",
        "hero_badge" => "Şimdi Mevcut", "hero_h1" => "Misafirleriniz.", "hero_h2" => "Etkinliğiniz.", "hero_high" => "Sadece Bir Bağlantı.",
        "hero_desc" => "Toplantıları, partileri veya buluşmaları engelsiz düzenleyin. Misafirleriniz herhangi bir uygulama yüklemeden kaydolur.",
        "btn_start" => "Ücretsiz Başla", "btn_learn" => "Daha Fazla Bilgi", "no_cc" => "Kredi Kartı Gerekmez. Anında Hazır.",
        "why_sub" => "Neden {brand}?", "why_h" => "Davetiyeleriniz için Maksimum Geri Dönüş Oranı", "why_desc" => "Tüm engelleri kaldırdık. Misafirlerinizin kayıt olmasına gerek yok.",
        "f1_t" => "Giriş Yapmaya Gerek Yok", "f1_d" => "Misafirleriniz bağlantıya tıklar ve anında yanıt verir. Şifre yok, uygulama yok.",
        "f2_t" => "Her Şey İçin Tek Bağlantı", "f2_d" => "WhatsApp, Instagram Biyo, E-posta veya LinkedIn olsun. Bağlantıyı kopyalayın ve paylaşın.",
        "f3_t" => "\"Sonra Gelirim\"", "f3_d" => "Hayat olur. Misafirler geç kalacaklarını belirtebilirler.",
        "f4_t" => "Eşlik Eden Kişiler (+1)", "f4_d" => "Yanınızda biriyle mi plan yapıyorsunuz? Misafirler yanlarında bir partner getirip getirmeyeceklerini belirtebilirler.",
        "f5_t" => "Mobil Öncelikli", "f5_d" => "Akıllı telefon için mükemmel şekilde optimize edilmiştir. Davetiye her yerde harika görünür.",
        "f6_t" => "Gerçek Zamanlı Güncellemeler", "f6_d" => "Konum mu değişti? Etkinliği güncelleyin, tüm misafirler anında görür.",
        "how_h" => "İşte Bu Kadar Kolay", "s1_t" => "Etkinlik Oluştur", "s1_d" => "Başlık, zaman ve yer girin. İsteğe bağlı: detay ekleyin.",
        "s2_t" => "Bağlantıyı Paylaş", "s2_d" => "Benzersiz bir bağlantı alacaksınız. WhatsApp veya e-posta ile gönderin.",
        "s3_t" => "Genel Bakışı Koruyun", "s3_d" => "Arkanıza yaslanın. Misafir listesinin nasıl dolduğunu izleyin.",
        "uc_h" => "Her Durum İçin Uygun",
        "uc1_t" => "Özel Kutlamalar", "uc1_d" => "Doğum günleri, Barbeküler. Artık WhatsApp grup karmaşası yok.",
        "uc2_t" => "Dernekler & Spor", "uc2_d" => "Antrenmana kimler geliyor? Hızla açıklığa kavuşur.",
        "uc3_t" => "Profesyonel Ağlar", "uc3_d" => "Ağ oluşturma etkinlikleri veya atölye çalışmaları. Engeli azaltın.",
        "cta_h1" => "Bir sonraki etkinliğiniz için hazır mısınız?", "cta_h2" => "Şimdi ücretsiz başlayın.", "cta_d" => "Hesap gerekmez. Birkaç saniye içinde deneyin.", "cta_btn" => "Şimdi etkinlik oluştur",
        "meta_desc" => "Etkinlikler oluşturun ve misafirleri davet edin – kayıt olmadan.",
        "title_suffix" => "- En Basit Etkinlik Planlaması"
    ],
    "uk" => [
        "nav_feat" => "Функції", "nav_how" => "Як це працює", "nav_ben" => "Переваги", "btn_create" => "Створити подію",
        "hero_badge" => "Зараз доступно", "hero_h1" => "Ваші гості.", "hero_h2" => "Ваша подія.", "hero_high" => "Лише одне посилання.",
        "hero_desc" => "Організовуйте зустрічі, вечірки чи збори без перешкод. Ваші гості реєструються, не встановлюючи додаток.",
        "btn_start" => "Почати безкоштовно", "btn_learn" => "Дізнатися більше", "no_cc" => "Кредитна картка не потрібна. Готово миттєво.",
        "why_sub" => "Чому {brand}?", "why_h" => "Максимальний відсоток відповідей на ваші запрошення", "why_desc" => "Ми усунули всі перешкоди. Вашим гостям не потрібно реєструватися.",
        "f1_t" => "Вхід не потрібен", "f1_d" => "Ваші гості натискають на посилання та відповідають негайно. Без паролів, без додатку.",
        "f2_t" => "Одне посилання для всього", "f2_d" => "Будь то WhatsApp, Instagram Bio, електронна пошта або LinkedIn. Скопіюйте посилання та поділіться ним.",
        "f3_t" => "\"Я прийду пізніше\"", "f3_d" => "Життя трапляється. Гості можуть вказати, якщо вони запізнюються.",
        "f4_t" => "Супровідні особи (+1)", "f4_d" => "Плануєте з кимось? Гості можуть вказати, чи привозять вони партнера.",
        "f5_t" => "Мобільний пріоритет", "f5_d" => "Ідеально оптимізовано для смартфонів. Запрошення виглядає чудово всюди.",
        "f6_t" => "Оновлення в реальному часі", "f6_d" => "Змінилося місце? Оновіть подію, усі гості миттєво побачать це.",
        "how_h" => "Це так просто", "s1_t" => "Створити подію", "s1_d" => "Введіть назву, час та місце. За бажанням: додайте деталі.",
        "s2_t" => "Поділитися посиланням", "s2_d" => "Ви отримаєте унікальне посилання. Надішліть його через WhatsApp або електронною поштою.",
        "s3_t" => "Слідкуйте за оглядом", "s3_d" => "Розслабтеся. Дивіться, як заповнюється список гостей.",
        "uc_h" => "Підходить для будь-якого випадку",
        "uc1_t" => "Приватні свята", "uc1_d" => "Дні народження, барбекю. Більше ніякого хаосу в групах WhatsApp.",
        "uc2_t" => "Асоціації та спорт", "uc2_d" => "Хто прийде на тренування? Швидко вирішено.",
        "uc3_t" => "Професійні мережі", "uc3_d" => "Мережеві заходи або семінари. Знизьте бар'єр.",
        "cta_h1" => "Готові до вашої наступної події?", "cta_h2" => "Почніть зараз безкоштовно.", "cta_d" => "Обліковий запис не потрібен. Спробуйте за кілька секунд.", "cta_btn" => "Створити подію зараз",
        "meta_desc" => "Створюйте події та запрошуйте гостей – без реєстрації.",
        "title_suffix" => "- Найпростіше планування подій"
    ],
    "pt" => [
        "nav_feat" => "Funcionalidades", "nav_how" => "Como funciona", "nav_ben" => "Vantagens", "btn_create" => "Criar evento",
        "hero_badge" => "Agora disponível", "hero_h1" => "Os seus convidados.", "hero_h2" => "O seu evento.", "hero_high" => "Apenas um link.",
        "hero_desc" => "Organize encontros, festas ou reuniões sem obstáculos. Os seus convidados inscrevem-se sem instalar uma aplicação.",
        "btn_start" => "Começar grátis", "btn_learn" => "Saber mais", "no_cc" => "Não é necessário cartão de crédito. Pronto a usar instantaneamente.",
        "why_sub" => "Porquê {brand}?", "why_h" => "Taxa máxima de resposta para os seus convites", "why_desc" => "Removemos todos os obstáculos. Os seus convidados não precisam de se registar.",
        "f1_t" => "Não é necessário login", "f1_d" => "Os seus convidados clicam no link e respondem de imediato. Sem palavras-passe, sem aplicação.",
        "f2_t" => "Um link para tudo", "f2_d" => "Seja WhatsApp, biografia do Instagram, e-mail ou LinkedIn. Copie o link e partilhe-o.",
        "f3_t" => "\"Chego mais tarde\"", "f3_d" => "A vida acontece. Os convidados podem indicar se vão atrasar-se.",
        "f4_t" => "Acompanhantes (+1)", "f4_d" => "Está a planear com acompanhantes? Os convidados podem indicar se trazem um parceiro.",
        "f5_t" => "Mobile First", "f5_d" => "Perfeitamente otimizado para smartphone. O convite fica ótimo em qualquer lugar.",
        "f6_t" => "Atualizações em tempo real", "f6_d" => "O local mudou? Atualize o evento, todos os convidados veem imediatamente.",
        "how_h" => "É assim tão simples", "s1_t" => "Criar evento", "s1_d" => "Introduza o título, hora e local. Opcional: adicione detalhes.",
        "s2_t" => "Partilhar link", "s2_d" => "Receberá um link único. Envie-o via WhatsApp ou e-mail.",
        "s3_t" => "Manter uma visão geral", "s3_d" => "Relaxe. Veja a lista de convidados a preencher-se.",
        "uc_h" => "Adequado para todas as ocasiões",
        "uc1_t" => "Festas privadas", "uc1_d" => "Aniversários, churrascos. Chega de caos em grupos de WhatsApp.",
        "uc2_t" => "Associações & Desporto", "uc2_d" => "Quem vem ao treino? Rapidamente resolvido.",
        "uc3_t" => "Redes profissionais", "uc3_d" => "Eventos de networking ou workshops. Reduza a barreira.",
        "cta_h1" => "Pronto para o seu próximo evento?", "cta_h2" => "Comece agora gratuitamente.", "cta_d" => "Não é necessário conta. Experimente em segundos.", "cta_btn" => "Criar evento agora",
        "meta_desc" => "Crie eventos e convide pessoas – sem registo.",
        "title_suffix" => "- O planeamento de eventos mais simples"
    ],
    "ru" => [
        "nav_feat" => "Функции", "nav_how" => "Как это работает", "nav_ben" => "Преимущества", "btn_create" => "Создать событие",
        "hero_badge" => "Доступно сейчас", "hero_h1" => "Ваши гости.", "hero_h2" => "Ваше событие.", "hero_high" => "Всего одна ссылка.",
        "hero_desc" => "Организуйте встречи, вечеринки или собрания без препятствий. Ваши гости регистрируются без установки приложения.",
        "btn_start" => "Начать бесплатно", "btn_learn" => "Узнать больше", "no_cc" => "Кредитная карта не требуется. Готово к использованию мгновенно.",
        "why_sub" => "Почему {brand}?", "why_h" => "Максимальный процент ответов на ваши приглашения", "why_desc" => "Мы устранили все препятствия. Вашим гостям не нужно регистрироваться.",
        "f1_t" => "Вход не требуется", "f1_d" => "Ваши гости нажимают на ссылку и отвечают немедленно. Без паролей, без приложения.",
        "f2_t" => "Одна ссылка для всего", "f2_d" => "Будь то WhatsApp, Instagram Bio, электронная почта или LinkedIn. Скопируйте ссылку и поделитесь ею.",
        "f3_t" => "\"Я приду позже\"", "f3_d" => "Жизнь бывает. Гости могут указать, если они опаздывают.",
        "f4_t" => "Сопровождающие лица (+1)", "f4_d" => "Планируете с сопровождением? Гости могут указать, привозят ли они партнера.",
        "f5_t" => "Мобильный приоритет", "f5_d" => "Идеально оптимизировано для смартфонов. Приглашение выглядит отлично везде.",
        "f6_t" => "Обновления в реальном времени", "f6_d" => "Изменилось местоположение? Обновите событие, все гости мгновенно увидят это.",
        "how_h" => "Это так просто", "s1_t" => "Создать событие", "s1_d" => "Введите название, время и место. По желанию: добавьте детали.",
        "s2_t" => "Поделиться ссылкой", "s2_d" => "Вы получите уникальную ссылку. Отправьте ее через WhatsApp или по электронной почте.",
        "s3_t" => "Следить за обзором", "s3_d" => "Расслабьтесь. Смотрите, как заполняется список гостей.",
        "uc_h" => "Подходит для любого случая",
        "uc1_t" => "Частные праздники", "uc1_d" => "Дни рождения, барбекю. Больше никакого хаоса в группах WhatsApp.",
        "uc2_t" => "Ассоциации и спорт", "uc2_d" => "Кто придет на тренировку? Быстро решено.",
        "uc3_t" => "Профессиональные сети", "uc3_d" => "Сетевые мероприятия или семинары. Снизьте барьер.",
        "cta_h1" => "Готовы к вашему следующему событию?", "cta_h2" => "Начните сейчас бесплатно.", "cta_d" => "Учетная запись не требуется. Попробуйте за несколько секунд.", "cta_btn" => "Создать событие сейчас",
        "meta_desc" => "Создавайте события и приглашайте гостей – без регистрации.",
        "title_suffix" => "- Простейшее планирование событий"
    ],
    "cs" => [
        "nav_feat" => "Funkce", "nav_how" => "Jak to funguje", "nav_ben" => "Výhody", "btn_create" => "Vytvořit událost",
        "hero_badge" => "Nyní k dispozici", "hero_h1" => "Vaši hosté.", "hero_h2" => "Vaše událost.", "hero_high" => "Jen jeden odkaz.",
        "hero_desc" => "Organizujte setkání, večírky nebo schůzky bez překážek. Vaši hosté se přihlásí, aniž by museli instalovat aplikaci.",
        "btn_start" => "Začít zdarma", "btn_learn" => "Zjistit více", "no_cc" => "Nevyžaduje se kreditní karta. Okamžitě připraveno k použití.",
        "why_sub" => "Proč {brand}?", "why_h" => "Maximální míra odezvy na vaše pozvánky", "why_desc" => "Odstranili jsme všechny překážky. Vaši hosté se nemusí registrovat.",
        "f1_t" => "Není nutné přihlášení", "f1_d" => "Vaši hosté kliknou na odkaz a okamžitě odpoví. Žádná hesla, žádná aplikace.",
        "f2_t" => "Jeden odkaz pro všechno", "f2_d" => "Ať už je to WhatsApp, Instagram Bio, e-mail nebo LinkedIn. Zkopírujte odkaz a sdílejte ho.",
        "f3_t" => "\"Přijdu později\"", "f3_d" => "Život se stává. Hosté mohou uvést, pokud se zpozdí.",
        "f4_t" => "Doprovod (+1)", "f4_d" => "Plánujete s doprovodem? Hosté mohou uvést, zda s sebou přivedou partnera.",
        "f5_t" => "Mobile First", "f5_d" => "Perfektně optimalizováno pro chytré telefony. Pozvánka vypadá skvěle všude.",
        "f6_t" => "Aktualizace v reálném čase", "f6_d" => "Změnilo se místo? Aktualizujte událost, všichni hosté to okamžitě uvidí.",
        "how_h" => "Takto je to jednoduché", "s1_t" => "Vytvořit událost", "s1_d" => "Zadejte název, čas a místo. Volitelně: přidejte podrobnosti.",
        "s2_t" => "Sdílet odkaz", "s2_d" => "Obdržíte jedinečný odkaz. Odešlete jej přes WhatsApp nebo e-mailem.",
        "s3_t" => "Mějte přehled", "s3_d" => "Pohodlně se usaďte. Sledujte, jak se seznam hostů plní.",
        "uc_h" => "Vhodné pro každou příležitost",
        "uc1_t" => "Soukromé oslavy", "uc1_d" => "Narozeniny, grilování. Už žádný chaos ve skupinách WhatsApp.",
        "uc2_t" => "Spolky & Sport", "uc2_d" => "Kdo přijde na trénink? Rychle vyřešeno.",
        "uc3_t" => "Profesionální sítě", "uc3_d" => "Networkingové akce nebo workshopy. Snižte bariéru.",
        "cta_h1" => "Připraveni na vaši další událost?", "cta_h2" => "Začněte nyní zdarma.", "cta_d" => "Není nutný účet. Vyzkoušejte to během několika sekund.", "cta_btn" => "Vytvořit událost nyní",
        "meta_desc" => "Vytvářejte události a zvěte hosty – bez registrace.",
        "title_suffix" => "- Nejjednodušší plánování událostí"
    ],
    "da" => [
        "nav_feat" => "Funktioner", "nav_how" => "Sådan fungerer det", "nav_ben" => "Fordele", "btn_create" => "Opret begivenhed",
        "hero_badge" => "Nu tilgængelig", "hero_h1" => "Dine gæster.", "hero_h2" => "Din begivenhed.", "hero_high" => "Kun ét link.",
        "hero_desc" => "Arranger møder, fester eller sammenkomster uden besvær. Dine gæster tilmelder sig uden at installere en app.",
        "btn_start" => "Start gratis", "btn_learn" => "Lær mere", "no_cc" => "Intet kreditkort nødvendigt. Klar til brug med det samme.",
        "why_sub" => "Hvorfor {brand}?", "why_h" => "Maksimal svarprocent på dine invitationer", "why_desc" => "Vi har fjernet alle forhindringer. Dine gæster behøver ikke at registrere sig.",
        "f1_t" => "Intet login nødvendigt", "f1_d" => "Dine gæster klikker på linket og svarer med det samme. Ingen adgangskoder, ingen app.",
        "f2_t" => "Ét link til alt", "f2_d" => "Uanset om det er WhatsApp, Instagram Bio, e-mail eller LinkedIn. Kopier linket og del det.",
        "f3_t" => "\"Jeg kommer senere\"", "f3_d" => "Livet sker. Gæster kan angive, hvis de er forsinkede.",
        "f4_t" => "Ledsagere (+1)", "f4_d" => "Planlægger du med ledsagelse? Gæster kan angive, om de medbringer en partner.",
        "f5_t" => "Mobil først", "f5_d" => "Perfekt optimeret til smartphonen. Invitationen ser godt ud overalt.",
        "f6_t" => "Realtidsopdateringer", "f6_d" => "Ændrer stedet sig? Opdater begivenheden, alle gæster ser det med det samme.",
        "how_h" => "Så enkelt er det", "s1_t" => "Opret begivenhed", "s1_d" => "Indtast titel, tid og sted. Valgfrit: tilføj detaljer.",
        "s2_t" => "Del link", "s2_d" => "Du modtager et unikt link. Send det via WhatsApp eller e-mail.",
        "s3_t" => "Behold overblikket", "s3_d" => "Læn dig tilbage. Se gæstelisten fyldes op.",
        "uc_h" => "Velegnet til enhver lejlighed",
        "uc1_t" => "Private fester", "uc1_d" => "Fødselsdage, grillfester. Ikke mere WhatsApp-gruppe-kaos.",
        "uc2_t" => "Foreninger & Sport", "uc2_d" => "Hvem kommer til træning? Hurtigt afklaret.",
        "uc3_t" => "Professionelle netværk", "uc3_d" => "Netværksarrangementer eller workshops. Sænk barrieren.",
        "cta_h1" => "Klar til din næste begivenhed?", "cta_h2" => "Start nu gratis.", "cta_d" => "Ingen konto nødvendig. Prøv det på få sekunder.", "cta_btn" => "Opret begivenhed nu",
        "meta_desc" => "Opret begivenheder og inviter gæster – uden registrering.",
        "title_suffix" => "- Den nemmeste begivenhedsplanlægning"
    ],
    "et" => [
        "nav_feat" => "Funktsioonid", "nav_how" => "Kuidas see töötab", "nav_ben" => "Eelised", "btn_create" => "Loo sündmus",
        "hero_badge" => "Nüüd saadaval", "hero_h1" => "Sinu külalised.", "hero_h2" => "Sinu sündmus.", "hero_high" => "Ainult üks link.",
        "hero_desc" => "Korralda kohtumisi, pidusid või koosolekuid ilma takistusteta. Sinu külalised registreerivad end ilma rakendust installimata.",
        "btn_start" => "Alusta tasuta", "btn_learn" => "Loe lähemalt", "no_cc" => "Krediitkaarti pole vaja. Kohe kasutusvalmis.",
        "why_sub" => "Miks {brand}?", "why_h" => "Maksimaalne vastuste määr sinu kutsetele", "why_desc" => "Oleme eemaldanud kõik takistused. Sinu külalised ei pea registreeruma.",
        "f1_t" => "Sisselogimine pole vajalik", "f1_d" => "Sinu külalised klõpsavad lingil ja vastavad kohe. Paroole pole, rakendust pole.",
        "f2_t" => "Üks link kõige jaoks", "f2_d" => "Olgu see WhatsApp, Instagrami biograafia, e-post või LinkedIn. Kopeeri link ja jaga seda.",
        "f3_t" => "\"Ma tulen hiljem\"", "f3_d" => "Elu juhtub. Külalised saavad märkida, kui nad hilinevad.",
        "f4_t" => "Kaaslased (+1)", "f4_d" => "Kas plaanid koos kaaslasega? Külalised saavad märkida, kas nad toovad partneri kaasa.",
        "f5_t" => "Mobiil eelkõige", "f5_d" => "Täiuslikult optimeeritud nutitelefonidele. Kutse näeb igal pool hea välja.",
        "f6_t" => "Reaalajas uuendused", "f6_d" => "Kas koht muutub? Uuenda sündmust, kõik külalised näevad seda kohe.",
        "how_h" => "Nii lihtne see ongi", "s1_t" => "Loo sündmus", "s1_d" => "Sisesta pealkiri, aeg ja koht. Valikuline: lisa üksikasjad.",
        "s2_t" => "Jaga linki", "s2_d" => "Saad unikaalse lingi. Saada see WhatsAppi või e-posti teel.",
        "s3_t" => "Hoia ülevaade", "s3_d" => "Istuge maha. Vaata, kuidas külaliste nimekiri täitub.",
        "uc_h" => "Sobib igaks juhuks",
        "uc1_t" => "Erapidusid", "uc1_d" => "Sünnipäevad, grillipeod. Enam pole WhatsAppi grupi kaost.",
        "uc2_t" => "Ühingud ja sport", "uc2_d" => "Kes tuleb trenni? Kiiresti selgitatud.",
        "uc3_t" => "Professionaalsed võrgustikud", "uc3_d" => "Võrgustikuüritused või töötoad. Vähenda takistusi.",
        "cta_h1" => "Valmis oma järgmiseks sündmuseks?", "cta_h2" => "Alusta nüüd tasuta.", "cta_d" => "Kontot pole vaja. Proovi seda sekunditega.", "cta_btn" => "Loo sündmus kohe",
        "meta_desc" => "Loo sündmusi ja kutsu külalisi – ilma registreerimiseta.",
        "title_suffix" => "- Kõige lihtsam sündmuste planeerimine"
    ],
    "fi" => [
        "nav_feat" => "Ominaisuudet", "nav_how" => "Miten se toimii", "nav_ben" => "Edut", "btn_create" => "Luo tapahtuma",
        "hero_badge" => "Nyt saatavilla", "hero_h1" => "Vieraasi.", "hero_h2" => "Tapahtumasi.", "hero_high" => "Vain yksi linkki.",
        "hero_desc" => "Järjestä tapaamisia, juhlia tai kokouksia ilman esteitä. Vieraasi ilmoittautuvat asentamatta sovellusta.",
        "btn_start" => "Aloita ilmaiseksi", "btn_learn" => "Lue lisää", "no_cc" => "Luottokorttia ei tarvita. Heti valmis.",
        "why_sub" => "Miksi {brand}?", "why_h" => "Maksimi vastausprosentti kutsuihisi", "why_desc" => "Olemme poistaneet kaikki esteet. Vieraasi eivät tarvitse rekisteröitymistä.",
        "f1_t" => "Ei vaadi kirjautumista", "f1_d" => "Vieraasi klikkaavat linkkiä ja vastaavat heti. Ei salasanoja, ei sovellusta.",
        "f2_t" => "Yksi linkki kaikkeen", "f2_d" => "Oli kyseessä sitten WhatsApp, Instagram Bio, sähköposti tai LinkedIn. Kopioi linkki ja jaa se.",
        "f3_t" => "\"Tulossa myöhemmin\"", "f3_d" => "Elämässä tapahtuu. Vieraat voivat ilmoittaa, jos he myöhästyvät.",
        "f4_t" => "Saattajat (+1)", "f4_d" => "Suunnitteletko seuralaisen kanssa? Vieraat voivat ilmoittaa, tuovatko he kumppanin mukanaan.",
        "f5_t" => "Mobiili edellä", "f5_d" => "Täydellisesti optimoitu älypuhelimille. Kutsu näyttää hyvältä kaikkialla.",
        "f6_t" => "Reaaliaikaiset päivitykset", "f6_d" => "Muuttuuko paikka? Päivitä tapahtuma, kaikki vieraat näkevät sen heti.",
        "how_h" => "Näin helppoa se on", "s1_t" => "Luo tapahtuma", "s1_d" => "Anna otsikko, aika ja paikka. Valinnaisesti: lisää yksityiskohtia.",
        "s2_t" => "Jaa linkki", "s2_d" => "Saat ainutlaatuisen linkin. Lähetä se WhatsAppilla tai sähköpostitse.",
        "s3_t" => "Pidä yleiskuva", "s3_d" => "Rentoudu. Katso, miten vieraslista täyttyy.",
        "uc_h" => "Sopii jokaiseen tilaisuuteen",
        "uc1_t" => "Yksityisjuhlat", "uc1_d" => "Syntymäpäivät, grillijuhlat. Ei enää WhatsApp-ryhmäkaosta.",
        "uc2_t" => "Yhdistykset & Urheilu", "uc2_d" => "Kuka tulee harjoituksiin? Nopeasti selvitetty.",
        "uc3_t" => "Ammattiverkostot", "uc3_d" => "Verkostoitumistapahtumat tai työpajat. Alenna kynnystä.",
        "cta_h1" => "Valmiina seuraavaan tapahtumaasi?", "cta_h2" => "Aloita nyt ilmaiseksi.", "cta_d" => "Tiliä ei tarvita. Kokeile sekunneissa.", "cta_btn" => "Luo tapahtuma nyt",
        "meta_desc" => "Luo tapahtumia ja kutsu vieraita – ilman rekisteröitymistä.",
        "title_suffix" => "- Helpoin tapahtumasuunnittelu"
    ],
    "hu" => [
        "nav_feat" => "Funkciók", "nav_how" => "Így működik", "nav_ben" => "Előnyök", "btn_create" => "Esemény létrehozása",
        "hero_badge" => "Most elérhető", "hero_h1" => "Vendégeid.", "hero_h2" => "Eseményed.", "hero_high" => "Csak egy link.",
        "hero_desc" => "Szervezz találkozókat, bulikat vagy megbeszéléseket akadálymentesen. Vendégeid app telepítése nélkül jelentkeznek be.",
        "btn_start" => "Indítás ingyen", "btn_learn" => "Tudj meg többet", "no_cc" => "Nincs szükség hitelkártyára. Azonnal használható.",
        "why_sub" => "Miért a {brand}?", "why_h" => "Maximális válaszadási arány a meghívóidra", "why_desc" => "Minden akadályt eltávolítottunk. Vendégeidnek nem kell regisztrálniuk.",
        "f1_t" => "Nincs szükség bejelentkezésre", "f1_d" => "Vendégeid rákattintanak a linkre és azonnal válaszolnak. Nincsenek jelszavak, nincs alkalmazás.",
        "f2_t" => "Egy link mindenre", "f2_d" => "Legyen szó WhatsAppról, Instagram Bióról, e-mailről vagy LinkedINről. Másold ki a linket és oszd meg.",
        "f3_t" => "\"Később jövök\"", "f3_d" => "Az élet közbeszól. A vendégek jelezhetik, ha késnek.",
        "f4_t" => "Kísérők (+1)", "f4_d" => "Kísérővel tervezel? A vendégek jelezhetik, ha partnerrel érkeznek.",
        "f5_t" => "Mobilbarát", "f5_d" => "Tökéletesen optimalizálva okostelefonokra. A meghívó mindenhol jól néz ki.",
        "f6_t" => "Valós idejű frissítések", "f6_d" => "Változik a helyszín? Frissítsd az eseményt, minden vendég azonnal látja.",
        "how_h" => "Így működik, egyszerűen", "s1_t" => "Esemény létrehozása", "s1_d" => "Add meg a címet, időt és helyet. Opcionális: részletek hozzáadása.",
        "s2_t" => "Link megosztása", "s2_d" => "Egyedi linket kapsz. Küldd el WhatsAppon vagy e-mailben.",
        "s3_t" => "Tartsd szemmel", "s3_d" => "Dőlj hátra. Nézd, ahogy telik a vendéglista.",
        "uc_h" => "Minden alkalomra alkalmas",
        "uc1_t" => "Privát ünnepségek", "uc1_d" => "Születésnapok, grillezések. Nincs több WhatsApp csoport káosz.",
        "uc2_t" => "Egyesületek és Sport", "uc2_d" => "Ki jön edzésre? Gyorsan tisztázva.",
        "uc3_t" => "Professzionális hálózatok", "uc3_d" => "Networking események vagy workshopok. Csökkentsd az akadályt.",
        "cta_h1" => "Készen állsz a következő eseményedre?", "cta_h2" => "Indítsd el most ingyen.", "cta_d" => "Nincs szükség fiókra. Próbáld ki másodpercek alatt.", "cta_btn" => "Esemény létrehozása most",
        "meta_desc" => "Hozzon létre eseményeket és hívjon meg vendégeket – regisztráció nélkül.",
        "title_suffix" => "- A legegyszerűbb eseménytervezés"
    ],
    "sr" => [
        "nav_feat" => "Funkcije", "nav_how" => "Kako funkcioniše", "nav_ben" => "Prednosti", "btn_create" => "Kreiraj događaj",
        "hero_badge" => "Sada dostupno", "hero_h1" => "Vaši gosti.", "hero_h2" => "Vaš događaj.", "hero_high" => "Samo jedan link.",
        "hero_desc" => "Organizujte sastanke, zabave ili okupljanja bez prepreka. Vaši gosti se prijavljuju bez instaliranja aplikacije.",
        "btn_start" => "Započnite besplatno", "btn_learn" => "Saznajte više", "no_cc" => "Kreditna kartica nije potrebna. Odmah spremno.",
        "why_sub" => "Zašto {brand}?", "why_h" => "Maksimalna stopa odgovora na vaše pozivnice", "why_desc" => "Uklonili smo sve prepreke. Vaši gosti ne moraju da se registruju.",
        "f1_t" => "Nije potrebna prijava", "f1_d" => "Vaši gosti kliknu na link i odmah odgovore. Nema lozinki, nema aplikacije.",
        "f2_t" => "Jedan link za sve", "f2_d" => "Bilo da je WhatsApp, Instagram biografija, e-pošta ili LinkedIn. Kopirajte link i podelite ga.",
        "f3_t" => "\"Dolazim kasnije\"", "f3_d" => "Život se dešava. Gosti mogu naznačiti ako kasne.",
        "f4_t" => "Pratnja (+1)", "f4_d" => "Planirate sa pratnjom? Gosti mogu naznačiti da li dovode partnera.",
        "f5_t" => "Mobilni prioritet", "f5_d" => "Savršeno optimizovano za pametne telefone. Pozivnica izgleda dobro svuda.",
        "f6_t" => "Ažuriranja u realnom vremenu", "f6_d" => "Mesto se menja? Ažurirajte događaj, svi gosti to odmah vide.",
        "how_h" => "Tako je jednostavno", "s1_t" => "Kreirajte događaj", "s1_d" => "Unesite naslov, vreme i mesto. Opcionalno: dodajte detalje.",
        "s2_t" => "Podelite link", "s2_d" => "Dobićete jedinstveni link. Pošaljite ga putem WhatsAppa ili e-pošte.",
        "s3_t" => "Držite pregled", "s3_d" => "Opustite se. Gledajte kako se lista gostiju popunjava.",
        "uc_h" => "Pogodno za svaku priliku",
        "uc1_t" => "Privatne proslave", "uc1_d" => "Rođendani, roštilji. Nema više haosa u WhatsApp grupama.",
        "uc2_t" => "Udruženja & Sport", "uc2_d" => "Ko dolazi na trening? Brzo rešeno.",
        "uc3_t" => "Profesionalne mreže", "uc3_d" => "Mrežni događaji ili radionice. Smanjite prepreke.",
        "cta_h1" => "Spremni za vaš sledeći događaj?", "cta_h2" => "Započnite sada besplatno.", "cta_d" => "Nije potreban nalog. Isprobajte za nekoliko sekundi.", "cta_btn" => "Kreiraj događaj sada",
        "meta_desc" => "Kreirajte događaje i pozovite goste – bez registracije.",
        "title_suffix" => "- Najjednostavnije planiranje događaja"
    ],
    "sk" => [
        "nav_feat" => "Funkcie", "nav_how" => "Ako to funguje", "nav_ben" => "Výhody", "btn_create" => "Vytvoriť udalosť",
        "hero_badge" => "Teraz k dispozícii", "hero_h1" => "Vaši hostia.", "hero_h2" => "Vaša udalosť.", "hero_high" => "Len jeden odkaz.",
        "hero_desc" => "Organizujte stretnutia, párty alebo mítingy bez prekážok. Vaši hostia sa prihlásia bez inštalácie aplikácie.",
        "btn_start" => "Začať zadarmo", "btn_learn" => "Zistiť viac", "no_cc" => "Nevyžaduje sa kreditná karta. Okamžite pripravené na použitie.",
        "why_sub" => "Prečo {brand}?", "why_h" => "Maximálna miera odozvy na vaše pozvánky", "why_desc" => "Odstránili sme všetky prekážky. Vaši hostia sa nemusia registrovať.",
        "f1_t" => "Nie je potrebné prihlásenie", "f1_d" => "Vaši hostia kliknú na odkaz a okamžite odpovedia. Žiadne heslá, žiadna aplikácia.",
        "f2_t" => "Jeden odkaz pre všetko", "f2_d" => "Či už je to WhatsApp, Instagram Bio, e-mail alebo LinkedIn. Skopírujte odkaz a zdieľajte ho.",
        "f3_t" => "\"Prídem neskôr\"", "f3_d" => "Život sa stáva. Hostia môžu uviesť, ak meškajú.",
        "f4_t" => "Sprievodné osoby (+1)", "f4_d" => "Plánujete s doprovodom? Hostia môžu uviesť, či so sebou privedú partnera.",
        "f5_t" => "Mobilné prvé", "f5_d" => "Perfektne optimalizované pre smartfóny. Pozvánka vyzerá skvele všade.",
        "f6_t" => "Aktualizácie v reálnom čase", "f6_d" => "Zmenilo sa miesto? Aktualizujte udalosť, všetci hostia to okamžite uvidia.",
        "how_h" => "Takto je to jednoduché", "s1_t" => "Vytvoriť udalosť", "s1_d" => "Zadajte názov, čas a miesto. Voliteľne: pridajte podrobnosti.",
        "s2_t" => "Zdieľať odkaz", "s2_d" => "Dostanete jedinečný odkaz. Odošlite ho cez WhatsApp alebo e-mailom.",
        "s3_t" => "Majte prehľad", "s3_d" => "Pohodlne sa usaďte. Sledujte, ako sa zoznam hostí plní.",
        "uc_h" => "Vhodné pre každú príležitosť",
        "uc1_t" => "Súkromné oslavy", "uc1_d" => "Narodeniny, grilovanie. Už žiadny chaos v skupinách WhatsApp.",
        "uc2_t" => "Spolky & Šport", "uc2_d" => "Kto príde na tréning? Rýchlo vyriešené.",
        "uc3_t" => "Profesionálne siete", "uc3_d" => "Networkingové akcie alebo workshopy. Znížte bariéru.",
        "cta_h1" => "Pripravení na vašu ďalšiu udalosť?", "cta_h2" => "Začnite teraz zadarmo.", "cta_d" => "Nie je potrebný účet. Vyskúšajte to v priebehu niekoľkých sekúnd.", "cta_btn" => "Vytvoriť udalosť teraz",
        "meta_desc" => "Vytvárajte udalosti a pozývajte hostí – bez registrácie.",
        "title_suffix" => "- Najjednoduchšie plánovanie udalostí"
    ],
    "sl" => [
        "nav_feat" => "Funkcije", "nav_how" => "Kako deluje", "nav_ben" => "Prednosti", "btn_create" => "Ustvari dogodek",
        "hero_badge" => "Zdaj na voljo", "hero_h1" => "Vaši gostje.", "hero_h2" => "Vaš dogodek.", "hero_high" => "Samo ena povezava.",
        "hero_desc" => "Organizirajte srečanja, zabave ali sestanke brez ovir. Vaši gostje se prijavijo, ne da bi namestili aplikacijo.",
        "btn_start" => "Začnite brezplačno", "btn_learn" => "Več o tem", "no_cc" => "Kreditna kartica ni potrebna. Takoj pripravljeno za uporabo.",
        "why_sub" => "Zakaj {brand}?", "why_h" => "Najvišja stopnja odzivnosti na vaša vabila", "why_desc" => "Odstranili smo vse ovire. Vašim gostom se ni treba registrirati.",
        "f1_t" => "Prijava ni potrebna", "f1_d" => "Vaši gostje kliknejo na povezavo in takoj odgovorijo. Brez gesel, brez aplikacije.",
        "f2_t" => "Ena povezava za vse", "f2_d" => "Naj bo to WhatsApp, Instagram Bio, e-pošta ali LinkedIn. Kopirajte povezavo in jo delite.",
        "f3_t" => "\"Pridem kasneje\"", "f3_d" => "Življenje se zgodi. Gostje lahko navedejo, če zamujajo.",
        "f4_t" => "Spremljevalci (+1)", "f4_d" => "Ali načrtujete s spremljevalcem? Gostje lahko navedejo, ali pripeljejo partnerja.",
        "f5_t" => "Mobilni prvi", "f5_d" => "Popolnoma optimizirano za pametne telefone. Vabilo izgleda odlično povsod.",
        "f6_t" => "Posodobitve v realnem času", "f6_d" => "Se lokacija spreminja? Posodobite dogodek, vsi gostje to takoj vidijo.",
        "how_h" => "Tako preprosto je", "s1_t" => "Ustvari dogodek", "s1_d" => "Vnesite naslov, čas in kraj. Neobvezno: dodajte podrobnosti.",
        "s2_t" => "Deli povezavo", "s2_d" => "Prejeli boste edinstveno povezavo. Pošljite jo preko WhatsAppa ali e-pošte.",
        "s3_t" => "Ohranite pregled", "s3_d" => "Sprostite se. Opazujte, kako se seznam gostov polni.",
        "uc_h" => "Primerno za vsako priložnost",
        "uc1_t" => "Zasebne zabave", "uc1_d" => "Rojstni dnevi, žar. Nič več kaosa v skupinah WhatsApp.",
        "uc2_t" => "Društva & Šport", "uc2_d" => "Kdo prihaja na trening? Hitro rešeno.",
        "uc3_t" => "Poklicne mreže", "uc3_d" => "Dogodki mreženja ali delavnice. Zmanjšajte ovire.",
        "cta_h1" => "Pripravljeni na vaš naslednji dogodek?", "cta_h2" => "Začnite zdaj brezplačno.", "cta_d" => "Račun ni potreben. Preizkusite ga v nekaj sekundah.", "cta_btn" => "Ustvari dogodek zdaj",
        "meta_desc" => "Ustvarite dogodke in povabite goste – brez registracije.",
        "title_suffix" => "- Najenostavnejše načrtovanje dogodkov"
    ],
    "sv" => [
        "nav_feat" => "Funktioner", "nav_how" => "Så fungerar det", "nav_ben" => "Fördelar", "btn_create" => "Skapa evenemang",
        "hero_badge" => "Nu tillgänglig", "hero_h1" => "Dina gäster.", "hero_h2" => "Ditt evenemang.", "hero_high" => "Bara en länk.",
        "hero_desc" => "Organisera möten, fester eller sammankomster utan krångel. Dina gäster anmäler sig utan att installera en app.",
        "btn_start" => "Börja gratis", "btn_learn" => "Läs mer", "no_cc" => "Inget kreditkort krävs. Klar att använda direkt.",
        "why_sub" => "Varför {brand}?", "why_h" => "Maximal svarsfrekvens för dina inbjudningar", "why_desc" => "Vi har tagit bort alla hinder. Dina gäster behöver inte registrera sig.",
        "f1_t" => "Ingen inloggning krävs", "f1_d" => "Dina gäster klickar på länken och svarar omedelbart. Inga lösenord, ingen app.",
        "f2_t" => "En länk för allt", "f2_d" => "Oavsett om det är WhatsApp, Instagram Bio, e-post eller LinkedIn. Kopiera länken och dela den.",
        "f3_t" => "\"Jag kommer senare\"", "f3_d" => "Livet händer. Gäster kan ange om de blir försenade.",
        "f4_t" => "Sällskap (+1)", "f4_d" => "Planerar du med sällskap? Gäster kan ange om de tar med en partner.",
        "f5_t" => "Mobil först", "f5_d" => "Perfekt optimerad för smarttelefonen. Inbjudan ser bra ut överallt.",
        "f6_t" => "Realtidsuppdateringar", "f6_d" => "Ändras platsen? Uppdatera evenemanget, alla gäster ser det omedelbart.",
        "how_h" => "Så enkelt är det", "s1_t" => "Skapa evenemang", "s1_d" => "Ange titel, tid och plats. Valfritt: lägg till detaljer.",
        "s2_t" => "Dela länk", "s2_d" => "Du får en unik länk. Skicka den via WhatsApp eller e-post.",
        "s3_t" => "Behåll översikten", "s3_d" => "Luta dig tillbaka. Se gästlistan fyllas på.",
        "uc_h" => "Passar för alla tillfällen",
        "uc1_t" => "Privata fester", "uc1_d" => "Födelsedagar, grillkvällar. Inget mer WhatsApp-gruppkaos.",
        "uc2_t" => "Föreningar & Sport", "uc2_d" => "Vem kommer till träningen? Snabbt löst.",
        "uc3_t" => "Professionella nätverk", "uc3_d" => "Nätverksevenemang eller workshops. Sänk tröskeln.",
        "cta_h1" => "Redo för ditt nästa evenemang?", "cta_h2" => "Starta nu gratis.", "cta_d" => "Inget konto behövs. Prova det på några sekunder.", "cta_btn" => "Skapa evenemang nu",
        "meta_desc" => "Skapa evenemang och bjud in gäster – utan registrering.",
        "title_suffix" => "- Den enklaste evenemangsplaneringen"
    ],
    "no" => [
        "nav_feat" => "Funksjoner", "nav_how" => "Slik fungerer det", "nav_ben" => "Fordeler", "btn_create" => "Opprett arrangement",
        "hero_badge" => "Nå tilgjengelig", "hero_h1" => "Dine gjester.", "hero_h2" => "Ditt arrangement.", "hero_high" => "Bare én lenke.",
        "hero_desc" => "Organiser møter, fester eller sammenkomster uten problemer. Dine gjester melder seg på uten å installere en app.",
        "btn_start" => "Start gratis", "btn_learn" => "Lær mer", "no_cc" => "Ingen kredittkort nødvendig. Klar til bruk umiddelbart.",
        "why_sub" => "Hvorfor {brand}?", "why_h" => "Maksimal svarprosent for dine invitasjoner", "why_desc" => "Vi har fjernet alle hindringer. Dine gjester trenger ikke å registrere seg.",
        "f1_t" => "Ingen innlogging nødvendig", "f1_d" => "Dine gjester klikker på lenken og svarer umiddelbart. Ingen passord, ingen app.",
        "f2_t" => "Én lenke til alt", "f2_d" => "Enten det er WhatsApp, Instagram Bio, e-post eller LinkedIn. Kopier lenken og del den.",
        "f3_t" => "\"Jeg kommer senere\"", "f3_d" => "Livet skjer. Gjester kan angi om de er forsinket.",
        "f4_t" => "Ledsagere (+1)", "f4_d" => "Planlegger du med følge? Gjester kan angi om de tar med en partner.",
        "f5_t" => "Mobil først", "f5_d" => "Perfekt optimalisert for smarttelefonen. Invitasjonen ser bra ut overalt.",
        "f6_t" => "Sanntidsoppdateringer", "f6_d" => "Endres stedet? Oppdater arrangementet, alle gjester ser det umiddelbart.",
        "how_h" => "Så enkelt er det", "s1_t" => "Opprett arrangement", "s1_d" => "Skriv inn tittel, tid og sted. Valgfritt: legg til detaljer.",
        "s2_t" => "Del lenke", "s2_d" => "Du mottar en unik lenke. Send den via WhatsApp eller e-post.",
        "s3_t" => "Behold oversikten", "s3_d" => "Slapp av. Se gjestelisten fylles opp.",
        "uc_h" => "Passer for enhver anledning",
        "uc1_t" => "Private fester", "uc1_d" => "Bursdager, grillfester. Ikke mer WhatsApp-gruppe-kaos.",
        "uc2_t" => "Foreninger & Sport", "uc2_d" => "Hvem kommer på trening? Raskt avklart.",
        "uc3_t" => "Profesjonelle nettverk", "uc3_d" => "Nettverksarrangementer eller workshops. Senk terskelen.",
        "cta_h1" => "Klar for ditt neste arrangement?", "cta_h2" => "Start nå gratis.", "cta_d" => "Ingen konto nødvendig. Prøv det på sekunder.", "cta_btn" => "Opprett arrangement nå",
        "meta_desc" => "Opprett arrangementer og inviter gjester – uten registrering.",
        "title_suffix" => "- Den enkleste arrangementsplanleggingen"
    ],
    "pl" => [
        "nav_feat" => "Funkcje", "nav_how" => "Jak to działa", "nav_ben" => "Zalety", "btn_create" => "Utwórz wydarzenie",
        "hero_badge" => "Teraz dostępne", "hero_h1" => "Twoi goście.", "hero_h2" => "Twoje wydarzenie.", "hero_high" => "Tylko jeden link.",
        "hero_desc" => "Organizuj spotkania, imprezy lub zebrania bez przeszkód. Twoi goście rejestrują się bez instalowania aplikacji.",
        "btn_start" => "Zacznij bezpłatnie", "btn_learn" => "Dowiedz się więcej", "no_cc" => "Karta kredytowa nie jest wymagana. Gotowe do natychmiastowego użycia.",
        "why_sub" => "Dlaczego {brand}?", "why_h" => "Maksymalna stopa odpowiedzi na Twoje zaproszenia", "why_desc" => "Usunęliśmy wszystkie przeszkody. Twoi goście nie muszą się rejestrować.",
        "f1_t" => "Logowanie nie jest potrzebne", "f1_d" => "Twoi goście klikają w link i od razu odpowiadają. Bez haseł, bez aplikacji.",
        "f2_t" => "Jeden link do wszystkiego", "f2_d" => "Niezależnie od tego, czy to WhatsApp, biogram na Instagramie, e-mail czy LinkedIn. Skopiuj link i udostępnij go.",
        "f3_t" => "\"Przyjdę później\"", "f3_d" => "Życie się zdarza. Goście mogą wskazać, jeśli się spóźniają.",
        "f4_t" => "Osoby towarzyszące (+1)", "f4_d" => "Planujesz z osobą towarzyszącą? Goście mogą wskazać, czy przyprowadzają partnera.",
        "f5_t" => "Mobile First", "f5_d" => "Perfekcyjnie zoptymalizowane pod smartfony. Zaproszenie wygląda świetnie wszędzie.",
        "f6_t" => "Aktualizacje w czasie rzeczywistym", "f6_d" => "Miejsce się zmienia? Zaktualizuj wydarzenie, wszyscy goście zobaczą to natychmiast.",
        "how_h" => "To takie proste", "s1_t" => "Utwórz wydarzenie", "s1_d" => "Wprowadź tytuł, czas i miejsce. Opcjonalnie: dodaj szczegóły.",
        "s2_t" => "Udostępnij link", "s2_d" => "Otrzymasz unikalny link. Wyślij go przez WhatsApp lub e-mail.",
        "s3_t" => "Zachowaj przegląd", "s3_d" => "Usiądź wygodnie. Obserwuj, jak lista gości się zapełnia.",
        "uc_h" => "Nadaje się na każdą okazję",
        "uc1_t" => "Przyjęcia prywatne", "uc1_d" => "Urodziny, grille. Koniec z chaosem w grupach WhatsApp.",
        "uc2_t" => "Stowarzyszenia & Sport", "uc2_d" => "Kto przyjdzie na trening? Szybko wyjaśnione.",
        "uc3_t" => "Sieci profesjonalne", "uc3_d" => "Wydarzenia networkingowe lub warsztaty. Obniż barierę.",
        "cta_h1" => "Gotowy na Twoje kolejne wydarzenie?", "cta_h2" => "Rozpocznij teraz bezpłatnie.", "cta_d" => "Konto nie jest potrzebne. Wypróbuj w kilka sekund.", "cta_btn" => "Utwórz wydarzenie teraz",
        "meta_desc" => "Twórz wydarzenia i zapraszaj gości – bez rejestracji.",
        "title_suffix" => "- Najprostsze planowanie wydarzeń"
    ],
    "bg" => [
        "nav_feat" => "Функции", "nav_how" => "Как работи", "nav_ben" => "Предимства", "btn_create" => "Създай събитие",
        "hero_badge" => "Вече налично", "hero_h1" => "Вашите гости.", "hero_h2" => "Вашето събитие.", "hero_high" => "Само един линк.",
        "hero_desc" => "Организирайте срещи, партита или събирания без пречки. Вашите гости се регистрират, без да инсталират приложение.",
        "btn_start" => "Започни безплатно", "btn_learn" => "Научи повече", "no_cc" => "Не е необходима кредитна карта. Готово за моментална употреба.",
        "why_sub" => "Защо {brand}?", "why_h" => "Максимален процент отговори на вашите покани", "why_desc" => "Премахнахме всички пречки. Вашите гости не е необходимо да се регистрират.",
        "f1_t" => "Не е нужен вход", "f1_d" => "Вашите гости кликват върху линка и отговарят веднага. Без пароли, без приложение.",
        "f2_t" => "Един линк за всичко", "f2_d" => "Независимо дали е WhatsApp, Instagram Bio, имейл или LinkedIn. Копирайте линка и го споделете.",
        "f3_t" => "\"Идвам по-късно\"", "f3_d" => "Животът се случва. Гостите могат да посочат, ако закъсняват.",
        "f4_t" => "Придружители (+1)", "f4_d" => "Планирате с придружител? Гостите могат да посочат дали водят партньор.",
        "f5_t" => "Мобилни първо", "f5_d" => "Перфектно оптимизирано за смартфон. Поканата изглежда добре навсякъде.",
        "f6_t" => "Актуализации в реално време", "f6_d" => "Мястото се променя? Актуализирайте събитието, всички гости го виждат веднага.",
        "how_h" => "Толкова е лесно", "s1_t" => "Създай събитие", "s1_d" => "Въведете заглавие, час и място. По избор: добавете подробности.",
        "s2_t" => "Сподели линк", "s2_d" => "Ще получите уникален линк. Изпратете го чрез WhatsApp или имейл.",
        "s3_t" => "Запазете преглед", "s3_d" => "Отпуснете се. Гледайте как списъкът с гости се запълва.",
        "uc_h" => "Подходящо за всеки повод",
        "uc1_t" => "Частни тържества", "uc1_d" => "Рождени дни, барбекюта. Край на хаоса в групите на WhatsApp.",
        "uc2_t" => "Сдружения & Спорт", "uc2_d" => "Кой ще дойде на тренировка? Бързо изяснено.",
        "uc3_t" => "Професионални мрежи", "uc3_d" => "Мрежови събития или семинари. Намалете бариерата.",
        "cta_h1" => "Готови ли сте за следващото си събитие?", "cta_h2" => "Започнете сега безплатно.", "cta_d" => "Не е необходим акаунт. Изпробвайте го за секунди.", "cta_btn" => "Създай събитие сега",
        "meta_desc" => "Създавайте събития и канете гости – без регистрация.",
        "title_suffix" => "- Най-лесното планиране на събития"
    ],
    "he" => [
        "nav_feat" => "תכונות", "nav_how" => "איך זה עובד", "nav_ben" => "יתרונות", "btn_create" => "צור אירוע",
        "hero_badge" => "זמין כעת", "hero_h1" => "האורחים שלך.", "hero_h2" => "האירוע שלך.", "hero_high" => "רק קישור אחד.",
        "hero_desc" => "ארגן מפגשים, מסיבות או פגישות ללא חסמים. האורחים שלך נרשמים ללא התקנת אפליקציה.",
        "btn_start" => "התחל בחינם", "btn_learn" => "למד עוד", "no_cc" => "אין צורך בכרטיס אשראי. מוכן לשימוש מיידי.",
        "why_sub" => "למה {brand}?", "why_h" => "שיעור תגובה מקסימלי להזמנות שלך", "why_desc" => "הסרנו את כל המכשולים. האורחים שלך לא צריכים להירשם.",
        "f1_t" => "אין צורך בהתחברות", "f1_d" => "האורחים שלך לוחצים על הקישור ומגיבים מיד. ללא סיסמאות, ללא אפליקציה.",
        "f2_t" => "קישור אחד לכל דבר", "f2_d" => "בין אם זה WhatsApp, ביוגרפיה באינסטגרם, אימייל או לינקדאין. העתק את הקישור ושתף אותו.",
        "f3_t" => "״אגיע מאוחר יותר״", "f3_d" => "החיים קורים. אורחים יכולים לציין אם יאחרו.",
        "f4_t" => "מלווים (+1)", "f4_d" => "מתכנן עם בן/בת זוג? אורחים יכולים לציין אם הם מביאים בן/בת זוג.",
        "f5_t" => "מותאם למובייל", "f5_d" => "מותאם בצורה מושלמת לסמארטפון. ההזמנה נראית נהדר בכל מקום.",
        "f6_t" => "עדכונים בזמן אמת", "f6_d" => "המיקום משתנה? עדכן את האירוע, כל האורחים יראו זאת מיד.",
        "how_h" => "ככה זה עובד בפשטות", "s1_t" => "צור אירוע", "s1_d" => "הזן כותרת, זמן ומיקום. אופציונלי: הוסף פרטים.",
        "s2_t" => "שתף קישור", "s2_d" => "תקבל קישור ייחודי. שלח אותו באמצעות WhatsApp או אימייל.",
        "s3_t" => "שמור על סקירה", "s3_d" => "שב בנוח. ראה איך רשימת האורחים מתמלאת.",
        "uc_h" => "מתאים לכל אירוע",
        "uc1_t" => "מסיבות פרטיות", "uc1_d" => "ימי הולדת, מנגלים. לא עוד כאוס בקבוצות WhatsApp.",
        "uc2_t" => "מועדונים וספורט", "uc2_d" => "מי מגיע לאימון? מתבהר במהירות.",
        "uc3_t" => "רשתות מקצועיות", "uc3_d" => "אירועי נטוורקינג או סדנאות. הורד את החסם.",
        "cta_h1" => "מוכן לאירוע הבא שלך?", "cta_h2" => "התחל עכשיו בחינם.", "cta_d" => "אין צורך בחשבון. נסה תוך שניות.", "cta_btn" => "צור אירוע עכשיו",
        "meta_desc" => "צור אירועים והזמן אורחים – ללא הרשמה.",
        "title_suffix" => "- תכנון האירועים הפשוט ביותר"
    ],
    "af" => [
        "nav_feat" => "Funksies", "nav_how" => "Hoe dit werk", "nav_ben" => "Voordele", "btn_create" => "Skep gebeurtenis",
        "hero_badge" => "Nou beskikbaar", "hero_h1" => "Jou gaste.", "hero_h2" => "Jou gebeurtenis.", "hero_high" => "Slegs een skakel.",
        "hero_desc" => "Reël vergaderings, partytjies of byeenkomste sonder hindernisse. Jou gaste teken in sonder om 'n toepassing te installeer.",
        "btn_start" => "Begin gratis", "btn_learn" => "Leer meer", "no_cc" => "Geen kredietkaart benodig nie. Onmiddellik gereed vir gebruik.",
        "why_sub" => "Waarom {brand}?", "why_h" => "Maksimum reaksiekoers vir jou uitnodigings", "why_desc" => "Ons het alle hindernisse verwyder. Jou gaste hoef nie te registreer nie.",
        "f1_t" => "Geen aanmelding nodig nie", "f1_d" => "Jou gaste klik op die skakel en antwoord onmiddellik. Geen wagwoorde, geen toepassing.",
        "f2_t" => "Een skakel vir alles", "f2_d" => "Of dit nou WhatsApp, Instagram Bio, e-pos of LinkedIn is. Kopieer die skakel en deel dit.",
        "f3_t" => "\"Ek kom later\"", "f3_d" => "Die lewe gebeur. Gaste kan aandui as hulle laat is.",
        "f4_t" => "Metgeselle (+1)", "f4_d" => "Beplan jy met metgeselle? Gaste kan aandui of hulle 'n lewensmaat saambring.",
        "f5_t" => "Mobiel eerste", "f5_d" => "Perfek geoptimaliseer vir die slimfoon. Die uitnodiging lyk oral goed.",
        "f6_t" => "Intydse opdaterings", "f6_d" => "Verander die ligging? Dateer die gebeurtenis op, alle gaste sien dit onmiddellik.",
        "how_h" => "Dit is so eenvoudig", "s1_t" => "Skep gebeurtenis", "s1_d" => "Voer titel, tyd en plek in. Opsioneel: voeg besonderhede by.",
        "s2_t" => "Deel skakel", "s2_d" => "Jy sal 'n unieke skakel ontvang. Stuur dit via WhatsApp of e-pos.",
        "s3_t" => "Behou 'n oorsig", "s3_d" => "Ontspan. Kyk hoe die gastelys vol raak.",
        "uc_h" => "Geskik vir elke geleentheid",
        "uc1_t" => "Privaat partytjies", "uc1_d" => "Verjaarsdae, braai. Geen WhatsApp-groepchaos meer nie.",
        "uc2_t" => "Verenigings & Sport", "uc2_d" => "Wie kom oefen? Vinnig uitgeklaar.",
        "uc3_t" => "Professionele netwerke", "uc3_d" => "Netwerkgeleenthede of werkswinkels. Verlaag die drempel.",
        "cta_h1" => "Gereed vir jou volgende gebeurtenis?", "cta_h2" => "Begin nou gratis.", "cta_d" => "Geen rekening nodig nie. Probeer dit binne sekondes.", "cta_btn" => "Skep gebeurtenis nou",
        "meta_desc" => "Skep gebeurtenisse en nooi gaste uit – sonder registrasie.",
        "title_suffix" => "- Die eenvoudigste gebeurtenisbeplanning"
    ],
    "ar" => [
        "nav_feat" => "الميزات", "nav_how" => "كيف يعمل", "nav_ben" => "الفوائد", "btn_create" => "إنشاء حدث",
        "hero_badge" => "متوفر الآن", "hero_h1" => "ضيوفك.", "hero_h2" => "حدثك.", "hero_high" => "رابط واحد فقط.",
        "hero_desc" => "نظّم لقاءات، حفلات أو اجتماعات بدون عوائق. يسجل ضيوفك دون الحاجة لتثبيت أي تطبيق.",
        "btn_start" => "ابدأ مجاناً", "btn_learn" => "تعلم المزيد", "no_cc" => "لا يلزم وجود بطاقة ائتمان. جاهز للاستخدام فوراً.",
        "why_sub" => "لماذا {brand}؟", "why_h" => "أقصى معدل استجابة لدعواتك", "why_desc" => "لقد أزلنا جميع العوائق. لا يحتاج ضيوفك إلى التسجيل.",
        "f1_t" => "لا يلزم تسجيل الدخول", "f1_d" => "ينقر ضيوفك على الرابط ويستجيبون على الفور. لا كلمات مرور، لا تطبيق.",
        "f2_t" => "رابط واحد لكل شيء", "f2_d" => "سواء كان واتساب، أو سيرة ذاتية على انستغرام، أو بريد إلكتروني، أو لينكدإن. انسخ الرابط وشاركه.",
        "f3_t" => "\"سآتي لاحقاً\"", "f3_d" => "الحياة تحدث. يمكن للضيوف الإشارة إذا كانوا سيتأخرون.",
        "f4_t" => "مرافقون (+1)", "f4_d" => "هل تخطط مع مرافقين؟ يمكن للضيوف الإشارة إذا كانوا سيحضرون شريكاً.",
        "f5_t" => "المحمول أولاً", "f5_d" => "مُحسّن تماماً للهواتف الذكية. تبدو الدعوة رائعة في كل مكان.",
        "f6_t" => "تحديثات في الوقت الفعلي", "f6_d" => "هل يتغير المكان؟ حدّث الحدث، ويرى جميع الضيوف ذلك على الفور.",
        "how_h" => "الأمر بهذه البساطة", "s1_t" => "إنشاء حدث", "s1_d" => "أدخل العنوان، الوقت والمكان. اختياري: أضف التفاصيل.",
        "s2_t" => "مشاركة الرابط", "s2_d" => "ستتلقى رابطاً فريداً. أرسله عبر واتساب أو البريد الإلكتروني.",
        "s3_t" => "حافظ على نظرة عامة", "s3_d" => "استرخ. شاهد قائمة الضيوف وهي تمتلئ.",
        "uc_h" => "مناسب لكل مناسبة",
        "uc1_t" => "حفلات خاصة", "uc1_d" => "أعياد ميلاد، حفلات شواء. لا مزيد من فوضى مجموعات الواتساب.",
        "uc2_t" => "جمعيات ورياضة", "uc2_d" => "من سيأتي للتدريب؟ تم توضيحه بسرعة.",
        "uc3_t" => "شبكات احترافية", "uc3_d" => "فعاليات التواصل أو ورش العمل. اخفض الحاجز.",
        "cta_h1" => "هل أنت مستعد لحدثك التالي؟", "cta_h2" => "ابدأ الآن مجاناً.", "cta_d" => "لا يلزم وجود حساب. جربه في ثوانٍ.", "cta_btn" => "أنشئ حدثاً الآن",
        "meta_desc" => "أنشئ فعاليات وادعُ الضيوف - دون تسجيل.",
        "title_suffix" => "- أبسط تخطيط للفعاليات"
    ],
    "zh" => [
        "nav_feat" => "功能", "nav_how" => "工作原理", "nav_ben" => "优势", "btn_create" => "创建活动",
        "hero_badge" => "现已上市", "hero_h1" => "您的客人。", "hero_h2" => "您的活动。", "hero_high" => "只需一个链接。",
        "hero_desc" => "轻松组织聚会、派对或会议。您的客人无需安装应用程序即可注册。",
        "btn_start" => "免费开始", "btn_learn" => "了解更多", "no_cc" => "无需信用卡。即时可用。",
        "why_sub" => "为什么选择 {brand}？", "why_h" => "您的邀请获得最高回复率", "why_desc" => "我们已消除所有障碍。您的客人无需注册。",
        "f1_t" => "无需登录", "f1_d" => "您的客人点击链接即可立即回复。没有密码，没有应用程序。",
        "f2_t" => "一个链接搞定一切", "f2_d" => "无论是 WhatsApp、Instagram 简介、电子邮件还是 LinkedIn。复制链接并分享。",
        "f3_t" => "“我稍后到”", "f3_d" => "生活总有意外。客人可以注明是否会迟到。",
        "f4_t" => "同行者 (+1)", "f4_d" => "您是否与伴侣一起计划？客人可以注明是否会带伴侣。",
        "f5_t" => "移动优先", "f5_d" => "完美适配智能手机。邀请函在任何地方都美观。",
        "f6_t" => "实时更新", "f6_d" => "地点变了？更新活动，所有客人立即看到。",
        "how_h" => "就是这么简单", "s1_t" => "创建活动", "s1_d" => "输入标题、时间和地点。可选：添加详细信息。",
        "s2_t" => "分享链接", "s2_d" => "您将收到一个唯一的链接。通过 WhatsApp 或电子邮件发送。",
        "s3_t" => "保持概览", "s3_d" => "放松。看着嘉宾名单逐渐填满。",
        "uc_h" => "适用于各种场合",
        "uc1_t" => "私人聚会", "uc1_d" => "生日、烧烤。告别 WhatsApp 群组混乱。",
        "uc2_t" => "协会与体育", "uc2_d" => "谁来训练？快速搞定。",
        "uc3_t" => "专业网络", "uc3_d" => "社交活动或研讨会。降低门槛。",
        "cta_h1" => "准备好迎接您的下一个活动了吗？", "cta_h2" => "立即免费开始。", "cta_d" => "无需账户。几秒钟即可试用。", "cta_btn" => "立即创建活动",
        "meta_desc" => "创建活动并邀请客人 – 无需注册。",
        "title_suffix" => "- 最简单的活动规划"
    ],
    "hi" => [
        "nav_feat" => "विशेषताएँ", "nav_how" => "यह कैसे काम करता है", "nav_ben" => "फ़ायदे", "btn_create" => "इवेंट बनाएँ",
        "hero_badge" => "अब उपलब्ध है", "hero_h1" => "आपके मेहमान।", "hero_h2" => "आपका इवेंट।", "hero_high" => "सिर्फ़ एक लिंक।",
        "hero_desc" => "बिना किसी बाधा के मीटिंग, पार्टी या सभाएँ आयोजित करें। आपके मेहमान बिना कोई ऐप इंस्टॉल किए साइन अप करते हैं।",
        "btn_start" => "मुफ़्त में शुरू करें", "btn_learn" => "और जानें", "no_cc" => "क्रेडिट कार्ड की आवश्यकता नहीं। तुरंत तैयार।",
        "why_sub" => "{brand} क्यों?", "why_h" => "आपके आमंत्रणों के लिए अधिकतम प्रतिक्रिया दर", "why_desc" => "हमने सभी बाधाएँ हटा दी हैं। आपके मेहमानों को रजिस्टर करने की आवश्यकता नहीं है।",
        "f1_t" => "लॉगिन की आवश्यकता नहीं", "f1_d" => "आपके मेहमान लिंक पर क्लिक करते हैं और तुरंत जवाब देते हैं। कोई पासवर्ड नहीं, कोई ऐप नहीं।",
        "f2_t" => "हर चीज़ के लिए एक लिंक", "f2_d" => "चाहे वह WhatsApp हो, Instagram बायो हो, ईमेल हो या LinkedIn। लिंक कॉपी करें और साझा करें।",
        "f3_t" => "\"मैं बाद में आऊँगा\"", "f3_d" => "जीवन में कुछ भी हो सकता है। मेहमान बता सकते हैं कि वे देर से आएँगे।",
        "f4_t" => "साथी (+1)", "f4_d" => "क्या आप किसी के साथ योजना बना रहे हैं? मेहमान बता सकते हैं कि क्या वे अपने साथ किसी साथी को ला रहे हैं।",
        "f5_t" => "मोबाइल फ़र्स्ट", "f5_d" => "स्मार्टफोन के लिए पूरी तरह से ऑप्टिमाइज़ किया गया। निमंत्रण हर जगह अच्छा दिखता है।",
        "f6_t" => "रीयल-टाइम अपडेट", "f6_d" => "क्या जगह बदल रही है? इवेंट अपडेट करें, सभी मेहमान उसे तुरंत देख लेते हैं।",
        "how_h" => "यह इतना आसान है", "s1_t" => "इवेंट बनाएँ", "s1_d" => "शीर्षक, समय और स्थान दर्ज करें। वैकल्पिक: विवरण जोड़ें।",
        "s2_t" => "लिंक साझा करें", "s2_d" => "आपको एक अद्वितीय लिंक मिलेगा। इसे WhatsApp या ईमेल के माध्यम से भेजें।",
        "s3_t" => "अवलोकन बनाए रखें", "s3_d" => "आराम करें। देखें कि मेहमानों की सूची कैसे भरती है।",
        "uc_h" => "हर अवसर के लिए उपयुक्त",
        "uc1_t" => "निजी पार्टियाँ", "uc1_d" => "जन्मदिन, बारबेक्यू। अब WhatsApp ग्रुप में कोई गड़बड़ी नहीं होगी।",
        "uc2_t" => "संघ और खेल", "uc2_d" => "ट्रेनिंग पर कौन आ रहा है? जल्दी स्पष्ट हो जाता है।",
        "uc3_t" => "पेशेवर नेटवर्क", "uc3_d" => "नेटवर्किंग इवेंट या वर्कशॉप। बाधा कम करें।",
        "cta_h1" => "अपने अगले इवेंट के लिए तैयार हैं?", "cta_h2" => "अभी मुफ़्त में शुरू करें।", "cta_d" => "अकाउंट की आवश्यकता नहीं। कुछ ही सेकंड में इसे आज़माएँ।", "cta_btn" => "अभी इवेंट बनाएँ",
        "meta_desc" => "इवेंट बनाएँ और मेहमानों को आमंत्रित करें - बिना पंजीकरण के।",
        "title_suffix" => "- सबसे आसान इवेंट प्लानिंग"
    ],
    "bn" => [
        "nav_feat" => "বৈশিষ্ট্য", "nav_how" => "কীভাবে কাজ করে", "nav_ben" => "সুবিধাগুলি", "btn_create" => "ইভেন্ট তৈরি করুন",
        "hero_badge" => "এখন উপলব্ধ", "hero_h1" => "আপনার অতিথিরা।", "hero_h2" => "আপনার ইভেন্ট।", "hero_high" => "শুধুমাত্র একটি লিঙ্ক।",
        "hero_desc" => "কোনো বাধা ছাড়াই মিটিং, পার্টি বা সভা আয়োজন করুন। আপনার অতিথিরা কোনো অ্যাপ ইনস্টল না করেই সাইন আপ করেন।",
        "btn_start" => "বিনামূল্যে শুরু করুন", "btn_learn" => "আরও জানুন", "no_cc" => "ক্রেডিট কার্ডের প্রয়োজন নেই। তাৎক্ষণিকভাবে প্রস্তুত।",
        "why_sub" => "কেন {brand}?", "why_h" => "আপনার আমন্ত্রণগুলির জন্য সর্বোচ্চ প্রতিক্রিয়া হার", "why_desc" => "আমরা সমস্ত বাধা সরিয়ে দিয়েছি। আপনার অতিথিদের নিবন্ধন করার প্রয়োজন নেই।",
        "f1_t" => "লগইন করার প্রয়োজন নেই", "f1_d" => "আপনার অতিথিরা লিঙ্কে ক্লিক করেন এবং সাথে সাথে উত্তর দেন। কোনো পাসওয়ার্ড নেই, কোনো অ্যাপ নেই।",
        "f2_t" => "সবকিছুর জন্য একটি লিঙ্ক", "f2_d" => "তা হোয়াটসঅ্যাপ, ইনস্টাগ্রাম বায়ো, ই-মেইল বা লিঙ্কডইন যাই হোক না কেন। লিঙ্কটি কপি করুন এবং শেয়ার করুন।",
        "f3_t" => "\"আমি পরে আসব\"", "f3_d" => "জীবনে এমনটা ঘটে। অতিথিরা দেরি হলে জানাতে পারেন।",
        "f4_t" => "সহযাত্রী (+1)", "f4_d" => "আপনি কি সঙ্গীর সাথে পরিকল্পনা করছেন? অতিথিরা জানাতে পারেন যে তারা সঙ্গী নিয়ে আসছেন কিনা।",
        "f5_t" => "মোবাইল ফার্স্ট", "f5_d" => "স্মার্টফোনের জন্য নিখুঁতভাবে অপ্টিমাইজ করা হয়েছে। আমন্ত্রণটি সব জায়গায় দারুণ দেখায়।",
        "f6_t" => "রিয়েল-টাইম আপডেট", "f6_d" => "জায়গা কি পরিবর্তন হচ্ছে? ইভেন্টটি আপডেট করুন, সমস্ত অতিথি এটি তাৎক্ষণিকভাবে দেখতে পাবেন।",
        "how_h" => "এটি এত সহজ", "s1_t" => "ইভেন্ট তৈরি করুন", "s1_d" => "শিরোনাম, সময় এবং স্থান লিখুন। ঐচ্ছিক: বিবরণ যোগ করুন।",
        "s2_t" => "লিঙ্ক শেয়ার করুন", "s2_d" => "আপনি একটি অনন্য লিঙ্ক পাবেন। এটি হোয়াটসঅ্যাপ বা ই-মেইলের মাধ্যমে পাঠান।",
        "s3_t" => "একটি ওভারভিউ রাখুন", "s3_d" => "আরাম করুন। দেখুন কীভাবে অতিথিদের তালিকা পূর্ণ হয়।",
        "uc_h" => "প্রতিটি অনুষ্ঠানের জন্য উপযুক্ত",
        "uc1_t" => "ব্যক্তিগত পার্টি", "uc1_d" => "জন্মদিন, বারবিকিউ। হোয়াটসঅ্যাপ গ্রুপে আর কোনো বিশৃঙ্খলা নেই।",
        "uc2_t" => "অ্যাসোসিয়েশন এবং খেলাধুলা", "uc2_d" => "প্রশিক্ষণে কে আসছে? দ্রুত পরিষ্কার হয়ে যায়।",
        "uc3_t" => "পেশাদার নেটওয়ার্ক", "uc3_d" => "নেটওয়ার্কিং ইভেন্ট বা ওয়ার্কশপ। বাধা কমিয়ে দিন।",
        "cta_h1" => "আপনার পরবর্তী ইভেন্টের জন্য প্রস্তুত?", "cta_h2" => "এখন বিনামূল্যে শুরু করুন।", "cta_d" => "কোনো অ্যাকাউন্টের প্রয়োজন নেই। কয়েক সেকেন্ডের মধ্যে এটি চেষ্টা করুন।", "cta_btn" => "এখনই ইভেন্ট তৈরি করুন",
        "meta_desc" => "ইভেন্ট তৈরি করুন এবং অতিথিদের আমন্ত্রণ জানান - নিবন্ধন ছাড়াই।",
        "title_suffix" => "- সবচেয়ে সহজ ইভেন্ট পরিকল্পনা"
    ]
    // Hier können weitere Sprachen wie 'fr', 'it' etc. nach demselben Muster hinzugefügt werden.
    // Falls eine Sprache fehlt, wird automatisch Englisch (t_en) verwendet.
];

// --- 3. GENERATOR LOGIK ---

foreach ($languages as $langData) {
    $code = $langData['short'];
    $name = $langData['name'];

    // 1. Branding bestimmen
    if ($code === 'de') {
        $brandName = "bindabei";
        $homeLink = "//bindabei.app/index.html";
    } else {
        $brandName = "ijoin";
        $homeLink = ($code === 'en') ? "//ijoin.app/index.html" : "//ijoin.app/index-{$code}.html";
    }

    // 2. Übersetzungen zusammenführen (Merge mit Englisch als Fallback)
    $currentTrans = isset($translations[$code]) ? array_merge($t_en, $translations[$code]) : $t_en;
    
    // Platzhalter {brand} im Text ersetzen
    foreach ($currentTrans as $key => $val) {
        $currentTrans[$key] = str_replace("{brand}", $brandName, $val);
    }

    // 3. Dateiname bestimmen
    $filename = ($code === 'en' || $code === 'de') ? "index.html" : "index-{$code}.html";
    
    // HINWEIS: Wenn man index.html für DE und EN im selben Ordner generiert, überschreiben sie sich.
    // Daher nennen wir sie hier im Output sicherheitshalber spezifisch, wenn wir alles in einen Ordner werfen:
    if ($code === 'en') $filename = "index-en.html"; // Oder index.html für ijoin server
    if ($code === 'de') $filename = "index-de.html"; // Oder index.html für bindabei server

    // 4. Sprachmenü generieren (JS Array für Client-Side Logik)
    // Wir bauen das JS-Array direkt in den HTML-Code ein, damit es keine externen Abhängigkeiten gibt.
    $jsLangList = json_encode($languages);

    // 5. HTML Template füllen
    $html = <<<HTML
<!DOCTYPE html>
<html lang="{$code}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$brandName} {$currentTrans['title_suffix']}</title>
    <meta name="description" content="{$currentTrans['meta_desc']}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .hero-gradient {
            background: linear-gradient(135deg, #0c2664 0%, #3f91cb 100%);
        }
        .blob {
            position: absolute;
            opacity: 0.3;
            filter: blur(40px);
            z-index: -1;
        }
        #lang-menu::-webkit-scrollbar { width: 8px; }
        #lang-menu::-webkit-scrollbar-track { background: #f1f1f1; }
        #lang-menu::-webkit-scrollbar-thumb { background: #ccc; border-radius: 4px; }
        #lang-menu::-webkit-scrollbar-thumb:hover { background: #bbb; }
    </style>
</head>
<body class="text-gray-800 bg-gray-50 antialiased">

    <!-- Navigation -->
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center">
                    <a href="{$homeLink}" class="text-2xl font-bold text-[#0c2664] tracking-tight decoration-none">
                        <i class="fa-solid fa-calendar-check mr-2"></i>{$brandName}
                    </a>
                </div>
                
                <div class="hidden md:flex space-x-8">
                    <a href="#features" class="text-gray-600 hover:text-[#3f91cb] transition">{$currentTrans['nav_feat']}</a>
                    <a href="#how-it-works" class="text-gray-600 hover:text-[#3f91cb] transition">{$currentTrans['nav_how']}</a>
                    <a href="#benefits" class="text-gray-600 hover:text-[#3f91cb] transition">{$currentTrans['nav_ben']}</a>
                </div>

                <div class="flex items-center gap-4">
                    <!-- Language Dropdown -->
                    <div class="relative" id="lang-dropdown-container">
                        <button id="lang-btn" class="flex items-center text-gray-600 hover:text-[#3f91cb] focus:outline-none transition py-2">
                            <i class="fa-solid fa-globe text-xl"></i>
                            <span class="ml-1 text-sm font-medium uppercase hidden sm:inline">{$code}</span>
                            <i class="fa-solid fa-chevron-down text-xs ml-1 opacity-70"></i>
                        </button>
                        <div id="lang-menu" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-xl py-1 z-50 max-h-80 overflow-y-auto ring-1 ring-black ring-opacity-5 border border-gray-100"></div>
                    </div>

                    <a href="#" class="bg-[#0c2664] hover:bg-[#0a1f52] text-white font-medium py-2 px-5 rounded-full transition shadow-lg transform hover:-translate-y-0.5 whitespace-nowrap">
                        <span class="hidden sm:inline">{$currentTrans['btn_create']}</span>
                        <span class="sm:hidden"><i class="fa-solid fa-plus"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="relative overflow-hidden bg-white pt-16 pb-24 lg:pt-32 lg:pb-40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="lg:grid lg:grid-cols-12 lg:gap-16 items-center">
                <div class="lg:col-span-6 text-center lg:text-left">
                    <div class="inline-block px-3 py-1 mb-4 text-xs font-semibold tracking-wider text-[#0c2664] uppercase bg-[#3f91cb]/10 rounded-full">
                        {$currentTrans['hero_badge']}
                    </div>
                    <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl mb-6">
                        {$currentTrans['hero_h1']} <br>
                        {$currentTrans['hero_h2']} <br>
                        <span class="text-[#3f91cb]">{$currentTrans['hero_high']}</span>
                    </h1>
                    <p class="mt-4 max-w-2xl text-xl text-gray-500 mx-auto lg:mx-0">
                        {$currentTrans['hero_desc']}
                    </p>
                    <div class="mt-8 flex justify-center lg:justify-start gap-4">
                        <a href="#" class="px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-[#0c2664] hover:bg-[#0a1f52] md:text-lg md:px-10 shadow-xl transition">
                            {$currentTrans['btn_start']}
                        </a>
                        <a href="#how-it-works" class="px-8 py-3 border border-gray-300 text-base font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 md:text-lg md:px-10 transition">
                            {$currentTrans['btn_learn']}
                        </a>
                    </div>
                    <p class="mt-4 text-sm text-gray-400">{$currentTrans['no_cc']}</p>
                </div>
                
                <div class="lg:col-span-6 mt-12 lg:mt-0 relative flex justify-center">
                    <img src="display1.jpg" onerror="this.onerror=null; this.src='https://placehold.co/400x800/f3f4f6/0c2664?text=display1.jpg';" alt="App Preview Mobile" class="relative rounded-3xl shadow-2xl max-w-xs w-full object-cover transform rotate-3 hover:rotate-0 transition duration-500 border-4 border-white">
                    <div class="blob bg-[#3f91cb] w-64 h-64 rounded-full top-0 right-10"></div>
                </div>
            </div>
        </div>
    </header>

    <!-- Features -->
    <section id="features" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-base text-[#3f91cb] font-semibold tracking-wide uppercase">{$currentTrans['why_sub']}</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    {$currentTrans['why_h']}
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 mx-auto">
                    {$currentTrans['why_desc']}
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- Feature 1 -->
                <div class="bg-gray-50 rounded-xl p-8 hover:shadow-lg transition duration-300 border border-transparent hover:border-[#3f91cb]/30">
                    <div class="w-12 h-12 bg-[#0c2664]/10 rounded-lg flex items-center justify-center mb-6">
                        <i class="fa-solid fa-user-slash text-[#0c2664] text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{$currentTrans['f1_t']}</h3>
                    <p class="text-gray-600">{$currentTrans['f1_d']}</p>
                </div>
                <!-- Feature 2 -->
                <div class="bg-gray-50 rounded-xl p-8 hover:shadow-lg transition duration-300 border border-transparent hover:border-green-200">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fa-solid fa-share-nodes text-green-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{$currentTrans['f2_t']}</h3>
                    <p class="text-gray-600">{$currentTrans['f2_d']}</p>
                </div>
                <!-- Feature 3 -->
                <div class="bg-gray-50 rounded-xl p-8 hover:shadow-lg transition duration-300 border border-transparent hover:border-pink-200">
                    <div class="w-12 h-12 bg-pink-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fa-solid fa-clock-rotate-left text-pink-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{$currentTrans['f3_t']}</h3>
                    <p class="text-gray-600">{$currentTrans['f3_d']}</p>
                </div>
                <!-- Feature 4 -->
                <div class="bg-gray-50 rounded-xl p-8 hover:shadow-lg transition duration-300 border border-transparent hover:border-yellow-200">
                    <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fa-solid fa-users text-yellow-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{$currentTrans['f4_t']}</h3>
                    <p class="text-gray-600">{$currentTrans['f4_d']}</p>
                </div>
                <!-- Feature 5 -->
                <div class="bg-gray-50 rounded-xl p-8 hover:shadow-lg transition duration-300 border border-transparent hover:border-[#3f91cb]/30">
                    <div class="w-12 h-12 bg-[#3f91cb]/10 rounded-lg flex items-center justify-center mb-6">
                        <i class="fa-solid fa-mobile-screen text-[#3f91cb] text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{$currentTrans['f5_t']}</h3>
                    <p class="text-gray-600">{$currentTrans['f5_d']}</p>
                </div>
                <!-- Feature 6 -->
                <div class="bg-gray-50 rounded-xl p-8 hover:shadow-lg transition duration-300 border border-transparent hover:border-[#0c2664]/30">
                    <div class="w-12 h-12 bg-[#0c2664]/10 rounded-lg flex items-center justify-center mb-6">
                        <i class="fa-solid fa-wand-magic-sparkles text-[#0c2664] text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{$currentTrans['f6_t']}</h3>
                    <p class="text-gray-600">{$currentTrans['f6_d']}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section id="how-it-works" class="py-20 bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">{$currentTrans['how_h']}</h2>
            </div>
            <div class="flex flex-col md:flex-row justify-center items-center space-y-12 md:space-y-0 md:space-x-8">
                <div class="flex flex-col items-center text-center max-w-xs">
                    <div class="w-16 h-16 bg-[#0c2664] rounded-full flex items-center justify-center text-2xl font-bold mb-6 shadow-lg shadow-[#3f91cb]/50 border border-[#3f91cb]/30">1</div>
                    <h3 class="text-xl font-bold mb-2">{$currentTrans['s1_t']}</h3>
                    <p class="text-gray-400">{$currentTrans['s1_d']}</p>
                </div>
                <div class="hidden md:block w-24 h-1 bg-gray-700"></div>
                <div class="flex flex-col items-center text-center max-w-xs">
                    <div class="w-16 h-16 bg-[#0c2664] rounded-full flex items-center justify-center text-2xl font-bold mb-6 shadow-lg shadow-[#3f91cb]/50 border border-[#3f91cb]/30">2</div>
                    <h3 class="text-xl font-bold mb-2">{$currentTrans['s2_t']}</h3>
                    <p class="text-gray-400">{$currentTrans['s2_d']}</p>
                </div>
                <div class="hidden md:block w-24 h-1 bg-gray-700"></div>
                <div class="flex flex-col items-center text-center max-w-xs">
                    <div class="w-16 h-16 bg-[#0c2664] rounded-full flex items-center justify-center text-2xl font-bold mb-6 shadow-lg shadow-[#3f91cb]/50 border border-[#3f91cb]/30">3</div>
                    <h3 class="text-xl font-bold mb-2">{$currentTrans['s3_t']}</h3>
                    <p class="text-gray-400">{$currentTrans['s3_d']}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Use Cases -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-extrabold text-gray-900 mb-6">{$currentTrans['uc_h']}</h2>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i class="fa-solid fa-check text-green-500 mt-1 mr-3"></i>
                            <div>
                                <strong class="block text-gray-900">{$currentTrans['uc1_t']}</strong>
                                <span class="text-gray-600">{$currentTrans['uc1_d']}</span>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-check text-green-500 mt-1 mr-3"></i>
                            <div>
                                <strong class="block text-gray-900">{$currentTrans['uc2_t']}</strong>
                                <span class="text-gray-600">{$currentTrans['uc2_d']}</span>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-check text-green-500 mt-1 mr-3"></i>
                            <div>
                                <strong class="block text-gray-900">{$currentTrans['uc3_t']}</strong>
                                <span class="text-gray-600">{$currentTrans['uc3_d']}</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="flex justify-center">
                    <img src="display2.jpg" onerror="this.onerror=null; this.src='https://placehold.co/600x500/f3f4f6/0c2664?text=display2.jpg';" alt="Guestlist View" class="rounded-2xl shadow-xl w-full max-w-md object-cover border border-gray-100">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer CTA -->
    <div class="hero-gradient">
        <div class="max-w-2xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                <span class="block">{$currentTrans['cta_h1']}</span>
                <span class="block text-blue-100">{$currentTrans['cta_h2']}</span>
            </h2>
            <p class="mt-4 text-lg leading-6 text-blue-50">
                {$currentTrans['cta_d']}
            </p>
            <a href="#" class="mt-8 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-[#0c2664] bg-white hover:bg-gray-50 sm:w-auto transition shadow-lg">
                {$currentTrans['cta_btn']}
            </a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-50 border-t border-gray-200">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 md:flex md:items-center md:justify-between lg:px-8">
            <div class="flex justify-center space-x-6 md:order-2">
                <a href="#" class="text-gray-400 hover:text-gray-500"><span class="sr-only">Instagram</span><i class="fa-brands fa-instagram text-xl"></i></a>
                <a href="#" class="text-gray-400 hover:text-gray-500"><span class="sr-only">Twitter</span><i class="fa-brands fa-twitter text-xl"></i></a>
                <a href="#" class="text-gray-400 hover:text-gray-500"><span class="sr-only">Email</span><i class="fa-solid fa-envelope text-xl"></i></a>
            </div>
            <div class="mt-8 md:mt-0 md:order-1">
                <p class="text-center text-base text-gray-400">&copy; 2023 {$brandName}. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) target.scrollIntoView({ behavior: 'smooth' });
            });
        });

        const languages = {$jsLangList};
        const currentLang = '{$code}';
        const langMenu = document.getElementById('lang-menu');
        const langBtn = document.getElementById('lang-btn');

        languages.forEach(lang => {
            const link = document.createElement('a');
            
            // Domain-Logik CLIENT-SIDE (muss mit PHP Logik übereinstimmen)
            if (lang.short === 'de') {
                link.href = '//bindabei.app/index.html';
            } else if (lang.short === 'en') {
                link.href = '//ijoin.app/index.html';
            } else {
                link.href = `//ijoin.app/index-\${lang.short}.html`;
            }

            link.className = `block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-[#3f91cb] \${lang.short === currentLang ? 'font-bold bg-gray-50' : ''}`;
            link.textContent = lang.name;
            langMenu.appendChild(link);
        });

        langBtn.addEventListener('click', (e) => { e.stopPropagation(); langMenu.classList.toggle('hidden'); });
        document.addEventListener('click', (e) => { if (!langBtn.contains(e.target) && !langMenu.contains(e.target)) langMenu.classList.add('hidden'); });
    </script>
    <script defer src="https://cloud.umami.is/script.js" data-website-id="4d3f573f-5598-43dd-b737-56d09fb03875"></script>
</body>
</html>
HTML;

    // 6. Datei speichern
    file_put_contents($filename, $html);
    echo "Generated: $filename\n";
}

echo "Done! All files generated.";
?>