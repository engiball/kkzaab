<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<LINK REL="SHORTCUT ICON"       HREF="http://searchenginewatch.com/etc/semi_sew/images/favicon.png">
<meta name="description" content="Khon Kaen Zaab  ขอนแก่น ร้านอาหาร ที่พัก ท่องเที่ยว ไปขอนแก่น" />
<meta name="keywords" content="ขอนแก่น,ร้านอาหาร,ที่พัก,ไปขอนแก่น,ของฝาก,หาที่พัก,โรงแรม,หลากหลาย,แหล่งกิน, ที่เที่ยว,แซบ,แนะนำ,khonkaen,Khon,kaen,Zaab,food center,จังหวัดขอนแก่น" />
<meta name="author" content="Hege Refsnes" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Khon Kaen Zaab :: รวมร้านอาหาร ที่พัก ท่องเที่ยว แห่งนครขอนแก่น</title>
<script type="text/javascript" src="<? echo base_url("js/jquery-1.3.1.min.js");?> "></script>
<script type="text/javascript">

$(document).ready(function() {		
	
	//Execute the slideShow
	slideShow();

});

function slideShow() {

	//Set the opacity of all images to 0
	$('#gallery a').css({opacity: 0.0});
	
	//Get the first image and display it (set it to full opacity)
	$('#gallery a:first').css({opacity: 1.0});
	
	//Set the caption background to semi-transparent
	$('#gallery .caption').css({opacity: 0.7});

	//Resize the width of the caption according to the image width
	$('#gallery .caption').css({width: $('#gallery a').find('img').css('width')});
	
	//Get the caption of the first image from REL attribute and display it
	$('#gallery .content').html($('#gallery a:first').find('img').attr('rel'))
	.animate({opacity: 0.7}, 1000);
	
	//Call the gallery function to run the slideshow, 6000 = change to next image after 6 seconds
	setInterval('gallery()',5000);
	
}

function gallery() {
	
	//if no IMGs have the show class, grab the first image
	var current = ($('#gallery a.show')?  $('#gallery a.show') : $('#gallery a:first'));

	//Get next image, if it reached the end of the slideshow, rotate it back to the first image
	var next = ((current.next().length) ? ((current.next().hasClass('caption'))? $('#gallery a:first') :current.next()) : $('#gallery a:first'));	
	
	//Get next image caption
	var caption = next.find('img').attr('rel');	
	
	//Set the fade in effect for the next image, show class has higher z-index
	next.css({opacity: 0.0})
	.addClass('show')
	.animate({opacity: 1.0}, 1000);

	//Hide the current image
	current.animate({opacity: 0.0}, 2000)
	.removeClass('show');
	
	//Set the opacity to 0 and height to 1px
	$('#gallery .caption').animate({opacity: 0.0}, { queue:false, duration:0 }).animate({height: '1px'}, { queue:true, duration:300 });	
	
	//Animate the caption, opacity to 0.7 and heigth to 100px, a slide up effect
	$('#gallery .caption').animate({opacity: 0.7},100 ).animate({height: '100px'},500 );
	
	//Display the content
	$('#gallery .content').html(caption);
	
	
}

</script>

<style type="text/css">
<!--
body {
	background: #f3ecec;
	margin: 0;
	padding: 0;
	color: #333;
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 80%;
	line-height: 1.5;
}

/* ~~ Element/tag selectors ~~ */
ul, ol, dl { /* Due to variations between browsers, it's best practices to zero padding and margin on lists. For consistency, you can either specify the amounts you want here, or on the list items (LI, DT, DD) they contain. Remember that what you do here will cascade to the .nav list unless you write a more specific selector. */
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 /* removing the top margin gets around an issue where margins can escape from their containing div. The remaining bottom margin will hold it away from any elements that follow. */
	padding-right: 15px;
	padding-left: 15px; /* adding the padding to the sides of the elements within the divs, instead of the divs themselves, gets rid of any box model math. A nested div with side padding can also be used as an alternate method. */
}
a img { /* this selector removes the default blue border displayed in some browsers around an image when it is surrounded by a link */
	border: none;
}

