<?php

class captchaHelper {
    public static function validateCaptcha($value) {
        $g = new Captcha(sfContext::getInstance()->getUser()->getAttribute('captcha'));
        if ($g->verify($value)) {
          return true;
        } else {
          return false;
        }
    }
}
?>