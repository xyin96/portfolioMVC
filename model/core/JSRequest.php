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
                require_once __DIR__ . '/../views/About.php';
                $body = new About();
                break;
            case "Projects":
                require_once __DIR__ . '/../views/ProjectExplorer.php';
                $body = new ProjectExplorer();
                break;
            case "Blog":
                require_once __DIR__ . '/../views/Blog.php';
                $body = new Blog();
                break;
            case "Contact":
                require_once __DIR__ . '/../views/Contact.php';
                $body = new Contact();
                break;
        }


    }

    public function parseUrl(){
        if(isset($_GET['url'])){
            return $url = explode('/', filter_var(rtrim($_GET['url'],'/'), FILTER_SANITIZE_URL));
        }
    }
}