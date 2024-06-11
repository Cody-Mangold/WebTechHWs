<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cody's Contact Webpage</title>

<link href="assets/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
 <link rel="stylesheet" href="assets/css/owl.carousel.css">
 <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
 <link rel="stylesheet" href="assets/css/templatemo-style.css">
	

     

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

    


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="#" class="navbar-brand">Cody's Website</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="index.html" class="smoothScroll">Home</a></li>
                         <li><a href="work.html" class="smoothScroll">Work</a></li>
                         <li><a href="school.html" class="smoothScroll">School</a></li>
                         <li><a href="hobbies.html" class="smoothScroll">Hobbies</a></li>
                         <li><a href="contact.html" class="smoothScroll">Contact</a></li>
                    </ul>

                    
               </div>

          </div>
     </section>

<!--home-->
  
     <section id = "home" >
		<div style = "margin:20px;padding:20px">
		 <?php
			
			
			if(isset($_POST['submit']))
			{
				
			echo "<h2>hello from results</h2>";

			echo '<p>First Name: '.$_POST['firstname'].'</p>';
			echo '<p>Last Name: '.$_POST['lastname'].'</p>';
			echo '<p>Email: '.$_POST['email'].'</p>';
			echo '<p>Phone Number '.$_POST['phone'].'</p>';
			echo '<p>Username: '.$_POST['username'].'</p>';
			echo '<p>Password: '.$_POST['password'].'</p>';
			echo '<p>Comments: '.$_POST['comments'].'</p>';
			}
			else
			{
				header("Location: contact.html");
			}
			
			
		?>
		 
		 </div>
	</section>
    


     <!-- FOOTER -->
     <footer id="footer">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Headquarter</h2>
                              </div>
                              <address>
                                   <p>1800 dapibus a tortor pretium,<br> Integer nisl dui, ABC 12000</p>
                              </address>

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>

                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2018 Company</p>
                                   <p>Design: <a rel="nofollow" href="http://templatemo.com" title="html5 templates" target="_parent">Template Mo</a></p>
                                   <p>Distribution: <a href="https://themewagon.com/">ThemeWagon</a></p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Contact Info</h2>

                              </div>
                              <address>
                                   <p>+65 2244 1100, +66 1800 1100</p>
                                   <p><a href="mailto:youremail.com">hello@youremail.co</a></p>
                              </address>

                              <div class="footer_menu">
                                   <h2>Quick Links</h2>
                                   <ul>
                                        <li><a href="#">Career</a></li>
                                        <li><a href="#">Investor</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Refund Policy</a></li>
                                   </ul>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                         <div class="footer-info newsletter-form">
                              <div class="section-title">
                                   <h2>Newsletter Signup</h2>
                              </div>
                              <div>
                                   <div class="form-group">
                                        <form action="#" method="get">
                                             <input type="email" class="form-control" placeholder="Enter your email" name="email" id="email" required="">
                                             <input type="submit" class="form-control" name="submit" id="form-submit" value="Send me">
                                        </form>
                                        <span><sup>*</sup> Please note - we do not spam your email.</span>
                                   </div>
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>


</body>
	<script src="assets/js/event-listener.js"></script>  
</html>