<?php
/**
 *  Lets have an independant mock class
 */
 class plgContent
 {
 

	/**
	 * Load the language file on instantiation.
	 *
	 * @var    boolean
	 * @since  3.1
	 */
	protected $autoloadLanguage = true;

	 /**
	* Content string Definition
	* Scan for module string
	*/
	public function onContentPrepare($context, &$article, &$params, $page) 
	{
		// some actions could be done
		return true;
	}
 
 }

?>
