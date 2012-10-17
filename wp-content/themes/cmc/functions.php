<?php
    if(function_exists('register_sidebar')) {
       register_sidebar(array('name' => 'sidebar',
       'before_title' => '<li>',
       'after_title' => '</li>',
       'before_widget' => "<ul class='side-bar'>",
       'after_widget' => '</ul>',
       )); 
    };?>