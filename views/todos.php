<?php
require "views/componentes/header.php";
?>
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="todo-body my-5 p-3">
            <h1 class="text-center todo-text">Todo App</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aperiam autem eveniet illum ipsa, nihil
                numquam officiis pariatur placeat quae quasi recusandae repellat similique tempora tenetur ut vel veniam
                veritatis.</p>
            <form method="POST" action="/todos">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Recipient's username"
                           aria-label="Recipient's username" aria-describedby="button-addon2"
                           name="title"
                           required
                    >
                    <input type="datetime-local" class="form-control" placeholder="Recipient's username"
                           aria-label="Recipient's username" aria-describedby="button-addon2"
                           name="due_date"
                           required
                    >
                    <button class="btn btn-primary" type="submit" id="button-addon2">Add</button>
                </div>
            </form>
            <ul class="list-group">
                <?php
                /** @var TYPE_NAME $todos */


                foreach ($todos as $todo) {echo '<li class="' . $todo['status'] . ' list-group-item d-flex justify-content-between align-items-center">
                    ' . $todo["title"] . '
                    <div>
                        <a href="/todos/' . $todo["id"] . '/edit" class="btn btn-outline-primary">Edit</a>
                    <a href="/todos/' . $todo["id"] . '/delete" class="btn btn-outline-danger">Delete</a>
                    </div>
                </li>
                ';
                }

                
                    // if ($todo['status'] == 'completed') {
                    //     echo '
                    //             <li class="' . $todo['status'] . ' list-group-item d-flex justify-content-between align-items-center">
                    //         ' . $todo["title"] . '
                    //         <div>
                    //             <a href="/todos/' . $todo["id"] . '/in-progress" class="btn btn-outline-primary">In progress</a>
                    //         <a href="/todos/' . $todo["id"] . '/pending" class="btn btn-outline-success">Pending</a> 
                    //         </div>
                    //     </li>
                    //         ';
                    // } 
                    // elseif ($todo['status'] == 'pending') {
                    //     echo '
                    //             <li class="' . $todo['status'] . ' list-group-item d-flex justify-content-between align-items-center">
                    //         ' . $todo["title"] . '
                    //         <div>
                    //             <a href="/todos/' . $todo["id"] . '/in-progress" class="btn btn-outline-primary">In progress</a>
                    //         <a href="/todos/' . $todo["id"] . '/complete" class="btn btn-outline-success">Complete</a> 
                    //         </div>
                    //     </li>
                    //         ';
                    // } else {
                    //     echo '
                    //             <li class="' . $todo['status'] . ' list-group-item d-flex justify-content-between align-items-center">
                    //         ' . $todo["title"] . '
                    //         <div>
                    //             <a href="/todos/' . $todo["id"] . '/pending" class="btn btn-outline-warning">Pending</a>
                    //         <a href="/todos/' . $todo["id"] . '/complete" class="btn btn-outline-success">Complete</a> 
                    //         </div>
                    //     </li>
                    //         ';
                    // }
                

                ?>
            </ul>
        </div>
    </div>
</div>
<div style="position: fixed; width: 100%; bottom: 0; ">
    <?php
    require 'views/componentes/footer.php';
    ?>
</div>