/* ~~ Styling for your site's links must remain in this order - including the group of selectors that create the hover effect. ~~ */
a:link {
	color:#414958;
	text-decoration: underline; /* unless you style your links to look extremely unique, it's best to provide underlines for quick visual identification */
}
a:visited {
	color: #4E5869;
	text-decoration: underline;
}
a:hover, a:active, a:focus { /* this group of selectors will give a keyboard navigator the same hover experience as the person using a mouse. */
	text-decoration: none;
}

/* ~~ this container surrounds all other divs giving them their percentage-based width ~~ */
.container {
	width: 80%;
	max-width: 1260px;/* a max-width may be desirable to keep this layout from getting too wide on a large monitor. This keeps line length more readable. IE6 does not respect this declaration. */
	min-width: 780px;/* a min-width may be desirable to keep this layout from getting too narrow. This keeps line length more readable in the side columns. IE6 does not respect this declaration. */
	background: #fdfbfb;
	margin: 0 auto; /* the auto value on the sides, coupled with the width, centers the layout. It is not needed if you set the .container's width to 100%. */
	-moz-box-shadow:    3px 3px 5px 6px #ccc;
	-webkit-box-shadow: 3px 3px 5px 6px #ccc;
	box-shadow:         3px 3px 5px 6px #ccc;
}

/* ~~ the header is not given a width. It will extend the full width of your layout. It contains an image placeholder that should be replaced with your own linked logo ~~ */
.header {
	background: #ffffff;
}

/* ~~ These are the columns for the layout. ~~ 

1) Padding is only placed on the top and/or bottom of the divs. The elements within these divs have padding on their sides. This saves you from any "box model math". Keep in mind, if you add any side padding or border to the div itself, it will be added to the width you define to create the *total* width. You may also choose to remove the padding on the element in the div and place a second div within it with no width and the padding necessary for your design.

2) No margin has been given to the columns since they are all floated. If you must add margin, avoid placing it on the side you're floating toward (for example: a right margin on a div set to float right). Many times, padding can be used instead. For divs where this rule must be broken, you should add a "display:inline" declaration to the div's rule to tame a bug where some versions of Internet Explorer double the margin.

3) Since classes can be used multiple times in a document (and an element can also have multiple classes applied), the columns have been assigned class names instead of IDs. For example, two sidebar divs could be stacked if necessary. These can very easily be changed to IDs if that's your preference, as long as you'll only be using them once per document.

4) If you prefer your nav on the left instead of the right, simply float these columns the opposite direction (all left instead of all right) and they'll render in reverse order. There's no need to move the divs around in the HTML source.

*/
.blockshadow {
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	-webkit-box-shadow: 0px 8px 10px -6px #333;
	-moz-box-shadow: 0px 8px 9px -6px #999;
	box-shadow: 0px 8px 9px -6px #999;
	background: #e1dddd;
	font-size:  100%;
	alignment-adjust: central;
}

.sidebar1 {
	float: right;
	width: 30%;
	background: #FFFFFF;
	padding-bottom: 10px;
}
.content {
	padding: 10px 0;
	width: 70%;
		float: right;
}


.update {
	padding: 0;
	width: 70%;
	float: right;
	background: 3;
	background-color: #F4FAFD;
	height: 230px;
	margin-left: 0px;
}
.map {
	width: 100%;
	float: right;
	background: 3;
	background-color: #CCCCCC;
	height: 150px;
}

