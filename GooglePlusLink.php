<?php 
namespace Noelno\Sharelinks;

class GooglePlusLink{ 
    
    protected $url;
    protected $title;
    
    public function __construct($url,$title)
    {
		$this->url = $url;
        $this->title = $title;
	}
    
    public function __toString()
    {
        return '<a href="https://plus.google.com/share?url='.urlencode($this->url). '">'.$this->title.'</a>';
    }
}
?>