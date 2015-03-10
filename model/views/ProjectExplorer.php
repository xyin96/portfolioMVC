<?php
/**
 * Created by PhpStorm.
 * User: Xiaoyu
 * Date: 3/8/2015
 * Time: 9:40 PM
 */

class ProjectExplorer {
    public function __construct(){
        $mysqli = new mysqli("localhost", "root", "blargHblargh1", "portfolio");

        /* check connection */
        if ($mysqli->connect_errno) {
            printf("Connect failed: %s\n", $mysqli->connect_error);
            exit();
        }
        print '<link rel="stylesheet" href="public/css/projects.css" />';
        if($result = $mysqli->query("SELECT * FROM projects ORDER BY id DESC", MYSQLI_USE_RESULT)) {
            print '<!--Main Content -->';
            print '<div class="content"><ul class="handles">';
            while ($value = $result->fetch_row()) {
                print '<li><a href="' . $value[3] . '" target="_blank"><div class="gridlink" style="background-image:url(\'' . $value[2] . '\');"><b>' . $value[1] . '</b></div></a></li>';
            };
            print '</ul></div>';
        }
        $mysqli->close();
    }
}