<style>
    input{
        border: 1px solid black;
        margin-bottom: 20px;
    }
</style>

<center><form class="formu" action="?controller=usuario&method=store" method="POST" enctype="multipart/form-data">
    <h2>CREAR PUBLICACION</h2>
    <label for="title">Titulo</label>
    <input type="text" name="title" id="title" required>
    <br>
    <label for="description">Description</label>
    <input type="text" name="description" id="description" required>
    <br>
    <label for="url_image">Imagen</label>
    <input type="file" name="url_image" id="url_image" required>
    <br>
    <input type="submit" value="Register">
</form></center>
