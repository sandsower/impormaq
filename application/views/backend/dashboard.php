<!DOCTYPE HTML>


<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Impormaq - Admin Panel</title>
	
	<!-- Imports General CSS and jQuery CSS -->
	<link href="<?php echo base_url(); ?>css/backend/screen.css" rel="stylesheet" media="screen" type="text/css" />
	
	<!-- CSS for Fluid and Fixed Widths - Double to prevent flickering on change -->
	<link href="<?php echo base_url(); ?>css/backend/fixed.css" rel="stylesheet" media="screen" type="text/css" />
	<link href="<?php echo base_url(); ?>css/backend/fixed.css" rel="stylesheet" media="screen" type="text/css" class="width" />
	
	<!-- CSS for Theme Styles - Double to prevent flickering on change -->
	<link href="<?php echo base_url(); ?>css/backend/theme/blue.css" rel="stylesheet" media="screen" type="text/css" />
	<link href="<?php echo base_url(); ?>css/backend/theme/blue.css" rel="stylesheet" media="screen" type="text/css" class="theme" />
	
	<!-- jQuery thats loaded before document ready to prevent flickering - Rest are found at the bottom -->
	<script type="text/javascript" src="<?php echo base_url(); ?>js/backend/jquery-1.4.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/backend/jquery.cookie.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/backend/jquery.styleswitcher.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/backend/jquery.visualize.js"></script>
	
</head>

<body>

<!-- Start: Page Wrap -->
<div id="wrap" class="container_24">
	
	
	<!-- Header Grid Container: Start -->
	<div class="grid_24">
		
		<!-- User Panel: Start -->
		<div id="userpanel">
			
			<!-- User: Start -->
			<ul id="user" class="dropdown">
				<li class="topnav">
					<!-- User Name -->
					<a href="#" class="top icon user">Administrator</a>
					
					<!-- User Dropdown Content: Start -->
					<ul class="subnav">  
			            <li><a href="#" class="icon settings">Settings</a></li>  
			            <li><a href="#messages" class="icon chatbubbles popup">Messages</a></li> 
			            <li><a href="#" class="icon lock">Log out</a></li>  
			        </ul>  
			        <!-- User Dropdown Content: End -->
				</li>
			</ul>
			<!-- User: End -->
			
			<!-- Messages: Start -->
			<ul class="messages">
				<!-- Messages amount with Popup and Tip -->
				<li><a href="#messages" class="newmsg tip popup" title="16 Messages"> <span>16</span></a></li>
			</ul>
			<!-- Messages: End -->
			
			<!-- Messages Popup Content: Start -->
			<div class="box_content padding hide" id="messages">
				div de mensajes
			</div>
			<!-- Messages Popup Content: End -->
			
			<!--
			<ul id="style" class="dropdown right">
				<li class="topnav">
					<a href="#" class="top icon brush">Style</a>
					<ul class="subnav">  
			            <li><a href="#blue" class="icon circle">Blue</a></li>  
			            <li><a href="#red" class="icon circle">Red</a></li> 
			            <li><a href="#dark" class="icon circle">Dark</a></li> 
			            <li><a href="#green" class="icon circle">Green</a></li> 
			            <li><a href="#purple" class="icon circle">Purple</a></li> 
			            <li><a href="#brown" class="icon circle">Brown</a></li> 
			        </ul>  
				</li>
			</ul>
			-->
			
			<!-- Width Switcher: Start -->
			<!--
			<ul id="width" class="dropdown right">
				<li class="topnav">
					<a href="#" class="top icon coverflow">Width</a>
					<ul class="subnav">  
			            <li><a href="#fluid" class="icon coverflow">Fluid</a></li>  
			            <li><a href="#fixed" class="icon coverflow">Fixed</a></li> 
			        </ul>  
				</li>
			</ul>
			-->
			<!-- Width Switcher: End -->
			
		</div>
		<!-- User Panel: End -->
		
		<!-- Header: Start -->
		<div id="header">
				
			<!-- Logo: Start -->
			<a href="dashboard.html" id="logo">Simplpan - Admin Panel</a>
			<!-- Logo: End -->
			
			<!-- Navigation: Start -->
			<ul id="navigation" class="dropdown">
				<li><a class="dashboard active" href="dashboard.html">Maquinaria</a></li>
				
				<!-- Navigation Dropdown Menu Item: Start -->
				<li class="topnav">
					<a class="frames" href="#">Catalogos</a>
					
					<!-- Navigation Dropdown Menu Item Content: Start -->
					<ul class="subnav">
						<li><a href="#" class="icon typography">Clientes</a></li> 
			            <li><a href="#" class="icon blocks">Marcas</a></li>  
			            <li><a href="#" class="icon blocks">Tipos</a></li> 
			        </ul> 
			        <!-- Navigation Dropdown Menu Item Content: End --> 
				</li>
				<!-- Navigation Dropdown Menu Item: End -->
				
				<!-- Navigation Dropdown Menu Item: Start -->
				<li class="topnav">
					<a class="pages" href="#">Modulos</a>
					
					<!-- Navigation Dropdown Menu Item Content: Start -->
					<ul class="subnav">
						<li><a href="#" class="icon list">Ventas</a></li>  
			            <li><a href="#" class="icon pages">Promociones</a></li>  
			            <li><a href="#" class="icon pages">Tabs</a></li>
			        </ul>  
			        <!-- Navigation Dropdown Menu Item Content: End --> 
				</li>
				<!-- Navigation Dropdown Menu Item: End -->
				
				<!-- Navigation Menu Item: Start -->
				<li class="topnav">
					<a class="pages" href="#">Reportes</a>
					
					<!-- Navigation Dropdown Menu Item Content: Start -->
					<ul class="subnav">
						<li><a href="#" class="icon list">Individual</a></li>  
			            <li><a href="#" class="icon pages">Multiple</a></li>  
			        </ul>  
			        <!-- Navigation Dropdown Menu Item Content: End --> 
				</li>
				<!-- Navigation Menu Item: End -->
			</ul>
			<!-- Navigation: End -->
			
		</div>
		<!-- Header: End -->
		
		<!-- Breadcrumb Bar: Start -->
		<div id="breadcrumb">
			
			<!-- Breadcrumb: Start -->
			<ul class="left">
				<li class="icon dashboard"><a href="#">Breadcrumb</a></li>
			</ul>
			<!-- Breadcrumb: End -->
			
			<!-- Breadcrumb Icon Links: Start -->
			<ul class="right">
				<li><a href="#" class="icon support tip" title="FAQ">FAQ</a></li>
				<li><a href="#" class="icon home tip" title="Home">Home</a></li>
			</ul>
			<!-- Breadcrumb Icon Links: End -->
			
		</div>
		<!-- Breadcrumb Bar: End -->
		
	</div>
	<!-- Header Grid Container: End -->


