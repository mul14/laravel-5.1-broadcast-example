<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign up</title>
</head>
<body>

<h1>Sign up</h1>

@include('alerts')

<form method="post">

  {!! csrf_field() !!}

  @php($random_string = str_random(6))

  <p>
    Name: <input type="text" name="name" value="{{ $random_string }}" />
  </p>

  <p>
    Email: <input type="email" name="email" value="{{ $random_string }}@example.com" />
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
