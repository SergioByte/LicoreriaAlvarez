<?php
	interface Iterator 
	{
	/* M�todos */
		  public function __construct($givenArray);
		  public function rewind();
		  public function current();
		  public function key();
		  public function next();
		  public function valid();
	}
?>