<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <h1><strong>YouTube Downloader Script</strong></h1>
    <p>This project contains a script to download YouTube videos using <strong>Termux</strong>. It includes the following files:</p>
    <ul>
        <li><strong>download.php:</strong> Core script for downloading YouTube videos.</li>
        <li><strong>index.php:</strong> Interface for executing the download process.</li>
    </ul>

    <h2><strong>Features</strong></h2>
    <ul>
        <li><strong>Download YouTube videos</strong> directly through Termux.</li>
        <li><strong>Command-line friendly</strong> for seamless interaction.</li>
        <li><strong>Lightweight</strong> with minimal dependencies.</li>
    </ul>

    <h2>Setup Instructions</h2>
    <ol>
        <li>Install PHP in Termux:
            <pre>pkg update && pkg upgrade
pkg install php</pre>
        </li>
        <li>Install yt-dlp or youtube-dl:
            <pre>pkg install python
pip install yt-dlp</pre>
        </li>
        <li>Clone the repository:
            <pre>git clone https://github.com/Godslovet/YouTube-downloader.git
cd YouTube-downloader</pre>
        </li>
        <li>Start a local PHP server:
            <pre>php -S localhost:8000</pre>
        </li>
        <li>Access the script in your browser at:
            <pre>http://localhost:8000</pre>
        </li>
        <li>Enter the YouTube video URL and click "Download."</li>
    </ol>

    <h2><strong>Prerequisites</strong></h2>
    <ul>
        <li>Install Termux from <a href="https://f-droid.org/" target="_blank">F-Droid</a>.</li>
        <li>Install PHP and yt-dlp (or youtube-dl).</li>
        <li>Ensure you have an active internet connection.</li>
    </ul>

    <h2><strong>Troubleshooting</strong></h2>
    <ul>
        <li><strong>Script not working:</strong> Ensure all dependencies are correctly installed.</li>
        <li><strong>Permission denied:</strong> Run:
            <pre>termux-setup-storage</pre>
        </li>
    </ul>

    <h2><strong>Contributing</strong></h2>
    <p>Contributions are welcome! Feel free to fork the repository and submit pull requests.</p>

    <h2><strong>License</strong></h2>
    <p>This project is licensed under the MIT License.</p>

    <h2><strong>Author</strong></h2>
    <p><strong>Godslovet Johnson</strong></p>
    <p>GitHub: <a href="https://github.com/Godslovet" target="_blank">Godslovet</a></p>
</body>
</html>
