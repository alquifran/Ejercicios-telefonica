var express = require('express');
var http 	= require('http');
var app 	= express();
var path = require('path');
var bodyParser = require('body-parser');
app.set('port', process.env.PORT || 8000);

app.use(express.static('public'));

app.use(bodyParser.urlencoded({extended: false}));

app.get('/', function(request, response){
	response.send('¡Hola, añlsdfkjasñdfjqwoefij!');
});

app.post('/users', function(request, response){
	var username = request.body.username;
	response.send('Hola, ' + username);
});
app.get('/users/:userName', function(request, response){
	var name = request.params.userName;
	response.send('Hola, ' + name);
});

app.get(/\/personal\/(\d*)\/?(edit)?/, function (request, response) {
var message = 'el perfil del empleado #' + request.params[0];
if (request.params[1] === 'edit') {
message = 'Editando ' + message;
} else {
message = 'Viendo ' + message;
}
response.send(message);
});

// app.get('/index.html', function(request, response){
// 	response.sendFile(path.join(__dirname + '/index.html'));
// });


http.createServer(app).listen(app.get('port'), function(){
	console.log('Escuchando en http://localhost:' + app.get('port'));
});