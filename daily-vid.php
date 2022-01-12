<?php
/**
 * Plugin Name: Daily Vid, My Dudes
 * Description: Insert a Video Underneath the first H2 of every post relating to that day.
 */


// make an object of the dates and their associated video.

// depending on the day of the week change the video
// $dayOfWeek = the_weekday();


// function that replaces content with video
function addVideo( $the_content ) {

        if ( is_single() ) {
            return '<iframe width="560" height="315" src="https://www.youtube.com/embed/du-TY1GUFGk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
    }
}

add_filter( 'the_content', 'addVideo');

