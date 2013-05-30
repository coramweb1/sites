<?php

	function meta()
	{
		echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
		echo '<meta name="keywords" content="Coram Web Solutions, Coram, Coram Web, Coram Solutions, Solutions, Web, Solutions, Business Networking Marketing, Networking Marketing, Networking, Marketing, Business, Online Business, Online, Network Solutions, Graphics Design, Design, Graphics, Social Networking, Business to Business, Web Development, Development, Web Design, Design, Software Development, Software, South African, South African\'s Web Development, Innovate your web world, your web world, innovate, Web Design in South Africa, Soshanguve, Pretoria, Gauteng">';
		echo '<meta name="description" content="Coram Web Solutions, Coram, Coram Web, Coram Solutions, Solutions, Web, Solutions, Business Networking Marketing, Networking Marketing, Networking, Marketing, Business, Online Business, Online, Network Solutions, Graphics Design, Design, Graphics, Social Networking, Business to Business, Web Development, Development, Web Design, Design, Software Development, Software, South African, South African\'s Web Development, Innovate your web world, your web world, innovate, Web Design in South Africa, Soshanguve, Pretoria, Gauteng">';
		echo '<link rel="shortcut icon" type="x-icon" href="template/images/favicon.png"/>';
		
	}
	
	function connection($error)
	{
		$connection = mysql_connect('Localhost', 'root', '');
		if(!$connection)
			{
			   $error = 'Could not connect to server';
			}
			$database = mysql_select_db("cws", $connection);
			if(!$database)
			{
			   $error = 'Could not connect to database';
			}
		return $error;
	}
	
	function generic_css()
	{
		echo '<link rel="stylesheet" type="text/css" href="template/css/common.css" media="screen" />';
		echo '<link rel="stylesheet" href="template/css/slider/theme.css" type="text/css" media="screen" />';
    	echo '<link rel="stylesheet" href="template/css/slider/nivo-slider.css" type="text/css" media="screen" />';
	}
	
	function homepage_css()
	{
		echo '<link rel="stylesheet" type="text/css" href="template/css/homepage.css" />';
		echo '<link rel="stylesheet" type="text/css" href="template/css/slider/smoothDivScroll.css" />';
	}
	
	function portfolio_css()
	{
		echo '<link rel="stylesheet" type="text/css" href="template/css/portfolio/lightbox.css" media="screen" />';	
		echo '<link rel="stylesheet" type="text/css" href="template/css/portfolio/gallery.css" media="screen" />';	
	}

	function quote_css()
	{
		echo '<link rel="stylesheet" type="text/css" href="template/css/quote/quote.css" />';	
	}
	
	function gen_js()
	{
		echo '<script type="text/javascript" src="template/js/jquery.js"></script>';
	}
	
	function homepage_js()
	{
		echo '<script src="template/js/home/homepage.js"></script>';
		echo '<script src="template/js/home/IE-fix.js"></script>';
		echo '<script src="template/js/slider/jquery-ui-1.8.23.custom.min.js" type="text/javascript"></script>';
		echo '<script src="template/js/slider/jquery.mousewheel.min.js" type="text/javascript"></script>';
		echo '<script src="template/js/slider/jquery.kinetic.js" type="text/javascript"></script>';
		echo '<script src="template/js/slider/jquery.smoothdivscroll-1.3-min.js" type="text/javascript"></script>';
		echo '<script src="template/js/slider/functions.js" type="text/javascript"></script>';
	}
	
	function portfolio_js()
	{
		echo '<script type="text/javascript" src="template/js/portfolio/portfolio.js"></script>';
		echo '<script type="text/javascript" src="template/js/portfolio/function.js"></script>';
		echo '<script src="template/js/portfolio/lightbox.js"></script>';
		echo '<script src="template/js/portfolio/jquery-ui-1.8.18.custom.min.js"></script>';
		echo '<script src="template/js/portfolio/jquery.smooth-scroll.min.js"></script>';
	}
	
	function quote_js()
	{
		echo '<script type="text/javascript" src="template/js/quote/quote.js" ></script>';
		echo '<script type="text/javascript" src="template/js/quote/phone.js" ></script>';
	}
	
	function twitter()
	{
		echo '<script type="text/javascript" src="template/js/twitter/twitter_plugin.js"></script>';
		echo '<script type="text/javascript" src="template/js/twitter/twitter.js" ></script>';
	}
	
	function logo()
	{
		echo '<a href="index.php"><img alt="Coram web Solutions"  src="template/images/cws_logo.png"></a>';
	}
	
	function search()
	{
		echo '<form action="search.php" method="get">';
        echo '	<table class="search">';
        echo "		<tr>
						<td><input onFocus=\"this.value=''\" onBlur=\"if(this.value=='')this.value='Search here'\" type=\"text\" name=\"search_term\" value=\"Search here\"></td>";
      	echo '			<td class="button"><input type="image" src="template/images/img_search.png" title="search" align="middle"></td>';
        echo '		</tr>';
        echo '  </table>';
        echo ' </form>';
	}
	
	function slider()
	{
		echo '<div id="makeMeScrollable">';
		echo '	<img src="template/images/slider/pics/img_slide_2.jpg" alt="Demo image" id="gnome" />';
		echo '	<img src="template/images/slider/pics/img_slide_1.png" alt="Demo image" border="0" usemap="#fieldMap" id="field" />';
        echo '		<map name="fieldMap">';
		echo '			<area shape="rect" coords="3,253,158,290" href="solutions.php" alt="read_more">';
        echo ' 		</map>';
        echo '</div>';
	}
	
	function info_box()
	{
		echo '<table cellpadding="0" cellspacing="0" style="border: 2px #37b0e9 solid; width: 380px;">
				<tr>
					<td style="background:#37b0e9; height: 30px; color:#FFF; padding-left: 15px; font-weight: bold;">View our recent work</td>
				</tr>
				<tr>
					<td style="padding: 5px;" valign="top"><img src="template/images/latest work/edtisa.png" style="border:2px solid #404040; margin-right: 5px; border-radius: 2px;" align="top"><img src="template/images/latest work/poster.png" style="border:2px solid #404040; border-radius: 2px;"><br /></td>
				</tr>
				<tr>
					<td style="padding: 5px;"><img src="template/images/latest work/baa_logo.png"><a href="portfolio.php" title="More Work" style="text-decoration: underline; color:#404040; font-size:11px; font-weight: bold;">View More Work</a> ++</td>
				</tr>
			</table>';
	}
	
	function footer()
	{
		echo '<div id="wrapper">
				<div class="social_link">
					<div class="copyright">@ 2013,  All Rights Reserved</div>
					<div class="social">
						<a href="http://www.facebook.com/coramwebsolutions" title="Coram on Facebook" target="blank"><img src="template/images/img_facebook.png" width="30" height="30" alt="Coram on Facebook"></a>
						<a href="http://plus.google.com/108807570446746453210"title="Coram on Google Plus" target="blank"><img src="template/images/img_googleplus.png" width="30" height="30" alt="Coram on Google Plus"></a>
						<a href="http://twitter.com/coramws" title="Coram on Twitter" target="blank"><img src="template/images/img_twitter.png" width="30" height="30" alt="Coram on Twitter"></a>
					</div>
				</div>
			</div>';
	}
	
	function getPagingQuery($sql, $itemPerPage = 10)
	{
		if (isset($_GET['page']) && (int)$_GET['page'] > 0) {
			$page = (int)$_GET['page'];
		} else {
			$page = 1;
		}
		
		// start fetching from this row number
		$offset = ($page - 1) * $itemPerPage;
		
		return $sql . " LIMIT $offset, $itemPerPage";
	}
	
	function getPagingLink($sql, $itemPerPage = 10, $strGet = '')
	{
		$result        = mysql_query($sql);
		$pagingLink    = '';
		$totalResults  = mysql_num_rows($result);
		$totalPages    = ceil($totalResults / $itemPerPage);
		
		// how many link pages to show
		$numLinks      = 10;
	
			
		// create the paging links only if we have more than one page of results
		if ($totalPages > 1) {
		
			$self = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] ;
			
	
			if (isset($_GET['page']) && (int)$_GET['page'] > 0) {
				$pageNumber = (int)$_GET['page'];
			} else {
				$pageNumber = 1;
			}
			
			// print 'previous' link only if we're not
			// on page one
			if ($pageNumber > 1) {
				$page = $pageNumber - 1;
				if ($page > 1) {
					$prev = "<a href=\"$self?page=$page&$strGet/\" style='text-decoration: none; font-size: 10px;' title=\"Prev Set\">Prev</a> ";
				} else {
					$prev = "<a href=\"$self?$strGet\" style='text-decoration: none; font-size: 10px;' title=\"Prev\">Prev</a> ";
				}	
					
				$first = "<a href=\"$self?$strGet\" style='text-decoration: none; font-size: 10px;' title=\"First\">First</a> ";
			} else {
				$prev  = ''; // we're on page one, don't show 'previous' link
				$first = ''; // nor 'first page' link
			}
		
			// print 'next' link only if we're not
			// on the last page
			if ($pageNumber < $totalPages) {
				$page = $pageNumber + 1;
				$next = " <a href=\"$self?page=$page&$strGet\" style='text-decoration: none; font-size: 10px;' title=\"Next\">Next</a> ";
				$last = "<a href=\"$self?page=$totalPages&$strGet\" style='text-decoration: none; font-size: 10px;' title=\"Last\">Last</a>";
			} else {
				$next = ''; // we're on the last page, don't show 'next' link
				$last = ''; // nor 'last page' link
			}
	
			$start = $pageNumber - ($pageNumber % $numLinks) + 1;
			$end   = $start + $numLinks - 1;		
			
			$end   = min($totalPages, $end);
			
			$pagingLink = array();
			for($page = $start; $page <= $end; $page++)	{
				if ($page == $pageNumber) {
					$pagingLink[] = "<span style='border-bottom: 2px solid #37b0e9; font-size: 10px;'> $page</span>";   // no need to create a link to current page
				} else {
					if ($page == 1) {
						$pagingLink[] = "<a href=\"$self?$strGet\" style='text-decoration: none; font-size: 10px;'>$page</a>";
					} else {	
						$pagingLink[] = "<a href=\"$self?page=$page&$strGet\" style='text-decoration: none; font-size: 10px;'>$page</a>";
					}	
				}
		
			}
			
			$pagingLink = implode('  ', $pagingLink);
			
			// return the page navigation link
			$pagingLink = $first . $prev . $pagingLink . $next . $last;
		}
		
		return $pagingLink;
	}
	
?>