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
                new About();
                break;
            case "Projects":
                require_once __DIR__ . '/../views/ProjectExplorer.php';
                if(isset($args[1])){
                    new ProjectExplorer(array_slice($args, 1));
                } else {
                    new ProjectExplorer('');
                }
                break;
            case "ProjectsDebug":
                require_once __DIR__ . '/../views/ProjectExplorer2.php';
                new ProjectExplorer2();
                break;
            case "Blog":
                require_once __DIR__ . '/../views/Blog.php';
                new Blog();
                break;
            case "Calendar":
                require_once __DIR__ . '/../views/Calendar.php';
                new Calendar();
                break;
            case "Contact":
                require_once __DIR__ . '/../views/Contact.php';
                new Contact();
                break;
            case "404":
                require_once __DIR__ . '/../views/NotFound.php';
                new NotFound();
                break;
            default:
                require_once __DIR__ . '/../views/About.php';
                new About();
                break;
        }


    }

    protected function parseUrl(){
        if(isset($_GET['url'])){
            return $url = $this->multiexplode(array('/','+',',',' ',':'), filter_var(rtrim($_GET['url'],'/'), FILTER_SANITIZE_URL));
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