.slide {
	padding: 10px 0;
	width: 70%;
	float: right;
	background: 3;
	background-color: #3F92D2;
	height: 80px;
}
.foodcontent {
	font-size: 75%;
	background-color: #E6E6E6;
	width: 100%;
	padding: 10;
}
/* ~~ This grouped selector gives the lists in the .content area space ~~ */
.content ul, .content ol { 
	padding: 0 15px 15px 40px; /* this padding mirrors the right padding in the headings and paragraph rule above. Padding was placed on the bottom for space between other elements on the lists and on the left to create the indention. These may be adjusted as you wish. */
}

/* ~~ The navigation list styles (can be removed if you choose to use a premade flyout menu like Spry) ~~ */
ul.nav {
	list-style: none; /* this removes the list marker */
	border-top: 1px solid #666; /* this creates the top border for the links - all others are placed using a bottom border on the LI */
	margin-bottom: 15px; /* this creates the space between the navigation on the content below */
}
ul.nav li {
	border-bottom: 1px solid #666; /* this creates the button separation */
}
ul.nav a, ul.nav a:visited { /* grouping these selectors makes sure that your links retain their button look even after being visited */
	padding: 5px 5px 5px 15px;
	display: block; /* this gives the link block properties causing it to fill the whole LI containing it. This causes the entire area to react to a mouse click. */
	text-decoration: none;
	background: #25567B;
	color: #fff;
}
ul.nav a:hover, ul.nav a:active, ul.nav a:focus { /* this changes the background and text color for both mouse and keyboard navigators */
	background: #0B61A4;
	color: #000;
}

/* ~~ The footer ~~ */
.footer {
	padding: 10px 0;
	background: #033E6B;
	position: relative;/* this gives IE6 hasLayout to properly clear */
	clear: both; /* this clear property forces the .container to understand where the columns end and contain them */
	color: #FFF;
}

/* ~~ miscellaneous float/clear classes ~~ */
.fltrt {  /* this class can be used to float an element right in your page. The floated element must precede the element it should be next to on the page. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* this class can be used to float an element left in your page. The floated element must precede the element it should be next to on the page. */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* this class can be placed on a <br /> or empty div as the final element following the last floated div (within the #container) if the #footer is removed or taken out of the #container */
	clear:both;
	height:0;
	font-size: 75%;
	line-height: 0px;
}
.f1 {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 90%;
	font-weight: bold;
	color: #234B7C;
}
.f2 {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 100%;
	color: #666;
	font-style: normal;
}
.f3 {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 100%;
	font-style: normal;
	font-weight: bold;
	color: #069;
}


.clear {
	clear:both
}

#gallery {
	position:relative;
	height:200px
}
	#gallery a {
	float:left;
	position:absolute;
	left: 7px;
	top: 1px;
	}
	
	#gallery a img {
		border:none;
	}
	
	#gallery a.show {
		z-index:500
	}

	#gallery .caption {
	z-index:600;
	background-color:#333;
	color:#ffffff;
	height:45px;
	width:99%;
	position:absolute;
	bottom:-31px;
	left: 6px;
	}

	#gallery .caption .content {
		margin:5px
	}
	
	#gallery .caption .content h3 {
		margin:0;
		padding:0;
		color:#1DCCEF;
	}
-->
</style><!--[if lte IE 7]>
<style>
.content { margin-right: -1px; } /* this 1px negative margin can be placed on any of the columns in this layout with the same corrective effect. */
ul.nav a { zoom: 1; }  /* the zoom property gives IE the hasLayout trigger it needs to correct extra whiltespace between the links */
</style>
<![endif]--></head>

<body>

