async function getRandomRssArticles(rssFeedUrl) {
    try {
        const response = await fetch(rssFeedUrl);
        const text = await response.text();
        const parser = new DOMParser();
        const xmlDoc = parser.parseFromString(text, "application/xml");

        const items = Array.from(xmlDoc.querySelectorAll("item"));
        
        // Shuffle articles randomly
        for (let i = items.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [items[i], items[j]] = [items[j], items[i]];
        }

        const selectedArticles = items.slice(0, 5); // Select the first 5 after shuffling

        let outputHtml = '';

        selectedArticles.forEach(item => {
            const title = item.querySelector('title')?.textContent || 'No Title';
            const description = item.querySelector('description')?.textContent || 'No Description';
            const link = item.querySelector('link')?.textContent || '#';

            // Extract the first few sentences from the description
            const firstSentences = description.split('. ').slice(0, 2).join('. ') + (description.split('. ').length > 2 ? '.' : '');

            outputHtml += `
                <li class="flex items-start">
                    <i class="fa-solid fa-check text-green-500 mt-1 mr-3"></i>
                    <div>
                        <strong class="block text-gray-900"><a href="${link}" target="_blank" rel="noopener noreferrer">${title}</a></strong>
                        <span class="text-gray-600">${firstSentences}</span>
                    </div>
                </li>
            `;
        });
        return outputHtml;

    } catch (error) {
        console.error("Error fetching or parsing RSS feed:", error);
        return `<li class="flex items-start"><i class="fa-solid fa-exclamation-triangle text-red-500 mt-1 mr-3"></i><div><strong class="block text-gray-900">Fehler beim Laden des RSS-Feeds</strong><span class="text-gray-600">Bitte versuchen Sie es später noch einmal.</span></div></li>`;
    }
}

// How to use it:
// const rssUrl = 'https://www.spiegel.de/schlagzeilen/index.rss'; // Replace with your RSS feed URL
// getRandomRssArticles(rssUrl).then(html => {
//     document.getElementById('rss-articles-container').innerHTML = html; // Assuming you have a container with this ID
// });