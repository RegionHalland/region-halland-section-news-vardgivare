<?php

	/**
	 * @package Region Halland Section News Vardgivare
	 */
	/*
	Plugin Name: Region Halland Section News Vardgivare
	Description: Sektionsnyheter på en landningsida för vårdgivarwebben
	Version: 1.0.0
	Author: Roland Hydén
	License: Free to use
	Text Domain: regionhalland
	*/

	// Anropa funktion om ACF är installerad & aktiverad
	add_action('acf/init', 'my_acf_add_vg_section_news_field_groups');

	// Lägg till ett formulär
	function my_acf_add_vg_section_news_field_groups() {

		if (function_exists('acf_add_local_field_group')) {
		    acf_add_local_field_group(array(
		    'key' => 'group_5bd01c9054d92',
		    'title' => __('Områdesnyheter', 'halland'),
		    'fields' => array(
		        0 => array(
		            'key' => 'field_5bd024637c48b',
		            'label' => __('Visa områdesnyheter på sidan', 'halland'),
		            'name' => 'show_news',
		            'type' => 'true_false',
		            'instructions' => __('Välj om du vill visa nyheter på denna sidan', 'halland'),
		            'required' => 0,
		            'conditional_logic' => 0,
		            'wrapper' => array(
		                'width' => '',
		                'class' => '',
		                'id' => '',
		            ),
		            'message' => '',
		            'default_value' => 0,
		            'ui' => 0,
		            'ui_on_text' => '',
		            'ui_off_text' => '',
		        ),
		        1 => array(
		            'key' => 'field_5bd0239a72be2',
		            'label' => __('Kategori', 'halland'),
		            'name' => 'news_categories',
		            'type' => 'taxonomy',
		            'instructions' => __('Välj vilka kategorier som du vill visa nyheter från', 'halland'),
		            'required' => 0,
		            'conditional_logic' => array(
		                0 => array(
		                    0 => array(
		                        'field' => 'field_5bd024637c48b',
		                        'operator' => '==',
		                        'value' => '1',
		                    ),
		                ),
		            ),
		            'wrapper' => array(
		                'width' => '',
		                'class' => '',
		                'id' => '',
		            ),
		            'taxonomy' => 'category',
		            'field_type' => 'checkbox',
		            'allow_null' => 0,
		            'add_term' => 1,
		            'save_terms' => 0,
		            'load_terms' => 0,
		            'return_format' => 'id',
		            'multiple' => 0,
		        ),
		    ),
		    'location' => array(
		        0 => array(
		            0 => array(
		                'param' => 'page_template',
		                'operator' => '==',
		                'value' => 'views/template-section-landing.blade.php',
		            ),
		        ),
		    ),
		    'menu_order' => 0,
		    'position' => 'normal',
		    'style' => 'default',
		    'label_placement' => 'top',
		    'instruction_placement' => 'label',
		    'hide_on_screen' => '',
		    'active' => 1,
		    'description' => '',
		));
		}

	}

	// Metod som anropas när pluginen aktiveras
	function region_halland_acf_vg_section_news_activate() {
		// Ingenting just nu...
	}

	// Metod som anropas när pluginen av-aktiveras
	function region_halland_acf_vg_section_news_deactivate() {
		// Ingenting just nu...
	}

	// Aktivera pluginen och anropa metod
	register_activation_hook( __FILE__, 'region_halland_acf_vg_section_news_activate');

	// Av-aktivera pluginen och anropa metod
	register_deactivation_hook( __FILE__, 'region_halland_acf_vg_section_news_deactivate');
?>