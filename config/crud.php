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
        'fields' => [
            'title' => [
                'label' => 'Title',
                'type' => 'text',
                'cols' => 8,
            ],
            'published_at' => [
                'label' => 'Published',
                'type' => 'date',
                'cols' => 4,
            ],
            'summary' => [
                'label' => 'Summary',
                'type' => 'textarea',
            ],
            'body' => [
                'label' => 'Body',
                'type' => 'markdown',
            ],
        ]
    ],
];