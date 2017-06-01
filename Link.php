<?php 
class Link{
    
    protected $title;
    protected $url;
    
    public function __construct($title, $url)
    {
		$this->title = $title;
		$this->url = $url;
	}
    
    public function __toString()
    {
        return '<a href="'.$this->url.'">'.$this->title.'</a>';
    }
    
}
?>