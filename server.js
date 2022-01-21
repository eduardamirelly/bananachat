const express = require('express');
const app = express();
var server = require('http').createServer(app);

const io = require('socket.io')(server, {
    cors: { origin: "*"}
});

io.on('connection', function (socket){
    console.log('connection');

    socket.on('sendMessageToServer', (message) => {
        console.log(message);

        // socket.emit('sendChatToClient', message);
    });

    socket.on('disconnect', function (){
        console.log('disconnect');
    });
});

server.listen(3000, function() {
    console.log('Na escuta, porta 3000!');
});

