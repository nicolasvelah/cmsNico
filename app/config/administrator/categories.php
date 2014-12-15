<?php

/**
 * Users model config
 */

return array(

    'title' => 'Categorías',
    'single' => 'Categoria',
    'model' => 'cmsNico\Entities\Category',

    'columns' => array(
        'id' => array(
            'title' => 'ID',
        ),
        'title' => array(
            'title' => 'Titulo',
        ),
        'description' => array(
            'title' => 'Descripción',
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
    ),
);
