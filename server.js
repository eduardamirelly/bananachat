const express = require('express');
const app = express();
var server = require('http').createServer(app);

const io = require('socket.io')(server, {
    cors: { origin: "*"}
});

// let messages = [];
var users = [];

io.on('connection', function (socket){
    console.log('Socket conectado ' + socket.id);

    socket.on('user_connected', function (user_id) {
        users[user_id] = socket.id;
        // io.emit('updateUserStatus', users);
        console.log("user connected "+ user_id);
    });

    socket.on('chatActive', function(userId, message) {

       socket.broadcast.to(users[userId]).emit('receivedMessage', message);

    });

    // socket.on('sendMessageToServer', (message) => {
    //     console.log(message);

    //     // messages.push(message);
    //     socket.broadcast.emit('receivedMessage', message);

        
    //     // socket.emit('sendChatToClient', message);
    // });


    socket.on('disconnect', function (){
        console.log('disconnect');
    });
});


server.listen(3000, function() {
    console.log('Na escuta, porta 3000!');
});

