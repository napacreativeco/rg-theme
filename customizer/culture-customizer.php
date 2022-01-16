<?php
/* PANEL */
// $wp_customize->add_panel( 'culture__panel', 
//     array(
//         'priority'         => 50,
//         'title'            => __( 'Culture', 'rebelgrown' ),
//         'description'      => __( 'Setting up the spotlight posts on the Culture homepage. use the post\'s ID, which is found in the URL when editing that post.', 'rebelgrown' ),
//     ) 
// );

/* MAIN POST: SECTION */
$wp_customize->add_section( 'culture__section' , array(
    'title'            => __( 'Culture', 'rebelgrown' ),
    'description'      => __( 'Setting up the spotlight posts on the Culture homepage. use the posts ID, which is found in the URL when editing that post.', 'rebelgrown' ),
    'priority'         => 80,
) );

/* MAIN POST: SETTING */
$wp_customize->add_setting( 'main-post--id' , array(
    'default'   => 63,
    'transport' => 'refresh',
) );

/* MAIN POST: CONTROL */
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'main-post--control', array(
    'label'      => __( 'Main Post', 'rebelgrown' ),
    'section'    => 'culture__section',
    'settings'   => 'main-post--id',
) ) );



/* SUBPOST 1: SETTING */
$wp_customize->add_setting( 'subpost-one--id' , array(
    'default'   => 63,
    'transport' => 'refresh',
) );

/* SUBPOST 1: CONTROL */
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'subpost-one--control', array(
    'label'      => __( 'Sub-Post 1', 'rebelgrown' ),
    'section'    => 'culture__section',
    'settings'   => 'subpost-one--id',
) ) );

/* SUBPOST 1: SETTING */
$wp_customize->add_setting( 'subpost-two--id' , array(
    'default'   => 63,
    'transport' => 'refresh',
) );

/* SUBPOST 1: CONTROL */
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'subpost-two--control', array(
    'label'      => __( 'Sub-Post 2', 'rebelgrown' ),
    'section'    => 'culture__section',
    'settings'   => 'subpost-two--id',
) ) );
