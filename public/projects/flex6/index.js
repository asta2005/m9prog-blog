const axios = require('axios');
const cheerio = require('cheerio');
const http = require('http');

const url = 'https://tweakers.net';

async function scrapeTweakers() {
    try {
        const { data } = await axios.get(url, {
            headers: {
                'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)',
            },
        });

        const $ = cheerio.load(data);
        let headlines = [];

        $('.headline a').each((index, element) => {
            const title = $(element).text().trim();
            const link = $(element).attr('href');

            headlines.push({ title, link: link });
        });

        return headlines;
    } catch (error) {
        console.error('Error scraping Tweakers:', error);
        return [];
    }
}

// ** Start HTTP-server op poort 80 **
http.createServer(async (req, res) => {
    res.writeHead(200, { 'Content-Type': 'text/html; charset=utf-8' });

    const headlines = await scrapeTweakers();

    let html = `
        <html>
        <head><title>Tweakers Headlines</title></head>
        <body>
            <h1>Tweakers Nieuws</h1>
            <ul>
    `;

    headlines.forEach(item => {
        html += `<li><a href="${item.link}" target="_blank">${item.title}</a></li>`;
    });

    html += `</ul></body></html>`;

    res.end(html);
}).listen(80, () => {
    console.log('Server draait op http://localhost');
});
