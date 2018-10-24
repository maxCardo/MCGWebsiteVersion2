<script>
var http = require('http');
var url = require('url');
var fs = require('fs');
var jquery = require('jquery');
var popper = require('popper.js');
var bs = require('bootstrap');
var rs = fs.createReadStream('./index.html');
var events = require('events');
var eventEmitter = new events.EventEmitter();
</script>