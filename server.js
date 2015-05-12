var app = require('express')();
var server = require('http').Server(app);
var io = require('socket.io')(server);
var redis = require('redis');

server.listen(9090);

io.on('connection', function (socket) {

    console.log("new client connected");

    var redisClient = redis.createClient();

    redisClient.subscribe('notification');

    redisClient.on('message', function (channel, message) {
        console.log("new message in queue " + message + "channel");

        message = JSON.parse(message);

        socket.emit(channel, message.data);
    });

    socket.on('disconnect', function () {
        redisClient.quit();
    });

});
