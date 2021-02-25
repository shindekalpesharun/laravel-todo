<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Todo</a>

        </div>
    </nav>
    <div class="container">
        <form method="post" action="/" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="titleid" class="col-sm-3 col-form-label">Enter a Todo</label>
                <div class="col-sm-9">
                    <input name="todo" type="text" class="form-control" id="titleid" placeholder="Todo">
                </div>
            </div>
        </form>
        <br>
        <h3>Count of Todos {{ count($data) }} <br></h3>
        <ul class="list-group">
            @foreach($data as $cruds)
            <li class="list-group-item m-2 d-flex justify-content-between"" aria-current=" true">{{$cruds->id}}
                {{$cruds->todo}} <a href="{{$cruds->id}}"><button type="button"
                        class="btn btn-outline-danger">Delete</button> </a>
            </li>
            @endforeach
        </ul>
    </div>
</body>

</html>