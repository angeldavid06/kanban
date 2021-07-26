const prioridad = () => {
    const tasks = document.getElementsByClassName('task');
    for (let i = 0; i < tasks.length; i++) {
        if (tasks[i].dataset.priority) {
            console.log(tasks[i]);
            tasks[i].classList.add('priority-'+tasks[i].dataset.priority);
        }
    }
}

(() => {
    prioridad();
})();