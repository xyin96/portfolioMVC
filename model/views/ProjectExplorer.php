<?php
/**
 * Created by PhpStorm.
 * User: Xiaoyu
 * Date: 3/8/2015
 * Time: 9:40 PM
 */

class ProjectExplorer {
    public function __construct($params){
        $mysqli = new mysqli("localhost", "root", "blargHblargh1", "portfolio");

        /* check connection */
        if ($mysqli->connect_errno) {
            printf("Connect failed: %s\n", $mysqli->connect_error);
            exit();
        }
        print '<link rel="stylesheet" href="public/css/projects.css" />';
        print '<!--Main Content -->';
        print '<form class="querysearch"><label><input id="query" class="searchbar" type="text" value="'. $params .'" name="query" placeholder="Search: (ex. Java, PHP, ...)" /> <button type="submit" class="submitbtn"></button> </label> </form>';
        print '<div class="content">';
        print '<section>';
        if($result = $mysqli->query("SELECT * FROM projects WHERE description LIKE '%{$params}%' OR keywords LIKE '%{$params}%' OR name LIKE '%{$params}%' ORDER BY date DESC", MYSQLI_USE_RESULT)) {
            print '<ul class="handles">';
            while ($value = $result->fetch_row()) {
                print '<li><a href="' . $value[3] . '" target="_blank"><div class="gridlink" style="background-image:url(\''.$value[2].'\');"><b>' . $value[1] . '<hr /> ' . $value[4] . '</b></div></a></li>';
            };
            print '</ul>';
        }
        print '</section>';
        print '</div><div class="tuzki collapse-mobile"><img src="assets/images/tuzkiwater.png" /><!-- tuzki pic from https://s-media-cache-ak0.pinimg.com/originals/8f/52/66/8f52660522affe35eabea3c8e811b428.jpg --></div>';
        print '<script src="public/js/projects.js"></script>';
        $mysqli->close();
    }
}