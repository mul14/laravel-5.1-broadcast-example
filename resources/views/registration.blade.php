<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>

<h1>Sign up</h1>

@include('alerts')

<form method="post">

  {!! csrf_field() !!}

  <p>
    Name: <input type="text" name="name" value="demo" />
  </p>

  <p>
    Email: <input type="email" name="email" value="demo@example.com" />
  </p>

  <p>
    Password: <input type="password" name="password" value="demo" />
  </p>

  <p>
    <button type="submit">Submit</button>
  </p>

</form>


<a href="/admin">Goto Admin Page</a>

</body>
</html>
