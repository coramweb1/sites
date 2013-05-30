<?php
	require_once('template/php/functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
	meta();
?>
<title>Coram Web Solutions | Home</title>
<?php 
	generic_css(); 
	homepage_css();
	gen_js();
	homepage_js();
?>
</head>
<body>
	<!-- Header Section -->
    <div id="header_section">
    	<table cellpadding="0" cellspacing="0" id="wrapper">
            <tr>
                <td class="logo">
                	<?php logo(); ?>
               	</td>
                <td class="contact_upper">
                	<table cellpadding="0" cellspacing="0" class="contacts">
                    	<tr>
                        	<td class="contact_tel"><img alt="contact_coram" src="template/images/img_tel.png"> + 27 12 771 4705</td>
                    		<td class="contact_email"><img alt="contact_coram" src="template/images/img_@.png"> <a href="mailto:info@coramwebsolutions.co.za">info@coramwebsolutions.co.za</a></td>
                   		</tr>
                     </table>
                </td>
            </tr>
            <tr>
            	<td colspan="2">
                	<div class="nav">
                        <ul>
                            <li><a href="index" title="Home" class="home_hover" id="home_link">Home</a></li>
                            <li><a href="cws" title="CWS" >CWS</a></li>
                            <li><a href="solutions" title="Solutions">Solutions</a></li>
                            <li><a href="portfolio" title="Portfolio">Porfolio</a></li>
                            <li><a href="quote" title="Quote">Quote</a></li>
                            <li><a href="contact" title="Contact">Contact</a></li>
                            <li>
                            	<?php search(); ?>
                          	</li>
                          </ul>
                    </div>
                </td>
            </tr>
            <tr>
            	<td class="gallery" colspan="2">
                    <?php 
						slider();
					?>
                </td>
            </tr>
        </table>
    </div>
     
     <!-- Body Section -->
    				<!-- SOLUTIONS -->
    <div id="body_content">
        <table cellpadding="0" cellspacing="0" id="wrapper">
            <tr>
                <td>
                    <table cellpadding="0" cellspacing="0" id="solutions">
                        <tr>
                            <td class="solution"><img alt="IT Audit" height="32" src="template/images/img_it_audit.png" width="32"><div>IT audit& Consulting</div></td>
                            <td class="solution"><img alt="Web&Graphics" height="32" src="template/images/img_web_graphics.png" width="32"><div>Web & Graphics</div></td>
                            <td class="solution"><img alt="social media" height="32" src="template/images/img_social_media.png" width="32"><div>Social Media</div></td>
                            <td class="solution"><img alt="business Analysis" height="32" src="template/images/img_business_analysis.png" width="32"><div>Business Analysis</div></td>
                        </tr>
                        <tr>
                        	<td><p class='p_solution'><span class="solutions_text">Having some of the best and qualified<br /> staff with massive experience in ICT, <br />Coram offers you IT audit and consultation<br />
                         at 
                        affordable prices to meet <a href="solutions">read more</a></span></p></td>
                         	<td><p class='p_solution'><span class="solutions_text">We provide you with ideal web <br />
                           solutions to meet your company needs.<br />
            Some of our web solutions include: <br />
            website design, 
                        web app..<a href="solutions">read more</a></span></p></td>
                        	<td><p class='p_solution'><span class="solutions_text">Today a vast majority of small businesses<br /> are on social media with hopes of finding<br /> that edge to tab into the big market. CWS <br />
                          knows all the do&rsquo;s and don&rsquo;ts...<a href="solutions">read more</a></span></p></td>
                        	<td><p class='p_solution'>When your business is having a governance issues, we have solutions to enhance your business models.</p></td>
                     	</tr>
                    </table>
                </td>
            </tr>
        </table>
    				<!-- INNOVATION -->
		<div id="innovation_panel">
			<div id="wrapper">
				<div id="message">
					<h1>A world of innovative solutions</h1>
					<p>Providing you with solutions to meet your business needs in the age of connectivity</p>
					<div class="inno_button"><a href="solutions"><img alt="view our solutions" height="42" src="template/images/img_view_solutions.png" width="175"></a></div>
				</div>
			</div>
		</div>
					<!--- OUR WORK -->
		<div id="our_work">
			<div id="wrapper">
				<h5>Our Work</h5>
				<table cellpadding="0" cellspacing="0" id="wrapper">
					<tr>
						<td><img class="pic_work" alt="Our work" height="107" src="template/images/latest%20work/img_1.jpg" width="196"></td>
						<td><img class="pic_work" alt="Our work" height="107" src="template/images/latest%20work/img_2.jpg" width="196"></td>
						<td><img class="pic_work" alt="Our work" height="107" src="template/images/latest%20work/img_3.jpg" width="196"></td>
						<td><img class="pic_work" alt="Our work" height="107" src="template/images/latest%20work/img_4.jpg" width="196"></td>
					</tr>
					<tr>
						<td class="work_heading">IT Solutions</td>
						<td class="work_heading">Stunning Designs</td>
						<td class="work_heading">Awesome Websites</td>
						<td class="work_heading">Building creative studio</td>
					</tr>
					<tr>
						<td><p class='p_solution'>For every IT-related issue, Coram Web Solutions have a solution for it. Why not try us? Giving every reason to work with us.</p></td>
						<td><p class='p_solution'>Our designs have been praised by many organisations across the country for being top notch. Have a look at some of them.</p></td>
						<td><p class='p_solution'>We have done some awesome sites that not only look great but also function powerfully.</p></td>
						<td><p class='p_solution'>We are working on buildng a creative studio that will help better the creative minds of South Africans.</p></td>
					</tr>
				</table>
			</div>
		</div>
    				<!-- INFO PANEL -->
		<div id="info_panel">
			<div id="wrapper">
				<table cellpadding="0" cellspacing="0">
					<tr>
						<td id="testimonial_section">
							
							<table cellpadding="0" cellspacing="0">
                            	<tr>
                                	<td><h5>What Our Clients Say?</h5></td>
                                    <td>
                                    	<?php 
											$error = "";
											connection($error);
											$itemsQuery = "SELECT * FROM testimony";
											$categoriesPerPage = 1;
											
											$result     = mysql_query(getPagingQuery($itemsQuery, $categoriesPerPage));
                                            $pagingLink = getPagingLink($itemsQuery, $categoriesPerPage);
											
											echo $pagingLink;
											
											while ($row = mysql_fetch_assoc($result))
											{
										?>
                                    </td>
                                </tr>
                                <tr>
                                	<td class="testimonial" colspan="2">
										<div class="text"><?php echo $row['testimony']; ?></div></td>
                               	</tr>
                                <tr>
									<td class="testimonial_author" colspan="2">
										<span class="author"><?php echo $row['author']; ?></span> <?php echo $row['occupation']; ?> <a href="<?php echo $row['url'];?>" target="_new" title="Visit <?php echo $row['organisation']; ?>"><?php echo $row['organisation']; } echo mysql_error(); ?></a></td>
                            	</tr>
                            </table>
						 </td>
						 <td class="tips">
							<table cellpadding="0" cellspacing="0">
                            	<tr>
                                	<td valign="top"><h5>Innovative Tips</h5></td>
								</tr>
                                <tr>
                                	<td valign="top">
                                        <ul class="inno_tip">
                                            <li class="img_tip">Your logo is your identity. People identiy you through your logo.</li>
                                            <li class="img_tip">A website is a digital portfolio of the work you do.</li>
                                            <li class="img_tip">Use social media to attract potential clients for your business.</li>
                                            <li class="img_tip">Attend lots of business seminars to be equiped.</li>
                                            <li class="img_tip">Make sure all your business documents are up to date. You'll never know your day.</li>		
                                        </ul>
                                   </td>
                               	</tr>
                             </table>
						</td>
					</tr>
				   </table>
			</div>
		</div>
    </div>
    				<!-- FOOTER SECTION --> 
    <div id="insights">
    	<div id="wrapper">
            <div class="portals">
                <table class="portal_table" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td class="text_h">Latest Tech Trends</td>
                        <td class="text_h">About Us</td>
                        <td class="text_h">Latest Tweets</td>
                        <td class="text_h">Contact Us</td>
                    </tr>
                    <tr>
                        <td valign="top" class="text_topic">
                            <table cellpadding="0" cellspacing="0">
                                <tr>
                                    <td valign="top" style="padding: 0px; margin: 0px; width: 70px;"><a href="http://appleinsider.com/articles/13/05/14/apple-adds-samsungs-galaxy-s4-to-patent-infringement-suit" target="_blank"><img src="template/images/latest%20work/img_s_1.jpg"  alt=""></a></p></td>
                                    <td valign="top">Apple adds Samsung's Galaxy S4 to patent infringement suit. Read more about it <a href="http://appleinsider.com/articles/13/05/14/apple-adds-samsungs-galaxy-s4-to-patent-infringement-suit" target="_blank">here</a>.</td>
                                </tr>
                            </table>
                        </td>
                        <td valign="top" class="text_topic">Coram Web Solutions (CWS) is an innovative Information Technology (IT) solutions company which prides itself on quality and professional service to meet your business needs. <br /><br />Some of these solutions include e-mail marketing, graphic design, web hosting, web, software and applications development, social media, business networking 
                    solutions, IT Audit and Consulting.</td>
                        <td class="text_topic iframe" id="tweets">
                        	<ul>
								<?php
                                    twitter();
                                ?>
                            </ul>
                        </td>
                        <td valign="top" style="padding-left:5px;" class="text_topic">
                            <img alt="Coram Web Solutions Phone" height="17" src="template/images/img_cell_footer.png" style="border: none;">+ 27 12 771 4705<br />
                            <img alt="Contact Coram Web Solutions" height="15" src="template/images/img_email_footer.png" style="border: none;"><a style="color:#cccccc" href="mailto:info@coramwebsolutions.co.za">info@coramwebsolutions.co.za</a><br /><br />
                            1314 Block TT<br />
                            Soshanguve, Pretoria<br />
                            South Africa<br />
                            0152
                        </td>
                    </tr>
                </table>
            </div>
    	</div>
    </div>
    					<!-- CONTACTS SECTION -->
	<div id="footer_section">
		<?php footer(); ?>
    </div>
</body>
</html>