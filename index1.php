<?php


/**


 * @version		$Id: index.php $


 * @package		Joomla.Site


 * @copyright	Copyright (C) 2009 - 2011 SiteGround.com - All Rights Reserved.


 * @license		GNU General Public License version 3 or later; see LICENSE.txt


    


 *	This program is free software: you can redistribute it and/or modify


 *  it under the terms of the GNU General Public License as published by


 *  the Free Software Foundation, either version 3 of the License, or


 *  (at your option) any later version.





 *  This program is distributed in the hope that it will be useful,


 *  but WITHOUT ANY WARRANTY; without even the implied warranty of


 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the


 *  GNU General Public License for more details.





 *  You should have received a copy of the GNU General Public License


 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.


 */





// No direct access.


defined('_JEXEC') or die;





JHTML::_('behavior.framework', true);





/* The following line gets the application object for things like displaying the site name */


$app = JFactory::getApplication();


$tplparams	= $app->getTemplate(true)->params;


?>


<!DOCTYPE html>


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">


<head>


	<jdoc:include type="head" />


	<!-- The following line loads the template CSS file located in the template folder. -->


	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />


	


	<!-- The following line loads the template JavaScript file located in the template folder. It's blank by default. -->


	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/CreateHTML5Elements.js"></script>


	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery-1.4.4.min.js"></script>


	<script type="text/javascript">jQuery.noConflict();</script>


	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/sgmenu.js"></script>



<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_CO/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-32009951-1']);
  _gaq.push(['_setDomainName', 'techporojects.co']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


</head>


<body class="page_bg">


	<div class="wrapper">


	<header>


		<div class="top-menu">


			<div id="sgmenu">


				<jdoc:include type="modules" name="menuload" />


			</div>


		</div>


		


			<table cellpadding="0" cellspacing="0"><tr><td>




			</td></tr></table>


		


		<div id="search">


			<jdoc:include type="modules" name="position-0" />


		</div>


		


		<div id="img"></div>


	</header>


	


	


	


	<section id="content">
		<?php if ($this->countModules( 'position-7 and position-4' )) : ?>
		<div class="maincol">			 	
		<?php elseif( $this->countModules( 'position-7' ) ) : ?>
		<div class="maincol_w_left">
		<?php elseif( $this->countModules( 'position-4' ) ) : ?>
		<div class="maincol_w_right">
		<?php else: ?>
		<div class="maincol_full">
		<?php endif; ?>


		


		<?php if( $this->countModules('position-7') ) : ?>


			<div class="leftcol">


				<jdoc:include type="modules" name="position-7" style="rounded"/>


			</div>


			<?php endif; ?>


			


				<div class="cont">
						<jdoc:include type="message" />
						<jdoc:include type="component" />
				</div>


			


		<?php if( $this->countModules('position-4') ) : ?>


			<div class="rightcol">


				<jdoc:include type="modules" name="position-4" style="rounded"/>


			</div>


		<?php endif; ?>


		<div class="clr"></div>


		</div>


	</section>


	<footer>


	<div class="content_b">	</div>


	<p style="text-align:center;"><?php $sg = ''; include "templates.php"; ?></p>


	</footer>


	</div>


</body>


</html>