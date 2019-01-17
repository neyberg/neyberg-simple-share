<?php
    /**
     * Plugin Name: Neyberg simple share
     * Description: Add set of social share buttons (facebook, twitter, pinterest) in the end of each published article.
     * Plugin URI: neyberg.com
     * Version:  1.0
     * Author: Neyberg
     * Author URI: neyberg.com
     * License:  GPL2
     */

    /**
     * Social media share buttons
     */
    function neyberg_share_buttons()
    {
        $url = urlencode( get_the_permalink() );
        $title = urlencode( html_entity_decode( get_the_title(), ENT_COMPAT, 'UTF-8' ) );
        $media = urlencode( get_the_post_thumbnail_url( get_the_ID(), 'full' ) );

        include( plugin_dir_path( __FILE__ ) . 'share-template.php' );
    }