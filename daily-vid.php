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

function addVideo( $title ) {
    return '<iframe width="420" height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&mute=1&loop=1"></iframe>';
}

add_filter( 'the_title', 'addVideo');

