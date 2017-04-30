<?php

/**
 * --------------------------------------------------------------------------------
 * Code to demonstrate difference between isset(), empty() and is_null() functions
 * --------------------------------------------------------------------------------
 * Author    : Custom Software Solutions
 * Developer : Vaibhav Kishorsingh Pardeshi <ivaibhavpardeshi@gmail.com>
 * Date      : 30/4/2017
 * --------------------------------------------------------------------------------
 */

/**
 * ------------------------------------------------------------------------------
 *	isset() function is used to check if a variable is set or not NULL
 *  This function returns FALSE only when 
 *	1. Variable is set to NULL 
 *     e.g. $x = NULL;
 *  2. Unset the variable or we have not declared the variable
 *	----------------------------------------------------------------------------
 */
  $x = 10;
  echo isset($x); // Returns 1 because $x is set to 10;

  unset($x);
  echo isset($x); // Returns FALSE because we unset variable $x

  echo isset($y); // Returns FALSE because we have not declared variable $y

  $y = NULL;
  echo isset($y); // Returns FALSE because we have set value of variable $y as NULL

  /**
   * --------------------------------------------------------------------------------
   * empty() function is used to determine whether variable is empty.
   * Function will return true if 
   * 1. variable is empty string
   * 2. set to false
   * 3. empty array()
   * 4. set to NULL
   * 5. set to 0
   * 6. unset variable
   * --------------------------------------------------------------------------------
   */
  
  $x = "";
 // echo empty($x);	// Return TRUE, refer case 1

  $x = NULL;
  //echo empty($x);  // Return TRUE, refer 4

/**
 * -------------------------------------------------------------------------------------
 * is_null() is opposite to isset(). It checks if variable is empty.
 * This function returns true if 
 * 1. variable is set to NULL
 * 2. variable is set to '' <empty string initialization>
 * 3. variable is declared but without a value
 * -------------------------------------------------------------------------------------
 */
 $x = 10;
 unset($x);
 echo "isnull: ".is_null($x); // returns 1 because variable is unsetted. but shows notice of undefined variable

 $x = array();
 echo "isnull : ".is_null($x); // returns FALSE for empty array

 $x = '';
 echo 'isnull : '.is_null($x); // returns FALSE for initiallized string to empty characters

 $x = FALSE;
 echo 'isnull : '.is_null($x); // returns FALSE for variable set to FALSE value


 /**
  * -----------------------------------------------------------------------
  *  Please refer following table for more information
  *-------------------------------------------------------------------------
      Value of variable($var) |	isset($var)	 | empty($var) | is_null($var)
  *-------------------------------------------------------------------------
  *	“” (an empty string)	  | bool(true)	 | bool(true) |
  *	” ” (space)				  | bool(true)	 | 	           |
  *  FALSE	                  | bool(true)	 | bool(true)  |	
  *  TRUE	                  | bool(true)	 |             |
  * array()(an empty array)	  | bool(true)	 | bool(true)  |
  *  NULL		              				 | bool(true)  |  bool(true)  
  *  “0” (0 as a string)      | bool(true)	 | bool(true)  |
  * 0 (0 as an integer)	      | bool(true)	 | bool(true)  |
  * 0.0 (0 as a float)	      | bool(true)	 | bool(true)  |
  * var $var;              	  | 	         | bool(true)  | bool(true)
  * NULL byte (“\ 0”)	      | bool(true)   | 	           |
  * -------------------------------------------------------------------------
  */
 


