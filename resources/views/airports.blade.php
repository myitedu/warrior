<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>World Airports</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="container-fluid">
    <h3>Email</h3>
    <form class="form-group">
        <p>
            <label>Search: </label>
            <input value="" class="form-control" name="email" type="text" placeholder="Your ID">
            <button type="submit">Search</button>
        </p>
    </form>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>DOB</th>
            <th>Email</th>
        </tr>
        @foreach($parms['birthdays'] as $birthday)
        <tr>
            <td>{{$birthday->id}}</td>
            <td>{{$birthday->first_name}}</td>
            <td>{{$birthday->last_name}}</td>
            <td>{{$birthday->dob}}</td>
            <td>{{$birthday->email}}</td>
        </tr>
        @endforeach
    </table>
</div>
</body>
</html>
