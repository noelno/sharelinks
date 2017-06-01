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
    include "Link.php";
    include "FacebookLink.php";
    include "LinkWithTarget.php";
    include "LinkWithClasses.php";
    $link = new LinkWithClasses(
        new LinkWithTarget(
            new FacebookLink("Google", "https://www.google.fr"),
            "_blank"
        ),
        "google-link"
    );
    echo $link;
?>
</body>