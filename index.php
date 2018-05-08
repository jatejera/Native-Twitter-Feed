<?php

/**
 * Native-Twitter-Feed
 *
 * PHP version 5.3.10
 *
 * @category Awesomeness
 * @package  Native-Twitter-Feed
 * @author   Julian Tejera <jats.tejera@gmail.com>
 * @license  MIT License
 * @version  1.0
 */

ini_set('display_errors', 1);

require_once('TwitterAPIExchange.php');
require('../TwitterCredentials.php'); // CHANGE DIRECTORY TO YOUR OWN CREDENTIALS CLASS
require('TwitterRun.php');



//$else = new TwitterCredentials();
$some = new TwitterRun;
echo $some->FetchFeed(1);

