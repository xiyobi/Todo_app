<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .todo-body{
            max-width: 700px;
            box-shadow: 0 0 5px 5px #ccc;
        }
        .todo-text{
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="todo-body my-5 p-3">
            <h1 class="text-center todo-text">Todo App</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur culpa deserunt
                dolorem excepturi minima quasi,
                voluptatum? A ab consectetur debitis, expedita iste odio
                odit qui quidem quis rem rerum voluptatibus.</p>
            <form action="/store" method="post">

                <div class="input-group mb-3">

                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2" name="title">

                    <input type="datetime-local" class="form-control" aria-describedby="button-addon2" name="due_date">

                    <select name="status" id="" style="margin: 0 20px;">
                        <option value="pending">Pending</option>
                        <option value="in_progress">In progress</option>
                        <option value="completed">Completed</option>
                    </select>
                    <button class=" btn btn-primary" type="submit" id="button-addon2">Add</button>
                </div>
            </form>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    an item
                    <buttom class = "btn btn-outline-success">Done</buttom>
                </li><li class="list-group-item d-flex justify-content-between align-items-center">
                    an item
                    <buttom class = "btn btn-outline-success">Done</buttom>
                </li><li class="list-group-item d-flex justify-content-between align-items-center">
                    an item
                    <buttom class = "btn btn-outline-success">Done</buttom>
                </li><li class="list-group-item d-flex justify-content-between align-items-center">
                    an item
                    <buttom class = "btn btn-outline-success">Done</buttom>
                </li>
            </ul>

        </div>
    </div>
</div>
</body>
</html>