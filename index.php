<?php
require_once './ContactForm/vendor/autoload.php';

$helperLoader = new SplClassLoader('Helpers', './ContactForm/vendor');
$helperLoader->register();

use Helpers\Config;

$config = new Config;
$config->load('./ContactForm/config/config.php');

?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free coming soon template with jQuery countdown">
    <meta name="author" content="http://bootstraptaste.com">

    <title>Webuild - Free Bootstrap coming soon template with countdown</title>

    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.css" rel="stylesheet">
  	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css" rel="stylesheet">
  	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- siimple style -->
    <link href="assets/css/style.css" rel="stylesheet">
    
    <!-- =======================================================
        Theme Name: WeBuild
        Theme URL: https://bootstrapmade.com/free-bootstrap-coming-soon-template-countdwon/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>

  <body>

	<div id="wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>We Build <span class="small">(transtube)</span></h1>
					<h2 class="subtitle">We're working hard to improve our website and we'll ready to launch after</h2>
					<div id="countdown"></div>
          
					<p style="color:#fff;"><b>
					This project consists in finding translators, for the subtitles of the videos (put on line on the sites like youtube, vimeo ...).
					</p>
          <div class="social">
              <a href="https://www.facebook.com/Jobremoteonly" target="_blank"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a>
              <a href="https://www.leetchi.com/c/job-remote-only" target="_blank"><b>Leechi</b></a>
          </div>
				</div>
			</div>
      
      <div class="row contctform">
        <div class="col-md-8 col-md-offset-2">
          <h3><b>Contact Us</b></h3>
        </div>


    <div class="col-md-6 col-md-offset-3">
        <form enctype="application/x-www-form-urlencoded;" id="contact-form" class="form-horizontal" role="form" method="post">
            <div class="form-group" id="name-field">
                <label for="form-name" class="col-lg-2 control-label" style="color:#fff;"><?php echo $config->get('fields.name'); ?></label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="form-name" name="form-name" placeholder="<?php echo $config->get('fields.name'); ?>" required>
                </div>
            </div>
            <div class="form-group" id="email-field">
                <label for="form-email" class="col-lg-2 control-label" style="color:#fff;"><?php echo $config->get('fields.email'); ?></label>
                <div class="col-lg-10">
                    <input type="email" class="form-control" id="form-email" name="form-email" placeholder="<?php echo $config->get('fields.email'); ?>" required>
                </div>
            </div>
            <div class="form-group" id="subject-field">
                <label for="form-subject" class="col-lg-2 control-label" style="color:#fff;"><?php echo $config->get('fields.subject'); ?></label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="form-subject" name="form-subject" placeholder="<?php echo $config->get('fields.subject'); ?>" required>
                </div>
            </div>
            <div class="form-group" id="message-field">
                <label for="form-message" class="col-lg-2 control-label" style="color:#fff;"><?php echo $config->get('fields.message'); ?></label>
                <div class="col-lg-10">
                    <textarea class="form-control" rows="6" id="form-message" name="form-message" placeholder="<?php echo $config->get('fields.message'); ?>" required></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                    <button type="submit" class="btn btn-default"><?php echo $config->get('fields.btn-send'); ?></button>
                </div>
            </div>
        </form>
</div>
        
      </div>
      
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
						<p class="copyright">&copy; WeBuild - All Rights Reserved</p>
            <div class="credits">
                <!-- 
                  All the links in the footer should remain intact. 
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=WeBuild
                -->
                <a href="https://bootstrapmade.com/">Free Bootstrap Themes</a> by BootstrapMade
            </div>
				</div>
			</div>		
		</div>
	</div>
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>
	<script type="text/javascript">
    $('#countdown').countdown('2018/6/15', function(event) {
      $(this).html(event.strftime('%w weeks %d days <br /> %H:%M:%S'));
    });
  </script>
    
    <script src="ContactForm/public/js/contact-form.js"></script>
    <script type="text/javascript">
        new ContactForm('#contact-form', {
            endpoint: './ContactForm/process.php'
        });
    </script>
  
</body>
</html>
