<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Video Downloader</title>
    <style>
        #progress-bar {
            width: 100%;
            background-color: #f3f3f3;
            border-radius: 5px;
        }

        #progress {
            height: 20px;
            width: 0;
            background-color: green;
            text-align: center;
            color: white;
            line-height: 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h2>YouTube Video Downloader</h2>

    <form id="downloadForm" method="POST">
        <label for="youtube-url">Enter YouTube URL:</label>
        <input type="text" id="youtube-url" name="youtube-url" required>
        <input type="submit" value="Start Download">
    </form>

    <div id="progress-bar" style="display: none;">
        <div id="progress">0%</div>
    </div>

    <div id="download-link" style="display: none;">
        <p>Download is complete. Click below to download the video:</p>
        <a href="" id="video-link" download>Download Video</a>
    </div>

    <script>
        document.getElementById('downloadForm').onsubmit = function(event) {
            event.preventDefault();
            var youtubeUrl = document.getElementById('youtube-url').value;

            // Start the progress bar
            document.getElementById('progress-bar').style.display = 'block';

            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'download.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var response = JSON.parse(xhr.responseText);
                    if (response.progress !== undefined) {
                        // Update progress bar
                        document.getElementById('progress').style.width = response.progress + '%';
                        document.getElementById('progress').innerText = response.progress + '%';
                    } else if (response.download_link) {
                        // Hide progress bar and show the download link when finished
                        document.getElementById('progress-bar').style.display = 'none';
                        document.getElementById('download-link').style.display = 'block';
                        document.getElementById('video-link').href = response.download_link;
                    }
                }
            };

            // Sending the YouTube URL to the server
            xhr.send('youtube-url=' + encodeURIComponent(youtubeUrl));
        };
    </script>
</body>
</html>
