    <!DOCTYPE html>
    <html>
      <head>
        <title>Pornityur</title>
          <?php wp_head();?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

        <link href="http://ishedorene.com/thePornityur/wp-content/themes/thePornityur/css/main.css" rel="stylesheet" media="screen">
        <link href="http://ishedorene.com/thePornityur/wp-content/themes/thePornityur/css/contact.css" rel="stylesheet" media="screen">

        <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet"> 

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
       
         <script>
		$(document).ready(function(){
		$('a[href^="#"]').on('click',function(e){
		e.preventDefault();

		var target = this.hash;
		var $target = $(target);

		  //Scroll and show hash

		//$('html,bod').animate({
		//'scrollTop': $target.offset().top
		//}, 1000, 'swing' , function() {
		//window.location.hash = target;
		//});

		// Scroll and don't show hash
		  $('html,body').animate({
		  'scrollTop': $target.offset().top
		   }, 1000, 'swing');
		});
		});
       </script>
        
      </head>
      <body onload=' location.href="#first" '>
         