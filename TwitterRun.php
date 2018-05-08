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

class TwitterRun extends TwitterCredentials{


    var $settings;


    function __construct(){

        parent::__construct();
        $this->settings = $this->credentialArray;

    }

    function FetchFeed($number){


        $url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
        $getfield = '?screen_name='.$this->screen_name;

        if($number > 0){

            $getfield .= '&count='.$number;

        }

        $requestMethod = 'GET';
        $twitter = new TwitterAPIExchange($this->settings);

        return "<pre>". $twitter->setGetfield($getfield)
            ->buildOauth($url, $requestMethod)
            ->performRequest() ."</pre>";

    }


}

?>