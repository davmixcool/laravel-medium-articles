<?php 

return [
    /*
    |--------------------------------------------------------------------------
    | Customization
    |--------------------------------------------------------------------------
    |
    | 
    |
    */


    //An element to render the widget
    'renderTo' =>  "laravel-medium-widget",


    //A random unique id
    'id' =>  time(),


    //Your medium username
    'username' =>  "",


    //Customize the appearance of your widget
    'layout' => [

        'type' => 'grid', //The way you want your articles to be displayed.

        'limit' => 5, //The number of articles to show.

        'column' => 2, //Define how many columns you want.

        'size' => 'big',//Choose a small picture preview size if you want to show article images at the left side. ( big | small | off )

        'ratio' => 'landscape',//Define an aspect ratio of a picture.

        'pagination' =>'off',//Paginate post per page by displaying a load more button.

        'pagination_text' => 'See More Articles',

    ],


    //Customize what your readers see  //on \ off
    'elements' => [

        'title' => 'on',

        'description' => 'on',

        'author' => 'on',

        'claps' => 'off',

        'fans' => 'off',

        'read_duration' => 'off',

        'pubDate' => 'on',

        'branding' => 'off',

    ],



    //Choose the action you want to execute when a reader clicks on your article
    'target' => [

        'value' => 'external',

        'capture' => [

            'type' => 'popup',

            'style' => 'modal-default', //The popup style to show. (modal-default | modal-full )

            'email' => 'on',

            'name' => 'off',

            'phone' => 'off',

            'message' => 'Drop your details to proceed',

            'button_text' => 'Proceed to Post',

            'webhook_url' => 'http://',

            'placeholder' => 'example@domain.com',

            'success_message' => 'Thank you!',

            'button_animation' => '',

            'webhook_status' => false,

        ]

    ],
   

];