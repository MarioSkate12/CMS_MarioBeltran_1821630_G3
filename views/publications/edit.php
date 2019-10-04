<style>
    input{
        border: 1px solid black;
        margin-bottom: 20px;
    }
</style>

<center><form class="formu" action="?controller=publicacion&method=update" method="POST" enctype="multipart/form-data">
    <h2>EDITAR PUBLICACION</h2>
    <input type="hidden" name="id_publi" value="<?= $publicacion->id_publi ?>">

    <label for="title">Titulo</label>
    <input type="text" name="title" id="title" required value="<?= $publicacion->title ?>">
    <br>
    <label for="description">Description</label>
    <input type="text" name="description" id="description" required value="<?= $publicacion->description ?>">
    <br>
    <label for="url_image">Imagen</label>
    <input type="file" name="url_image" id="url_image" required value="<?= $publicacion->url_image ?>">
    <br>
    <input type="submit" value="update">
</form></center>
