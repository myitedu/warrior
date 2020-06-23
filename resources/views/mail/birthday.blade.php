<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>This is a birthday mail template</h2>
<p>
    Hello, {{$data['name']}}!
    <hr>
Your friend Jon wants to wish you Happy Birthday and he said:

<pre>
    {{$data['your_message']}}
</pre>
</p>
</body>
</html>
