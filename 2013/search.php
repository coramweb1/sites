<?php
	require_once('template/php/functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
	meta();
?>
<title>Coram Web Solutions | Search</title>
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
                    	<h1>Search results through Coram Web Solutions</h1>
						<?php
							$i = 0;
							$input = $_GET['search_term'];
							$terms = explode(" ", $input);
							$query = "SELECT * FROM search WHERE ";
							
							foreach ($terms as $each)
							{
								$i++;
								if($i == 1)
								{
									$query .= "keywords LIKE '%$each%' ";
								}
								else
								{
									$query .= "OR decription LIKE '%$each%' ";
								}
							}
							
							mysql_connect("Localhost", "coramweb_admin", "Coram@web1") or die (mysql_error());
							mysql_select_db("coramweb_db") or die("cannot select DB");
							$query = mysql_query($query);
							$num_rows = mysql_num_rows($query);
						
							if($query === false) 
							{
								var_dump(mysql_error());
							}
							else 
							{
						
								if($num_rows > 0)
								{
									echo "Search has found <b>$num_rows </b> result(s) for <b>$input</b>";
									while($rows = mysql_fetch_assoc($query))
									{
										$id = $rows['id'];
										$title = $rows['title'];
										$description = $rows['decription'];
										$keywords = $rows['keywords'];
										$link = $rows['link'];
									
										echo "<h4><a href='$link' title='$link'>$title</a></h4>
											$description<hr />";
									}
								 }
								 else
								 {
									echo "No results found for <b>$input</b>";
								 }
							}
						
							mysql_close();
						?>
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









