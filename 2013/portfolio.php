<?php
	include('template/php/functions.php');
	$category = isset($_GET['cat_id']) && !empty($_GET['cat_id']) ? $_GET['cat_id'] : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
	meta();
?>
<title>Coram Web Solutions | Portfolio</title>
<?php 
	generic_css();
	gen_js();
	portfolio_css();
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
                    	<div id="portfolio">
							<?php
                                $error = "";
                                connection($error);
                                $itemsQuery = "SELECT * FROM category WHERE active_yn = 1 ORDER BY cat_name ASC";
                                $categoriesPerPage = 4;
                                
                                $result     = mysql_query(getPagingQuery($itemsQuery, $categoriesPerPage));
                                $pagingLink = getPagingLink($itemsQuery, $categoriesPerPage);
                                $num_of_cats = mysql_num_rows($result);
                                
                                if($num_of_cats > 0)
                                {
                                    echo '<div id="gallery">
											<ul>';
												while($row = mysql_fetch_assoc($result))
												{
													echo '<li><a href="view_portfolio?cat_id='.$row['cat_id'].'" title="'.strtoupper($row['cat_name']).'"><img src="template/images/portfolio/'.strtolower($row['cat_name']).'/'.strtolower($row['cat_image']).'" title="'.ucfirst($row['cat_name']).'" width="60" height="60" align="center"/></a></li>';
												}
                                    echo '	</ul>
                                          </div>';			
                                }
                                else
                                {
                                    echo '<p><br />Sorry we currently have no categories in our portfolio.</br>';
                                }
                            ?>
                        </div>
                        <div>
						<?php echo '<table cellpadding="0" cellspacing="0" align="center"><tr><td align="center">'.$pagingLink.'</td></tr></table>';?>
					</div>
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