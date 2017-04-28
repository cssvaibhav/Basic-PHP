<?php

/**
 * ---------------------------------------------------------------------------
 * Code to demonstrate use header() function
 * ---------------------------------------------------------------------------
 * Author 		: Custom Software Solutions
 * Develooper   : Vaibhav Kishorsingh Pardeshi <ivaibhavpardeshi@gmail.com>
 * Date   		: 28/4/2017
 * ----------------------------------------------------------------------------
 */

 /**
  * ---------------------------------------------------------------------------
  *  This function is used to send raw HTTP header
  *  Syntax :
  *  	void header ( string $string [, bool $replace = true [, int $http_response_code ]] )
  * ---------------------------------------------------------------------------
  */
   
   /**
    *  -------------------------------------------------------------------------
    *  After execution, following code will redirect you to specified site
    *  i.e. redirect you to twitter.com site
    * --------------------------------------------------------------------------
    */
   header('Location: https://twitter.com/');
   // The code written after this line does not get executed after above function
   exit();


   /**
    * --------------------------------------------------------------------------
    * Use of header function for outputting PDF file
    * --------------------------------------------------------------------------
    */
	// We'll be outputting a PDF
	header('Content-Type: application/pdf');

	// It will be called downloaded.pdf
	header('Content-Disposition: attachment; filename="downloaded.pdf"');

	// The PDF source is in original.pdf
	readfile('original.pdf');

  /**
   * ------------------------------------------------------------------------------
   * If you want to redirect an user and tell him he will be redirected, e. g. "You will be redirected in about 5 secs. If not, click here." you cannot use header( 'Location: ..' ) as you can't sent any output before the headers are sent. 
   * So, either you have to use the HTML meta refresh thingy or you use the following:
   * ------------------------------------------------------------------------------
   */

  header( "refresh:5;url=wherever.php" ); 
  echo 'You\'ll be redirected in about 5 secs. If not, click <a href="wherever.php">here</a>.';

  /**
   * -------------------------------------------------------------------------------
   * A quick way to make redirects permanent or temporary is to make use of the $http_response_code parameter in header().
   * The HTTP status code changes the way browsers and robots handle redirects, so if you are using header(Location:) it's a good idea to set the status code at the same time.  Browsers typically re-request a 307 page every time, cache a 302 page for the session, and cache a 301 page for longer, or even indefinitely.  Search engines typically transfer "page rank" to the new location for 301 redirects, but not for 302, 303 or 307. If the status code is not specified, header('Location:') defaults to 302.
   * -------------------------------------------------------------------------------
   */
   
    // 301 Moved Permanently
	header("Location: /foo.php",TRUE,301);

	// 302 Found
	header("Location: /foo.php",TRUE,302);
	header("Location: /foo.php");

	// 303 See Other
	header("Location: /foo.php",TRUE,303);

	// 307 Temporary Redirect
	header("Location: /foo.php",TRUE,307);