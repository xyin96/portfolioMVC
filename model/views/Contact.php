<?php
/**
 * Created by PhpStorm.
 * User: Xiaoyu
 * Date: 3/8/2015
 * Time: 11:29 PM
 */

class Contact {
    public function __construct(){
        print '<link rel="stylesheet" href="public/css/contact.css" />';
        print '<script src="public/css/contact.js"></script>';
        print '<div class="content"> <table><tr><td><h2>Contact Me</h2><br /> <b>If you like what I do, and are interested in recruiting me, contact me:</b><br /> <ul class="handles"> <li><div><a href="https://www.facebook.com/xiaoxiao13"><img src="assets/images/facebook.png" width="75px" /></a></div></li> <li><div><a href="https://github.com/xyin96"><img src="assets/images/github.png" width="75px" /></a></div></li> <li><div><a href="https://www.linkedin.com/profile/view?id=307669414"><img src="assets/images/linkedin.png" width="75px" /></a></div></li> <li><div><a href="http://challengepost.com/users/xyin"><img src="assets/images/challengepost.png" width="75px" /></a></div></li> </ul> </div></td> <td><div id="form"> <form class="dark-matter"> <label> <span>Your Name :</span> <input id="name" type="text" name="name" placeholder="Your Full Name" required /> </label> <label> <span>Your Email :</span> <input id="email" type="email" name="email" placeholder="Valid Email Address" required /> </label> <label> <span>Message :</span> <textarea id="message" name="message" placeholder="Your Message to Us" required ></textarea> </label> <label> <span>&nbsp;</span> <input id="submit" type="button" class="button" value="Send" /> </label> </form></td> </tr></table></div>';
    }
}