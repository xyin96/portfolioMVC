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
                new NavBar(0);
                new About();
                break;
            case "Projects":
                require_once __DIR__ . '/../views/ProjectExplorer.php';
                new NavBar(1);
                if(isset($args[1])){
                    new ProjectExplorer(array_slice($args, 1));
                } else {
                    new ProjectExplorer('');
                }
                break;
            case "ProjectsDebug":
                require_once __DIR__ . '/../views/ProjectExplorer2.php';
                new NavBar(1);
                new ProjectExplorer2();
                break;
            case "Blog":
                require_once __DIR__ . '/../views/Blog.php';
                new NavBar(2);
                new Blog();
                break;
            case "Calendar":
                require_once __DIR__ . '/../views/Calendar.php';
                new NavBar(3);
                new Calendar();
                break;
            case "Contact":
                require_once __DIR__ . '/../views/Contact.php';
                new NavBar(4);
                new Contact();
                break;
            case "404":
                require_once __DIR__ . '/../views/NotFound.php';
                new NavBar(-1);
                new NotFound();
                break;
            default:
                require_once __DIR__ . '/../views/About.php';
                new NavBar(0);
                new About();
                break;
        }

        $footer = new Footer();
        print '</div>';

    }

    protected function parseUrl(){
        if(isset($_GET['url'])){
            return $url = $this->multiexplode(array('/',',',' '), filter_var(rtrim($_GET['url'],'/'), FILTER_SANITIZE_URL));
        } else {
            return $url = "About";
        }
    }

    protected function multiexplode ($delimiters,$string) {

        $ready = str_replace($delimiters, $delimiters[0], $string);
        $launch = explode($delimiters[0], $ready);
        return  $launch;
    }

}