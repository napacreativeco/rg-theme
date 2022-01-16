<?php

/* PANEL */
$wp_customize->add_panel( 'spotlight_product', 
    array(
        'priority'         => 50,
        'title'            => __( 'Spotlight Product', 'rebelgrown' ),
        'description'      => __( 'Spotlight Product in the shop', 'rebelgrown' ),
    ) 
);

/* SECTION */

$wp_customize->add_section( 'dual-left-settings' , array(
    'title'      => __( 'Left', 'aprilrose' ),
    'priority'   => 30,
    'panel'      => 'dual-square-settings'
) );


/* SETTING */

$wp_customize->add_setting( 'dual-left_sub-header' , array(
    'default'   => 'Limited',
    'transport' => 'refresh',
) );

/* CONTROL */

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dual-left_sub-header', array(
    'label'      => __( 'Sub Header', 'aprilrose' ),
    'section'    => 'dual-left-settings',
    'settings'   => 'dual-left_sub-header',
) ) );
