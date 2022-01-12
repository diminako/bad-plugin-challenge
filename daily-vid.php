<?php
/**
 * Plugin Name: Daily Vid, My Dudes
 * Description: Insert a Video Underneath the first H2 of every post relating to that day.
 */

// <iframe width="420" height="315"
// src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&mute=1">
// </iframe>

// make an object of the dates and their associated video.


$weekday = array();

function addVideo( $the_content ) {
        if ( is_single() ) {
            return '<iframe width="560" height="315" src="https://www.youtube.com/embed/du-TY1GUFGk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
    }
}

add_filter( 'the_content', 'addVideo');

