<?
session_start();

// Get page request
if(isset($_GET['path'])){$path = htmlentities(trim($_GET['path']), ENT_QUOTES);}
if(!$path){

} else {
	$path_array = explode("/", $path);
	$path0 = $path_array[0];
	$path1 = $path_array[1];
	$path2 = $path_array[2];
	$thisPage = $path0;
	if ($thisPage == "sandd") {
		$_SESSION['shalenaanddon'] = "true";
		header("Location: /");
	}
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><? if (isset($_SESSION['shalenaanddon'])){echo"Shalena and Don";} else {echo"Don and Shalena";}?></title>
<link href="css/custom-bootstrap.css" rel="stylesheet" media="screen">
<link href='http://fonts.googleapis.com/css?family=Raleway:300,200' rel='stylesheet' type='text/css'>
</head>
<body id="top" data-spy="scroll" data-target="#jump-list" data-offset="40">
	<div class="container-fluid">
		<div class="row-fluid">
			<a href="/" id="logo" class="span12"></a>
		</div>
		<div id="content" class="row-fluid">
			<div class="span3">
				<div id="jump-list" class="well sidebar-nav" data-spy="affix" data-offset-top="146">
					<ul class="nav nav-list">
						<li><a href="#top">About<i class="icon-chevron-right"></i></a></li>
						<li><a href="#wedding">The Wedding<i class="icon-chevron-right"></i></a></li>
						<li><a href="#accomodations">Accomodations<i class="icon-chevron-right"></i></a></li>
						<li><a href="#eat">Places to Eat<i class="icon-chevron-right"></i></a></li>
						<li><a href="#fun">Things To Do<i class="icon-chevron-right"></i></a></li>
						<li><a href="#registry">Registry<i class="icon-chevron-right"></i></a></li>
						<li><a href="#contact">Contact Us<i class="icon-chevron-right"></i></a></li>
					</ul>
				</div><!--/.well -->
			</div><!--/span-->
			<div class="span9">
				<section class="row-fluid" id="about">
					<div class="span12">
						<h2>About</h2>
						<p>Hello friends!  As you may know, we are getting married!  Yes, Don Osborne and Shalena Oxley-Butler will unite their rings of power to create a house unrivaled for all time.
						</p>
						<p>
							For those that can join us in Honolulu, you are in for a treat.  We will be having lovely ceremony at the Modern's Sunset Pool overlooking the ocean.  Afterward we will move next door to Morimoto Waikiki, an amazing restaurant by the famed Chef Morimoto (an original Iron Chef).  There we will have cocktails, foods of all kinds, and most importantly dessert.  After our hands are red from so many high fives, we will move the party to Addiction Nightclub, part of the Modern Honolulu.  There we will toast and dance the night away.
						</p>
						<p>
							For those that cannot make it, we will miss each and every one of you.  It just means that we get to celebrate with you personally at another time.
						</p>
					</div><!--/span-->
				</section><!--/row-->
				<section class="row-fluid" id="wedding">
					<div class="span12">
						<h2>The Wedding</h2>
						<ul>
							<li><span class="icon-wrap"><i class="icon-time"></i></span><span>When: August 9th, 4pm</span></li>
							<li><span class="icon-wrap"><i class="icon-map-marker"></i></span><span>Where: The Modern Honolulu Sunset Pool</span></li>
							<li><span class="icon-wrap"><i class="icon-glass"></i></span><span>After: Morimoto Waikiki for food, drinks and delicious deserts</span></li>
							<li><span class="icon-wrap"><i class="icon-ambulance"></i></span><span>Later: Addiction Nightclub for continued celebrations</span></li>
						</ul>
					</div><!--/span-->
				</section><!--/row-->
				<section class="row-fluid" id="accomodations">
					<div class="span12">
						<h2>Accomodations</h2>
						<ul class="thumbnails">
							<li class="span4">
								<a class="thumbnail" href="http://www.themodernhonolulu.com/" target="_blank">
									<img src="img/accomodations1.jpg" />
									<div class="caption">The Modern Honolulu
										<div class="caption-byline">$$$ Where we are staying</div>
									</div>
								</a>
							</li>
							<li class="span4">
								<a class="thumbnail" href="http://www3.hilton.com/en/hotels/hawaii/hilton-hawaiian-village-waikiki-beach-resort-HNLHVHH/index.html" target="_blank">
									<img src="img/accomodations2.jpg" />
									<div class="caption">Hilton Hawaiian Village
										<div class="caption-byline">$$$ Next door to the Modern</div>
									</div>
								</a>
							</li>
							<li class="span4">
								<a class="thumbnail" href="http://www.jdvhotels.com/hotels/hawaii/coconut-waikiki-hotel" target="_blank">
									<img src="img/accomodations4.jpg" />
									<div class="caption">Coconut Waikiki
										<div class="caption-byline">$ More affordable, .9 miles/3 min drive to the Modern</div>
									</div>
								</a>
							</li>
							<li class="span4">
								<a class="thumbnail" href="http://www.jdvhotels.com/hotels/hawaii/shoreline-hotel" target="_blank">
									<img src="img/accomodations5.jpg" />
									<div class="caption">Shoreline Hotel
										<div class="caption-byline">$$ Good value, 1.1 miles/3 min drive to the Modern</div>
									</div>
								</a>
							</li>
							<li class="span4">
								<a class="thumbnail" href="http://www.hotelrenew.com/" target="_blank">
									<img src="img/accomodations3.jpg" />
									<div class="caption">Hotel Renew
										<div class="caption-byline">$$ Highly rated, 1.6 miles/5 min drive to the Modern</div>
									</div>
								</a>
							</li>
						</ul>
						<div class="clearfix"></div>
						<p>We have set up a block of rooms with The Modern Honolulu. Call 1-(855)-970-4161 and ask for the Osborne/Oxley-Butler Wedding.  If booking on The Modern's website use the group code OXWED .  These room rates are bookable through July 1st.</p>
						<p>The special rates for the Modern are as follows:</p>
						<ul class="room-rates">
							<li><span>City View:</span>$275/night</li>
							<li><span>Partial Ocean View:</span>$305/night</li>
							<li><span>Ocean View:</span>$335/night</li>
							<li><span>Ocean View Studio Suite:</span>$499/night</li>
							<li><span>Ocean Front Suite:</span>$899/night</li>
						</ul>
						<p><span class="icon-wrap"><i class="icon-info-sign"></i></span>If you are interested in sharing a room let us know, we might have the perfect room mate for you!</p>
					</div><!--/span-->
				</section><!--/row-->
				<section class="row-fluid" id="eat">
					<div class="span12">
						<h2>Places to Eat</h2>
						<ul>
							<li><a href="http://www.alanwongs.com/"><span class="icon-wrap"><i class="icon-food"></i></span>Alan Wong's</a><span class="link-caption">Amazing upscale Hawaiian cuisine</span></li>
							<li><a href="http://www.yelp.com/biz/wailana-coffee-house-honolulu"><span class="icon-wrap"><i class="icon-coffee"></i></span>Wailana Coffee House</a><span class="link-caption">Good diner for breakfast nearby</span></li>
							<li><a href="http://www.yelp.com/biz/chiba-ken-restaurant-honolulu"><span class="icon-wrap"><i class="icon-food"></i></span>Chiba-Ken Restaurant</a><span class="link-caption">Amazing local sushi</span></li>
							<li><a href="http://www.yelp.com/biz/tikis-grill-and-bar-honolulu"><span class="icon-wrap"><i class="icon-beer"></i></span>Tiki's Grill and Bar</a><span class="link-caption">Giant Tiki drinks and a great view</span></li>
							<li><a href="http://www.matsumotoshaveice.com/"><span class="icon-wrap"><i class="icon-thumbs-up"></i></span>Matsumoto Shave Ice</a><span class="link-caption">Shaved ice worth standing in line for</span></li>
						</ul>
					</div><!--/span-->
				</section><!--/row-->
				<section class="row-fluid" id="fun">
					<div class="span12">
						<h2>Things To Do</h2>
						<ul>
							<li><a href="http://www.hawaiistateparks.org/parks/oahu/?park_id=15"><span class="icon-wrap"><i class="icon-location-arrow"></i></span>Diamond Head</a></li>
							<li><a href="http://www.gohawaii.com/oahu/regions-neighborhoods/north-shore/waimea-bay"><span class="icon-wrap"><i class="icon-location-arrow"></i></span>North Shore</a></li>
							<li><a href="http://www.byodo-in.com/"><span class="icon-wrap"><i class="icon-location-arrow"></i></span>The Byodo-In Temple</a></li>
						</ul>
					</div><!--/span-->
				</section><!--/row-->
				<section class="row-fluid" id="registry">
					<div class="span12">
						<h2>Registry</h2>
						<ul>
							<li><a href="http://www.surlatable.com/registry/giftRegistryList.jsp?id=200785390889" target"_blank"><span class="icon-wrap"><i class="icon-shopping-cart"></i></span>Sur La Table</a></li>
							<li><a href="http://www.etsy.com/registry/MzgxODl8MTIxODk4Mzc" target="_blank"><span class="icon-wrap"><i class="icon-shopping-cart"></i></span>Etsy</a></li>
							<li><a href="http://www.amazon.com/registry/wedding/23L4XQ9Z0JCLB/ref=cm_sw_r_tw_wr_obVQrb0WFPCGF" target="_blank"><span class="icon-wrap"><i class="icon-shopping-cart"></i></span>Amazon</a></li>
						</ul>
						<div class="clearfix"></div>
					</div><!--/span-->
				</section><!--/row-->
				<section class="row-fluid" id="contact">
					<div class="span12">
						<h2>Contact Us</h2>
						<p>If you have any qustions, feel free to <a href="javascript:;" title="" data-toggle="popover" data-placement="top" data-content="S: 510-757-6837<br />D: 323-356-9742" data-original-title="<i class='icon-phone'></i> Call us"><i class="icon-phone"></i> Call</a> or <a href="mailto:contact@don-and-shalena.com"><i class="icon-envelope-alt"></i> Email us</a>.  <i class="icon-heart"></i> Hugs.</p>
					</div><!--/span-->
				</section><!--/row-->
			</div><!--/span-->
		</div><!--/row-->
		<footer class="text-center">
			<p>Site by <a href="http://www.humanfriendlydesign.com" target="_blank">Human Friendly Design</a></p>
		</footer>
	</div><!--/.fluid-container-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
	<script src="js/scripts.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#jump-list').localScroll(500, {axis:'y', offset: 40});
			$('#jump-list li a').click(function(){
				$(this).parent().parent().children().removeClass('active');
				var targetParent = $(this).parent();
				$('#jump-list li #'+targetParent).addClass('active');
			});

			$('#contact a').popover({
				animation: true,
				trigger: 'hover',
				html: true
			});

			$.fn.setAllToMaxHeight = function(){
				return this.height( Math.max.apply(this, $.map( this , function(e){ return $(e).height() }) ) );
			}

			setCaptionHeight = function() {
				$('#accomodations ul li .thumbnail .caption').setAllToMaxHeight();
			}

			setCaptionHeight();

			$(window).resize(function() {
				$('#accomodations ul li .thumbnail .caption').css('height', 'auto');
				setCaptionHeight();
			});
		});
    </script>
</body>
</html>