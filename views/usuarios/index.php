<h1>Publicaciones</h1>

<a class= "create" href="?controller=usuario&method=create">Crear Publicacion</a>
<table class="table">
    <thead>
        <th>id</th>
        <th>title</th>
        <th>Description</th>
        <th>Imagen</th>
        <th>Opciones</th>
    </thead>
    <tbody>    
    <?php foreach(parent::all() as $usuario):  ?>    
        <tr>
            <td><?= $usuario->id_publi ?></td>
            <td><?= $usuario->title ?></td>
                 <td><?= $usuario->description ?></td>                 
                 <td><img src="<?= $usuario->url_image ?>" width="200px" height="200px"></td>
    

            <td width="200" class="table__options">
                <a href="?controller=usuario&method=edit&id_publi=<?= $usuario->id_publi ?>">
                    <button class="btn btn-outline-green">Editar</button>
                </a>
               
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
