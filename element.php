<?php

namespace YOOtheme;

return [
    'updates' => [
        '1.0' => function ($node) {
            Arr::updateKeys($node->props, ['maxwidth_align' => 'block_align']);
        },
    ],
];
