<?php

/**
 * @file
 * template.php
 */
 
 /*function cignaResponsiveBootstrap_form_alter(&$form, &$form_state, $form_id) {  
		if ($form_id == 'search_block_form') {    
		//$form['search_block_form']['#title'] = t('Search'); // Change the text on the label element    
		//$form['search_block_form']['#title_display'] = 'invisible'; // Toggle label visibilty    
		//$form['search_block_form']['#size'] = 40;  // define size of the textfield    
		//$form['search_block_form']['#default_value'] = t('Search'); // Set a default value for the textfield    
		$form['actions']['submit']['#value'] = t(''); // Change the text on the submit button    
		$form['actions']['submit'] = array('#type' => 'image_button', '#src' => base_path() . path_to_theme() . '/images/searchIcon.gif');
		}
	}*/

function cignaIndonesia_breadcrumb($variables) {  
	//$breadcrumb = $variables['breadcrumb'];  
	$breadcrumb = drupal_get_breadcrumb();
	$breadcrumb = array_unique($breadcrumb);      
	if (!empty($breadcrumb)) {    
		// Provide a navigational heading to give context for breadcrumb links to    
		// screen-reader users. Make the heading invisible with .element-invisible.    
		$output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';    
		$crumbs = '<div class="breadcrumb">';    
		$array_size = count($breadcrumb);    
		$i = 0;    
		if (drupal_get_title()!= "Search"){
			while ( $i < $array_size) {          
				$pos = strpos($breadcrumb[$i], drupal_get_title());      
				//we stop duplicates entering where there is a sub nav based on page jumps      
				if ($pos === false){        
					$crumbs .= '<span class="breadcrumb-' . $i;        
					$crumbs .=  '">' . $breadcrumb[$i] . '</span>';  
					$crumbs .= '<img src="' .base_path() . path_to_theme() . '/images/breadcrumbArrow.gif" width="7" height="6" alt="Breadcrumb arrow" title="Breadcrumb arrow" />';    
					}      
				$i++;    
			}    
	
		$crumbs .= '<span class="active">'. drupal_get_title() .'</span></div>';    
		 
		}
		if (drupal_get_title()== "Search"){
			$crumbs .= '<span class="breadcrumb-0';        
			$crumbs .=  '">' . $breadcrumb[0] . '</span>';  
			$crumbs .= '<img src="' .base_path() . path_to_theme() . '/images/breadcrumbArrow.gif" width="7" height="6" alt="Breadcrumb arrow" title="Breadcrumb arrow" />';  
			$crumbs .= '<span class="active">'. drupal_get_title() .'</span></div>';  
		}
		return $crumbs; 
	}
}

function cignaIndonesia_preprocess_page(&$vars) { 
	if (isset($vars['node']->type)) { 
		$vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type; 
	} 
}

function cignaNewGlobal_preprocess_entity(&$vars){
  	$vars['theme_hook_suggestions'][] = 'entity__homepage_icons';
}