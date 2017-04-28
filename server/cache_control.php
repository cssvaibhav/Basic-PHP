<?php

/**
 * ---------------------------------------------------------------------------
 * Code to demonstrate use of cache control in header()
 * ---------------------------------------------------------------------------
 * Author 		: Custom Software Solutions
 * Develooper   : Vaibhav Kishorsingh Pardeshi <ivaibhavpardeshi@gmail.com>
 * Date   		: 28/4/2017
 * ----------------------------------------------------------------------------
 */

header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
header("Pragma: no-cache"); 						//HTTP 1.0
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");   // Date in the past

/**
 *  Allowed values for Cache-Control :
 *  I.   Public   - may be cached in public shared caches.
 *  II.  Private  - may only be cached in private cache.
 *  III. No-Cache - may not be cached.
 *  IV.  No-Store - may be cached but not archived.
 * 
   The directive CACHE-CONTROL:NO-CACHE indicates cached information should not be used and instead requests should be forwarded to the origin server. This directive has the same semantics as the PRAGMA:NO-CACHE
 */
 
 /**
  *  ----------------------------------------------------------------------------------
  *   You can also specify Cache control in meta tag of HTML
  *  ----------------------------------------------------------------------------------
  */
 <meta http-equiv="cache-control" content="max-age=0" />
 <meta http-equiv="cache-control" content="no-cache" />
 <meta http-equiv="expires" content="0" />
 <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
 <meta http-equiv="pragma" content="no-cache" />

/**
 * ------------------------------------------------------------------------------------
 *  If you want to know more about cache control, use following link 
 *  http://securityevaluators.com/knowledge/case_studies/caching/
 * ------------------------------------------------------------------------------------
 */