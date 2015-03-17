<?php
/**
 * Created by PhpStorm.
 * User: Xiaoyu
 * Date: 3/8/2015
 * Time: 11:29 PM
 */

class Blog {
    public function __construct(){
        print '<div class="content">';
        print '<link rel="stylesheet" href="public/css/blog.css" />';
        print '<iframe src="/blog" style="border: 0; height: calc(100% - 100px);" width="100%" frameborder="0"><style>.sidebar{visibility:hidden}</style></iframe>';
        print '</div>';
    }
}