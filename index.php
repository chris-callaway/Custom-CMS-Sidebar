<html>
	<head>
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<title></title>
		<script src="http://code.jquery.com/jquery-2.0.0.js"></script>
		<script src="/js/jquery.bxslider.min.js"></script>
		<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
		<link rel="stylesheet" href="css/themes/default/default.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/style.css" media="all"> 
		<?php

			include 'includes/db_connect.php';

			//Enable/Disable Features
			
			$sql="SELECT * FROM $tbl_name";
			$result = mysql_query($sql);
 
			while($row = mysql_fetch_array($result)){
				$headerColor = $row['header_color'];
				$footerColor = $row['footer_color'];
				$navColor = $row['nav_color'];
				$logoImage = $row['logo_image'];
				$logoPlacement = $row['logo_placement'];
				$contactName = $row['contact_name'];
				$contactAddressOne = $row['contact_addressOne'];
				$contactAddressTwo = $row['contact_addressTwo'];
				$contactPhone = $row['contact_phone'];
				$sliderWidth = $row['sliderWidth'];
				$sliderWidthStyle = $row['sliderWidthStyle'];
				$slide1 = $row['slide1'];
				$slide2 = $row['slide2'];
				$slide3 = $row['slide3'];
				$slide4 = $row['slide4']; 
				$teaserLength = $row['teaserLength'];
				$teaser1 = $row['teaser1'];
				$teaser2 = $row['teaser2'];
				$teaser3 = $row['teaser3'];
				$teaser4 = $row['teaser4'];
				$featuredLength = $row['featuredLength'];
				$featured1 = $row['featured1'];
				$featured2 = $row['featured2'];
				$featured3 = $row['featured3'];
				$featured4 = $row['featured4'];
				$videoSource = $row['video_source'];
				$videoWidth = $row['videoWidth'];
				$videoWidthStyle = $row['videoWidthStyle'];
				$copyright = $row['copyright']; 
				$aboutText = $row['aboutText']; 
				$diamondLink = $row['diamondLink'];
				$bridalLink = $row['bridalLink'];
				$designersLink = $row['designersLink'];
				$timepiecesLink = $row['timepiecesLink'];
				$aboutUsLink = $row['aboutUsLink'];
			} 

		?> 
 
