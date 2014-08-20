<div class="adminBar">
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

		<style type="text/css">
			.indentOne{padding-left:20px;}
		</style>
		<!-- <style type="text/css">
			.webcam_options, .city_options{display:none;}
		</style> -->
		<script type="text/javascript">
			$(document).ready(function(){
  
			headerColor = "<?php echo $headerColor; ?>";
			footerColor = "<?php echo $footerColor; ?>";
			navColor = "<?php echo $navColor; ?>";
			logoImage = "<?php echo $logoImage; ?>";
			logoPlacement = "<?php echo $logoPlacement; ?>"; 
			contactName = "<?php echo $contactName; ?>"; 
			contactAddressOne = "<?php echo $contactAddressOne; ?>"; 
			contactAddressTwo = "<?php echo $contactAddressTwo; ?>"; 
			contactPhone = "<?php echo $contactPhone; ?>"; 
			sliderWidth = "<?php echo $sliderWidth; ?>"; 
			sliderWidthStyle = "<?php echo $sliderWidthStyle; ?>";
			slide1 = "<?php echo $slide1; ?>";
			slide2 = "<?php echo $slide2; ?>";
			slide3 = "<?php echo $slide3; ?>";
			slide4 = "<?php echo $slide4; ?>";
			teaserLength = "<?php echo $teaserLength; ?>"; 
			teaser1 = "<?php echo $teaser1; ?>"; 
			teaser2 = "<?php echo $teaser2; ?>"; 
			teaser3 = "<?php echo $teaser3; ?>";  
			teaser4 = "<?php echo $teaser4; ?>";
			featuredLength = "<?php echo $featuredLength; ?>"; 
			featured1 = "<?php echo $featured1; ?>"; 
			featured2 = "<?php echo $featured2; ?>"; 
			featured3 = "<?php echo $featured3; ?>";  
			featured4 = "<?php echo $featured4; ?>"; 
			videoSource = "<?php echo $videoSource; ?>";  
			videoWidth = "<?php echo $videoWidth; ?>";  
			videoWidthStyle = "<?php echo $videoWidthStyle; ?>"; 
			copyright = "<?php echo $copyright; ?>"; 
			aboutText = "<?php echo $aboutText; ?>"; 				
			diamondLink = "<?php echo $diamondLink; ?>"; 
			bridalLink = "<?php echo $bridalLink; ?>"; 
			designersLink = "<?php echo $designersLink; ?>"; 
			timepiecesLink = "<?php echo $timepiecesLink; ?>"; 
			aboutUsLink = "<?php echo $aboutUsLink; ?>"; 
					
			//Distribute Values
			
			$('.adminBar #headerColor').val(headerColor);
			$('.adminBar #footerColor').val(footerColor);
			$('.adminBar #navColor').val(navColor);
			//$('input#logoImage').val(logoImage);
			$('#currentLogo').attr('src', logoImage);
			$('.adminBar #logoPlacement').val(logoPlacement);
			$('.adminBar #sliderWidth').val(sliderWidth);
			$('.adminBar #sliderWidthStyle').val(sliderWidthStyle);
			$('.adminBar #slide1').val(slide1); 
			$('.adminBar #slide2').val(slide2);
			$('.adminBar #slide3').val(slide3);
			$('.adminBar #slide4').val(slide4);
			$('.adminBar #teaserLength').val(teaserLength);
			$('.adminBar #featuredLength').val(featuredLength);
			$('.adminBar #copyright').val(copyright);
			
			$('.adminBar .teaserImages').hide();
			$('.adminBar .featuredImages').hide();
				
					if ($('.adminBar #teaserLength').val()=="1"){  
						$('.adminBar .teaserImagesOne').show();
					}
					if ($('.adminBar #teaserLength').val()=="2"){  
						$('.adminBar .teaserImagesTwo').show();
					}
					if ($('.adminBar #teaserLength').val()=="3"){   
						$('.adminBar .teaserImagesThree').show();
					} 
					if ($('.adminBar #teaserLength').val()=="4"){  
						$('.adminBar .teaserImagesFour').show();
					}
					if ($('.adminBar #featuredLength').val()=="1"){  
						$('.adminBar .featuredImagesOne').show();
					}
					if ($('.adminBar #featuredLength').val()=="2"){  
						$('.adminBar .featuredImagesTwo').show();
					}
					if ($('.adminBar #featuredLength').val()=="3"){   
						$('.adminBar .featuredImagesThree').show();
					}
					if ($('.adminBar #featuredLength').val()=="4"){  
						$('.adminBar .featuredImagesFour').show();
					}
					
			$('input[name=teaserImageOne]').val(teaser1);
			$('input[name=teaserImageTwo]').val(teaser2);
			$('input[name=teaserImageThree]').val(teaser3);
			$('input[name=teaserImageFour]').val(teaser4);
			$('input[name=featuredImageOne]').val(featured1);
			$('input[name=featuredImageTwo]').val(featured2);
			$('input[name=featuredImageThree]').val(featured3);
			$('input[name=featuredImageFour]').val(featured4);
			$('.adminBar #videoSource').val(videoSource);
			$('.adminBar #videoWidth').val(videoWidth);
			$('.adminBar #videoWidthStyle').val(videoWidthStyle);
			$('.adminBar #contactName').val(contactName);
			$('.adminBar #contactAddressOne').val(contactAddressOne);
			$('.adminBar #contactAddressTwo').val(contactAddressTwo);
			$('.adminBar #contactPhone').val(contactPhone);
			$('.adminBar #aboutText').val(aboutText);
			$('.adminBar #diamondLink').val(diamondLink);
			$('.adminBar #bridalLink').val(bridalLink);
			$('.adminBar #designersLink').val(designersLink);
			$('.adminBar #timepiecesLink').val(timepiecesLink);
			$('.adminBar #aboutUsLink').val(aboutUsLink);
				 
				$('.adminBar #teaserLength').change(function(){
					$('.adminBar .teaserImages').hide();
					if ($(this).val()=="1"){  
						$('.adminBar .teaserImagesOne').show();
					}
					if ($(this).val()=="2"){  
						$('.adminBar .teaserImagesTwo').show();
					}
					if ($(this).val()=="3"){  
						$('.adminBar .teaserImagesThree').show();
					}
					if ($(this).val()=="4"){  
						$('.adminBar .teaserImagesFour').show();
					}
				}); 
				
				$('.adminBar #featuredLength').change(function(){
					$('.adminBar .featuredImages').hide();
					if ($(this).val()=="1"){  
						$('.adminBar .featuredImagesOne').show();
					}
					if ($(this).val()=="2"){  
						$('.adminBar .featuredImagesTwo').show();
					}
					if ($(this).val()=="3"){  
						$('.adminBar .featuredImagesThree').show();
					}
					if ($(this).val()=="4"){  
						$('.adminBar .featuredImagesFour').show();
					} 
				}); 
				
				$(document).on('change','#logoImage' , function(){
      					var urltemp = document.getElementById('logoImage');
      					var url = urltemp.value;
						var urlsplit = url.split('\\')[2];
						$('img#currentLogo').attr('src', 'includes/uploads/' + urlsplit); 
				}); 
				
				colorpicker = new Boolean();
				colorpicker = false;
				
				//Header Color Picker
				
				headercolorLink = $('#headerColorOptions .colorpicker a').attr('href', 'http://widget.colorcodehex.com/color-picker.html');
				headercolorLink.attr('href', '#');
				headercolorLink.empty(); 
				headercolorLink.text("Close");
				
				$('.adminbar #headerColor').css('background-color', headerColor);
				
				headercolorLink.click(function(e){
					e.preventDefault();
					$(this).closest('.colorpicker').css('display', 'none');
					colorpicker = false;
					var color = $('#headerColorOptions input#colorhex').val();
					$('.adminbar #headerColor').val(color);
					$('span#headerColorPicker').css('background', color);
					$('.adminbar #headerColor').css('background-color', color);
				});
				
				$('span#headerColorPicker').click(function(){
					if (colorpicker==false){
						$('#headerColorOptions input#colorhex').val(headerColor);
						$('#headerColorPickerWindow').css('display', 'block');		
						colorpicker = true;
					}
					else if (colorpicker==true){
						$('#headerColorPickerWindow').css('display', 'none');		
						colorpicker = false;
						var color = $('#headerColorOptions input#colorhex').val();
						$('.adminbar #headerColor').val(color);
						$('span#headerColorPicker').css('background', color);
						$('.adminbar #headerColor').css('background', color);
					}		
				});
				
				//Footer Color Picker
				
				footercolorLink = $('#footerColorOptions .colorpicker a').attr('href', 'http://widget.colorcodehex.com/color-picker.html');
				footercolorLink.attr('href', '#');
				footercolorLink.empty(); 
				footercolorLink.text("Close");
				
				$('.adminbar #footerColor').css('background-color', footerColor);
				
				footercolorLink.click(function(e){
					e.preventDefault();
					$(this).closest('.colorpicker').css('display', 'none');
					colorpicker = false;
					var color = $('#footerColorOptions input#colorhex').val();
					$('.adminbar #footerColor').val(color);
					$('span#footerColorPicker').css('background', color);
					$('.adminbar #footerColor').css('background-color', color);
				});
				
				$('span#footerColorPicker').click(function(){
					if (colorpicker==false){
						$('#footerColorOptions input#colorhex').val(footerColor);
						$('#footerColorPickerWindow').css('display', 'block');		
						colorpicker = true;
					}
					else if (colorpicker==true){
						$('#footerColorPickerWindow').css('display', 'none');		
						colorpicker = false;
						var color = $('#footerColorOptions input#colorhex').val();
						$('.adminbar #footerColor').val(color);
						$('span#footerColorPicker').css('background', color);
						$('.adminbar #footerColor').css('background', color);
					}		  
				});
				 
		});
		</script>


