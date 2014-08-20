<?php

			include 'includes/db_connect.php';

			//Enable/Disable Features
			
			$sql="SELECT * FROM $tbl_name";
			$result = mysql_query($sql);
 
			while($row = mysql_fetch_array($result)){
				$headerColor = $row['header_color'];
				$footerColor = $row['footer_color'];
				$navColor = $row['nav_color'];
				//$logoImage = $row['logo_image'];
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
			} 

?>
<html>
	<head>
		<script src="http://code.jquery.com/jquery-2.0.0.js"></script>
		<script src="http://code.jquery.com/jquery-migrate-1.1.1.js"></script>
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
			//logoImage = "<?php echo $logoImage; ?>";
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
			
			//Distribute Values
			
			$('#headerColor').val(headerColor);
			$('#footerColor').val(footerColor);
			$('#navColor').val(navColor);
			//$('#logoImage').val(logoImage);
			$('#logoPlacement').val(logoPlacement);
			$('#sliderWidth').val(sliderWidth);
			$('#sliderWidthStyle').val(sliderWidthStyle);
			$('#slide1').val(slide1); 
			$('#slide2').val(slide2);
			$('#slide3').val(slide3);
			$('#slide4').val(slide4);
			$('#teaserLength').val(teaserLength);
			$('#featuredLength').val(featuredLength);
			$('#copyright').val(copyright);
			
			$('.teaserImages').hide();
			$('.featuredImages').hide();
				
					if ($('#teaserLength').val()=="1"){  
						$('.teaserImagesOne').show();
					}
					if ($('#teaserLength').val()=="2"){  
						$('.teaserImagesTwo').show();
					}
					if ($('#teaserLength').val()=="3"){   
						$('.teaserImagesThree').show();
					} 
					if ($('#teaserLength').val()=="4"){  
						$('.teaserImagesFour').show();
					}
					if ($('#featuredLength').val()=="1"){  
						$('.featuredImagesOne').show();
					}
					if ($('#featuredLength').val()=="2"){  
						$('.featuredImagesTwo').show();
					}
					if ($('#featuredLength').val()=="3"){   
						$('.featuredImagesThree').show();
					}
					if ($('#featuredLength').val()=="4"){  
						$('.featuredImagesFour').show();
					}
					
			$('input[name=teaserImageOne]').val(teaser1);
			$('input[name=teaserImageTwo]').val(teaser2);
			$('input[name=teaserImageThree]').val(teaser3);
			$('input[name=teaserImageFour]').val(teaser4);
			$('input[name=featuredImageOne]').val(featured1);
			$('input[name=featuredImageTwo]').val(featured2);
			$('input[name=featuredImageThree]').val(featured3);
			$('input[name=featuredImageFour]').val(featured4);
			$('#videoSource').val(videoSource);
			$('#videoWidth').val(videoWidth);
			$('#videoWidthStyle').val(videoWidthStyle);
			$('#contactName').val(contactName);
			$('#contactAddressOne').val(contactAddressOne);
			$('#contactAddressTwo').val(contactAddressTwo);
			$('#contactPhone').val(contactPhone);
				 
				$('#teaserLength').change(function(){
					$('.teaserImages').hide();
					if ($(this).val()=="1"){  
						$('.teaserImagesOne').show();
					}
					if ($(this).val()=="2"){  
						$('.teaserImagesTwo').show();
					}
					if ($(this).val()=="3"){  
						$('.teaserImagesThree').show();
					}
					if ($(this).val()=="4"){  
						$('.teaserImagesFour').show();
					}
				}); 
				
				$('#featuredLength').change(function(){
					$('.featuredImages').hide();
					if ($(this).val()=="1"){  
						$('.featuredImagesOne').show();
					}
					if ($(this).val()=="2"){  
						$('.featuredImagesTwo').show();
					}
					if ($(this).val()=="3"){  
						$('.featuredImagesThree').show();
					}
					if ($(this).val()=="4"){  
						$('.featuredImagesFour').show();
					} 
				}); 
				
			});
		</script>
	</head>
