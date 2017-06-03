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
    include "LinkWithClasses.php";
    include "LinkWithTarget.php";
    include "FacebookLink.php";
    include "TwitterLink.php";
    include "GooglePlusLink.php";
    
    use Noelno\Sharelinks\LinkWithClasses;
    use Noelno\Sharelinks\LinkWithTarget;
    use Noelno\Sharelinks\FacebookLink;
    use Noelno\Sharelinks\TwitterLink;
    use Noelno\Sharelinks\GooglePlusLink;
    
    echo new FacebookLink("https://github.com/noelno/sharelinks","Share on Facebook");
    echo new TwitterLink("https://github.com/noelno/sharelinks","Share on Twitter","Go check this repo!");
    echo new GooglePlusLink("https://github.com/noelno/sharelinks","Share on Google+");
?>
</body>