<form action="includes/upload_options.php" method="post" enctype="multipart/form-data">

<h2>Tools</h2>
<div id="closeAdmin" style="float:right;color:#fff;cursor:pointer;">Close</div>

<div class="options">
	<div id="headerColorOptions">
		<label>Header Color</label> 
		<input name="headerColor" id="headerColor" /><span id="headerColorPicker"></span>
		<div class="colorpicker" id="headerColorPickerWindow"><script src="http://widget.colorcodehex.com/color-picker/abcdef.html" type="text/javascript"></script></div> 
	</div>
	<div id="footerColorOptions">
		<label>Footer Color</label>
		<input name="footerColor" id="footerColor" /><span id="footerColorPicker"></span>
		<div class="colorpicker" id="footerColorPickerWindow"><script src="http://widget.colorcodehex.com/color-picker/abcdef.html" type="text/javascript"></script></div> 
	</div>
	<div>
		<label>Nav Color</label>
		<input name="navColor" id="navColor" />
	</div> 
	<div>
		<label>Logo Image</label> 
		<input type="file" name="logoImage" id="logoImage" />
		<div class="indentOne">
			<img id="currentLogo" style="max-width:100px;" src="" />
		</div>
	</div>
	<div> 
		<label>Contact Info</label>
		<div class="indentOne">
				<label>Contact Name</label>
				<div><input type="text" size="50" name="contactName" id="contactName" /></div>
			</div>
		</div>
		<div class="indentOne">
			<label>Contact Address</label>
			<div><input type="text" size="50" name="contactAddressOne" id="contactAddressOne" /></div>
		</div>
		<div class="indentOne">
			<div><input type="text" size="50" name="contactAddressTwo" id="contactAddressTwo" /></div>
		</div>
		<div class="indentOne">
			<label>Contact Phone</label>
			<div><input type="text" size="50" name="contactPhone" id="contactPhone" /></div>
		</div>
	</div>
	<div>
		<label>Logo Placement</label>
		<select name="logoPlacement" id="logoPlacement">
			<option>Select</option>
			<option>Left</option>
			<option>Center</option>
			<option>Right</option>
		</select>
	</div>
	<div>
		<label>Slider Width</label>
		<input type="text" size="4" maxlength="4" name="sliderWidth" id="sliderWidth" />
		<select name="sliderWidthStyle" id="sliderWidthStyle">
			<option>Select</option>
			<option>%</option>
			<option>px</option>
		</select>
	</div>
	<div>
		<label>Slider Images</label>
		<div class="indentOne">
			<div><input type="text" name="slide1" id="slide1" /></div>
			<div><input type="text" name="slide2" id="slide2" /></div>
			<div><input type="text" name="slide3" id="slide3" /></div>
			<div><input type="text" name="slide4" id="slide4" /></div>
		</div>
	</div>
	<div>
	<div> 
		<label>Teaser Length</label>
		<select name="teaserLength" id="teaserLength">
			<option>Select</option>
			<option>0</option>
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
		</select>
		<div class="teaserImagesOne teaserImages">
			<div class="indentOne">
				<div><label>Teaser Image 1</label><input type="text" name="teaserImageOne" /></div>
			</div>
		</div>
		<div class="teaserImagesTwo teaserImages">
			<div class="indentOne">
				<div><label>Teaser Image 1</label><input type="text" name="teaserImageOne" /></div>
				<div><label>Teaser Image 2</label><input type="text" name="teaserImageTwo" /></div>
			</div>
		</div>
		<div class="teaserImagesThree teaserImages">
			<div class="indentOne">
				<div><label>Teaser Image 1</label><input type="text" name="teaserImageOne" /></div>
				<div><label>Teaser Image 2</label><input type="text" name="teaserImageTwo" /></div>
				<div><label>Teaser Image 3</label><input type="text" name="teaserImageThree" /></div>
			</div>
		</div>
		<div class="teaserImagesFour teaserImages">
			<div class="indentOne">
				<div><label>Teaser Image 1</label><input type="text" name="teaserImageOne" /></div>
				<div><label>Teaser Image 2</label><input type="text" name="teaserImageTwo" /></div>
				<div><label>Teaser Image 3</label><input type="text" name="teaserImageThree" /></div>
				<div><label>Teaser Image 4</label><input type="text" name="teaserImageFour" /></div>
			</div>
		</div>
	</div>
	<div> 
		<label>Featured Length</label>
		<select name="featuredLength" id="featuredLength">
			<option>Select</option>
			<option>0</option>
			<option>1</option>
			<option>2</option>
			<option>3</option> 
			<option>4</option>
		</select>
		<div class="featuredImagesOne featuredImages">
			<div class="indentOne">
			<div><label>Featured Image 1</label><input type="text" name="featuredImageOne" /></div>
			</div>
		</div>
		<div class="featuredImagesTwo featuredImages">
			<div class="indentOne">
				<div><label>Featured Image 1</label><input type="text" name="featuredImageOne" /></div>
				<div><label>Featured Image 2</label><input type="text" name="featuredImageTwo" /></div>
			</div>
		</div>  
		<div class="featuredImagesThree featuredImages">
			<div class="indentOne">
				<div><label>Featured Image 1</label><input type="text" name="featuredImageOne" /></div>
				<div><label>Featured Image 2</label><input type="text" name="featuredImageTwo" /></div>
				<div><label>Featured Image 3</label><input type="text" name="featuredImageThree" /></div>
			</div>
		</div>
		<div class="featuredImagesFour featuredImages">
			<div class="indentOne">
				<div><label>Featured Image 1</label><input type="text" name="featuredImageOne" /></div>
				<div><label>Featured Image 2</label><input type="text" name="featuredImageTwo" /></div>
				<div><label>Featured Image 3</label><input type="text" name="featuredImageThree" /></div>
				<div><label>Featured Image 4</label><input type="text" name="featuredImageFour" /></div>
			</div>
		</div>
	</div>
	<div>
		<label>Video Source</label>
		<input type="text" name="videoSource" id="videoSource" />
	</div>
	<div>
		<label>Video Width</label>
		<input type="text" size="4" maxlength="4" name="videoWidth" id="videoWidth" />
		<select name="videoWidthStyle" id="videoWidthStyle">
			<option>Select</option>
			<option>%</option>
			<option>px</option>
		</select>
	</div>
	<div>
		<label>About Text</label>
		<input type="text" name="aboutText" id="aboutText" /> 
	</div>
	<div>
		<label>Footer</label>
		<div class="indentOne">
			<div><label>Diamond Link</label><input type="text" name="diamondLink" id="diamondLink" /></div>
			<div><label>Bridal Link</label><input type="text" name="bridalLink" id="bridalLink" /></div>
			<div><label>Designers Link</label><input type="text" name="designersLink" id="designersLink" /></div>
			<div><label>Timepieces Link</label><input type="text" name="timepiecesLink" id="timepiecesLink" /></div>
			<div><label>About Us Link</label><input type="text" name="aboutUsLink" id="aboutUsLink" /></div>
		</div>
	</div>
	<div>
		<label>Copyright</label>
		<input type="text" name="copyright" id="copyright" /> 
	</div>
	<div>
</div>

<input type="submit" name="submit" value="Submit">
</form> 
</div>
</div>