<!-- 100% Box Grid Container: Start -->
<div class="grid_24">
	
	<!-- 
	<div class="notice info">
		<p>Welcome to Simplpan Admin Template! We hope you enjoy your stay and be sure to check out the other pages</p>
	</div>
	 -->
	
	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon time">Quick Links</h2>
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content">
		
		<p class="center">
			<!-- List of big icons for quicklinks -->
			<a href="#news" class="big_button add_news"><span>add news</span></a>
			<a href="#gallery" class="big_button upload"><span>upload</span></a>
			<a href="tables.html" class="big_button add_user"><span>add user</span></a>
			<a href="tables.html" class="big_button add_event"><span>add event</span></a>
			<a href="#messages" class="big_button new_pm popup"><span>new pm</span></a>
			<a href="typography.html" class="big_button support"><span>support</span></a>
		</p>
		
	</div>
	<!-- Box Content: End -->
	
</div>




<!-- 100% Box Grid Container: Start -->
<div class="grid_24">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<a name="news"></a>
		<h2 class="icon pages">Maquinaria<span class="tip" title="Tips can be added everywhere">232</span></h2>
		
		<!-- Tab Select: Start -->
		<ul class="sorting">
			<li><a href="#listing" class="active">Listing</a></li>
			<li><a href="#addnews">Add News</a></li>
		</ul>
		<!-- Tab Select: End -->
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content">
		
		<!-- News Table Tabs: Start -->
		<div class="tabs">
		
			<!-- News Sorting Table: Start -->
			<div id="listing">
				
				<table class="sorting">
					<thead>
						<tr>
							<th class="checkers"><input type="checkbox" class="checkall" /></th>
							<th class="align_left">Title</th>
							<th class="align_left center">Author</th>
							<th class="align_left center">Views</th>
							<th class="align_left center">Comments</th>
							<th class="align_left center">Added</th>
							<th class="align_left center tools">Tools</th>
						</tr>
					</thead>
					<tbody>
						
						<tr>
							<th class="checkers"><input type="checkbox" /></th>
							<td class="align_left"><a href="#">Some technical issues</a></td>
							<td class="align_left center"><a href="#messages" class="popup">Kasper</a></td>
							<td class="align_left center">12</td>
							<td class="align_left center">3</td>
							<td class="align_left center">1 hour ago</td>
							<td class="align_left tools center">
								<a href="#" class="edit tip" title="edit">edit</a>
								<a href="#" class="view tip" title="view">view</a>
								<a href="#" class="delete tip" title="delete">delete</a>
							</td>
						</tr>
						
						<tr>
							<th class="checkers"><input type="checkbox" /></th>
							<td class="align_left"><a href="#">The new ipad is out!</a></td>
							<td class="align_left center"><a href="#messages" class="popup">Kasper</a></td>
							<td class="align_left center">67</td>
							<td class="align_left center">23</td>
							<td class="align_left center">5 hours ago</td>
							<td class="align_left center tools">
								<a href="#" class="edit tip" title="edit">edit</a>
								<a href="#" class="view tip" title="view">view</a>
								<a href="#" class="delete tip" title="delete">delete</a>
							</td>
						</tr>
						
						<tr>
							<th class="checkers"><input type="checkbox" /></th>
							<td class="align_left"><a href="#">Something just happend!</a></td>
							<td class="align_left center"><a href="#messages" class="popup">Dannie</a></td>
							<td class="align_left center">145</td>
							<td class="align_left center">21</td>
							<td class="align_left center">10 hours ago</td>
							<td class="align_left tools center">
								<a href="#" class="edit tip" title="edit">edit</a>
								<a href="#" class="view tip" title="view">view</a>
								<a href="#" class="delete tip" title="delete">delete</a>
							</td>
						</tr>
						
						<tr>
							<th class="checkers"><input type="checkbox" /></th>
							<td class="align_left"><a href="#">Check this out</a></td>
							<td class="align_left center"><a href="#messages" class="popup">Dannie</a></td>
							<td class="align_left center">67</td>
							<td class="align_left center">43</td>
							<td class="align_left center">13 hours ago</td>
							<td class="align_left tools center">
								<a href="#" class="edit tip" title="edit">edit</a>
								<a href="#" class="view tip" title="view">view</a>
								<a href="#" class="delete tip" title="delete">delete</a>
							</td>
						</tr>
						
						<tr>
							<th class="checkers"><input type="checkbox" /></th>
							<td class="align_left"><a href="#">Just got the new iPhone</a></td>
							<td class="align_left center"><a href="#messages" class="popup">Joakim</a></td>
							<td class="align_left center">453</td>
							<td class="align_left center">64</td>
							<td class="align_left center">1 day ago</td>
							<td class="align_left tools center">
								<a href="#" class="edit tip" title="edit">edit</a>
								<a href="#" class="view tip" title="view">view</a>
								<a href="#" class="delete tip" title="delete">delete</a>
							</td>
						</tr>
						
						<tr>
							<th class="checkers"><input type="checkbox" /></th>
							<td class="align_left"><a href="#">Working on this project</a></td>
							<td class="align_left center"><a href="#messages" class="popup">Einar</a></td>
							<td class="align_left center">565</td>
							<td class="align_left center">34</td>
							<td class="align_left center">1 day ago</td>
							<td class="align_left tools center">
								<a href="#" class="edit tip" title="edit">edit</a>
								<a href="#" class="view tip" title="view">view</a>
								<a href="#" class="delete tip" title="delete">delete</a>
							</td>
						</tr>
						
						<tr>
							<th class="checkers"><input type="checkbox" /></th>
							<td class="align_left"><a href="#">Have some great news!</a></td>
							<td class="align_left center"><a href="#messages" class="popup">Dannie</a></td>
							<td class="align_left center">565</td>
							<td class="align_left center">12</td>
							<td class="align_left center">2 days ago</td>
							<td class="align_left tools center">
								<a href="#" class="edit tip" title="edit">edit</a>
								<a href="#" class="view tip" title="view">view</a>
								<a href="#" class="delete tip" title="delete">delete</a>
							</td>
						</tr>
						
						<tr>
							<th class="checkers"><input type="checkbox" /></th>
							<td class="align_left"><a href="#">Wondering what</a></td>
							<td class="align_left center"><a href="#messages" class="popup">Jessie</a></td>
							<td class="align_left center">5765</td>
							<td class="align_left center">322</td>
							<td class="align_left center">3 days ago</td>
							<td class="align_left tools center">
								<a href="#" class="edit tip" title="edit">edit</a>
								<a href="#" class="view tip" title="view">view</a>
								<a href="#" class="delete tip" title="delete">delete</a>
							</td>
						</tr>
						
						<tr>
							<th class="checkers"><input type="checkbox" /></th>
							<td class="align_left"><a href="#">How could this be</a></td>
							<td class="align_left center"><a href="#messages" class="popup">Dannie</a></td>
							<td class="align_left center">367</td>
							<td class="align_left center">32</td>
							<td class="align_left center">3 days ago</td>
							<td class="align_left tools center">
								<a href="#" class="edit tip" title="edit">edit</a>
								<a href="#" class="view tip" title="view">view</a>
								<a href="#" class="delete tip" title="delete">delete</a>
							</td>
						</tr>
						
						<tr>
							<th class="checkers"><input type="checkbox" /></th>
							<td class="align_left"><a href="#">Did anyone watch this?</a></td>
							<td class="align_left center"><a href="#messages" class="popup">Kasper</a></td>
							<td class="align_left center">3464</td>
							<td class="align_left center">54</td>
							<td class="align_left center">4 days ago</td>
							<td class="align_left tools center">
								<a href="#" class="edit tip" title="edit">edit</a>
								<a href="#" class="view tip" title="view">view</a>
								<a href="#" class="delete tip" title="delete">delete</a>
							</td>
						</tr>
						
						<tr>
							<th class="checkers"><input type="checkbox" /></th>
							<td class="align_left"><a href="#">Working on this</a></td>
							<td class="align_left center"><a href="#messages" class="popup">Janne</a></td>
							<td class="align_left center">673</td>
							<td class="align_left center">423</td>
							<td class="align_left center">5 days ago</td>
							<td class="align_left tools center">
								<a href="#" class="edit tip" title="edit">edit</a>
								<a href="#" class="view tip" title="view">view</a>
								<a href="#" class="delete tip" title="delete">delete</a>
							</td>
						</tr>
						
						<tr>
							<th class="checkers"><input type="checkbox" /></th>
							<td class="align_left"><a href="#">And we're live again!</a></td>
							<td class="align_left center"><a href="#messages" class="popup">Administrator</a></td>
							<td class="align_left center">2351</td>
							<td class="align_left center">13</td>
							<td class="align_left center">6 days ago</td>
							<td class="align_left tools center">
								<a href="#" class="edit tip" title="edit">edit</a>
								<a href="#" class="view tip" title="view">view</a>
								<a href="#" class="delete tip" title="delete">delete</a>
							</td>
						</tr>
						
						<tr>
							<th class="checkers"><input type="checkbox" /></th>
							<td class="align_left"><a href="#">Bought the new iMac!</a></td>
							<td class="align_left center"><a href="#messages" class="popup">Janne</a></td>
							<td class="align_left center">564</td>
							<td class="align_left center">65</td>
							<td class="align_left center">6 days ago</td>
							<td class="align_left tools center">
								<a href="#" class="edit tip" title="edit">edit</a>
								<a href="#" class="view tip" title="view">view</a>
								<a href="#" class="delete tip" title="delete">delete</a>
							</td>
						</tr>
						
						<tr>
							<th class="checkers"><input type="checkbox" /></th>
							<td class="align_left"><a href="#">We changed some things</a></td>
							<td class="align_left center"><a href="#messages" class="popup">Bob</a></td>
							<td class="align_left center">6443</td>
							<td class="align_left center">75</td>
							<td class="align_left center">7 days ago</td>
							<td class="align_left tools center">
								<a href="#" class="edit tip" title="edit">edit</a>
								<a href="#" class="view tip" title="view">view</a>
								<a href="#" class="delete tip" title="delete">delete</a>
							</td>
						</tr>
						
					</tbody>
				</table> 
				
				<!-- News Sorting Table Actions: Start -->
				<div class="table_actions">
					<input type="checkbox" class="checkall" />
					
					<select>
						<option>Choose action</option>
						<option>Delete</option>
						<option>Edit</option>
					</select>
					
					<button class="left">Apply to Selected</button>
				</div>
				<!-- News Sorting Table Actions: End -->
				
			</div>
			<!-- News Sorting Table: End -->
			
			<!-- News Sorting Table - Add News Tab: Start -->
			<div id="addnews" class="padding">
				
				<p class="note">
					<span class="icon info"></span> 
					You could setup your news adding page like this so users can easily add news without going to a new page
				</p>
				
				<div class="field">
					<label class="left">News Title</label>
					<input type="text" class="left validate">
					<p class="error left small nomargin">
						<span class="icon cross"></span> 
						Let the users know what the problem is
					</p>
				</div>
				
				<div class="field">
					<label class="left">Tags</label>
					<input type="text" class="left validate tip-stay" title="Add a tip for focus!">
					<p class="info left small nomargin">
						<span class="icon info"></span> 
						Or some information about what they should write
					</p>
				</div>
				
				<div class="field">
					<label>News Content</label>
					<textarea class="wysiwyg"></textarea>
				</div>
			  
			  <button>Publish News</button>
			  <button class="secondary" type="reset">Reset</button>
			  <button disabled="">Disabled Button</button>
				
			</div>
			<!-- News Sorting Table - Add News Tab: End -->
		
		</div>
		<!-- News Table Tabs: End -->

	</div>
	<!-- Box Content: End -->
	
