<?php

class securityController extends Security {


    public function login(){
        $user = parent::validateLogin($_POST['email']);

        if(!is_object($user)) die('Username incorrecto.');

       if(password_verify($_POST['password'], $user->password)){

      $_SESSION['user'] = $user;
      switch ($_SESSION['user']->rol_id){

      case 1:
      header('location:?controller=usuario');
      break;
      case 2:
      header('location:?controller=user');
      break;
    }
    }else {
      echo "contraseña incorrecta";

       }
    }

    public function logout(){
        unset($_SESSION['user']);
        session_destroy();
        header('location:?controller=index');
    }

}
