var app = require('express')();
var server = require('http').Server(app);
var io = require('socket.io')(server);

app.get('/chat', function(req, res){
  res.sendfile(__dirname + '/demo.html');
})
app.get('/', function (req, res) {
  res.send('<h1>Welcome Realtime Server</h1>');
});

io.on('connection', function (socket) {
  console.log('connection accepted.');
  socket.on('message',function(msg){
  	 io.emit('news',msg);
  });
});

server.listen(3012);
