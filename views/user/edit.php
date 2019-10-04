<style>
    input{
        border: 1px solid black;
        margin-bottom: 20px;
    }
</style>

<center><form class="formu" action="?controller=user&method=update" method="POST">
    <h2>Editar Usuarios</h2>
    <input type="hidden" name="id" value="<?= $user->id ?>">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" required value="<?= $user->name ?>">
    <br>
    <label for="email">Email</label>
    <input type="email" name="email" id="email" required value="<?= $user->email ?>">
    <br>
    <input type="submit" value="Update">
</form></center>