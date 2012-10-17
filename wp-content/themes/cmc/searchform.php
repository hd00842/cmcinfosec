<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
  <div class="span5 search">
 <span>Diễn Đàn CMC InfoSec</span>
		<img src="images/search-icon.png">
    <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" class="search-input"/>
    <input type="submit" id="searchsubmit" value="Ok" class="btn btn-custom" />
  </div>
</form>