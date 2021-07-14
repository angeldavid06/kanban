<h1>Lideres de proyecto</h1>
<table>
    <thead>
        <th>Encargados de proyecto</th>
        <th>Equipo</th>
    </thead>
    <tbody>
        <?php while ($leaders = $data->fetch_object()) : ?>
            <tr>
                <td><?=$leaders->name;?></td>
                <td><?=$leaders->id_team;?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<form action="http://localhost/kanban/?controller=LeadersController&action=insert" method="post">
    <label for="">Nombre del encargado</label>
    <input type="text" name="nombre" id="nombre">
    <label for="">Equipo</label>
    <input type="text" name="team" id="team">
    <button>Confirmar</button>
</form>