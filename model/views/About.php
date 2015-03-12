<?php
/**
 * Created by PhpStorm.
 * User: Xiaoyu
 * Date: 3/8/2015
 * Time: 11:29 PM
 */

class About {
    public function __construct(){
        print '<link rel="stylesheet" href="public/css/about.css" />';
        print '<script src="public/js/about.js"></script>';
        print '<div class="content">';
        print '<section>';
        print '<table> <tr> <td class="collapse-mobile profile"> <img src="assets/images/me.png" width="100%" alt=""/> </td> <td style="padding:25px"> <h1 class="title">Xiaoyu Yin</h1> <h3>Software Engineer - Web Developer</h3> <p>I am...</p> <ul> <li>student studying Computer Science at the University of Maryland (expected graduation: May 2018)</li> <li>always looking for new technologies to learn, and ways to improve current technologies</li> </ul> <p>Please feel free to <a href="?url=Contact">drop a message</a>, or <a href="Resume.pdf" target="_blank">review my Resume!</a></p> <ul class="handles"> <li><div><a href="https://www.facebook.com/xiaoxiao13" target="_blank"><img src="assets/images/facebook.png" width="75px" /></a></div></li> <li><div><a href="https://github.com/xyin96" target="_blank"><img src="assets/images/github.png" width="75px" /></a></div></li> <li><div><a href="https://www.linkedin.com/profile/view?id=307669414" target="_blank"><img src="assets/images/linkedin.png" width="75px" /></a></div></li> <li><div><a href="http://challengepost.com/users/xyin" target="_blank"><img src="assets/images/challengepost.png" width="75px" /></a></div></li> </ul></td> </tr> </table>';
        print '<div class="readmoresymbol">Scroll down for more.</div>';
        print '</section>';
        print '<section>';
        print '<h1>What can I Do?</h1>';
        print '<ul class="bargraph"> <li> <h3>Programming Languages</h3> <ul> <li data-value="8">Java</li> <li data-value="8">PHP</li> <li data-value="6.5">Elm</li>  </ul> </li> <li> <h3>Web Development</h3> <ul> <li data-value="8">HTML5,CSS3</li> <li data-value="8">JavaScript</li> <li data-value="4">MySQL</li> </ul> </li> <li> <h3>Mobile Development</h3> <ul> <li data-value="8">Android</li> </ul> </li> <li> <h3>Misc</h3> <ul> <li data-value="6.5">MATLAB</li> <li data-value="8">Github</li> </ul> </li> </ul>';
        print '<div class="tuzki collapse-mobile"><img src="assets/images/tuzki.png" /><!-- tuzki pic from picpngsticker.blogspot.com --></div>';
        print '</section>';
        print '<section>';
        print '</div>';
    }
}