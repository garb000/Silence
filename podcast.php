<?php
header("Content-Type: application/rss+xml; charset=UTF-8");

$podcast_title = "Silence";
$podcast_description = "Nothing but silence.";
$episode_title = "Silence 1";
$episode_description = "Nothing at all.";
$audio_file = "silence1.aac";
$audio_url = "https://garb000.github.io/Silence/silence1.aac";
$pub_date = date(DATE_RSS, filemtime($audio_file));

echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<rss version="2.0">
    <channel>
        <title><?= htmlspecialchars($podcast_title) ?></title>
        <link><?= $site_url ?></link>
        <description><?= htmlspecialchars($podcast_description) ?></description>
        <language>en-us</language>
        <item>
            <title><?= htmlspecialchars($episode_title) ?></title>
            <description><?= htmlspecialchars($episode_description) ?></description>
            <link><?= $audio_url ?></link>
            <guid><?= $audio_url ?></guid>
            <pubDate><?= $pub_date ?></pubDate>
            <enclosure url="<?= $audio_url ?>" type="audio/aac" length="<?= filesize($audio_file) ?>" />
        </item>
    </channel>
</rss>
