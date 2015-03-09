<?php
/**
 * Created by PhpStorm.
 * User: Xiaoyu
 * Date: 3/8/2015
 * Time: 10:49 PM
 */

class JSRequest {
    public function __construct(){

        $args = $this->parseUrl();
        $selected = $args[0];
        switch($selected){
            case "About":
                echo 'About Page';
                break;
            case "Projects":
                require_once __DIR__ . '/../views/ProjectExplorer.php';
                $exp = new ProjectExplorer();
                break;
            case "Timeline":
                break;
            case "Blog":
                break;
            case "Contact":
                break;
        }


    }

    public function parseUrl(){
        if(isset($_GET['url'])){
            return $url = explode('/', filter_var(rtrim($_GET['url'],'/'), FILTER_SANITIZE_URL));
        }
    }
}