<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Test</title>
        <meta name="description" content="Test">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
<body>
<?php 
    use Noelno/Sharelinks;
    
    $link = new LinkWithClasses(
        new LinkWithTarget(
            new GooglePlusLink("https://www.google.fr","Google"),
            "_blank"
        ),
        "google-link"
    );
    echo $link;
?>
</body>