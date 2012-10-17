<a href="<?php bloginfo('home')?>"> <img src="<?php echo bloginfo('template_directory').'/images/cmcinfosec-logo.png';?>"/></a>
		<div class="span1 text">
			<h3><?php bloginfo('name');?></h3>
			<span><?php bloginfo('description')?></span>
		</div>
	
</div>
<img src="<?php echo bloginfo('template_directory') . '/images/search-icon.png';?>"/>
		<?php get_search_form();?>
<div class="clear"></div>
<div id="mainMenu" class="main-menu">
	<div class="menu">
		<ul id="coolMenu" class="main_menu">
			<li id="menuItem_1" class="active">
				
					<a href="<?php bloginfo('home')?>"><img src="<?php echo bloginfo('template_directory') . '/images/mainmenu-logo.png'?>" class="mainMenuLogo-img" /></a>
				<ul class="noJS">
					<li><?php wp_list_pages('title_li='); ?></li>
				</ul>
			</li>
			

			<li><?php wp_list_categories('title_li='); ?></li>

		</ul>
	</div>
</div>