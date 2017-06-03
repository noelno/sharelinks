<?php 
namespace Noelno\Sharelinks;

class Link
{
    
    protected $url;
    protected $title;
    
    public function __construct($url,$title)
    {
		$this->url = $url;
        $this->title = $title;
	}
    
    public function __toString()
    {
        return '<a href="'.$this->url.'">'.$this->title.'</a>';
    }
    
}
?>