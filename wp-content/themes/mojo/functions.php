<?php
register_sidebar(array(
		'name' => __('First Right Sidebar'),
		'id' => 'first-right-sidebar',
		'description' => 'the widget position in top right',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	));

register_sidebar(array(
		'name' => __('Second Right Sidebar'),
		'id' => 'second-right-sidebar',
		'description' => 'the widget position in bottom right',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	));

register_sidebar(array(
		'name' => __('Header Right'),
		'id' => 'header-right',
		'description' => 'the widget position in header right',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	));