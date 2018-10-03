<?php
class Validate {
    public function validatePerson(array $persons){
        foreach ($persons as $person){
            if(!$person){
            $error = 'Авторизуйтесь';
            $_SESSION['error'] = $error;
            return false;
        }
        else{
            $_SESSION['error'] = 'Что то не так';
            return true;
        }
        }
        
    }
    
}