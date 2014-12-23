<?php
// My common functions

function set_active($route, $active = 'active')
{
	$menus = explode('.', Theme::getMenu());
	// debug($route, $menus);

    return (($route == $menus[0]) || $route == Theme::getMenu()) ? $active : '';
}

?>