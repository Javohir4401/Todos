<?php
require "views/componentes/header.php";
?>
<div class="edit-container">
    <h2 class="edit-header">Edit Task</h2>
    <form method="POST" action="/todos/<?= $todo['id']?>/update">
        <input hidden="" type="text" name="_method" value="PUT" id="">
        <div class="form-group">
            <label for="taskName" class="form-label">Task Name</label>
            <input type="text" id="taskName" class="form-control" placeholder="Enter task name" name="title" value="<?= $todo['title'] ?>">
        </div>
        <div class="form-group">
            <label for="taskStatus" class="form-label">Status</label>
            <select name="status" id="taskStatus" class="form-select">
                <option value="Completed" <?= $todo['status'] == 'completed' ? 'selected' : ''?>>Completed</option>
                <option value="Pending" <?= $todo['status'] == 'pending' ? 'selected' : ''?>>Pending</option>
                <option value="in_progress" <?= $todo['status'] == 'in_progress' ? 'selected' : ''?>>In-progress</option>
            </select>
        </div>
        <div class="form-group">
            <label for="taskDueDate" class="form-label">Due Date</label>
            <input name="due_date" type="datetime-local" id="taskDueDate" class="form-control" value="<?= $todo['due_date'] ?>">
        </div>
        <div class="btn-actions">
            <button type="submit" class="btn btn-primary">Save Changes</button>
            <a href="/todos" class="btn btn-secondary">Back to Todo list</a>
        </div>
    </form>
</div>
<div style="position: fixed; width: 100%; bottom: 0; ">
    <?php
    require 'views/componentes/footer.php';
    ?>
</div>
