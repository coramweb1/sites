<?php
	include('template/php/functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
	meta();
?>
<title>Coram Web Solutions | Request a quote for FREE!!!</title>
<?php 
	generic_css();
	gen_js();
	quote_css();
	quote_js();
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
                            <li><a href="quote" title="Quote" class="active">Quote</a></li>
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
                    	<h1>Request a quote for FREE!</h1>
                        <h4>How can we help?</h4>
                        	<table cellpadding="0" cellspacing="0" id="quote_table">
							<tr>
								<td valign="top">
									<div id="res"><!--This will hold our error messages and the response from the server. --></div>                     				<table cellpadding="0" cellspacing="0" class="quote_table">
                                        <tr><form id="quote" method="post" enctype="multipart/form-data"> 
                                            <td>
                                                Quoting for 
                                            </td>
                                            <td>
                                                <select id="type" name="type">
                                                    <option selected="selected">Web Solutions</option>
                                                    <option>Graphics</option>
                                                    <option>IT Audit/Consulting</option>
                                                    <option>Social Media</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="top">
                                                <table cellpadding="0" cellspacing="0">
                                                   <tr>
                                                       <td valign="top">Name</td>
                                                   </tr>
                                                   <tr>
                                                       <td valign="top"><input name="name" type="text" id="name" size="35" tabindex="1"/></td>
                                                   </tr>
                                                   <tr>
                                                       <td>Your contact numbers</td>
                                                   </tr>
                                                   <tr>
                                                       <td colspan="2" valign="top"><input name="contact" type="text" id="contact"onkeydown="javascript:backspacerDOWN(this,event);" onKeyUp="javascript:backspacerUP(this,event);"  size="35" tabindex="3"/></td>
                                                   </tr>
                                                </table>
                                            </td>
                                            <td valign="top">
                                                    <table cellpadding="0" cellspacing="0">
                                                       <tr>
                                                           <td valign="top">Your company's name (if applicable)</td>
                                                       </tr>
                                                       <tr>
                                                           <td valign="top"><input name="company" type="text" id="company" size="35" tabindex="2"/></td>
                                                       </tr>
                                                       <tr>
                                                           <td valign="top">E-Mail</td>
                                                       </tr>
                                                       <tr>
                                                           <td valign="top"><input name="email" type="text" id="email" size="35" tabindex="4"/></td>
                                                       </tr>
                                                    </table>
                                               </td>
                                        </tr>
                                        <tr>
                                            <td valign="top">
                                                <table cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <td valign="top">Tell us what you need <span>(250 max)</span></td>
                                                    </tr>
                                                    <tr>
                                                       <td valign="top"><textarea name="message" cols="27" rows="6" class="textarea" id="message" tabindex="5"></textarea></td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td valign="middle"><input type="submit" value="send a quote" name="submit" class="button" title="send a quote" tabindex="6" id="send"/></td>
                                          </form>
                                          </tr>
                                    </table>
								</td>
							</tr>
						</table>
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