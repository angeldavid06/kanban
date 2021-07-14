<h1>Tareas</h1>
<table>
    <thead>
        <th>Nombre de la tarea</th>
    </thead>
    <tbody>
        <?php while ($tasks = $data->fetch_object()) : ?>
            <tr>
                <td><?=$tasks->description;?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<form action="http://localhost/kanban/?controller=TaskController&action=insert">
    <label for="">Nombre de la tarea</label>
    <input type="text" name="nombre" id="nombre">
    <label for="">Descripcion de la tarea</label>
    <input type="text" name="descripcion" id="descripcion">
    <label for="">fecha</label>
    <input type="date" name="fecha" id="fecha">
    <label for="">Etapa</label>
    <input type="text" name="step" id="step">
    <label for="">Subetapa</label>
    <input type="text" name="substep" id="substep">
    <button>Confirmar</button>
</form>