<h1>Prioridad</h1>

<table>
    <thead>
        <th></th>
        <th>Nivel de prioridad</th>
    </thead>
    <tbody>
        <?php while ($priority = $data->fetch_object()) : ?>
            <tr>
                <td><?=$priority->id?></td>
                <td><?=$priority->priority?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<form action="http://localhost/kanban/?controller=PriorityController&action=insert" method="POST">
    <label for="">Prioridad</label>
    <input type="text" name="priority" id="priority">
    <button>Confirmar</button>
</form>