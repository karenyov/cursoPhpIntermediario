<?php

class Validacao {
    public static function validaEmail($email){
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public static function verdadeiro($bool){
        return ($bool === true) ? true : false;
    }
}