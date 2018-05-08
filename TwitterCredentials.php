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

class TwitterCredentials{


    protected $credentialArray;
    protected $screen_name;



    protected function __construct(){


        $this->credentialArray = array(
            'oauth_access_token' => "YOUR TOKEN",
            'oauth_access_token_secret' => "YOUR SECRET TOKEN",
            'consumer_key' => "CONSUMER KEY",
            'consumer_secret' => "SECRET CONSUMER KEY");

        $this->screen_name = "YOUR SCREEN NAME";


    }


}


?>