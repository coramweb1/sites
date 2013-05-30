<?php
	require_once('template/php/functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
	meta();
?>
<title>Coram Web Solutions | Contact Us</title>
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
                            <li><a href="solutions" title="Solutions">Solutions</a></li>
                            <li><a href="portfolio" title="Portfolio">Porfolio</a></li>
                            <li><a href="quote" title="Quote">Quote</a></li>
                            <li><a href="contact" title="Contact" class="active">Contact</a></li>
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
                    	<h1>Get In touch with us</h1>
                        <h2>Coram Web Solutions</h2>
                        1314 Block TT Soshanguve<br />
                        Pretoria<br />
                        South Africa<br />
                        0152<br/> 
                        +27 12 771 4705<br/>
                        <a href="mailto:info@coramwebsolutions.co.za"><strong>info@coramwebsolutions.co.za (e)</strong></a><br/> 
                        <a href="www.coramwebsolutions.co.za"><strong>www.coramwebsolutions.co.za (w)</strong></a>
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