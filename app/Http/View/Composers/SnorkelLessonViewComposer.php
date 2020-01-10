<?php 

namespace App\Http\View\Composers;

use Illuminate\Support\Collection;
use Illuminate\View\View;

class SnorkelLessonViewComposer
{
    /**
     * Ligar datos a la vista.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('optionSnorkelLesson', true );       
    }
}