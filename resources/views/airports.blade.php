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
    <h3>World Airports</h3>
    <form class="form-group">
        <p>
            <label>Search: </label>
            <input value="{{$parms['input']['country']??'Uzbekistan'}}" class="form-control" name="country" type="text" placeholder="Your Country">
            <button type="submit">Search</button>
        </p>
    </form>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>City</th>
            <th>Country</th>
            <th>Code</th>
        </tr>
        @foreach($parms['airports'] as $airport)
        <tr>
            <td>{{$airport->id}}</td>
            <td>{{$airport->city}}</td>
            <td>{{$airport->country}}</td>
            <td>{{$airport->code}}</td>
        </tr>
        @endforeach
    </table>
</div>
</body>
</html>
