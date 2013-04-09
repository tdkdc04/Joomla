<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/css/template.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/css/navigation.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/css/components.css" type="text/css" />
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/images/favicon.ico">

</head>

<body>

<!-- MODULE POSITION INCLUDE
<jdoc:include type="modules" name="navigation" style="xhtml" />
-->

<!-- MAIN COMPONENT INCLUDES 
<jdoc:include type="message" />
<jdoc:include type="component" />
-->

  <div class="container-narrow">
    
      <div class="masthead">
        <!--<ul class="nav nav-pills pull-right">
          <li><a href="careers.php">Careers</a></li>
          <li><a href="careers.php">Press</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>-->
        
        <h3 id="marginless_navbar" class="muted">
          <a href="index.php"><img id="vrand" src="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/images/vibin_home_text.png"></a>
          <a id="navilinks" href="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/careers.php">Careers</a>
          <a id="navilinks" href="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/about.php">About</a>
          <a id="navilinks" href="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/contact.php">Contact</a>
          <a id="navilinks" href="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/press.php">Press</a>
        </h3>       
      </div>

      <hr>

      <div class="jumbotron">      
        <video id="videos" width="640" height="480" controls >
      		<source src="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/images/vibin_teaser_broadband.m4v">          
      		<source src="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/images/vibin_teaser.ogv" type="video/ogg">
        	<source src="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/images/vibin_teaser.ogv" type="video/webm"> 
        	Your browser doesn't support this video type.
    	</video>
        
        <h1><img src="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/images/mark_sign_56.png">  See what's Vibin in your life </h1>
        
        
        </br>
        
        <p class="lead">Vibin is a unique way to see what your friends are sharing, capture it, then find it again.  Don't miss what your friends are sharing just because you weren't online.</p>
       
      </div>
      
     
        <img id="appstore" src="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/images/appstore.png">
        <img id="googleplay" src="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/images/googleplay.png">
        <!--<img class="center" src="images/app_icon.png">-->
     
     
      <div class="jumbotron">
        <h1 id="orange_coming_soon">Coming Soon...</h1>
        
        </br>
        <p class="lead">Sign up to join our email list.  Be one of the first to try Vibin and keep up to date: beta-release, updates, and important notifications.</p>
        </br>
        
        <!--AJAX Signup
        <form id="email-signup" action="?action=signup" method="post">  
        	<fieldset>
	            <input type="text" name="signup-email" id="signup-email" />  
	            <input type="submit" class="btn btn-primary" value="Sign Me Up" />  
	            <p id="signup-response"></p>  
        	</fieldset>  
    	</form>
    	<!--/end of AJAX Signup--> 
       
        <!--SIGNUP MODAL-->
        <a class="btn btn-primary" data-toggle="modal" href="#myModalSignUp">Sign up today &raquo;</a>
      
          <!-- myModalSignUp Privacy Policy && Email SignUp-->  
          <div id="myModalSignUp" class="modal hide fade">
      		<div class="modal-header">
        		<button class="close" data-dismiss="modal">&times;</button>
        		<h3>Vibin.it - Email SignUp Privacy Policy</h3>
      		</div>
      		
      		<div class="modal-body">
        		<h4>REGARDING YOUR EMAIL ADDRESS</h4>
        		<p>In order for Vibin to notify you of our product release, we need your e-mail address. Vibin does not collect any other personal information that you do not expressly provide. Vibin will not sell or share your e-mail address with any third parties for any reason.  Though we make every effort to preserve user privacy, Vibin may need to disclose personal information when required by law and when we have a good faith belief that such action is necessary to comply with a current judicial proceeding, a court order or legal process that Vibin receives.</p>
        		<h4>CONTACT US</h4>
        		<p>Questions or concerns regarding the submission of your personal information can be sent to our <a href="mailto:support@vibin.it">support team </a>(Support@Vibin.it).</p>  
      		<div class="modal-footer">
          		<form id="contact" method="post" action="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/signup.php">
          		<p><label for="email">&laquo; PLEASE ENTER YOUR EMAIL ADDRESS BELOW &raquo;</label>
		            <input type="email" name="email">
		            <input class="btn btn-primary btn-large" type="submit" name="Submit" value="Submit &raquo">
	          	</p>
          		</form>
      		</div>
      		</div>
      		</div>
      
      </div>
   
   
    
      <hr>

    </div> <!-- /container -->
    
    <div id="footer_wrapper">
    <div class="container-narrow">  
      <div class="footer">
        <p id="footer_p"><img src="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/images/logo_at_bottom.png"> 2013 Vibin.it All Rights Reserved 
      <img id="twitter" class="hidden-phone" src="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/images/twitter.png">
      <img class="hidden-phone" src="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/images/linkedin.png">
      <img class="hidden-phone" src="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/images/facebook.png">
      <img class="hidden-phone" src="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/images/googleplus">
    </p>
      </div>
    </div><!-- /container-narrow -->
</div><!-- /footer-wrapper -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/javascript/bootstrap.js"></script>
    <script src="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/javascript/bootstrap.min.js"></script>
    <script src="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/javascript/bootstrap-modal.js"></script>
    <script src="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/javascript/jquery.js"></script>
    <script src="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/javascript/bootstrap-transition.js"></script>
    <script src="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/javascript/bootstrap-alert.js"></script>
    <script src="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/javascript/bootstrap-modal.js"></script>
    <script src="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/javascript/bootstrap-dropdown.js"></script>
    <script src="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/javascript/bootstrap-scrollspy.js"></script>
    <script src="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/javascript/bootstrap-tab.js"></script>
    <script src="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/javascript/bootstrap-tooltip.js"></script>
    <script src="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/javascript/bootstrap-popover.js"></script>
    <script src="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/javascript/bootstrap-button.js"></script>
    <script src="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/javascript/bootstrap-collapse.js"></script>
    <script src="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/javascript/bootstrap-carousel.js"></script>
    <script src="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/javascript/bootstrap-typeahead.js"></script>

    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>

</body>

</html>

