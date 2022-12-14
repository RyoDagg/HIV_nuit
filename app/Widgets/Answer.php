<?php

namespace App\Widgets;
use  App\Models\Results;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class Answer extends BaseDimmer
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
        $count = \App\Models\Results::count();
        $string = trans_choice('voyager::dimmer.result', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-bulb',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager::dimmer.result_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => __('voyager::dimmer.result_link_text'),
                'link' => route('voyager.results.index'),
            ],
            'image' => 'rslt.jpg',
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', Voyager::model('User'));
    }
}
