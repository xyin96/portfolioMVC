<?php
/**
 * Created by PhpStorm.
 * User: Xiaoyu
 * Date: 3/9/2015
 * Time: 5:04 PM
 */

class Background {
    public function __construct(){
        $city="College Park";
        $country="US"; //Two digit country code
        $url="http://api.openweathermap.org/data/2.5/weather?q=".$city.",".$country."&units=metric&cnt=7&lang=en";
        $json=file_get_contents($url);
        $data=json_decode($json,true);
        //Get cloud percentage $multi * 0x0E0E0E
        $clouds = intval($data['clouds']['all']) / 20;

        $time = intval(date("H"));
        $multi = abs($time - 12);
        $hex = dechex(0xc9dbe9);
        print '<link rel="stylesheet" href="public/css/background.css" />';
        print '<style>#clouds{    background: #'.$hex.';   background: -webkit-linear-gradient(top, #'.$hex.' 0%, #fff 100%);  background: -linear-gradient(top, #'.$hex.' 0%, #fff 100%);  background: -moz-linear-gradient(top, #c9dbe9 0%, #fff 100%);}</style>';
        print '<div id="clouds" class="background"> 	<div class="cloud x1"></div> 	<!-- Time for multiple clouds to dance around --> 	<div class="cloud x2"></div> 	<div class="cloud x3"></div> 	<div class="cloud x4"></div> 	<div class="cloud x5"></div>';
        for(;$clouds > 1; --$clouds){
            print'<div class="cloud x'. (5 + intval($clouds)).'"></div>';
        }
        print '</div>';
    }
}