<div class="container">
  <div class="header">
    <table width="100%" border="0" cellspacing="1" cellpadding="0">
      <tr>
        <td width="36%"><a href="<? echo base_url();?>"><img src="<? echo base_url("images/logo.png");?> " alt="Insert Logo Here" name="Insert_logo" width="300" height="150" id="Insert_logo" style="background:  #FFFFFF; display:block;" /></a></td>
        <td width="64%" valign="top"><table width="100%" border="0" cellspacing="1" cellpadding="0">
          <tr>
            <td width="28%" align="right" class="f1"> <?
		 if(@$user==""){
	  //  echo "<div class='fb-login-button'>Login with Facebook</div>";
	  	echo "<a href='" .@$loginurl ."' >";
		echo "<img src='".base_url('images/facebook.png')."' />"."</a>";
		}
		else
		{
		echo " Welcome "  ;
		echo $user ."  ";
		if(@$logouturl){
		//echo "<a href='" .@$logouturl ."' >logout</a>";
		}
		}
		?>
		<?if(!@$user||@$user==""){?>
		<? //echo form_open_multipart('main/login');?>
		<form style='display:inline;'>
		email<input type=text name=email id=email />
		password<input type=password name=password id=password/>
		<input type=hidden name=c_url value='<? echo uri_string();?>'/>
		<input type=submit value="Login"/>
		<? }else{echo "<a href='" .base_url('index.php/main/logout') ."'>logout</a>"; }?>
		</form>
		
		</td>
            <td width="27%" align="right"><label for="textfield" class="f1">จำนวนที่พัก</label></td>
            <td width="45%" align="right"><input name="textfield" type="text" id="textfield" size="30" maxlength="50" />
              <span class="f1">ค้นหา</span></td>
          </tr>
        </table>
          <table width="100%" border="0" cellpadding="0" cellspacing="1" class="blockshadow">
            <tr>
              <td align="center" valign="middle">สนใจลงโฆษณา KKZ <a href="#">คลิ๊กตรงนี้</a></td>
            </tr>
        </table>
          <table width="100%" border="0" cellspacing="1" cellpadding="0">
            <tr>
              <td align="center" valign="middle" bgcolor="#FFFFFF"  ><p><br />
              </p>
                <p class="f3">โฆษณาตรงนี้</p>
              <p>&nbsp;</p></td>
            </tr>
        </table></td>
      </tr>
    </table>
  <!-- end .header --></div>
  <div class="sidebar1">
    <ul class="nav">
      <li><a href="<? echo site_url("/"); ?>">หน้าแรกแซบๆ</a></li>
      <li><a href="<? echo site_url("firsttime"); ?>"> มาขอนแก่นครั้งแรก มาที่นี่</a></li>
      <li><a href="<? echo site_url("search_rest"); ?>">ค้นหาร้านอร่อย</a></li>
      <li><a href="<? echo site_url("search_room"); ?>">ค้นหาที่พัก</a></li>
      <li><a href="<? echo site_url("search_travel"); ?>">ที่เที่ยวนขอนแก่น</a>    </li>
      <li><a href="<? echo site_url("write_review"); ?>">เขียน Review</a></li>
      <li><a href="<? echo site_url("transport"); ?>">การเดินทาง</a></li>
      <li><a href="<? echo site_url("souvenir"); ?>">มุมของฝาก</a></li>
      <li><a href="<? echo site_url("gallery"); ?>">ภาพประทับใจ</a>    </li>      
      <li><a href="<? echo site_url("khonkaenzaab/profile"); ?>">สมาชิก Khonkaen Zaab</a>    </li>
    </ul>
    <center>
      <?
	$promotion= "application/views/header/promotion.php";
	//echo $slide;
	include($promotion);
	?>
  </center>
    <p></p>
    <center>
        <?
 
	$review_rest= "application/views/header/review.php";
	//echo $slide;
	include($review_rest);
	?>  
    <p> </p>
    </center>
    <center>
  <?
	$review_room= "application/views/header/review-room.php";
	//echo $slide;
	include($review_room);
	?>  
        
      <p></p>
      <center>

 	<?
	$review_travel= "application/views/header/review-travel.php";
	//echo $slide;
	include($review_travel);
	?> 
        
      </center>
      <p></p>
    <p>&nbsp;</p>
    <!-- end .sidebar1 -->
  </div> 

