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
        print '<div class="content">';
        print '<table> <tr> <td class="collapse-mobile"> <img src="assets/images/me.png" width="100%" alt=""/> </td> <td style="padding:25px"> <h1 style="font-size:96px">Xiaoyu Yin</h1> <h3>Software Engineer - Web Developer</h3> <p>I am...</p> <ul> <li>(currently) a freshman studying Computer Science at the University of Maryland</li> <li>a tennis player, martial artist (wushu, sanshou), osu! player</li> </ul> <ul class="handles"> <li><div><a href="Resume.pdf"><img src="assets/images/resume.png" width="75px" /></a></div></li><li><div><a href="https://www.facebook.com/xiaoxiao13"><img src="assets/images/facebook.png" width="75px" /></a></div></li> <li><div><a href="https://github.com/xyin96"><img src="assets/images/github.png" width="75px" /></a></div></li> <li><div><a href="https://www.linkedin.com/profile/view?id=307669414"><img src="assets/images/linkedin.png" width="75px" /></a></div></li> <li><div><a href="http://challengepost.com/users/xyin"><img src="assets/images/challengepost.png" width="75px" /></a></div></li> </ul></td> </tr> </table>';
        print '</div>';
    }
}