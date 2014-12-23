<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Inherit from another theme
    |--------------------------------------------------------------------------
    |
    | Set up inherit from another if the file is not exists,
    | this is work with "layouts", "partials", "views" and "widgets"
    |
    | [Notice] assets cannot inherit.
    |
    */

    'inherit' => null, //default

    /*
    |--------------------------------------------------------------------------
    | Listener from events
    |--------------------------------------------------------------------------
    |
    | You can hook a theme when event fired on activities
    | this is cool feature to set up a title, meta, default styles and scripts.
    |
    | [Notice] these event can be override by package config.
    |
    */

    'events' => array(

        // Before event inherit from package config and the theme that call before,
        // you can use this event to set meta, breadcrumb template or anything
        // you want inheriting.
        'before' => function($theme)
        {
            $theme->set('logoTitle', 'eSolat Jakim');
            $theme->set('title', 'eSolat Jakim API');
            $theme->set('keywords', 'eSolat Jakim API');
            $theme->set('description', 'eSolat Jakim API');

            // Breadcrumb template.
            // $theme->breadcrumb()->setTemplate('
            //     <ul class="breadcrumb">
            //     @foreach ($crumbs as $i => $crumb)
            //         @if ($i != (count($crumbs) - 1))
            //         <li><a href="{{ $crumb["url"] }}">{{ $crumb["label"] }}</a><span class="divider">/</span></li>
            //         @else
            //         <li class="active">{{ $crumb["label"] }}</li>
            //         @endif
            //     @endforeach
            //     </ul>
            // ');
        },

        // Listen on event before render a theme,
        // this event should call to assign some assets,
        // breadcrumb template.
        'beforeRenderTheme' => function($theme)
        {
            // ie9 compatibility
            $theme->asset()->container('ie9')->usePath()->add('html5shiv', 'js/ie/html5shiv.js');
            $theme->asset()->container('ie9')->usePath()->add('respond', 'js/ie/respond.min.js');
            $theme->asset()->container('ie9')->usePath()->add('excanvas', 'js/ie/excanvas.js');

            // Partial composer.
            // $theme->partialComposer('header', function($view)
            // {
            //     $view->with('auth', Auth::user());
            // });
        },

        // Listen on event before render a layout,
        // this should call to assign style, script for a layout.

        'beforeRenderLayout' => array(

            'blue' => function($theme)
            {
                // styles
                $theme->asset()->usePath()->add('bootstrap', 'css/bootstrap.css');
                $theme->asset()->usePath()->add('animate', 'css/animate.css');
                $theme->asset()->usePath()->add('font-awesome', 'css/font-awesome.min.css');
                $theme->asset()->usePath()->add('font', 'css/font.css');
                $theme->asset()->usePath()->add('bootstrap_calendar', 'js/calendar/bootstrap_calendar.css');
                $theme->asset()->usePath()->add('app', 'css/app.css');
                $theme->asset()->usePath()->add('datepicker-css', 'js/datepicker/datepicker.css');

                // core js
                $theme->asset()->container('core-scripts')->usePath()->add('jquery', 'js/jquery.min.js');
                $theme->asset()->container('core-scripts')->usePath()->add('bootstrap', 'js/bootstrap.js');
                $theme->asset()->container('core-scripts')->usePath()->add('app', 'js/app.js');
                $theme->asset()->container('core-scripts')->usePath()->add('slimscroll', 'js/slimscroll/jquery.slimscroll.min.js');
                $theme->asset()->container('core-scripts')->usePath()->add('sortable', 'js/sortable/jquery.sortable.js');

                // post js
                // $theme->asset()->container('post-scripts')->usePath()->add('custom', 'js/custom.js');
            },

            'error' => function($theme)
            {
                // styles
                $theme->asset()->usePath()->add('bootstrap', 'css/bootstrap.css');
                $theme->asset()->usePath()->add('animate', 'css/animate.css');
                $theme->asset()->usePath()->add('font-awesome', 'css/font-awesome.min.css');
                $theme->asset()->usePath()->add('font', 'css/font.css');
                $theme->asset()->usePath()->add('bootstrap_calendar', 'js/calendar/bootstrap_calendar.css');
                $theme->asset()->usePath()->add('app', 'css/app.css');

                // core js
                $theme->asset()->container('core-scripts')->usePath()->add('jquery', 'js/jquery.min.js');
                $theme->asset()->container('core-scripts')->usePath()->add('bootstrap', 'js/bootstrap.js');
                $theme->asset()->container('core-scripts')->usePath()->add('app', 'js/app.js');
                $theme->asset()->container('core-scripts')->usePath()->add('slimscroll', 'js/slimscroll/jquery.slimscroll.min.js');

            },

        )

    )

);