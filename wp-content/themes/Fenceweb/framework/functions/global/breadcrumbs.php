<?php

// =============================================================================
// FUNCTIONS/GLOBAL/BREADCRUMBS.PHP
// -----------------------------------------------------------------------------
// Sets up the breadcrumb navigation for the theme.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Breadcrumbs
// =============================================================================

// Breadcrumb Delimiter
// =============================================================================

if ( ! function_exists( 'x_get_breadcrumb_delimiter' ) ) :
  function x_get_breadcrumb_delimiter() {

    $is_ltr = ! is_rtl();

    return ' <span class="delimiter"><i class="x-icon-long-arrow-' . ( ( $is_ltr ) ? 'right' : 'left' ) . '" data-x-icon="&#x' . ( ( $is_ltr ) ? 'f178' : 'f177' ) . ';"></i></span> ';

  }
endif;



// Breadcrumb Home Text
// =============================================================================

if ( ! function_exists( 'x_get_breadcrumb_home_text' ) ) :
  function x_get_breadcrumb_home_text() {

    return '<span class="home"><i class="x-icon-home" data-x-icon="&#xf015;"></i></span>';

  }
endif;



// Breadcrumb Current Before
// =============================================================================

if ( ! function_exists( 'x_get_breadcrumb_current_before' ) ) :
  function x_get_breadcrumb_current_before() {

    return '<span class="current">';

  }
endif;



// Breadcrumb Current After
// =============================================================================

if ( ! function_exists( 'x_get_breadcrumb_current_after' ) ) :
  function x_get_breadcrumb_current_after() {

    return '</span>';

  }
endif;
