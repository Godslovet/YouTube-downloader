<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Downloader Script</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
            background-color: #f9f9f9;
            color: #333;
        }
        h1, h2, h3 {
            color: #0056b3;
        }
        h1 {
            text-align: center;
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        h2 {
            margin-top: 30px;
            font-size: 1.8em;
        }
        h3 {
            margin-top: 20px;
            font-size: 1.4em;
        }
        p {
            margin: 10px 0;
        }
        code {
            background-color: #eee;
            padding: 2px 4px;
            border-radius: 3px;
            font-family: monospace;
        }
        pre {
            background: #272822;
            color: #f8f8f2;
            padding: 10px;
            border-radius: 5px;
            overflow-x: auto;
        }
        a {
            color: #0056b3;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        ul {
            margin: 10px 0 10px 20px;
        }
    </style>
</head>
<body>
    <h1><strong>YouTube Downloader Script</strong></h1>
    <p>This repository contains a simple script that allows users to download YouTube videos directly through <strong>Termux</strong>. The script is written in PHP and includes the following files:</p>
    <ul>
        <li><strong>download.php:</strong> The core script for downloading YouTube videos.</li>
        <li><strong>index.php:</strong> The frontend interface for executing the download process.</li>
    </ul>

    <h2><strong>Features</strong></h2>
    <ul>
        <li><strong>YouTube Video Download:</strong> Download videos from YouTube directly.</li>
        <li><strong>Command-Line Friendly:</strong> Optimized for Termux usage on Android devices.</li>
        <li><strong>Lightweight:</strong> Minimal dependencies for easy setup and use.</li>
    </ul>

    <h2><strong>Prerequisites</strong></h2>
    <p>Ensure you have the following:</p>
    <ul>
        <li>Termux installed. Download it from <a href="https://f-droid.org/" target="_blank">F-Droid</a>.</li>
        <li>PHP installed in Termux:</li>
        <pre><code>pkg update && pkg upgrade
pkg install php</code></pre>
        <li>yt-dlp or youtube-dl installed:</li>
        <pre><code>pkg install python
pip install youtube-dl
# Or use yt-dlp (recommended)
pip install yt-dlp</code></pre>
    </ul>

    <h2><strong>Setup</strong></h2>
    <ol>
        <li>Clone the repository:
            <pre><code>git clone https://github.com/Godslovet/YouTube-downloader.git
cd YouTube-downloader</code></pre>
        </li>
        <li>Start a local PHP server:
            <pre><code>php -S localhost:8000</code></pre>
        </li>
        <li>Access the script in your browser:
            <pre><code>http://localhost:8000</code></pre>
        </li>
        <li>Enter the YouTube video URL and click "Download."</li>
    </ol>

    <h2><strong>Troubleshooting</strong></h2>
    <ul>
        <li><strong>Issue:</strong> Script doesn't work or shows errors.</li>
        <li><strong>Solution:</strong> Ensure all dependencies (PHP, yt-dlp) are installed correctly.</li>
        <li><strong>Issue:</strong> Permission denied.</li>
        <li><strong>Solution:</strong> Grant necessary permissions to Termux storage:
            <pre><code>termux-setup-storage</code></pre>
        </li>
    </ul>

    <h2><strong>Contributing</strong></h2>
    <p>Feel free to contribute by opening an issue or submitting a pull request. Suggestions and improvements are always welcome!</p>

    <h2><strong>License</strong></h2>
    <p>This project is licensed under the MIT License.</p>

    <h2><strong>Author</strong></h2>
    <p><strong>Godslovet Johnson</strong></p>
    <p>GitHub: <a href="https://github.com/Godslovet" target="_blank">Godslovet</a></p>
</body>
</html>
