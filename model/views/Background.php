<?php
/**
 * Created by PhpStorm.
 * User: Xiaoyu
 * Date: 3/9/2015
 * Time: 5:04 PM
 */

class Background {
    public function __construct(){
        print '<link rel="stylesheet" href="public/css/background.css" />';
        print '<div id="clouds" class="background"> 	<div class="cloud x1"></div> 	<!-- Time for multiple clouds to dance around --> 	<div class="cloud x2"></div> 	<div class="cloud x3"></div> 	<div class="cloud x4"></div> 	<div class="cloud x5"></div></div>';
    }
}