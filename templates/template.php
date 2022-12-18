<?php

$el = $this->el($props['spacer_element'], [

    'style' => [
        'height:{spacer_height}px'
    ],

]);

echo $el($props, $attrs, '');
