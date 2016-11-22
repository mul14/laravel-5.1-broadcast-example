<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin</title>

  <style>
    #activities {
      background: #f9f9f9;
      padding: 4px 8px;
      margin-bottom: 4px;
      font-family: monospace;
    }
  </style>
</head>
<body>

<h1>Admin Dashboard</h1>

<h2>Activities</h2>

<div id="activities"></div>

<script src="//cdn.socket.io/socket.io-1.4.5.js"></script>
<script>
  var socket = io('http://localhost:9090');

  socket.on('notification', function (data) {

    console.log(data);

    var user = data.user;

    var act = document.getElementById('activities');
    var date = new Date();
    var log = document.createElement('div');
    log.innerHTML = date.toISOString() + ': ' + user.name + ' (' + user.email + ') telah terdafar.';
    act.appendChild(log);
  });
</script>

</body>
</html>
