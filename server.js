const util  = require('util');
const app   = require('express')();
const http  = require('http').Server(app);
const io    = require('socket.io')(http);
const redis = require('redis');

const host = process.env.HOST || '0.0.0.0';
const port = process.env.PORT || 9090;

http.listen(port, host);
util.log('Listening at http://' + host + ':' + port);

io.on('connection', function (socket) {

  util.log("New client connected");

  var redisClient = redis.createClient();

  redisClient.subscribe('notification');

  redisClient.on('message', function (channel, message) {
    util.log("New message in queue " + message + "channel");

    message = JSON.parse(message);

    socket.emit(channel, message.data);
  });

  socket.on('disconnect', function () {
    redisClient.quit();
  });

});
