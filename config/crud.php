<?php

return [
    'post' => [
        'model' => \App\Post::class,
        'order_by' => 'published_at|desc',
        'entity_name' => 'post',
        'entity_title' => [' Post', 'Posts'], // singular, plural
        'columns' => [
            'title' => 'Title',
        ],
    ],
];