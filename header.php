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

			<div class="menu">				
				<div class="content-width">
					<nav class="site-nav">				
					<?php $args = array( 'theme_location' => 'header' ); ?>
					<?php wp_nav_menu(  $args ); ?>
					</nav>
				</div>
			</div>
		</header><!-- /site-header -->

		<div class="qbw_body content-width"><!-- /content -->

		<style>
			#btnScrollToTop{
				position: fixed;
				right: 3%;
				bottom: 3%;
				width: 50px;
				height: 50px;
				border-radius: 50%;
				background: orange;
				border:none;
				color:white;
				outline:none;
				cursor:pointer;
			}
			#btnScrollToTop:hover{
				color:purple;
				background:orange;
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
		</style>
		
		<button id="btnScrollToTop">
			<div class="blobs-container">
				<div class="blob red"><i class="fa fa-arrow-up fa-3x" aria-hidden="true"></i></div>
			</div>
		</button>
		<script>

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

		</script>
