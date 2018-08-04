#!/usr/bin/env php
<?php
foreach(glob("*.css") as $css){
    echo "wp_enqueue_style( 'wptheme-{$css}', get_template_directory_uri().'/css/{$css}',null,'1.0');\n";
}