<style>
    input{
        border: 1px solid black;
        margin-bottom: 20px;
    }
</style>

<center><form class="formulario" action="?controller=user&method=store" method="POST">
    <h2>CREAR USUARIOS</h2>
    <label for="name">Name</label>
    <input type="text" name="name" id="name" required>
    <br>
    <label for="email">Email</label>
    <input type="email" name="email" id="email" required>
    <br>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" required>
    <br>
    <input type="submit" value="Register">
</form></center>
