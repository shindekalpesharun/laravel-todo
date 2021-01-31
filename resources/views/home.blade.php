<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>
</head>

<body>
    <h1>Make a Todo</h1>
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

    @foreach($data as $cruds)
    <tr>
        <td>{{$cruds->id}}</td>
        <td>{{$cruds->todo}}</td> <br>
    </tr>
    @endforeach

</body>

</html>