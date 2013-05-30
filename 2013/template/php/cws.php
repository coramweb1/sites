<?php
	include('template/php/functions.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
	meta();
?>
<title>Coram Web Solutions</title>
<?php 
	generic_css(); 
	gen_js();
?>
</head>

	<body>
		<table id="wrapper" cellpadding="0" cellspacing="0">
        	<tr>
            	<td valign="top">
                	<table cellpadding="0" cellspacing="0" class="header">
						<tr cellspacing="0" >
							<td id="left" valign="top">
								<?php 
									logo();
								?>
							</td>
							<td id="right" valign="top">
								<table cellpadding="0" cellspacing="0">
									<tr>
										<td class="nav" valign="top">
											<ul>
											  <li><a href="cws.php" title="About" class="selected">cws</a></li>
											  <li><a href="portfolio.php" title="Portfolio">portfolio</a></li>
											  <li><a href="solutions.php" title="Solutions">solutions</a></li>
											  <li><a href="articles.php" title="Articles">articles</a></li>
											  <li><a href="quote.php" title="Request a quote">request a quote</a></li>
											  <li class="last"><a href="contact.php" title="Contact">contact</a></li>
											</ul>
										</td>
									</tr>
									<tr>
										<td class="slider" valign="top">
										  <?php
												slider();
										  ?>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
                </td>
           </tr>
			<tr>
				<td valign="bottom">
					<table cellpadding="0" cellspacing="0" class="content_area" >
						<tr>
							<td valign="top">
								<!-- MAIN CONTENT AREA -->
								<table cellpadding="0" cellspacing="0" class="content">
									<tr>
										<td valign="top"><h1>About <a href="index.php" title="Coram Web Solutions">Coram Web Solutions</a></h1><br />
										Coram Web Solutions gives you a platform to define your own web world.<br />
                                        With an increasing demand of internet across the globe, and the need for migration of traditional systems to enhanced online data processing systems, and also the vast majority of graphics making a sophisticated shift from 1 dimension to 3 dimensions; Coram Web Solutions is the ideal web applications, web designs, online systems, graphical designs, and software Solutions Company for both small and large profitable and non-profitable organisations providing you with innovative ideas to create your own world of technology.<br /><br />

<strong>Business Description/Nature of the business</strong><br />
As a youthful and innovative company, Coram Web Solutions is aimed at providing professional, efficient and effective services and products at reasonable costs for traditional businesses and organisations across South Africa. As technology gets better and better by the day, Coram Web Solutions has identified itself as an agent aimed at bringing new ideas and delivering user friendly, less-time-costly, and effective online and offline systems which will interact with both young and old people.
Coram Web Solutions specialises in web designs, web development, web hosting, software development, graphic designs, database management, web mastering and hardware solutions, business networking solutions.<br /><br /> 

Coram Web Solutions was established by a group of young people who recognised the rising demand of web application and systems around South Africa. It is owned by Noko Thabang Ramoroka, Collen Matsobane Shelane, Thabang Horwick Mnguni who made the initiative to create a web solution company from disadvantaged communities and inspiring the youth on the other hand.
									  </tr>
								</table>
							</td>
							<td valign="top">
								<?php
									info_box();
								?>
							</td>
						</tr>
					</table>   
				</td>
		   </tr>
           <tr>
           		<td class="footer">
                	<?php
						footer();
					?>
                </td>
           </tr>
        </table>
	</body>
</html>
