<?php

namespace App\HTTP\Composers;

USE Illuminate\View\View;

class HelloComposer
{
    public function compose(View $view)
    {
        $view->with('view_message', 'this view is "' . $view->getName() . '"!!');
    }
}