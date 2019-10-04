<?php

class publicacionController extends publicacion {



  public function index(){
      require_once 'views/layoutsPubli/header.php';
      require_once 'views/publications/index.php';
      require_once 'views/layoutsPubli/footer.php';
  }

  public function create(){

     require_once 'views/layoutsPubli/header.php';
     require_once 'views/publications/create.php';
     require_once 'views/layoutsPubli/footer.php';


  }
  public function store (){
    


      $path = 'assets/imgs/' . $_FILES['url_image']['name'];

      var_dump(move_uploaded_file($_FILES['url_image']['tmp_name'], $path));

      $_POST['url_image'] = $path;
      
      echo parent::registrar_publicacion($_POST) ? header('location:?controller=publicacion') : 'Error en el registro';



  }
      public function edit(){
        $publicacion = parent::find($_GET['id_publi']);
        require_once 'views/layoutsPubli/header.php';
        require_once 'views/publications/edit.php';
        require_once 'views/layoutsPubli/footer.php';
    }


public function update(){


     $url_path = 'assets/imgs/' . $_FILES['url_image']['name'];
     var_dump(move_uploaded_file($_FILES['url_image']['tmp_name'], $url_path));

     $_POST['url_image'] = $url_path;

     echo parent::update_publicacion($_POST) ? header('location:?controller=publicacion') : 'Error en actualizar datos';


    }
      public function delete(){
     $user = parent::delete_publicacion($_GET['id_publi']);
    }


}
 ?>
