<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * CodeIgniter Name Capitalization Class
 *
 * Properly formats an English name string
 *
 * @package	CodeIgniter
 * @subpackage	Libraries
 * @category	Libraries
 * @author	Jeremy Law
 * @link		
 */

class NameCap {

	/*
	* An array to hold the default delimters
	*/
	var $delims = array('\'', 'mac', 'mc', '-', 'Mac', 'Mc', '(');
	var $fixedName;
	
	
	/*
	* On construct add the supplied delimiters to the delimiter array
	*/
	public function __construct ($delims = array()) {
		
		foreach ($delims as $key => $item) {
	
			if (!in_array ($item, $this->delims)) {
	
				array_push ($this->delims, $item);
	
			}
	
		}
		
	}

	/*
	* Fix the string provided
	*/
	public function fixName ($name) {

		$this->fixedName = strtolower ($name); //let's start with a fresh lowercase string

		foreach ($this->delims as $delim) {

			$pos = strpos ($this->fixedName, $delim); //look for the delimiter in the name string

			if ($pos) {

					//if we find the delimiter, let's make the character after it uppercase
					$this->fixedName[$pos + strlen ($delim)] = strtoupper ($this->fixedName[$pos + strlen ($delim)]);

			}

		}

		//Use ucwords to make the first letter uppercase again
		return ucwords($this->fixedName);

	}	

}

/* End of file NameCap.php */
