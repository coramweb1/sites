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
                            <li><a href="cws" title="CWS" class="active">CWS</a></li>
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
        </table>
    </div>
     <!-- Body Section -->	
    <div id="body_content">
    	<div id="wrapper">
					<!-- SOLUTIONS -->
			<table cellpadding="0" cellspacing="0">
				<tr>
					<td class="content_area">
                    	<h1>About Coram Web Solutions (CWS)</h1>
						<h2>Company Summary</h2>
						<p>
						Coram Web Solutions (CWS) is an innovative Information Technology (IT) solutions company which prides itself on quality and professional service to  meet 
						your business needs. With an increasing demand of migration from traditional desktop systems to web and applications, CWS is dedicated to providing you with 
						solutions to give your business a competitive edge in this age of connectivity.<br/><br/>

						Some of these solutions include e-mail marketing, graphic design, web hosting, web, software and applications development, social media, business networking 
						solutions, IT Audit and Consulting.</p>
						<h2>Vision</h2>
						<p>
						Providing you with solutions to innovate your web world</p>
						<h2>Mission Statement</h2>
						<p>
						Bringing you innovative solutions to meet the current technology with professional service for your business.</p>
						<h2>Aims & Objectives</h2>
						<p>
						Over the years, we’ve designed exceptional graphics through banners, posters, business cards, flyers and other graphics 
						for small and medaium enterprises. We pride ourselves on excellency in graphics. Let Coram provide you with graphics that will 
						make you stand out in the industry of mass competition.</p>
						<h2>Management</h2>
						<p style="padding-bottom:10px">
						Coram Web Solutions is managed by the following directors:<br/>
						<b><a href="http://www.twitter.com/abutirams" target="_blank">Noko T Ramoroka</a></b> - Co-Founder, CEO and Marketing Strategist<br/>
						<b><a href="http://www.twitter.com/Deepsaint" target="_blank">Horwick T Mnguni</a></b> - Co-Founder and Project Manager<br/>
						<b>Collen M Shelane</b> - Co-Founder & Programmer<br/>
						<b><a href="http://www.twitter.com/Bethubaby" target="_blank">Bethusile S Shiba</a></b> - Sales Director & Business Analysis<br/>
						<b><a href="http://www.twitter.com/Zikhe" target="_blank">Tumelo Mashaba</a></b> - Chief Information Officer<br/></p>
					</td>
					<td class="solutions_info_area">
						<?php info_box(); ?>
					</td>
				</tr>
			</table>
		</div>
    </div>
	<!-- Footer Section -->				
	<div id="footer_section">
		<?php footer(); ?>
    </div>
</body>
</html>









