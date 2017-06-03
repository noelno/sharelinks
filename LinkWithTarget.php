<?php 
namespace Noelno\Sharelinks;

class LinkWithTarget
{
    
    protected $link;
    protected $target;
    
    public function __construct($link,$target)
    {
		$this->link = $link;
		$this->target = $target;
	}
    
    public function __toString()
    {
        return str_replace(' href=', ' target='.$this->target.' href=', $this->link->__toString());
    }
    
}
?>