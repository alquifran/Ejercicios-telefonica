var express 	= require('express');
var app 		= express();
var bodyParser 	= require('body-parser');
var fs = require('fs');
//var obj = JSON.parse(fs.readFileSync('file', 'utf8'));

app.set('port', process.env.PORT || 8081);

app.use(express.static('public'));
app.use(bodyParser.urlencoded({extended: false}));

// app.get('/', function(req, res){
// 	fs.readFile(__dirname + "/index.html", 'utf8', function())
// })
app.get('/', function(req, res) {
  res.sendFile('public/index.html');
});

app.get('/list', function (req, res){
	 fs.readFile(__dirname + "/" + "supermercado.json", 'utf8', 
	 	function(err, data){
	 		var list = JSON.parse(data);
	 		res.json(list);
	 		res.end(data);

	 	})

});

app.post('/add', function(req, res){
	var id = parseInt(req.body.identificador);
	console.log(req.body);
	var name = req.body.nombre;
	var price = parseFloat(req.body.precio);
	var available = req.body.disponible;
	if(available == 'on'){
		available = true;
	}
	else{
		available = false;
	}
	fs.readFile(__dirname + "/" + "supermercado.json", 'utf8', function (err, data){
		if (err){
			console.log(err);
		} else {
			obj = JSON.parse(data); 
	    	obj['producto' + id]={"id": id, 
	    	"nombre": name , 
	    	"precio" : price , 
	    	"disponible" : available};
	    	json = JSON.stringify(obj, null, 3); 
	    	// json = JSON.stringify(obj);
	    	fs.writeFile('supermercado.json', json, 'utf8'); 
	    	//res.end();
	    	res.json(obj);
	    	//res.end(json);
	}});
	//res.redirect('/list');
});

app.get('/delete/:id', function(req, res){
	//req.params.id
	fs.readFile(__dirname + "/" + "supermercado.json", 'utf8', function (err, data){
		if (err){
			console.log(err);
		} else {
			obj = JSON.parse(data); 
	    	delete obj['producto' + req.params.id];
	    	json = JSON.stringify(obj, null, 3); 
	    	fs.writeFile('supermercado.json', json, 'utf8'); 
	}});
	res.redirect('/list');
})

app.get('/seleccion/:id', function(req, res){
	//req.params.id
	fs.readFile(__dirname + "/" + "supermercado.json", 'utf8', function (err, data){
		if (err){
			console.log(err);
		} else {
			obj = JSON.parse(data);
			console.log(obj['producto' + req.params.id]);
			json = JSON.stringify(obj['producto' + req.params.id], null, 3);
			//res.end(obj['producto' + req.params.id]);
			res.end(json);
	}});
	
})


app.get('/*', function(req, res){
	res.writeHead(200, {'Content-Type': 'text/html'});
        res.write("No existe la ruta");
});

app.listen(app.get('port'), function() {  
    console.log('App listening on port: ' + app.get('port'));
});