<script type="text/javascript">
$(document).ready(function(){
	 
	$('#slider').nivoSlider();
	
	$('#slider').nivoSlider({
		currentSlide: 1,
		currentImage: '',
		totalSlides: 4,
		running: true,
		paused: false,
		stop: false,
		controlNavEl: false
	}); 

	headerColor = "<?php echo $headerColor; ?>";
	footerColor = "<?php echo $footerColor; ?>";
	navColor = "<?php echo $navColor; ?>";
	logoImage = "<?php echo $logoImage; ?>";
	logoPlacement = "<?php echo $logoPlacement; ?>"; 
	sliderWidth = "<?php echo $sliderWidth; ?>"; 
	sliderWidthStyle = "<?php echo $sliderWidthStyle; ?>";
	contactName = "<?php echo $contactName; ?>"; 
	contactAddressOne = "<?php echo $contactAddressOne; ?>"; 
	contactAddressTwo = "<?php echo $contactAddressTwo; ?>"; 
	contactPhone = "<?php echo $contactPhone; ?>"; 
	slide1 = "img/" + "<?php echo $slide1; ?>";
	slide2 = "img/" + "<?php echo $slide2; ?>";
	slide3 = "img/" + "<?php echo $slide3; ?>";
	slide4 = "img/" + "<?php echo $slide4; ?>";
	teaserLength = "<?php echo $teaserLength; ?>"; 
	featuredLength = "<?php echo $featuredLength; ?>"; 
	featured1 = "<?php echo $featured1; ?>"; 
	featured2 = "<?php echo $featured2; ?>"; 
	featured3 = "<?php echo $featured3; ?>";  
	featured4 = "<?php echo $featured4; ?>"; 
	teaser1 = "<?php echo $teaser1; ?>"; 
	teaser2 = "<?php echo $teaser2; ?>"; 
	teaser3 = "<?php echo $teaser3; ?>";  
	teaser4 = "<?php echo $teaser4; ?>"; 
	videoSource = "media/" + "<?php echo $videoSource; ?>";  
	videoWidth = "<?php echo $videoWidth; ?>";  
	videoWidthStyle = "<?php echo $videoWidthStyle; ?>";
	copyright = "<?php echo $copyright; ?>";  
	aboutText = "<?php echo $aboutText; ?>";  
 	diamondLink = "<?php echo $diamondLink; ?>";  
 	bridalLink = "<?php echo $bridalLink; ?>"; 
 	designersLink = "<?php echo $designersLink; ?>"; 
 	timepiecesLink = "<?php echo $timepiecesLink; ?>"; 
 	aboutUsLink = "<?php echo $aboutUsLink; ?>"; 
 	
 	$('a.nivo-prevNav').empty();
 	$('a.nivo-nextNav').empty();
 	$('a.nivo-nextNav').append('<img class="sliderNavNext" src="img/btn_next.png" />');
 	$('a.nivo-prevNav').append('<img class="sliderNavPrev" src="img/btn_prev.png" />');
	$('.container .nivoSlider').css('width', sliderWidth+sliderWidthStyle);
	$('.container .nivo-main-image').attr('src', slide1);
	$('.container .header').css('background', headerColor);
	$('.footer').css('background', footerColor);
	$('.container .nav').css('background', navColor);
	$('.container .mobileNav').css('background', navColor);
	$('.container img.logo').attr('src', logoImage);
	$('.container #video').attr('src', videoSource); 
	$('.container #slide1').attr('src', slide1);
	$('.container #slide1').attr('data-thumb', slide1);
	$('.container #slide1').css('visiblitiy', 'visible');
	$('.container #slide1').css('display', 'block');
	$('.container #slide2').attr('src', slide2);
	$('.container #slide2').attr('data-thumb', slide2);
	$('.container #slide3').attr('src', slide3);
	$('.container #slide3').attr('data-thumb', slide3);
	$('.container #slide4').attr('src', slide4); 
	$('.container #slide4').attr('data-thumb', slide4);
	$('.container video#video').css('width', videoWidth+videoWidthStyle);
	$('.footer p#copyright').append(copyright);
	$('.footer #aboutText').append(aboutText);
	$('.footer #diamondLink').attr('href', diamondLink);
	$('.footer #bridalLink').attr('href', bridalLink);
	$('.footer #designersLink').attr('href', designersLink);
	$('.footer #timepiecesLink').attr('href', timepiecesLink);
	$('.footer #aboutUsLink').attr('href', aboutUsLink);  
	 
	if (teaserLength==1){
		$('ul.teasers').append('<li><a href="" id="teaserOne"><img src="" class="teaser first" /></a></li>');
		$('img.teaser').css('width', '98%');
	}
	if (teaserLength==2){
		$('ul.teasers').append('<li><a href="" id="teaserOne"><img src="" class="teaser first" /></a></li><li><a href="" id="teaserTwo"><img src="" class="teaser second" /></a></li>');
		$('img.teaser').css('width', '48.5%');
	}
	if (teaserLength==3){
		$('ul.teasers').append('<li><a href="" id="teaserOne"><img src="" class="teaser first" /></a></li><li><a href="" id="teaserTwo"><img src="" class="teaser second" /></a></li><li><a href="" id="teaserThree"><img src="" class="teaser third" /></a></li>');
		$('img.teaser').css('width', '32%');
	}
	if (teaserLength==4){
		$('ul.teasers').append('<li><a href="" id="teaserOne"><img src="" class="teaser first" /></a></li><li><a href="" id="teaserTwo"><img src="" class="teaser second" /></a></li><li><a href="" id="teaserThree"><img src="" class="teaser third" /></a></li><li><a href="" id="teaserFour"><img src="" class="teaser fourth" /></a></li>');
	}
	if (featuredLength==1){
		$('ul.featured').append('<li><a href="" id="featuredOne"><img src="" class="featured first" /></a></li>');
		$('img.featured').css('width', '98%');  
	}
	if (featuredLength==2){
		$('ul.featured').append('<li><a href="" id="featuredOne"><img src="" class="featured first" /></a></li><li><a href="" id="featuredTwo"><img src="" class="featured second" /></a></li>');
		$('img.featured').css('width', '48.5%');
	}
	if (featuredLength==3){
		$('ul.featured').append('<li><a href="" id="featuredOne"><img src="" class="featured first" /></a></li><li><a href="" id="featuredTwo"><img src="" class="featured second" /></a></li><li><a href="" id="featuredThree"><img src="" class="featured third" /></a></li>');
		$('img.featured').css('width', '32%'); 
	}
	if (featuredLength==4){
		$('ul.featured').append('<li><a href="" id="featuredOne"><img src="" class="featured first" /></a></li><li><a href="" id="featuredTwo"><img src="" class="featured second" /></a></li><li><a href="" id="featuredThree"><img src="" class="featured third" /></a></li><li><a href="" id="featuredFour"><img src="" class="featured fourth" /></a></li>');   
	} 
	$('.container a#teaserOne img.first').attr('src', teaser1);
	$('.container a#teaserTwo img.second').attr('src', teaser2);
	$('.container a#teaserThree img.third').attr('src', teaser3);
	$('.container a#teaserFour img.fourth').attr('src', teaser4); 
	$('.container a#featuredOne img.first').attr('src', featured1);
	$('.container a#featuredTwo img.second').attr('src', featured2);
	$('.container a#featuredThree img.third').attr('src', featured3); 
	$('.container a#featuredFour img.fourth').attr('src', featured4);
	
	$('.footer #diamondLink').attr('href', diamondLink);
	 
	if (logoPlacement=="Left"){
		$('.container img.logo').css('float', 'left');
	} 
	if (logoPlacement=="Center"){
		$('.container img.logo').css('margin', 'auto');
		$('.container img.logo').css('display', 'block');
	} 
	if (logoPlacement=="Right"){
		$('.container img.logo').css('float', 'right');
	} 
  	
  	$('.container p.contactName').append(contactName);
  	$('.container p.contactAddressOne').append(contactAddressOne);
  	$('.container p.contactAddressTwo').append(contactAddressTwo);
  	$('.container p.contactPhone').append(contactPhone);
  	
  	$('.mobileNav').click(function(){
  		if ($(this).height()<=50){
  			$(this).animate({'height': '200px'});
  		}
  		else{
  			$(this).animate({'height': '50px'});
  		} 
  	});
  	
  	$('.adminTab').click(function(){
  		$(this).animate({left: '-100px'});
  		$('.adminBar').animate({width: '26%'}); 
  	});
  	
  	$('#closeAdmin').click(function(){
  		$('.adminTab').animate({left: '-0px'});
  		$('.adminBar').animate({width: '0%'}); 
  	});
	
	// Event listener for the play/pause button
	var video = document.getElementById('video');
	var playButton = document.getElementById('play-pause');
	
	video.addEventListener("click", function() {
  		if (video.paused == true) {
    		video.play();
    		playButton.style.display = "None";
  		} 
  		else {
    		video.pause();
    		playButton.style.display = "Block";
  		}
	});
	
	playButton.addEventListener("click", function() {
  		if (video.paused == true) {
    		video.play();
    		playButton.style.display = "None";
  		} 
  		else {
    		video.pause();
    		playButton.style.display = "Block";
  		}
	});
	
	$('span#headerColorPicker').css('background', headerColor);
	
});  
</script>
	</head>
	<body>
		<div class="adminTab">Admin</div>
		<?php include 'adminTest.php'; ?>
		<div class="container">
			<div class="header">
				<p class="myAccount"><a href="#">My Account</a></p>
			</div>
			<div class="logo">
				<img src="" class="logo" />
			</div>
			<div class="contactInfo">
				<p class="contactName headertext"></p>
				<p class="contactAddressOne headertext"></p>
				<p class="contactAddressTwo headertext"></p>
				<p class="contactPhone headertext"></p>
			</div>
			<div class="nav">
				<ul> 
					<a href="#" ><li>About Us</li></a>
					<a href="#" ><li>Services</li></a>
					<a href="#" ><li>Contact</li></a>
				</ul> 
			</div>
			<div class="mobileNav">
				<span class="navigation">Navigation</span>
				<ul>
					<a href="#" ><li>About Us</li></a>
					<a href="#" ><li>Services</li></a>
					<a href="#" ><li>Contact</li></a>
				</ul> 
			</div>
			<div id="slider" class="nivoSlider"> 
				<img class="slide" id="slide1" src="" data-thumb="" alt="" data-transition="slideInLeft" /> 
				<img class="slide" id="slide2" src="" data-thumb="" alt="" data-transition="slideInLeft" />
				<img class="slide" id="slide3" src="" data-thumb="" alt="" data-transition="slideInLeft" /> 
				<img class="slide" id="slide4" src="" data-thumb="" alt="" data-transition="slideInLeft" />  
			</div>
			<ul class="teasers"> 
			</ul> 
			<div class="spacer">&nbsp;</div>
			<div class="video">
				<video width="" id="video" height="">
 					<source src="" type="video/mp4">
  					<!-- <source src="movie.ogg" type="video/ogg"> --> 
					Your browser does not support the video tag. 
				</video>
				<img src="img/PlayButton.png" id="play-pause" />
			</div>
			<ul class="featured"> 
			</ul> 
			<div class="spacer">&nbsp;</div>
		</div> 
		<div class="footer">
			<div class="footerContainer">
				<div class="footerColumn first">
					<div class="footerHeader">About</div>
					<div class="footerRow" id="aboutText"></div> 
					<div class="footerRow" id="socialFooter">You can also find us on:</div>
					<div class="footerRow" id="socialIcons"> 
						<a href="" ><img src="http://www.historys-crucible.com/images/footer_icon_facebook.png" class="socialFooter" /></a>
						<a href="" ><img src="http://www.historys-crucible.com/images/footer_icon_facebook.png" class="socialFooter" /></a>
						<a href="" ><img src="http://www.historys-crucible.com/images/footer_icon_facebook.png" class="socialFooter" /></a>
						<a href="" ><img src="http://www.historys-crucible.com/images/footer_icon_facebook.png" class="socialFooter" /></a>
						<a href="" ><img src="http://www.historys-crucible.com/images/footer_icon_facebook.png" class="socialFooter" /></a>
					</div>
				</div>
				<div class="footerColumn">
					<div class="footerHeader">Store</div>
					<a href="" id="diamondLink"><div class="footerRow"><img src="http://www.historys-crucible.com/images/footer_icon_facebook.png" class="footerIcon"/><p>Diamonds</p></div></a>
					<a href="" id="bridalLink"><div class="footerRow"><img src="http://www.historys-crucible.com/images/footer_icon_facebook.png" class="footerIcon"/><p>Bridal &amp; Engagement</p></div></a>
					<a href="" id="designersLink"><div class="footerRow"><img src="http://www.historys-crucible.com/images/footer_icon_facebook.png" class="footerIcon"/><p>Designers</p></div></a>
					<a href="" id="timepiecesLink"><div class="footerRow"><img src="http://www.historys-crucible.com/images/footer_icon_facebook.png" class="footerIcon"/><p>Timepieces</p></div> </a>
					<a href="" id="aboutUsLink"><div class="footerRow"><img src="http://www.historys-crucible.com/images/footer_icon_facebook.png" class="footerIcon"/><p>About Us</p></div></a>
				</div>
				<div class="footerColumn">
					<div class="footerHeader">Company</div>
					<a href="" ><div class="footerRow"><img src="http://www.historys-crucible.com/images/footer_icon_facebook.png" class="footerIcon"/><p>Contact Us</p></div></a>
					<a href="" ><div class="footerRow"><img src="http://www.historys-crucible.com/images/footer_icon_facebook.png" class="footerIcon"/><p>Private Policy</p></div></a>
					<a href="" ><div class="footerRow"><img src="http://www.historys-crucible.com/images/footer_icon_facebook.png" class="footerIcon"/><p>Terms &amp; Conditions</p></div></a>
				</div>
				<div class="footerColumn" id="footerColumnLast">
					<div class="footerHeader">Latest News</div>
					<a href="" ><div class="footerRow calender"><img src="img/calendar.jpg" class="footerCalender"/><p>A new woo commerce theme</p></div></a>
					<a href="" ><div class="footerRow calender"><img src="img/calendar.jpg" class="footerCalender"/><p>-50% on the women's collection</p></div></a>
				</div>
				<p id="copyright"></p> 
			</div>
		</div>
	</body>
</html>