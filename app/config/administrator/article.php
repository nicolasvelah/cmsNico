<?php

/**
 * Users model config
 */

return array(

    'title' => 'Artículos',
    'single' => 'Artículo',
    'model' => 'cmsNico\Entities\Article',

    'columns' => array(
        'title' => array(
            'title' => 'Titulo',
        ),
        'cat_id' => array(
            'title' => 'Categoria',
        ),
        'slug' => array(
            'title' => 'Slug',
        ),
    ),

    'edit_fields' => array(
        'title' => array(
            'title' => 'Titulo',
            'type' => 'text',
        ),
        'description' => array(
            'title' => 'Descripción',
            'type' => 'text',
        ),
        'slug' => array(
            'title' => 'slug',
            'type' => 'text',
        ),
        'cat_id' => array(
            'title' => 'Categoria',
            'type' => 'text',
        ),
    ),
);
