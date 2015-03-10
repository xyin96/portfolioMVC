<?php
class App {

    public function __construct(){

        require_once __DIR__ . '/../views/NavBar.php';
        require_once __DIR__ . '/../views/Footer.php';
        require_once __DIR__ . '/../views/Background.php';
        $bg = new Background();

        $args = $this->parseUrl();
        $selected = $args[0];
        print '<div class="wrapper">';
        switch($selected){
            case "About":
                require_once __DIR__ . '/../views/About.php';
                $nav = new NavBar(0);
                $body = new About();
                break;
            case "Projects":
                require_once __DIR__ . '/../views/ProjectExplorer.php';
                $nav = new NavBar(1);
                $body = new ProjectExplorer();
                break;
            case "ProjectsDebug":
                require_once __DIR__ . '/../views/ProjectExplorer2.php';
                $nav = new NavBar(1);
                $body = new ProjectExplorer2();
                break;
            case "Blog":
                require_once __DIR__ . '/../views/Blog.php';
                $nav = new NavBar(2);
                $body = new Blog();
                break;
            case "Calendar":
                require_once __DIR__ . '/../views/Calendar.php';
                $nav = new NavBar(3);
                $body = new Calendar();
                break;
            case "Contact":
                require_once __DIR__ . '/../views/Contact.php';
                $nav = new NavBar(4);
                $body = new Contact();
                break;
            default:
                require_once __DIR__ . '/../views/About.php';
                $nav = new NavBar(0);
                $body = new About();
                break;
        }

        $footer = new Footer();
        print '</div>';

    }

    public function parseUrl(){
        if(isset($_GET['url'])){
            return $url = explode('/', filter_var(rtrim($_GET['url'],'/'), FILTER_SANITIZE_URL));
        } else {
            return $url = "About";
        }
    }

}