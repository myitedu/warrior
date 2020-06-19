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
    <h3>World Airports</h3>
    <form class="myform">
        <p>
            <label>Search: </label>
            <input name="country" type="text" placeholder="Your Country">
            <button type="submit" class="btn btn-success">Search</button>
        </p>
    </form>
    <table class="table table-bordered">
        <tr class="th">
            <th>ID</th>
            <th>COUNTRY</th>
            <th>CITY</th>
            <th>CODE</th>
        </tr>
        @foreach($parms['airports'] as $airport)
        <tr>
            <td>{{$airport->id}}</td>
            <td>{{$airport->country}}</td>
            <td>{{$airport->city}}</td>
            <td>{{$airport->code}}</td>
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
