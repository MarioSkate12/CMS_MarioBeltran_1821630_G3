<?php
/**
 *
 */
class publicacion extends Database{


 public function all(){
        try{
            $result = parent::connect()->prepare("SELECT * FROM publicacion");
            $result->execute();
            return $result->fetchAll();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

  public function registrar_publicacion($data){
    try{
        $result = parent::connect()->prepare("INSERT INTO publicacion (title, description,url_image) VALUES (?,?,?)");
        $result->bindParam(1, $data['title'], PDO::PARAM_STR);
        $result->bindParam(2, $data['description'], PDO::PARAM_STR);
        $result->bindParam(3, $data['url_image'], PDO::PARAM_STR);
        return $result->execute();
    }catch (Exception $e){
       die("Error publicacion->registrar_publicacion() " . $e->getMessage());
    }

  }

      public function find($id_publi){
        try{
            $result = parent::connect()->prepare("SELECT * FROM publicacion WHERE id_publi = ?");
            $result->bindParam(1, $id_publi, PDO::PARAM_INT);
            $result->execute();
            return $result->fetch();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }


    public function update_publicacion($data){
        try{
      
            
            $result = parent::connect()->prepare("UPDATE publicacion SET title = ?, description = ?, url_image= ? WHERE id_publi = ?");
            $result->bindParam(1, $data['title'], PDO::PARAM_STR);
            $result->bindParam(2, $data['description'], PDO::PARAM_STR);
            $result->bindParam(3, $data['url_image'], PDO::PARAM_STR);
            $result->bindParam(4, $data['id_publi'], PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
            die("Error publicacion->update_publicacion() " . $e->getMessage());
        }
    }

        public function delete_publicacion ($data){
        try{
            $SQL = 'DELETE FROM publicacion WHERE id_publi = ?';
            $result = parent::connect()->prepare($SQL);
            $result->execute(array($data));
            $variable = ( $result )?  header('location:?controller=publicacion') : 'no eliminado' ;          
            echo $variable;

        }catch(Exception $m){
            die('Error Eliminar user->delete_publicacion '.$m->getMessage());
        }finally{
            $result = null;
        }

    }

 }


 ?>
