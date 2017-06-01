<?php 
class LinkWithClasses{
    
    protected $link;
    protected $classes;
    
    public function __construct($link,$classes)
    {
		$this->link = $link;
		$this->classes = $classes;
	}
    
    public function __toString()
    {
        return str_replace(' href=', ' class='.$this->classes.' href=', $this->link->__toString());
    }
    
}
?>