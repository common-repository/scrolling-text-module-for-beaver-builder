<?php

class TTBasicHscrollModule extends FLBuilderModule {
    public function __construct() {
        parent::__construct( array(
            'name'          => __('Basic Horizontal Scroll', 'tt-module'),
            'description'   => __('A basic horizontal marquee.', 'tt-module'),
            'category'		=> __('Creative Modules', 'tt-module'),
            'dir'           => TT_MODULE_SCROLL_DIR . 'modules/basic-hscroll/',
            'url'           => TT_MODULE_SCROLL_URL . 'modules/basic-hscroll/',
        ));
    }
}

FLBuilder::register_module('TTBasicHscrollModule', array(
    'general'       => array(
        'title'         => __('General', 'tt-module'),
        'sections'      => array(
            'general'       => array(
                'title'         => __('Scroll Options', 'tt-module'), 
                'fields'        => array(
                    'hscroll_text_field' => array(
                        'type'          => 'textarea',
                        'label'         => __('Scrolling Text', 'tt-module'),
                        'default'       => '',
                        'placeholder'   => __('Text to Scroll', 'tt-module'),
                        'rows'          => '6',
                        'preview'         => array(
                            'type'             => 'text',
                            'selector'         => '.marquee-text'  
                        )
                    ),
                    'hscroll_text_color_field'    => array(
                        'type'          => 'color',
                        'label'         => __('Text Color', 'tt-module'),
                        'default'       => '000000',
                        'show_reset'    => true,
                        'preview'         => array(
                            'type'            => 'css',
                            'selector'        => '.tt-marquee-container',
                            'property'        => 'color'
                        )
                    ),
                    'hscroll_bg_color_field'    => array(
                        'type'          => 'color',
                        'label'         => __('Background Color', 'tt-module'),
                        'default'       => 'transparent',
                        'show_reset'    => true,
                        'preview'         => array(
                            'type'            => 'css',
                            'selector'        => '.tt-marquee-container',
                            'property'        => 'background-color'
                        )
                    ),
                    'hscroll_duration' => array(
                      'type'        => 'unit',
                      'label'       => 'Scroll Duration',
                      'description' => 'ms',
                      'default' => '30000'
                    ),
                    'hscroll_hover' => array(
                      'type'          => 'select',
                      'label'         => __( 'Pause on hover?', 'fl-builder' ),
                      'default'       => 'true',
                      'options'       => array(
                        'true'      => __( 'True', 'fl-builder' ),
                        'false'      => __( 'False', 'fl-builder' )
                      )
                    )
                )
            )
        )
    )
));