<?php
/**
 * Created by PhpStorm.
 * User: Xiaoyu
 * Date: 3/9/2015
 * Time: 5:04 PM
 */

class Background {
    public function __construct(){
        $ip = $_SERVER['REMOTE_ADDR'];
        $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
        $loc=explode(',',$details->loc);
        $country=$details->country; //Two digit country code
        $url="http://api.openweathermap.org/data/2.5/weather?lat=".$loc[0]."&lon=".$loc[1]."&cnt=7&lang=en";
        $weather=file_get_contents($url);
        $data=json_decode($weather,true);
        //Get cloud percentage $multi * 0x0E0E0E
        $clouds = intval($data['clouds']['all']) / 10;

        print '<script>$(function(){console.log("lat='.$loc[0].'&lon='.$loc[1].'"); console.log("country: '. $country .'"); console.log("weather: '. $data['weather'][0]['main'] .'"); console.log("cloud coverage: ' . $data['clouds']['all'] . '")});</script>';
        $time = intval(date("H"));
        $multi = abs($time - 12);
        $hex = dechex($this->getBG($data['weather'][0]['main']));
        print '<link rel="stylesheet" href="public/css/background.css" />';
        print '<style>#clouds{    background: #'.$hex.';   background: -webkit-linear-gradient(top, #'.$hex.' 0%, #fff 100%);  background: -linear-gradient(top, #'.$hex.' 0%, #fff 100%);  background: -moz-linear-gradient(top, #'.$hex.' 0%, #fff 100%);}</style>';
        print '<div id="clouds" class="background"> ';
        for(;$clouds > 1; --$clouds){
            print'<div class="cloud x'. (intval($clouds)).'"></div>';
        }
        print '</div>';
    }

    protected function getBG($data){
        return $hex = 0xc9dbe9;

    }

    protected function getBG_reactive($data){
        switch($data){
            case "Clouds":
                return $hex = 0xAAAAAA;
                break;
            case "Clear":
                return $hex = 0xc9dbe9;
                break;
            default:
                return $hex = 0xc9dbe9;
                break;
        }
    }
}