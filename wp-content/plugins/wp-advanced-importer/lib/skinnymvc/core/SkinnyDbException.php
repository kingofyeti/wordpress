<?php
if(!defined('ABSPATH'))
{
        die('Exit if accessed directly');
}

/******************************
 * filename:    SkinnyDbException.php
 * description: Skinny database Exception class
 */

require_once("SkinnyException.php");

class SkinnyDbException extends SkinnyException {
}
    
