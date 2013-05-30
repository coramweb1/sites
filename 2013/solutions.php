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
	gen_js();
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
                            <li><a href="index" title="Home" class="home_hover">Home</a></li>
                            <li><a href="cws" title="CWS">CWS</a></li>
                            <li><a href="solutions" title="Solutions" class="active">Solutions</a></li>
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
        </table>
    </div>
     
     <!-- Body Section -->
	<div id="body_content">
    	<div id="wrapper">
        	<table cellpadding="0" cellspacing="0">
            	<tr>
                	<td class="content_area">
                    	<h1>Here are some of our solutions</h2>
                        <h2>Web Solutions</h2>
                        <p>We provide you with ideal web solutions to meet your company needs. Some of our web solutions include: website design, 
                        web application development, email marketing, SEO (Search Engine Optimization), etc. </p>
                        <h2>Graphics</h2>
                        <p>Over the years, we’ve designed exceptional graphics through banners, posters, business cards, flyers and other graphics for small and medaium enterprises. We pride ourselves on excellency in graphics. Let Coram provide you with graphics that will make you stand out in the industry of mass competition.</p>
                        <h2>IT Audit/Consulting</h2>
                        <p>Having some of the best and qualified staff with massive experience in ICT, Coram offers you IT audit and consultation at affordable prices to meet the needs of your organisatiaon. With the increasing levels of technology, your organisation needs
                        innovative ideas to create a conducive and IT friendly environment.
                        </p>
                        <h2>Social Media</h2>
                        <p>Today a vast majority of small businesses are on social media with hopes of finding that edge to tab into the big market. Coram knows all the do’s and don’ts that your company needs to know in order to make business using social media.We have provided services for large organisations and raise the bar of online marketing.</p>
                    </td>
                    <td class="solutions_info_area">
						<?php info_box(); ?>
					</td>
                </tr>
            </table>
        </div>
    </div>
    				<!-- FOOTER SECTION --> 
    					<!-- CONTACTS SECTION -->
	<div id="footer_section">
		<?php footer(); ?>
    </div>
</body>
</html>