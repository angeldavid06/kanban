<h1>Etapas</h1>
<table>
    <thead>
        <th>Nombre de la etapa</th>
    </thead>
    <tbody>
        <?php while ($steps = $data->fetch_object()) : ?>
            <tr>
                <td><?=$steps->name?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>
<form action="http://localhost/kanban/?controller=StepsController&action=insert" method="POST">
    <label for="">Nombre de la etapa</label>
    <input type="text" name="step" id="step">
    <label for="">Nombre del tablero</label>
    <input type="text" name="board" id="board">
    <button>Confirmar</button>
</form>