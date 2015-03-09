<?php
class App {

    public function __construct(){

        require_once __DIR__ . '/../views/NavBar.php';
        require_once __DIR__ . '/../views/Footer.php';

        $args = $this->parseUrl();
        $selected = $args[0];
        switch($selected){
            case "About":
                require_once __DIR__ . '/../views/About.php';
                $nav = new NavBar(0);
                break;
            case "Projects":
                require_once __DIR__ . '/../views/ProjectExplorer.php';
                $nav = new NavBar(1);
                $exp = new ProjectExplorer();
                break;
            case "Timeline":
                require_once __DIR__ . '/../views/Timeline.php';
                $nav = new NavBar(2);
                break;
            case "Blog":
                require_once __DIR__ . '/../views/Blog.php';
                $nav = new NavBar(3);
                break;
            case "Contact":
                require_once __DIR__ . '/../views/Contact.php';
                $nav = new NavBar(4);
                break;
        }

        $footer = new Footer();


    }

    public function parseUrl(){
        if(isset($_GET['url'])){
            return $url = explode('/', filter_var(rtrim($_GET['url'],'/'), FILTER_SANITIZE_URL));
        }
    }

}