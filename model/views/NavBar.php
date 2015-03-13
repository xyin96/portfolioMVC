<?php
/**
 * Created by PhpStorm.
 * User: Xiaoyu
 * Date: 3/8/2015
 * Time: 9:59 PM
 */

class NavBar {
    protected $navTabs = array(
        0 => "About",
        1 => "Projects",
        2 => "Blog",
        3 => "Contact",
    );
    public function __construct($index){

        print '<!-- navbar -->';
        print '<nav class="navbar navbar-default">';
        print '<div class="container-fluid">';
        print '<div class="navbar-header">';
        print '<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button><a class="navbar-brand" href="#">Xiaofish</a>';
        print '</div>';
        print '<div class="collapse navbar-collapse" id="navbar"><ul class="nav navbar-nav">';
        foreach ($this->navTabs as $key => $value) {
            $this->genNavTab($key, $index, $value);
        }
        print '</ul>';
        print '</div></div>';
        print '</nav>';
    }

    protected function genNavTab($index, $selIndex, $value){
        if($index == $selIndex){
            print '<li class="active"><a href="/' . $value . '">' . $value . '</a></li>';
        } else {
            print '<li class=""><a href="/' . $value . '">' . $value . '</a></li>';
        }
    }
}