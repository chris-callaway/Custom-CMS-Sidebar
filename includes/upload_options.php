<?php

include 'db_connect.php'; 
	  
	  foreach ($_POST as $key => $value)
 		if ($value=="Yes"){
 			$_POST[$key] = 1;
 		}
		if ($value=="No"){
 			$_POST[$key] = 0;
 		}
		if ($value=="Select"){
 			$_POST[$key] = "";
 		} 
	  
	  $user = $_POST['user'];
	  
	  if ($_POST['headerColor']!="Select"){
	  	$headerColor = $_POST['headerColor'];
	  }
	   if ($_POST['footerColor']!="Select"){
	  	$footerColor = $_POST['footerColor'];
	  }
	   if ($_POST['navColor']!="Select"){
	  	$navColor = $_POST['navColor'];
	  }
	  
	  if ($_POST['logoPlacement']!="Select"){
	  	$logoPlacement = $_POST['logoPlacement'];
	  } 
	  $contactName = $_POST['contactName'];
	  $contactAddressOne = $_POST['contactAddressOne'];
	  $contactAddressTwo = $_POST['contactAddressTwo'];
	  $contactPhone = $_POST['contactPhone'];
	  $sliderWidth = $_POST['sliderWidth']; 
	  if ($_POST['sliderWidthStyle']!="Select"){
	  	$sliderWidthStyle = $_POST['sliderWidthStyle'];
	  }
	  $slide1 = $_POST['slide1'];
	  $slide2 = $_POST['slide2']; 
	  $slide3 = $_POST['slide3'];
	  $slide4 = $_POST['slide4'];
	  
	  if ($_POST['teaserLength']!="Select"){
	  	$teaserLength = $_POST['teaserLength'];
	  }
	  $teaser1 = $_POST['teaserImageOne'];
	  $teaser2 = $_POST['teaserImageTwo'];
	  $teaser3 = $_POST['teaserImageThree'];
	  $teaser4 = $_POST['teaserImageFour'];
	  
	   if ($_POST['featuredLength']!="Select"){
	  	$featuredLength = $_POST['featuredLength']; 
	  }
	  $featured1 = $_POST['featuredImageOne'];
	  $featured2 = $_POST['featuredImageTwo'];
	  $featured3 = $_POST['featuredImageThree'];
	  $featured4 = $_POST['featuredImageFour']; 
	   
	  $videoSource = $_POST['videoSource']; 
	  $videoWidth = $_POST['videoWidth']; 
	  if ($_POST['videoWidthStyle']!="Select"){
	  	$videoWidthStyle = $_POST['videoWidthStyle'];
	  }    
	  $copyright = $_POST['copyright'];
	  $aboutText = $_POST['aboutText'];
	  $diamondLink = $_POST['diamondLink'];
	  $bridalLink = $_POST['bridalLink'];
	  $designersLink = $_POST['designersLink'];
	  $timepiecesLink = $_POST['timepiecesLink'];
	  $aboutUsLink = $_POST['aboutUsLink'];
	  
	  if ($_FILES["logoImage"]["error"] > 0) {
	  	echo "Error: " . $_FILES["logoImage"]["error"] . "<br>";
	  } 
	  
	  $allowedExts = array("gif", "jpeg", "jpg", "png");
	  $temp = explode(".", $_FILES["logoImage"]["name"]);
	  $extension = end($temp);

	  if ((($_FILES["logoImage"]["type"] == "image/gif")
	  || ($_FILES["logoImage"]["type"] == "image/jpeg")
	  || ($_FILES["logoImage"]["type"] == "image/jpg")
	  || ($_FILES["logoImage"]["type"] == "image/pjpeg")
	  || ($_FILES["logoImage"]["type"] == "image/x-png")
	  || ($_FILES["logoImage"]["type"] == "image/png"))
	  && ($_FILES["logoImage"]["size"] < 200000)
	  && in_array($extension, $allowedExts)) {
  	  	  if ($_FILES["logoImage"]["error"] > 0) {
    	  	  echo "Error: " . $_FILES["logoImage"]["error"] . "<br>";
  	  	  } 
  	  	  else {
    	  	  echo "Upload: " . $_FILES["logoImage"]["name"] . "<br>";
    	  	  echo "Type: " . $_FILES["logoImage"]["type"] . "<br>";
    	  	  echo "Size: " . ($_FILES["logoImage"]["size"] / 1024) . " kB<br>";
    	  	  if (file_exists($_FILES["logoImage"]["name"])) {
      			echo $_FILES["logoImage"]["name"] . " already exists. ";
    		  }  
    		  else { 
      			move_uploaded_file($_FILES["logoImage"]["tmp_name"],
      		    "uploads/" . $_FILES["logoImage"]["name"]);
      			echo "Stored in: " . "uploads/" . $_FILES["logoImage"]["name"];
      			$logoImage = "includes/uploads/" . $_FILES["logoImage"]["name"];
    		  }    
  	  	  } 
	  }   
	  else {
  	  	  echo "Invalid file";
	  }
 
	  $sql="UPDATE $tbl_name SET header_color=IF(LENGTH('$headerColor')=0, header_color, '$headerColor'), footer_color=IF(LENGTH('$footerColor')=0, footer_color, '$footerColor'), nav_color=IF(LENGTH('$navColor')=0, nav_color, '$navColor'), logo_image=IF(LENGTH('$logoImage')=0, logo_image, '$logoImage'), logo_placement=IF(LENGTH('$logoPlacement')=0, logo_placement, '$logoPlacement'), contact_name=IF(LENGTH('$contactName')=0, contact_name, '$contactName'), contact_addressOne=IF(LENGTH('$contactAddressOne')=0, contact_addressOne, '$contactAddressOne'), contact_addressTwo=IF(LENGTH('$contactAddressTwo')=0, contact_addressTwo, '$contactAddressTwo'), contact_phone=IF(LENGTH('$contactPhone')=0, contact_phone, '$contactPhone'), sliderWidth=IF(LENGTH('$sliderWidth')=0, sliderWidth, '$sliderWidth'), slide1=IF(LENGTH('$slide1')=0, slide1, '$slide1'), slide2=IF(LENGTH('$slide2')=0, slide2, '$slide2'), slide3=IF(LENGTH('$slide3')=0, slide3, '$slide3'), slide4=IF(LENGTH('$slide4')=0, slide4, '$slide4'), sliderWidthStyle=IF(LENGTH('$sliderWidthStyle')=0, sliderWidthStyle, '$sliderWidthStyle'), teaserLength=IF(LENGTH('$teaserLength')=0, teaserLength, '$teaserLength'), teaser1=IF(LENGTH('$teaser1')=0, teaser1, '$teaser1'), teaser2=IF(LENGTH('$teaser2')=0, teaser2, '$teaser2'), teaser3=IF(LENGTH('$teaser3')=0, teaser3, '$teaser3'), teaser4=IF(LENGTH('$teaser4')=0, teaser4, '$teaser4'), featuredLength=IF(LENGTH('$featuredLength')=0, featuredLength, '$featuredLength'), featured1=IF(LENGTH('$featured1')=0, featured1, '$featured1'), featured2=IF(LENGTH('$featured2')=0, featured2, '$featured2'), featured3=IF(LENGTH('$featured3')=0, featured3, '$featured3'), featured4=IF(LENGTH('$featured4')=0, featured4, '$featured4'), video_source=IF(LENGTH('$videoSource')=0, video_source, '$videoSource'), videoWidth=IF(LENGTH('$videoWidth')=0, videoWidth, '$videoWidth'), videoWidthStyle=IF(LENGTH('$videoWidthStyle')=0, videoWidthStyle, '$videoWidthStyle'), copyright=IF(LENGTH('$copyright')=0, copyright, '$copyright'), aboutText=IF(LENGTH('$aboutText')=0, aboutText, '$aboutText'), diamondLink=IF(LENGTH('$diamondLink')=0, diamondLink, '$diamondLink'), bridalLink=IF(LENGTH('$bridalLink')=0, bridalLink, '$bridalLink'), designersLink=IF(LENGTH('$designersLink')=0, designersLink, '$designersLink'), timepiecesLink=IF(LENGTH('$timepiecesLink')=0, timepiecesLink, '$timepiecesLink'), aboutUsLink=IF(LENGTH('$aboutUsLink')=0, aboutUsLink, '$aboutUsLink') WHERE id=1";   
	  $result = mysql_query($sql);        
	   
	  header('Location: http://labs.gemfind.com/custom_cms/index.php');
?> 