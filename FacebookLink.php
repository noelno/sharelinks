<?php 
namespace Noelno\Sharelinks;

class FacebookLink{ 
    
    protected $url;
    protected $title;
    
    public function __construct($url,$title)
    {
		$this->url = $url;
        $this->title = $title;
	}
    
    public function __toString()
    {
        return '<a href="http://www.facebook.com/sharer.php?u='.urlencode($this->url). '">'.$this->title.'</a>';
    }
}
?>