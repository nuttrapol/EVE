<?php
session_start();
require_once('helper.php');
require_once('connect.php');
$event_ID=$_GET['eventID'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="ninodezign.com, ninodezign@gmail.com">
	<meta name="copyright" content="ninodezign.com"> 
	<title>Eve | Event booking</title>
	
	<!-- favicon -->
    <link rel="shortcut icon" href="images/poster/v-icon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css" />
	<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css" />
	<link rel="stylesheet" type="text/css" href="css/unslider.css" />
	<link rel="stylesheet" type="text/css" href="css/template.css" />
	
</head>

<body data-target="#nino-navbar" data-spy="scroll">
<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.10";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	

	<!-- Header
    ================================================== -->
	<header id="nino-header2">
    <?php header_zone(); ?>
  </header>

	<!-- Story About Us
    ================================================== -->

	<!-- Brand
    ================================================== -->
     <section id="nino-brand">
    	<div class="verticalCenter fw" >
    		<div class="container">
    			<div class="detail">
    				<div class="box1"> 
    					<br>
						<h4 class="nino-sectionHeading">Create Event</h4>
						<div class="box4">
							<div class="input">
								<div class="col-md-3 pull-left">
									<span class="quotet">Event Name : </span>
								</div>
								<?php
                                            
                                            $q = "SELECT * FROM `event`,`organizer` WHERE event.event_organizerID=organizer.account_ID AND event.event_ID=".$event_ID."";
                                            $result=$mysqli->query($q);                    
                                            if(!$result){
                                                echo "Select failed. Error: ".$mysqli->error ;
                                            }
                                            $row=$result->fetch_array();
                                            ?>
								<div class="col-md-9 pull-left">
									<span class="quotet"><?php echo $row['event_name']; ?></span>
								</div>	
								<div style="clear:both;"></div>
							</div>
							<div class="input">
								<div class="col-md-3 pull-left">
									<span class="quotet">Organizer : </span>
								</div>
								<div class="col-md-9 pull-left">
									<?php
                                            
                                            $q = "SELECT * FROM `event`,`organizer` WHERE event.event_organizerID=organizer.account_ID AND event.event_ID=".$event_ID."";
                                            $result=$mysqli->query($q);                    
                                            if(!$result){
                                                echo "Select failed. Error: ".$mysqli->error ;
                                            }
                                            $row=$result->fetch_array();
                                            ?>
									<span class="quotet"><?php echo $row['organizer_name']; ?></span>
								</div>	
								<div style="clear:both;"></div>
							</div>
							<div class="input">
								<div class="col-md-3 pull-left">
									<span class="quotet">Date : </span>
								</div>
								<div class="col-md-9 pull-left">
									<?php
                                            
                                            $q = "SELECT * FROM `event`,`organizer` WHERE event.event_organizerID=organizer.account_ID AND event.event_ID=".$event_ID."";
                                            $result=$mysqli->query($q);                    
                                            if(!$result){
                                                echo "Select failed. Error: ".$mysqli->error ;
                                            }
                                            $row=$result->fetch_array();
                                            ?>
									<span class="quotet"><?php echo $row['event_dateStart']; ?></span>
								</div>	
								<div style="clear:both;"></div>
							</div>
							<div class="input">
								<div class="col-md-3 pull-left">
									<span class="quotet">Time : </span>
								</div>
								<div class="col-md-3 pull-left">
									<?php
                                            
                                            $q = "SELECT * FROM `event`,`organizer` WHERE event.event_organizerID=organizer.account_ID AND event.event_ID=".$event_ID."";
                                            $result=$mysqli->query($q);                    
                                            if(!$result){
                                                echo "Select failed. Error: ".$mysqli->error ;
                                            }
                                            $row=$result->fetch_array();
                                            ?>
									<span class="quotet"><?php echo $row['event_timeStart']; ?></span>
								</div>
									
								<div style="clear:both;"></div>
							</div>
							<div class="input">
								<div class="col-md-3 pull-left">
									<span class="quotet">Total Tickets : </span>
								</div>
								<div class="col-md-3 pull-left">
									<span class="quotet">2,000</span>
								</div>
								<div style="clear:both;"></div>
							</div>
							<?php
                $q = "SELECT * FROM `tickettype`,`event` WHERE tickettype.event_ID=event.event_ID AND event.event_ID=".$event_ID."";
                $result = $mysqli->query($q);
                while($row = $result->fetch_array()) {

                    ?>
							<div class="input">
								<div class="col-md-3 pull-left">
									<span class="quotet">Ticket Price : </span>
								</div>
								<div class="col-md-9 pull-left">
									<span class="quotet"><?php echo $row['ticketType_name']; ?>  : <?php echo $row['ticketType_price']; ?> ฿</span>
								</div>
								<div style="clear:both;"></div>
							</div>
							<?php } ?>
							<div class="input">
								<div class="col-md-3 pull-left">
									<span class="quotet">Event Poster :</span>
								</div>
								<div style="clear:both;"></div>
							</div>
							<img src="images/poster/event2.jpg" width="100%">
							<br><br>
							<img src="images/poster/edetail.jpg" width="100%">
							<br><br>
							<img src="images/poster/edetail2.jpg" width="100%">
							<div class="input">
								<div class="col-md-3 pull-left">
									<span class="quotet">Event Detail : </span>
								</div>
							</div>
							<div style="clear:both;"></div>
						</div>
						<div class="box1">					
							
						<p class="quotet">เริ่มจัดส่งบัตร 1 สิงหาคม เป็นต้นไป / Delivery due in August </p>
						<p class="quotet">สถานที่จัดงาน</p>
						<h3 class="topic2">เงื่อนไขการเข้าร่วมงาน </h3>
						<p class="quotet">-การเข้างานอายุ 18 ปีบริบูรณ์เท่านั้น / Only 18+ can entry the event
							<br>-ทางทีมงานไม่รับผิดชอบกรณีบัตรสูญหาย หรือชำรุด หรือถูกทำลาย / Ticket cannot be replaced if lost, stolen or destroyed.
							<br>-บัตรซื้อแล้วไม่รับคืนเงินทุกกรณี / Non-refundable / Non- returnable
						</p>
							<br>
							<br>							
							<a href=".nino-testimonial" class="nino-btnb pull-right">Create</a>
							<div style="clear:both;"></div>
						</div>
						<br>
					</div>
				</div>
				<br><br>
				
    		</div>
    	</div>
    </section> <!--/#nino-brand-->

    <!-- Pay
    ================================================== -->

	
    <!-- Footer
    ================================================== -->
    <footer id="footer">
        <div class="container">
        	<div class="row">
        		<div class="col-md-4">
        			<div class="colInfo">
	        			<div class="footerLogo">
	        				<a href="#" >EVE</a>
	        			</div>
	        			<p>
	        				We believed that everyone should has a chance to find their own inspiration. So, we create a single place that bring creators and people come together in the purpose of linking their creativity.
							Our vision is to envision a world where all people – even in the most remote areas of the globe – hold the power to create opportunity for themselves and others.
							<br><br>"All our dreams can come true if we have the courage to pursue them."
							<br><br>     - From us, EVE.
						</p>
	        			<div class="nino-followUs">
	        				<div class="totalFollow"><span>15k</span> followers</div>
	        				<div class="socialNetwork">
	        					<span class="text">Follow Us: </span>
	        					<a href="" class="nino-icon"><i class="mdi mdi-facebook"></i></a>
	        					<a href="" class="nino-icon"><i class="mdi mdi-twitter"></i></a>
	        					<a href="" class="nino-icon"><i class="mdi mdi-instagram"></i></a>
	        					<a href="" class="nino-icon"><i class="mdi mdi-pinterest"></i></a>
	        					<a href="" class="nino-icon"><i class="mdi mdi-google-plus"></i></a>
	        				</div>
	        			</div>
        			</div>
        		</div>
        		<div class="col-md-4 col-sm-6">
        			<div class="colInfo">
	        			<h3 class="nino-colHeading">Find us on Facebook</h3>
						<!--facebook-->
						<div class="fb-page" data-href="https://www.facebook.com/siittu/" data-tabs="timeline" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/siittu/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/siittu/">Sirindhorn International Institute of Technology (SIIT)</a></blockquote></div>


        			</div>
        		</div>

        		<div class="col-md-4 col-sm-6">
        			<div class="colInfo">
	        			<h3 class="nino-colHeading">Follow our instagram</h3>
	        			<div class="instagramImages clearfix">
	        				<a href="#"><img src="images/instagram/img-1.jpg" alt=""></a>
	        				<a href="#"><img src="images/instagram/img-2.jpg" alt=""></a>
	        				<a href="#"><img src="images/instagram/img-3.jpg" alt=""></a>
	        				<a href="#"><img src="images/instagram/img-4.jpg" alt=""></a>
	        				<a href="#"><img src="images/instagram/img-5.jpg" alt=""></a>
	        				<a href="#"><img src="images/instagram/img-6.jpg" alt=""></a>
	        				<a href="#"><img src="images/instagram/img-7.jpg" alt=""></a>
	        				<a href="#"><img src="images/instagram/img-8.jpg" alt=""></a>
	        				<a href="#"><img src="images/instagram/img-9.jpg" alt=""></a>
	        				<a href="#"><img src="images/instagram/img-3.jpg" alt=""></a>
	        				<a href="#"><img src="images/instagram/img-4.jpg" alt=""></a>
	        				<a href="#"><img src="images/instagram/img-5.jpg" alt=""></a>
	        			</div>
	        			<a href="#" class="morePhoto">View more photos</a>
        			</div>
        		</div>
        	</div>

        </div>
    </footer>

    <!-- Search Form - Display when click magnify icon in menu
    ================================================== -->
    <form action="" id="nino-searchForm">
    	<input type="text" placeholder="Search..." class="form-control nino-searchInput">
    	<i class="mdi mdi-close nino-close"></i>
    </form><!--/#nino-searchForm-->
	
    <!-- Scroll to top
    ================================================== -->
	<a href="#" id="nino-scrollToTop">Go to Top</a>
	
	<!-- javascript -->
	<script type="text/javascript" src="js/jquery.min.js"></script>	
	<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.hoverdir.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.97074.js"></script>
	<script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script type="text/javascript" src="js/unslider-min.js"></script>
	<script type="text/javascript" src="js/template.js"></script>
		
</body>
</html>