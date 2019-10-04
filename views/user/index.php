<h1>Lista de usuarios</h1>

<a class="createUser" href="?controller=user&method=create">Crear</a>
<table class="table">
    <thead>
        <th>id</th>
        <th>name</th>
        <th>Email</th>
        <th>rol</th>
        <th>Opciones</th>
    </thead>
    <tbody>
    <?php foreach(parent::find_user() as $user):  ?>
        <tr>
            <td><?= $user->id ?></td>
            <td><?= $user->name ?></td>
              <td><?= $user->email ?></td>
              <td><?= $user->Nom_descrip ?></td>
            <td width="200" class="table__options">
                <a href="?controller=user&method=edit&id=<?= $user->id ?>">
                    <button class="btn btn-outline-green">Editar</button>
                </a>
                <a href="?controller=user&method=delete&id=<?= $user->id ?>">
                <button class="btn btn-outline-red">Borrar</button>
                </a>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
