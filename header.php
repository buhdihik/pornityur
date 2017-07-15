    <!DOCTYPE html>
    <html>
      <head>
        <title>Pornityur</title>
            <?php wp_head();?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

        <link href="http://ishedorene.com/thecoffee/wp-content/themes/thePornityur/css/main.css" rel="stylesheet" media="screen">
        <link href="http://ishedorene.com/thecoffee/wp-content/themes/thePornityur/css/contact.css" rel="stylesheet" media="screen">

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

					$('html,bod').animate({
					'scrollTop': $target.offset().top
					}, 1000, 'swing' , function() {
					 window.location.hash = target;
					});

		  //Scroll and don't show hash
		 // $('html,body').animate({
			//  'scrollTop': $target.offset().top
		  // }, 1000, 'swing');
					});
				});
   </script>
      </head>
      <body>
          <div class="container-fluid indexBG" id="first">
            <nav class="navbar navbar-default navbar-fixed-top " >
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo" href="#"><img src="http://ishedorene.com/thecoffee/wp-content/themes/thePornityur/images/logo.png" class="img-responsive"/></a>
              </div>
              <div id="navbar" class="collapse navbar-collapse">
                 <ul class="nav navbar-nav">
                      <li><a href="#first">HOME</a></li>
                      <li><a href="#second">ABOUT</a></li>
                      <li><a href="#third">SUBSCRIBE</a></li>
                       <li><a href="#fourth">CONTACT</a></li>

                 </ul>

              </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
          </nav>  
         