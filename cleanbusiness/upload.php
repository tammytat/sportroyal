<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: CleanBusiness
Author: <a href="http://www.os-templates.com/">Lafftabank</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Sport Royal | Upload Media</title>
<meta http-equiv="Content-Type" name="viewport" content="width=device-width, initial-scale=1.0"  charset="utf-8"/>
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
    <!-- use jssor.slider.debug.js instead for debug -->
    <script>
        jQuery(document).ready(function ($) {
            
            var jssor_1_options = {
              $AutoPlay: true,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 4,
                $SpacingX: 4,
                $SpacingY: 4,
                $Orientation: 2,
                $Align: 0
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 900);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

    <style>
        
        /* jssor slider arrow navigator skin 02 css */
        /*
        .jssora02l                  (normal)
        .jssora02r                  (normal)
        .jssora02l:hover            (normal mouseover)
        .jssora02r:hover            (normal mouseover)
        .jssora02l.jssora02ldn      (mousedown)
        .jssora02r.jssora02rdn      (mousedown)
        */
        .jssora02l, .jssora02r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 55px;
            height: 55px;
            cursor: pointer;
            background: url('img/a02.png') no-repeat;
            overflow: hidden;
        }
        .jssora02l { background-position: -3px -33px; }
        .jssora02r { background-position: -63px -33px; }
        .jssora02l:hover { background-position: -123px -33px; }
        .jssora02r:hover { background-position: -183px -33px; }
        .jssora02l.jssora02ldn { background-position: -3px -33px; }
        .jssora02r.jssora02rdn { background-position: -63px -33px; }
/* jssor slider thumbnail navigator skin 11 css *//*.jssort11 .p            (normal).jssort11 .p:hover      (normal mouseover).jssort11 .pav          (active).jssort11 .pav:hover    (active mouseover).jssort11 .pdn          (mousedown)*/.jssort11 .p {    position: absolute;    top: 0;    left: 0;    width: 200px;    height: 69px;    background: #181818;}.jssort11 .tp {    position: absolute;    top: 0;    left: 0;    width: 100%;    height: 100%;    border: none;}.jssort11 .i, .jssort11 .pav:hover .i {    position: absolute;    top: 3px;    left: 3px;    width: 60px;    height: 30px;    border: white 1px dashed;}* html .jssort11 .i {    width /**/: 62px;    height /**/: 32px;}.jssort11 .pav .i {    border: white 1px solid;}.jssort11 .t, .jssort11 .pav:hover .t {    position: absolute;    top: 3px;    left: 68px;    width: 129px;    height: 32px;    line-height: 32px;    text-align: center;    color: #fc9835;    font-size: 13px;    font-weight: 700;}.jssort11 .pav .t, .jssort11 .p:hover .t {    color: #fff;}.jssort11 .c, .jssort11 .pav:hover .c {    position: absolute;    top: 38px;    left: 3px;    width: 197px;    height: 31px;    line-height: 31px;    color: #fff;    font-size: 11px;    font-weight: 400;    overflow: hidden;}.jssort11 .pav .c, .jssort11 .p:hover .c {    color: #fc9835;}.jssort11 .t, .jssort11 .c {    transition: color 2s;    -moz-transition: color 2s;    -webkit-transition: color 2s;    -o-transition: color 2s;}.jssort11 .p:hover .t, .jssort11 .pav:hover .t, .jssort11 .p:hover .c, .jssort11 .pav:hover .c {    transition: none;    -moz-transition: none;    -webkit-transition: none;    -o-transition: none;}.jssort11 .p:hover, .jssort11 .pav:hover {    background: #333;}.jssort11 .pav, .jssort11 .p.pdn {    background: #462300;}
        
    </style>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
</head>
<body id="top" style="padding:0px; margin:0px; background-color:#fff;">
<div class="wrapper"> 
  <!-- ####################################################################################################### -->
  <div id="header">
    <div class="fl_left">
      <h1><a href="index.php">SportRoyal</a></h1>
      <p>scout and players site</p>
    </div>
    <div class="fl_right"><a href="#"><img src="images/demo/468x60.gif" alt="" /></a></div>
    <br class="clear" />
  </div>
  <!-- ####################################################################################################### -->
  <div id="topbar">
    <div class="fl_left">
      <p><span class="glyphicon glyphicon-user img-rounded"></span> &nbsp;Hi, Lahyourjones</p>
      <form action="#" method="post">
        <fieldset>
          <legend>Site Search</legend>
          <input type="text" value="Search the site&hellip;"  onfocus="this.value=(this.value=='Search the site&hellip;')? '' : this.value ;" />
          <input type="submit" name="go" id="go" value="GO" />
        </fieldset>
      </form>
    </div>
    <div id="topnav">
      <ul>
        <li ><a href="home.php">Home</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="#">About Us</a></li>
        <li class="active"><a href="#" >Upload</a>
        <ul>
            <li><a href="upload.php">Photo</a></li>
            <li><a href="upload.php">Video</a></li>
          </ul>    
               
        </li>
        <li><a href="#">Contact Us</a></li>
       
         <li><a href="#">Account</a>
          <ul>
            <li><a href="index.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <br class="clear" />
  </div>
  <!-- ####################################################################################################### -->
  <div id="intro" style="background-color:#FFF; height:120px; color:#000; padding-top:20px; margin-bottom:10px;">
    <form>
    Title: &nbsp;&nbsp;&nbsp;&nbsp;<input name="" type="text" size="60px" /><br/>
   <span style="display:block; width:50px; float:left; margin-top:20px; margin-bottom:20px;"> File:</span> <span style="display:block; width:450px; float:left;margin-top:20px; margin-bottom:20px;"> <input name="" type="file" value="attach a file for upload" size="100px" /></span><br/><div style="clear:both;"><input name="" type="submit" value="Post Upload"  /></div>
    </form>
  </div>
  <!-- ####################################################################################################### -->
  <div id="homecontent">
    <ul>
      <li>
        <h2><span class="glyphicon glyphicon-user img-rounded"></span>&nbsp;&nbsp;Oyenkachi Apam <p style="clear:both">
       <span class="comments"><span class="glyphicon glyphicon-calendar"></span> September 23, 2016 &nbsp;&nbsp; <span class="glyphicon glyphicon-time"></span>&nbsp;21:00</span></p></h2>
       <img class="imgl" src="images/demo/60x60.gif" alt="" />
       <p style="clear:both">
       <span class="comments"> <span class="glyphicon glyphicon-comment"></span> 3 Comments &nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-thumbs-up"></span> 12 <a href="#">Like</a></span>
       </p>
        <p>this is my video displaying my skills</p>
        
        <p class="readmore"><a href="#">View more &raquo;</a></p>
      </li>
      <li>
        <h2><span class="glyphicon glyphicon-user img-rounded"></span>&nbsp;&nbsp;Oyenkachi Apam <p style="clear:both">
       <span class="comments"><span class="glyphicon glyphicon-calendar"></span> September 23, 2016 &nbsp;&nbsp; <span class="glyphicon glyphicon-time"></span>&nbsp;21:00</span></p></h2>
       <img class="imgl" src="images/demo/60x60.gif" alt="" />
       <p style="clear:both">
       <span class="comments"> <span class="glyphicon glyphicon-comment"></span> 3 Comments &nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-thumbs-up"></span> 12 <a href="#">Like</a></span>
       </p>
        <p>this is my video displaying my skills</p>
        
        <p class="readmore"><a href="#">View more &raquo;</a></p>
      </li>
      <li>
        <h2><span class="glyphicon glyphicon-user img-rounded"></span>&nbsp;&nbsp;Oyenkachi Apam <p style="clear:both">
       <span class="comments"><span class="glyphicon glyphicon-calendar"></span> September 23, 2016 &nbsp;&nbsp; <span class="glyphicon glyphicon-time"></span>&nbsp;21:00</span></p></h2>
       <img class="imgl" src="images/demo/60x60.gif" alt="" />
       <p style="clear:both">
       <span class="comments"> <span class="glyphicon glyphicon-comment"></span> 3 Comments &nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-thumbs-up"></span> 12 <a href="#">Like</a></span>
       </p>
        <p>this is my video displaying my skills</p>
        
        <p class="readmore"><a href="#">View more &raquo;</a></p>
      </li>
     
      <li class="last">
       <h2><span class="glyphicon glyphicon-user img-rounded"></span>&nbsp;&nbsp;Oyenkachi Apam <p style="clear:both">
       <span class="comments"><span class="glyphicon glyphicon-calendar"></span> September 23, 2016 &nbsp;&nbsp; <span class="glyphicon glyphicon-time"></span>&nbsp;21:00</span></p></h2>
       <img class="imgl" src="images/demo/60x60.gif" alt="" />
       <p style="clear:both">
       <span class="comments"> <span class="glyphicon glyphicon-comment"></span> 3 Comments &nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-thumbs-up"></span> 12 <a href="#">Like</a></span>
       </p>
        <p>this is my video displaying my skills</p>
       
        <p class="readmore"><a href="#">View more &raquo;</a></p>
      </li>
    </ul>
    <br class="clear" />
  </div>
  <div id="homecontent">
    <ul>
      <li>
        <h2><span class="glyphicon glyphicon-user img-rounded"></span>&nbsp;&nbsp;Oyenkachi Apam <p style="clear:both">
       <span class="comments"><span class="glyphicon glyphicon-calendar"></span> September 23, 2016 &nbsp;&nbsp; <span class="glyphicon glyphicon-time"></span>&nbsp;21:00</span></p></h2>
       <img class="imgl" src="images/demo/60x60.gif" alt="" />
       <p style="clear:both">
       <span class="comments"> <span class="glyphicon glyphicon-comment"></span> 3 Comments &nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-thumbs-up"></span> 12 <a href="#">Like</a></span>
       </p>
        <p>this is my video displaying my skills</p>
        
        <p class="readmore"><a href="#">View more &raquo;</a></p>
      </li>
      <li>
        <h2><span class="glyphicon glyphicon-user img-rounded"></span>&nbsp;&nbsp;Oyenkachi Apam <p style="clear:both">
       <span class="comments"><span class="glyphicon glyphicon-calendar"></span> September 23, 2016 &nbsp;&nbsp; <span class="glyphicon glyphicon-time"></span>&nbsp;21:00</span></p></h2>
       <img class="imgl" src="images/demo/60x60.gif" alt="" />
       <p style="clear:both">
       <span class="comments"> <span class="glyphicon glyphicon-comment"></span> 3 Comments &nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-thumbs-up"></span> 12 <a href="#">Like</a></span>
       </p>
        <p>this is my video displaying my skills</p>
        
        <p class="readmore"><a href="#">View more &raquo;</a></p>
      </li>
      <li>
        <h2><span class="glyphicon glyphicon-user img-rounded"></span>&nbsp;&nbsp;Oyenkachi Apam <p style="clear:both">
       <span class="comments"><span class="glyphicon glyphicon-calendar"></span> September 23, 2016 &nbsp;&nbsp; <span class="glyphicon glyphicon-time"></span>&nbsp;21:00</span></p></h2>
       <img class="imgl" src="images/demo/60x60.gif" alt="" />
       <p style="clear:both">
       <span class="comments"> <span class="glyphicon glyphicon-comment"></span> 3 Comments &nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-thumbs-up"></span> 12 <a href="#">Like</a></span>
       </p>
        <p>this is my video displaying my skills</p>
        
        <p class="readmore"><a href="#">View more &raquo;</a></p>
      </li>
      <li class="last">
       <h2><span class="glyphicon glyphicon-user img-rounded"></span>&nbsp;&nbsp;Oyenkachi Apam <p style="clear:both">
       <span class="comments"><span class="glyphicon glyphicon-calendar"></span> September 23, 2016 &nbsp;&nbsp; <span class="glyphicon glyphicon-time"></span>&nbsp;21:00</span></p></h2>
       <img class="imgl" src="images/demo/60x60.gif" alt="" />
       <p style="clear:both">
       <span class="comments"> <span class="glyphicon glyphicon-comment"></span> 3 Comments &nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-thumbs-up"></span> 12 <a href="#">Like</a></span>
       </p>
        <p>this is my video displaying my skills</p>
        
        <p class="readmore"><a href="#">View more &raquo;</a></p>
      </li>
    </ul>
    <br class="clear" />
    <div class="pagenation">
      <div class="pagenumber"> <a href="#" class="pageactive">1</a> >> <a href="#">2</a> >> <a href="#">3</a> >></div>
    <a href="#">Prev</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Next</a></div>
    
  </div>
  <!-- ####################################################################################################### -->
  <div id="imageline">
    <ul>
      <li><a href="#"><img src="images/demo/174x100.gif" alt="" /></a></li>
      <li><a href="#"><img src="images/demo/174x100.gif" alt="" /></a></li>
      <li><a href="#"><img src="images/demo/174x100.gif" alt="" /></a></li>
      <li><a href="#"><img src="images/demo/174x100.gif" alt="" /></a></li>
      <li class="last"><a href="#"><img src="images/demo/174x100.gif" alt="" /></a></li>
    </ul>
    <br class="clear" />
  </div>
  <!-- ####################################################################################################### -->
  <div id="footer">
    <div class="footbox">
      <h2>Recent Posts</h2>
      <ul>
        <li><a href="#">my first Hat-trick</a></li>
        <li><a href="#">Slam dunking!</a></li>
        <li><a href="#">300 ball jogging</a></li>
        <li><a href="#">long range football shooying</a></li>
        <li><a href="#">Best player</a></li>
        <li class="last"><a href="#">I am the best</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>&nbsp;</h2>
      <ul>
        <li><a href="#">my first Hat-trick</a></li>
        <li><a href="#">Slam dunking!</a></li>
        <li><a href="#">300 ball jogging</a></li>
        <li><a href="#">long range football shooying</a></li>
        <li><a href="#">Best player</a></li>
        <li class="last"><a href="#">I am the best</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>&nbsp;</h2>
     <ul>
        <li><a href="#">my first Hat-trick</a></li>
        <li><a href="#">Slam dunking!</a></li>
        <li><a href="#">300 ball jogging</a></li>
        <li><a href="#">long range football shooying</a></li>
        <li><a href="#">Best player</a></li>
        <li class="last"><a href="#">I am the best</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>&nbsp;</h2>
      <ul>
        <li><a href="#">&nbsp;</a></li>
        <li><a href="#">&nbsp;</a></li>
        <li><a href="#">&nbsp;</a></li>
        <li><a href="#">&nbsp;</a></li>
        <li><a href="#">&nbsp;</a></li>
        <li class="last"><a href="#">&nbsp;</a></li>
      </ul>
    </div>
    <div class="footbox last">
      <h2>Contact Us</h2>
      <ul>
        <li>Tel: 09087654321</li>
        <li>info@sportroyal.com</li>
        <li>facebook.com/sportroyal</li>
        <li>Twitter: @sportroyal</li>
        <li>I.G: sportroyal</li>
        <!--<li class="last"><a href="#">Praesent et eros</a></li>-->
      </ul>
    </div>
    <br class="clear" />
  </div>
  <!-- ####################################################################################################### -->
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved</p>
    <p class="fl_right">Design by  <a  target="_blank" href="http//:www.facebook.com/andriechiecole">Lafftabank Incorporation</a></p>
    <br class="clear" />
  </div>
  <!-- ####################################################################################################### --> 
  <br class="clear" />
</div>
</body>
</html>