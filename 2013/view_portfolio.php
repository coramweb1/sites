<?php
	include('template/php/functions.php');
	$category = isset($_GET['cat_id']) && !empty($_GET['cat_id']) ? $_GET['cat_id'] : null;
	$cat_id = (int)$category;
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
	portfolio_css();
	portfolio_js();
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
                            <li><a href="portfolio" title="Portfolio" class="active">Porfolio</a></li>
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
                    	<h1>Check out some of the work we've done</h1>
                    	<?php 
							$error = "";
							connection($error);
							$itemsQuery = "SELECT pic_id, pic_name, pic, pic_url, cat.cat_id, cat_name FROM category cat, picture pic WHERE cat.active_yn = 1 AND pic.active_yn = 1 AND cat.cat_id = pic.cat_id AND cat.cat_id = $cat_id ORDER BY pic_name ASC";
							$categoriesPerPage = 8;
							
							$result     = mysql_query(getPagingQuery($itemsQuery, $categoriesPerPage));
							$pagingLink = getPagingLink($itemsQuery, $categoriesPerPage, "cat_id=$cat_id");
							$num_of_cats = mysql_num_rows($result);
							
							if($num_of_cats > 0)
							{
								echo '<div id="gallery">
										<ul>';
								while($row = mysql_fetch_assoc($result))
								{
									echo '<li><a rel="lightbox[gal]" href="template/images/portfolio/'.strtolower($row['cat_name']).'/'.strtolower($row['pic']).'" title="'.$row['pic_name'].'">
												<img src="template/images/portfolio/'.strtolower($row['cat_name']).'/'.strtolower($row['pic']).'" title="'.$row['pic_name'].'" exLink="http://www.coramwebsolutions.co.za" and exLinkText="(whatever you need)" /></a>
										 </li>';
													
								}
									echo '</ul>
									</div>';
							}
							else
							{
								echo '<p>Sorry we currently have no pictures in our portfolio for the selected category.</p>';
							}
						?>
					<div>
						<?php echo '<table cellpadding="0" cellspacing="0" align="center"><tr><td align="center">'.$pagingLink.'</td></tr></table>';?><a href="portfolio" title="Go back to categories">Go back to categories</a>
					</div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <!-- FOOTER SECTION --> 
	<div id="footer_section">
		<?php footer(); ?>
    </div>
</body>
</html>