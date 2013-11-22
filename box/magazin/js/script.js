$(document).ready(function(){
	
	$('#download').click(function(e){

		$.generateFile({
			filename	: 'chapters.txt',
			content		: $('textarea#chapters').val(),
			script		: 'http://cm.wikibyte.org/wp-content/themes/podunion-magazin/box/magazin/download.php'
		});
		
		e.preventDefault();
	});
	
	$('#downloads').click(function(e){

		$.generateFile({
			filename	: 'magazin.html',
			content		: $('textarea#magazin').val(),
			script		: 'http://cm.wikibyte.org/wp-content/themes/podunion-magazin/box/magazin/download.php'
		});
		
		e.preventDefault();
	});
	
	$('#downloadst').click(function(e){

		$.generateFile({
			filename	: 'magazin.txt',
			content		: $('textarea#magazin').val(),
			script		: 'http://cm.wikibyte.org/wp-content/themes/podunion-magazin/box/magazin/download.php'
		});
		
		e.preventDefault();
	});
	/*
	$('#downloadPage').click(function(e){

		$.generateFile({
			filename	: 'page.html',
			content		: $('html').html(),
			script		: 'http://cm.wikibyte.org/wp-content/themes/podunion-magazin/box/magazin/download.php'
		});
		
		e.preventDefault();
	});
	*/
});