<body>

<form action="includes/upload_options.php" method="post" enctype="multipart/form-data">

<h2>Tools</h2>

<div class="options">
	<div>
		<label>Header Color</label>
		<input name="headerColor" id="headerColor" />
	</div>
	<div>
		<label>Footer Color</label>
		<input name="footerColor" id="footerColor" />
	</div>
	<div>
		<label>Nav Color</label>
		<input name="navColor" id="navColor" />
	</div> 
	<div>
		<label>Logo Image</label> 
		<input type="file" name="logoImage" id="logoImage" />
	</div>
	<div> 
		<label>Contact Info</label>
		<div class="indentOne">
				<label>Contact Name</label>
				<div>
					<input type="text" size="50" name="contactName" id="contactName" />
				</div>
			</div>
		</div>
		<div class="indentOne">
			<label>Contact Address</label>
			<div>
				<input type="text" size="50" name="contactAddressOne" id="contactAddressOne" />
			</div>
		</div>
		<div class="indentOne">
			<input type="text" size="50" name="contactAddressTwo" id="contactAddressTwo" />
		</div>
		<div class="indentOne">
			<label>Contact Phone</label>
			<div>
				<input type="text" size="50" name="contactPhone" id="contactPhone" />
			</div>
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
		<input type="text" name="slide1" id="slide1" />
		<input type="text" name="slide2" id="slide2" />
		<input type="text" name="slide3" id="slide3" />
		<input type="text" name="slide4" id="slide4" />
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
				<label>Teaser Image 1</label><input type="text" name="teaserImageOne" />
			</div>
		</div>
		<div class="teaserImagesTwo teaserImages">
			<div class="indentOne">
				<label>Teaser Image 1</label><input type="text" name="teaserImageOne" />
				<label>Teaser Image 2</label><input type="text" name="teaserImageTwo" />
			</div>
		</div>
		<div class="teaserImagesThree teaserImages">
			<div class="indentOne">
				<label>Teaser Image 1</label><input type="text" name="teaserImageOne" />
				<label>Teaser Image 2</label><input type="text" name="teaserImageTwo" />
				<label>Teaser Image 3</label><input type="text" name="teaserImageThree" />
			</div>
		</div>
		<div class="teaserImagesFour teaserImages">
			<div class="indentOne">
				<label>Teaser Image 1</label><input type="text" name="teaserImageOne" />
				<label>Teaser Image 2</label><input type="text" name="teaserImageTwo" />
				<label>Teaser Image 3</label><input type="text" name="teaserImageThree" />
				<label>Teaser Image 4</label><input type="text" name="teaserImageFour" />
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
			<label>Featured Image 1</label><input type="text" name="featuredImageOne" />
			</div>
		</div>
		<div class="featuredImagesTwo featuredImages">
			<div class="indentOne">
				<label>Featured Image 1</label><input type="text" name="featuredImageOne" />
				<label>Featured Image 2</label><input type="text" name="featuredImageTwo" />
			</div>
		</div>  
		<div class="featuredImagesThree featuredImages">
			<div class="indentOne">
				<label>Featured Image 1</label><input type="text" name="featuredImageOne" />
				<label>Featured Image 2</label><input type="text" name="featuredImageTwo" />
				<label>Featured Image 3</label><input type="text" name="featuredImageThree" />
			</div>
		</div>
		<div class="featuredImagesFour featuredImages">
			<div class="indentOne">
				<label>Featured Image 1</label><input type="text" name="featuredImageOne" /> 
				<label>Featured Image 2</label><input type="text" name="featuredImageTwo" />
				<label>Featured Image 3</label><input type="text" name="featuredImageThree" />
				<label>Featured Image 4</label><input type="text" name="featuredImageFour" />
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
		<label>Copyright</label>
		<input type="text" name="copyright" id="copyright" /> 
	</div>
	<div>
</div>

<input type="submit" name="submit" value="Submit">
</form> 

</body>
</html>    