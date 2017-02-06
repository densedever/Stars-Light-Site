$('#submit').load('Quotes.txt');

var html = $('#submit').css('white-space', 'pre-wrap');
var height = $('#submit').css({'line-height': '35px','font-size':'20px', 'padding': '50px 40px 20px'});
var strings = $('#submit').innerHTML();