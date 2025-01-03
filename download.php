<?php

if (isset($_POST['youtube-url'])) {
    $youtubeUrl = escapeshellarg($_POST['youtube-url']);
    
    // Use __DIR__ to get the path of the current script (website directory)
    $downloadPath = __DIR__ . '/downloads/'; // Save video in 'downloads' folder within the same directory as the script

    // Create the 'downloads' directory if it doesn't exist
    if (!file_exists($downloadPath)) {
        mkdir($downloadPath, 0777, true); // Create 'downloads' folder with proper permissions
    }
    
    // Shell command to download the video using yt-dlp
    $command = "yt-dlp -o '{$downloadPath}%(title)s.%(ext)s' --progress {$youtubeUrl}";

    // Execute the download command in Termux and capture output
    $output = [];
    $progress = 0;
    $commandOutput = shell_exec($command);

    // Parse the progress from yt-dlp output
    preg_match('/(\d+)%/', $commandOutput, $matches);
    if (isset($matches[1])) {
        $progress = $matches[1];
    }

    // If the download is complete, set up the file path for download
    $downloadLink = '/downloads/video.mp4'; // Relative path for the download link
    
    if ($progress == 100) {
        echo json_encode(['download_link' => $downloadLink]); // Return the relative URL for download
    } else {
        // Send the current progress to the front-end
        echo json_encode(['progress' => $progress]);
    }
}
?>
