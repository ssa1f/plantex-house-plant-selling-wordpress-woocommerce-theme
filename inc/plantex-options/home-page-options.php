<?php
    CSF::createSection($option_prefix, array(
        'title'         =>  __('Page', 'plantex'),
        'id'            =>  'page'
    ));

    CSF::createSection($option_prefix, array(
        'parent'        =>  'page',
        'title'         =>  __('Hero Section', 'plantex'),
        'fields'        =>  array(
            array(
                'id'            =>  'hero_title',
                'title'         =>  __('Hero Title', 'plantex'),
                'type'          =>  'wp_editor',
                'media_buttons' =>  false
            ),
            array(
                'id'            =>  'hero_description',
                'title'         =>  __('Hero Description', 'plantex'),
                'type'          =>  'wp_editor',
                'media_buttons' =>  false
            ),
            array(
                'id'            =>  'is_show_hero_button',
                'title'         =>  __('Show Button', 'plantex'),
                'type'          =>  'switcher',
            ),
            array(
                'id'            =>  'hero_button_label',
                'title'         =>  __('Button Label', 'plantex'),
                'type'          =>  'text',
            ),
            array(
                'id'            =>  'button_link',
                'title'         =>  __('Button Link', 'plantex'),
                'type'          =>  'text',
            ),
            array(
                'id'            => 'hero_featured_image',
                'title'         => __('Hero Featured Image', 'plantex'),
                'type'          => 'media',
                'preview'       => true,
                'url'           => true
              ),
        ),
    ));