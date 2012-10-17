<?php

if (is_category()) {

$this_category = get_category($cat);

}

if($this_category->category_parent)

$this_category = wp_list_categories('orderby=id&title_li=&child_of='.$this_category->category_parent."&echo=0"); else

$this_category = wp_list_categories('orderby=id&title_li=&child_of='.$this_category->cat_ID."&echo=0");

if ($this_category) { ?>

<ul>

<?php echo $this_category; ?>

</ul>

<?php } ?>