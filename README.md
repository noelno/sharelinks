# Sharelinks

Create share links for Facebook, Twitter and Google+.

    echo new GooglePlusLink("https://github.com/noelno/sharelinks","Sharelinks on Github");
    
Result :

    <a href="https://plus.google.com/share?url=https%3A%2F%2Fgithub.com%2Fnoelno%2Fsharelinks">Sharelinks on Github</a>
    
To **add one or more classes** to the link, wrap the link in a `LinkWithClasses` object :

    echo new LinkWithClasses(
        new GooglePlusLink("https://github.com/noelno/sharelinks","Sharelinks on Github"), "btn btn-google-plus"
    );
    
Result :

    <a class="btn btn-google-plus" href="https://plus.google.com/share?url=https%3A%2F%2Fgithub.com%2Fnoelno%2Fsharelinks">Sharelinks on Github</a>
    
To specify the `target` attribute of the link, wrap it in a `LinkWithTarget` object :

    echo new LinkWithTarget(
        new GooglePlusLink("https://github.com/noelno/sharelinks","Sharelinks on Github"), "_blank"
    );

Result :

    <a target="_blank" href="https://plus.google.com/share?url=https%3A%2F%2Fgithub.com%2Fnoelno%2Fsharelinks">Sharelinks on Github</a>
    
What if I need classes AND target ?

    echo new LinkWithClasses(
        new LinkWithTarget(
            new GooglePlusLink("https://github.com/noelno/sharelinks","Sharelinks on Github"), "_blank"
        ), "btn btn-google-plus"
    );