<h1>Equipos</h1>

<table>
    <thead>
        <th>Nombre del equipo</th>
    </thead>
    <tbody>
        <?php while ($teams = $data->fetch_object()) : ?>
            <tr>
                <td><?=$teams->name?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>
<form action="http://localhost/kanban/?controller=TeamsController&action=insert" method="POST">
    <label for="">Nombre del equipo</label>
    <input type="text" name="nombre" id="nombre">
    <button>Confirmar</button>
</form>