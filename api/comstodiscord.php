<?
$bottoken = "your discord bot token here";
    // Create a stream
$opts = array(
    'http'=>array(
        'method'=>"GET",
        'header'=>
        "Accept-language: en\r\n" .
        "Cookie: foo=bar\r\n" .
        "Authorization: Bot ".$bottoken.""
    )
);

$context = stream_context_create($opts);

// Open the file using the HTTP headers set above
$file = file_get_contents('https://discord.com/api/users/'.$_GET["duid"], false, $context);
echo $file;

?>