<h1>Proyectos</h1>
<table>
    <thead>
        <th>Nombre del proyecto</th>
        <th>Eliminar</th>
        <th>Actualizar</th>
    </thead>
    <tbody>
        <?php while ($projects = $data->fetch_object()) : ?>
            <tr>
                <td><?=$projects->name;?></td>
                <td><a href="http://localhost/kanban/?controller=ProjectController&action=show&id=<?=$projects->id;?>">X</a></td>
                <td><a href="http://">edit</a></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>
<form action="http://localhost/kanban/?controller=ProjectController&action=insert" method="POST">
    <label for="">Nombre del proyecto</label>
    <input type="text" name="nombre" id="nombre">
    <button>Ingresar</button>
</form>