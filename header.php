<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<?php wp_head(); ?>
		<title><?php bloginfo('name'); ?></title>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--< link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
		<link rel="stylesheet" href="/wp-content/uploads/font-awesome-4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>		
	</head>

	<body <?php body_class(); ?>>
		<!-- site-header -->
		<header class="site-header">

			<div class="social">
				<div>
					<div class="content-width">
						<a href="#"><i class="fa fa-youtube" ></i></a>
						<a href="#"><i class="fa fa-twitter" ></i></a>
						<a href="#"><i class="fa fa-twitch" ></i></a>
						<a href="#"><i class="fa fa-facebook-official" ></i></a>
						<a href="#"><i class="fa fa-whatsapp" ></i></a>
						<a href="#"><i class="fa fa-instagram" ></i></a>
						<a href="#"><i class="fa fa-whatsapp" ></i></a>
					</div>
				</div>
			</div>
			
			<div class="image">
				<div class="content-width">
					<h1 class="title"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
					<div class="header-search">
						<?php get_search_form(); ?>
					</div>					
				</div>
			</div>
			
			<div class="tagline">
				<h3 class="content-width"><?php bloginfo('description'); ?>
					<?php /* if (is_page(7)) {*/
					if (is_page('quite-kewl')) {?>
						- Thank you for the visit our KEWL site.
					<?php } ?>
				</h3>
			</div>

<!---
			<div class="menu">				
				<div class="content-width">
					<nav class="site-nav">				
					< ?php $args = array( 'theme_location' => 'header' ); ?>
					< ?php wp_nav_menu(  $args ); ?>
					</nav>
				</div>
			</div>
-->					
			
<div class="menu2">  
  		<nav class="site-navy">				
			<?php $args = array( 'theme_location' => 'header' ); ?>
			<?php wp_nav_menu(  $args ); ?>
		</nav>  
</div>

		</header><!-- /site-header -->

		<div class="qbw_body content-width"><!-- /content -->

		<style>

.menu2 {
  margin: 0 auto;
  text-align: center;
  background-color: yellow;
}

.menu2 ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: inline-block;
}

.menu2 li {
  display: inline-block;
  margin-right: 20px;
}

.menu2 a {
  display: inline-block;
  text-decoration: none;
  color: #ffff000 !important;
  padding: 10px 15px;
}

li.current_menu_item {
  background-color: green !important;
  color:red !important;
}



			#btnScrollToTop{
				position: fixed;
				right: 3%;
				bottom: 3%;
				width: 50px;
				height: 50px;
				border-radius: 50%;
				background: rgb(0,0,0,0);
				border:none;
				color:white;
				outline:none;
			}
			#btnScrollToTop:hover{
				color:purple;
				background: rgb(0,0,0,0);
			}
			#btnScrollToTop:active{
				color:black;
				background:yellow;
			}


/* Pulse effect */
.fa-arrow-up{
	margin-top:3px;
}
		.blobs-container {
		display: flex;
		}

		.blob {
			background: black;
			border-radius: 80%;
			margin: 00px;
			height: 50px;
			width: 50px;
		}

		@keyframes pulse {
			0% {
				transform: scale(0.95);
				box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.7);
			}

			70% {
				transform: scale(1);
				box-shadow: 0 0 0 30px rgba(0, 0, 0, 0);
			}

			100% {
				transform: scale(0.95);
				box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
			}
		}

		.blob.red {
		background: rgba(255, 125, 0, 1);
		box-shadow: 0 0 0 0 rgba(255, 82, 82, 1);
		animation: pulse-red 2s infinite;
		}

		@keyframes pulse-red {
		0% {
			transform: scale(1.1);
			box-shadow: 0 0 0 0 rgba(255, 82, 82, 0.7);
		}
		
		70% {
			transform: scale(1);
			box-shadow: 0 0 0 40px rgba(255, 82, 82, 0);
		}
		
		100% {
			transform: scale(1.1);
			box-shadow: 0 0 0 0 rgba(255, 82, 82, 0);
		}
		}

/* bounce effect */
@keyframes bounce {
	0%, 100%, 20%, 50%, 80% {
		-webkit-transform: translateY(0);
		-ms-transform:     translateY(0);
		transform:         translateY(0)
	}
	40% {
		-webkit-transform: translateY(-10px);
		-ms-transform:     translateY(-10px);
		transform:         translateY(-10px)
	}
	60% {
		-webkit-transform: translateY(-10px);
		-ms-transform:     translateY(-10px);
		transform:         translateY(-10px)
	}
}

span {  
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  -webkit-animation-timing-function: ease-in-out;
  animation-timing-function: ease-in-out;
  animation-iteration-count: infinite;
  -webkit-animation-iteration-count: infinite;
}

span:hover {
  animation-name: bounce;
  -moz-animation-name: bounce;
}

/* hide till scroll */
#btnScrollToTop {
    opacity: 0;
	cursor: default;
    transition: all 1.25s ease-in-out;
}
#btnScrollToTop.show {
	opacity: 1;
	cursor:pointer;
}

		</style>

		<button id="btnScrollToTop" class="">
			<div class="blobs-container">
				<span class="bounce_button">
					<div class="blob red"><i class="fa fa-arrow-up fa-3x" aria-hidden="true"></i></div>
				</span>		
			</div>
		</button>

		<script>

//You can replace offset value from here
var offset = 300
$(window).on('load scroll', function(){

var element = document.getElementById("btnScrollToTop");

    if( $(window).scrollTop() > offset ){
		element.classList.add("show");
    }else{
        element.classList.remove("show");
    }
})


			const btnScrollToTop = document.querySelector("#btnScrollToTop");

			btnScrollToTop.addEventListener("click", function() {
				// option 1 - jump to top
				//window.scrollTo(0,0);

				// option 2 - limited Chrome & Fire Fox
				//window.scrollTo({
				//	top:0,
				//	left:0,
				//	behavior:"smooth"
				//	});

				// option 3 - works for all
				$("html, body").animate({ scrollTop: 0 }, "slow");
			});
/**/




		</script>