</div>
<!-- 100% Box Grid Container: End -->


<!-- 75% Box Grid Container: Start -->
<div class="grid_16">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon graph">Latest Activity</h2>
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content">
		
		<!-- Stats Table: Start -->
		<table>
			
			<tr>
				<td>
					<span class="icon pictures"></span>
					<a href="#">Kasper</a> added the image <a href="#">My Kitten</a> to the <a href="#">Cats</a> gallery
				</td>
				<td class="right_end small">22 hours ago</td>
			</tr>
			
			
		</table>
		<!-- Stats Table: End -->

		<!-- Pagination: Start -->
		<ul class="pagination right">
			<li><a href="#" class="active">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
			<li><a href="#">Next</a></li>
		</ul>
		<!-- Pagination: End -->

	</div>
	<!-- Box Content: End -->
	
</div>
<!-- 75% Box Grid Container: End -->



<!-- Footer Grid: Start -->
<div class="grid_24">

	<!-- Footer: Start -->
	<div id="footer">
		
		<p class="left">
			Copyright &#169; 2011 <a href="#">Impormaq</a>. 
			Powered by <a href="http://www.carlos.bolan0s.com">Garrison</a>.
		</p>
	</div>
	<!-- Footer: End -->
	
</div>
<!-- Footer Grid: End -->

</div>
<!-- End: Page Wrap -->

	<!-- jQuery libs - Rest are found in the head section (at top) -->
	<script type="text/javascript" src="<?php echo base_url(); ?>js/backend/jquery.visualize-tooltip.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/backend/jquery-animate-css-rotate-scale.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/backend/jquery-ui-1.8.13.custom.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/backend/jquery.poshytip.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/backend/jquery.quicksand.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/backend/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/backend/jquery.facebox.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/backend/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/backend/jquery.wysiwyg.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/backend/syntaxHighlighter/shCore.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/backend/syntaxHighlighter/shBrushXml.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/backend/syntaxHighlighter/shBrushJScript.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/backend/syntaxHighlighter/shBrushCss.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/backend/syntaxHighlighter/shBrushPhp.js"></script>
	
	<!-- jQuery Customization -->
	<script type="text/javascript" src="<?php echo base_url(); ?>js/backend/custom.js"></script>

</body>

</html>