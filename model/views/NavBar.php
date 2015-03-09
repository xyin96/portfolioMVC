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
        2 => "Timeline",
        3 => "Blog",
        4 => "Contact"
    );
    public function __construct($index){

        print '<!-- navbar -->';
        print '<nav class="navbar">';
        print '<div class="container-fluid">';
        print '<div class="navbar-header">';
        print '<a class="navbar-brand" href="#">Xiaoyu Yin</a>';
        print '</div>';
        print '<ul class="nav navbar-nav">';
        foreach ($this->navTabs as $key => $value) {
            $this->genNavTab($key, $index, $value);
        }
        print '<li class=""><a href="?url={{navTab.name}}">{{navTab.name}}</a></li>';
        print '</ul>';
        print '</div>';
        print '</nav>';
    }

    protected function genNavTab($index, $selIndex, $value){
        if($index == $selIndex){
            print '<li class="active"><a href="?url=' . $value . '">' . $value . '</a></li>';
        } else {
            print '<li class=""><a href="?url=' . $value . '">' . $value . '</a></li>';
        }
    }
}