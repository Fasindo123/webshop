<?php
/**
 * Menu Items
 * All Project Menu
 * @category  Menu List
 */

class Menu{
	
	
			public static $navbarsideleft = array(
		array(
			'path' => 'home', 
			'label' => 'Kezdőlap', 
			'icon' => '<i class="fa fa-home "></i>'
		),
		
		array(
			'path' => 'items', 
			'label' => 'Készlet', 
			'icon' => '<i class="fa fa-archive "></i>'
		),
		
		array(
			'path' => 'categories', 
			'label' => 'Kategóriák', 
			'icon' => '<i class="fa fa-tasks "></i>'
		),
		
		array(
			'path' => 'users', 
			'label' => 'Felhasználók', 
			'icon' => '<i class="fa fa-users "></i>'
		),
		
		array(
			'path' => 'in_cart_items', 
			'label' => 'Kosár', 
			'icon' => '<i class="fa fa-shopping-cart "></i>'
		)
	);
		
	
	
			public static $role = array(
		array(
			"value" => "admin", 
			"label" => "admin", 
		),
		array(
			"value" => "user", 
			"label" => "user", 
		),);
		
}