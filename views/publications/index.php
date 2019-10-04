<h1>Publicaciones</h1>

<a class= "create" href="?controller=publicacion&method=create">Crear Publicacion</a>
<table class="table">
    <thead>
        <th>id</th>
        <th>title</th>
        <th>Description</th>
        <th>Imagen</th>
        <th>Opciones</th>
    </thead>
    <tbody>    
    <?php foreach(parent::all() as $publicacion):  ?>    
        <tr>
            <td><?= $publicacion->id_publi ?></td>
            <td><?= $publicacion->title ?></td>
                 <td><?= $publicacion->description ?></td>                 
                 <td><img src="<?= $publicacion->url_image ?>" width="200px" height="200px"></td>
    

            <td width="200" class="table__options">
                <a href="?controller=publicacion&method=edit&id_publi=<?= $publicacion->id_publi ?>">
                    <button class="btn btn-outline-green">Editar</button>
                </a>
                <a href="?controller=publicacion&method=delete&id_publi=<?= $publicacion->id_publi ?>">
                <button class="btn btn-outline-red">Borrar</button>
                </a>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
