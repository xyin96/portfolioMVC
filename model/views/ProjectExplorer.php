<?php
/**
 * Created by PhpStorm.
 * User: Xiaoyu
 * Date: 3/8/2015
 * Time: 9:40 PM
 */

class ProjectExplorer {
    public function __construct(){
        print '<link rel="stylesheet" href="public/css/projects.css" />';
        print '<!--Main Content -->';
        print '<div class="content">';
        print '            <a href="http://challengepost.com/software/leapsign-qejau"><div class="gridlink" style="background-image:url(\'assets/images/LeapSign.png\');"><b>LeapSign</b></div></a>';
        print '            <a href="https://github.com/xyin96/portfolioMVC"><div class="gridlink"><b>portfolioMVC</b></div></a>';
        print '            <a href="https://github.com/xyin96/papi-jump-elm"><div class="gridlink"><b>Papi Jump Elm</b></div></a>';
        print '            <a href="http://challengepost.com/software/collabcoding-drv2l"><div class="gridlink"><b>CollabCoding</b></div></a>';
        print '            <a href="http://challengepost.com/software/marauder-s-map"><div class="gridlink" style="background-image:url(\'assets/images/MarauderMap.png\');"><b>Marauder\'s Map</b></div></a>';
        print '            <a href="https://groups.google.com/forum/#!forum/rendezapp"><div class="gridlink" style="background-image:url(\'assets/images/Rendez.png\');"><b>Rendez</b></div></a>';
        print '</div>';
    }
}