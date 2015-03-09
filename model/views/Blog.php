<?php
/**
 * Created by PhpStorm.
 * User: Xiaoyu
 * Date: 3/8/2015
 * Time: 11:29 PM
 */

class Blog {
    public function __construct(){
        print '<link rel="stylesheet" href="public/css/blog.css" />';
        print '<iframe src="http://52.1.179.178/blog/" style="border: 0; height: calc(100% - 100px);" width="100%" frameborder="0"></iframe>';
    }
}