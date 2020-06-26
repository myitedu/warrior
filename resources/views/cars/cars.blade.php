<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CARSCARSCARS</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="container-fluid">
    <h3 id="title">FordCars</h3>
    <form class="form-group">
        <p>
            <label id="label">Search: </label>
            <input id="cars" class="form-control" name="type" type="text" placeholder="Enter Car!">
            <button type="submit">Search</button>
        </p>
    </form>
    <table class="table table-bordered">
        <tr>
            <th>Year</th>
            <th>Make</th>
            <th>Model</th>
            <th>PlatformCode</th>
            <th>Class</th>
        </tr>
        @foreach($parms['cars'] as $car)
            <tr>
                <td>{{$car->Year}}</td>
                <td>{{$car->Make}}</td>
                <td>{{$car->Model}}</td>
                <td>{{$car->PlatformCode}}</td>
                <td>{{$car->Class}}</td>
            </tr>
        @endforeach
    </table>
</div>
</body>
<style>
    body{
        background-color: black;

    }
    h3{
        background-color: rgba(243, 0, 0, 0.18);
        opacity: 0.5;
    }
    #title{
        color: red;
        text-align: center;
    }
   #label{
       color: #491217;
       font-family: Rockwell;
   }
   #cars{
        background-color: rgba(251, 255, 9, 0.47);
       color: #b21f2d;
   }




</style>


</html>
