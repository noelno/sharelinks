<?php 
namespace Noelno\Sharelinks;

class TwitterLink{
    
    protected $url;
    protected $title;
    
    public function __construct($url,$title,$text = null)
    {
		$this->url = $url;
        $this->title = $title;
        $this->text = $text ?? $title;
	}
    
    public function __toString()
    {
        return '<a href="https://twitter.com/intent/tweet?url='.urlencode($this->url). '&text='.urlencode($this->text).'">'.$this->title.'</a>';
    }
}
?>