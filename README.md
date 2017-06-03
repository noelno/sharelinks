# Sharelinks - Generate share links with PHP.

## Install (with Composer)

Edit the `composer.json` file of your project :

```js
    {
        "repositories": [
            {
                "type": "package",
                "package": {
                    "name": "noelno/sharelinks",
                    "version": "dev-master",
                    "source": {
                        "url": "https://github.com/noelno/sharelinks.git",
                        "type": "git",
                        "reference": "master"
                    }
                }
            }
        ],
        "autoload": {
            "psr-4": {
                "Noelno\\Sharelinks\\": "vendor/noelno/sharelinks"
            }
        },
        "require": {
            "noelno/sharelinks": "dev-master"
        }
    }
```

## Usage

To generate a link, instanciate the `FacebookLink`, `TwitterLink` and `GooglePlusLink` classes :

```php
//necessary if you don't use an autoloader
include "FacebookLink.php";
include "TwitterLink.php";
include "GooglePlusLink.php";

use Noelno\Sharelinks\FacebookLink;
use Noelno\Sharelinks\TwitterLink;
use Noelno\Sharelinks\GooglePlusLink;

echo new FacebookLink("https://github.com/noelno/sharelinks","Share on Facebook");
echo new TwitterLink("https://github.com/noelno/sharelinks","Share on Twitter","Go check this repo!");
echo new GooglePlusLink("https://github.com/noelno/sharelinks","Share on Google+");
```
    
This will print :
```html
<a href="http://www.facebook.com/sharer.php?u=https%3A%2F%2Fgithub.com%2Fnoelno%2Fsharelinks">Share on Facebook</a><a href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fgithub.com%2Fnoelno%2Fsharelinks&text=Go+check+this+repo%21">Share on Twitter</a><a href="https://plus.google.com/share?url=https%3A%2F%2Fgithub.com%2Fnoelno%2Fsharelinks">Share on Google+</a></body>
```

To **add one or more classes** to your link, wrap it in a `LinkWithClasses` object :

```php
echo new LinkWithClasses(
    new GooglePlusLink("https://github.com/noelno/sharelinks","Sharelinks on Github"), "btn btn-google-plus"
);
```
    
This will print :
```html
<a class="btn btn-google-plus" href="https://plus.google.com/share?url=https%3A%2F%2Fgithub.com%2Fnoelno%2Fsharelinks">Sharelinks on Github</a>
```

To specify the `target` attribute of the link, wrap it in a `LinkWithTarget` object :
```php
echo new LinkWithTarget(
    new GooglePlusLink("https://github.com/noelno/sharelinks","Sharelinks on Github"), "_blank"
);
```

This will print :
```html
<a target="_blank" href="https://plus.google.com/share?url=https%3A%2F%2Fgithub.com%2Fnoelno%2Fsharelinks">Sharelinks on Github</a>
```

What if I need both of these attributes ?

```php
echo new LinkWithClasses(
    new LinkWithTarget(
        new GooglePlusLink("https://github.com/noelno/sharelinks","Sharelinks on Github"), "_blank"
    ), "btn btn-google-plus"
);
``````

This will print :
```html
<a target="_blank" class="btn btn-google-plus" href="https://plus.google.com/share?url=https%3A%2F%2Fgithub.com%2Fnoelno%2Fsharelinks">Sharelinks on Github</a>
```