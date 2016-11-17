var express = require('express');
var path = require('path');
var http = require('http');

var app = express();

app.use(express.static('Application'));

var server = app.listen('3000',function(){
	console.log('this project running at port:3000');
})