<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
</head>
<body>

<div class="container-fluid">
<<<<<<< HEAD
    <h3>World Airports</h3>
    <form class="myform">
        <p>
            <label>Search: </label>
            <input name="country" type="text" placeholder="Your Country">
            <button type="submit" class="btn btn-success">Search</button>
=======
    <h3>Email</h3>
    <form class="form-group">
        <p>
            <label>Search: </label>
            <input value="" class="form-control" name="email" type="text" placeholder="Your ID">
            <button type="submit">Search</button>
>>>>>>> c541f6a3b7a38764fd1e64c3414b3e9289fbbd5c
        </p>
    </form>
    <table class="table table-bordered">
        <tr class="th">
            <th>ID</th>
<<<<<<< HEAD
            <th>COUNTRY</th>
            <th>CITY</th>
            <th>CODE</th>
=======
            <th>First Name</th>
            <th>Last Name</th>
            <th>DOB</th>
            <th>Email</th>
>>>>>>> c541f6a3b7a38764fd1e64c3414b3e9289fbbd5c
        </tr>
        @foreach($parms['birthdays'] as $birthday)
        <tr>
<<<<<<< HEAD
            <td>{{$airport->id}}</td>
            <td>{{$airport->country}}</td>
            <td>{{$airport->city}}</td>
            <td>{{$airport->code}}</td>
=======
            <td>{{$birthday->id}}</td>
            <td>{{$birthday->first_name}}</td>
            <td>{{$birthday->last_name}}</td>
            <td>{{$birthday->dob}}</td>
            <td>{{$birthday->email}}</td>
>>>>>>> c541f6a3b7a38764fd1e64c3414b3e9289fbbd5c
        </tr>
        @endforeach
    </table>

</div>
<style>
    h3{
        text-align: center;
    }
    .myform{
        text-align: center;
    }
    .th{
        background-color: yellow;
        color: black;
    }
    .th:hover{
        cursor: pointer;
        background-color: rgba(255, 255, 0, 0.5);
    }
</style>

</body>
</html>
