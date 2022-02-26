<?php

namespace App\Widgets;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class Question extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = \App\Models\Questions::count();
        $string = trans_choice('voyager::dimmer.question', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-question',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager::dimmer.question_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => __('voyager::dimmer.question_link_text'),
                'link' => route('voyager.questions.index'),
            ],
            'image' =>'5159502.jpg',
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', Voyager::model('Post'));
    }
}
