<h1>Miembros del equipo</h1>

<table>
    <thead>
        <th>Nombre del integrante</th>
        <th>Equipo</th>
        <th>Tarea</th>
    </thead>
    <tbody>
        <?php while ($members = $data->fetch_object()) : ?>
            <tr>
                <td><?=$members->name?></td>
                <td><?=$members->id_team?></td>
                <td><?=$members->id_task?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<form action="http://localhost/kanban/?controller=MembersController&action=insert" method="POST">
    <label for="">Nombre del integrante</label>
    <input type="text" name="nombre" id="nombre">
    <label for="">Equipo</label>
    <input type="number" name="team" id="team">
    <label for="">Tarea</label>
    <input type="number" name="task" id="task">
    <button>Confirmar</button>
</form>