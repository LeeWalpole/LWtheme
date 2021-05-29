<?php 
if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_5f29f83551035',
        'title' => 'Theme Settings',
        'fields' => array(
            array(
                'key' => 'field_5f29f845a8936',
                'label' => 'Primary Color',
                'name' => 'color_primary',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '25',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '#ee0099',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_609502ff7d36d',
                'label' => 'Secondary Color',
                'name' => 'color_secondary',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '25',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '#ff0099',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5f2acf6b54c42',
                'label' => 'Google Analytics',
                'name' => 'google_analytics',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => 'Example: UA-51103247-2',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_6094cf3d05dce',
                'label' => 'Signup HTML',
                'name' => 'signup_html',
                'type' => 'textarea',
                'instructions' => 'Paste custom HTML here',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'new_lines' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-theme-settings',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
    
    endif;
?>

