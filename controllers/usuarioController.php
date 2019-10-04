<?php

class usuarioController extends publicacion {



  public function index(){
      require_once 'views/layoutsUsua/header.php';
      require_once 'views/usuarios/index.php';
      require_once 'views/layoutsUsua/footer.php';
  }

  public function create(){

     require_once 'views/layoutsUsua/header.php';
     require_once 'views/usuarios/create.php';
     require_once 'views/layoutsUsua/footer.php';


  }
  public function store (){
    


      $path = 'assets/imgs/' . $_FILES['url_image']['name'];

      var_dump(move_uploaded_file($_FILES['url_image']['tmp_name'], $path));

      $_POST['url_image'] = $path;
      
      echo parent::registrar_publicacion($_POST) ? header('location:?controller=usuario') : 'Error en el registro';
     


  }
      public function edit(){
        $usuario = parent::find($_GET['id_publi']);
        require_once 'views/layoutsUsua/header.php';
        require_once 'views/usuarios/edit.php';
        require_once 'views/layoutsUsua/footer.php';
    }

  
public function update(){


     $url_path = 'assets/imgs/' . $_FILES['url_image']['name'];
     var_dump(move_uploaded_file($_FILES['url_image']['tmp_name'], $url_path));

     $_POST['url_image'] = $url_path;

     echo parent::update_publicacion($_POST) ? header('location:?controller=usuario') : 'Error en actualizar datos';


    }

}
 ?>
