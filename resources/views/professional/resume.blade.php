<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Resume</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
</head>
<body>
<h3>My Resume</h3>
<div class="container-fluid">

    <pre>
        {{var_dump($parms)}}
    </pre>


    <form action="/resume" method="post" class="form-group">
        <p>
            <label>First Name: </label>
            <input class="form-control" name="first_name" type="text" placeholder="Your First Name">
            {{csrf_field()}}
            <button class="btn btn-info" type="submit">GO</button>
        </p>
    </form>
</div>
</body>
</html>
