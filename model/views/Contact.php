<?php
/**
 * Created by PhpStorm.
 * User: Xiaoyu
 * Date: 3/8/2015
 * Time: 11:29 PM
 */

class Contact {
    public function __construct(){
        print '<div class="content">';
        print '<link rel="stylesheet" href="public/css/contact.css" />';
        print '<script src="public/js/contact.js"></script>';
        print '<div><h2>Contact Me</h2><br /> <address> <strong>Xiaoyu Yin</strong><br /> <abbr title="Phone">P:</abbr> (301) 693-1308<br /><a href="mailto:yin530@gmail.com">yin530@gmail.com</a> </address> <br /><ul class="handles"> <li><div><a href="https://www.facebook.com/xiaoxiao13"><img src="assets/images/facebook.png" width="75px" /></a></div></li> <li><div><a href="https://github.com/xyin96"><img src="assets/images/github.png" width="75px" /></a></div></li> <li><div><a href="https://www.linkedin.com/profile/view?id=307669414"><img src="assets/images/linkedin.png" width="75px" /></a></div></li> <li><div><a href="http://challengepost.com/users/xyin"><img src="assets/images/challengepost.png" width="75px" /></a></div></li> </ul> </div> <div><div id="form"> <form class="dark-matter collapse-mobile"> <label> <span>Your Name :</span> <input id="name" type="text" name="name" placeholder="Your Full Name" required /> </label> <label> <span class="collapse-mobile">Your Email :</span> <input id="email" type="email" name="email" placeholder="Valid Email Address" required /> </label> <label> <span class="collapse-mobile">Message :</span> <textarea id="message" name="message" placeholder="Your Message" required ></textarea> </label> <label> <span>&nbsp;</span> <input id="submit" type="button" class="button" value="Send" /> </label> </form></div></div></div>';
    }
}