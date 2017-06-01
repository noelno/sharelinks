<?php 
class FacebookLink{
    
    protected $link;
    
    public function __construct($title, $url)
    {
		$this->title = $title;
		$this->url = $url;
	}
    
    public function __toString()
    {
        return '<a href="http://www.facebook.com/sharer.php?u='.urlencode($this->url). '">'.urlencode($this->title).'</a>';
    }
}
?>