<?php

namespace App\Widgets;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use Arrilot\Widgets\AbstractWidget;
use App\ AjudaAlimentar;
class  ajudaalimentarsDinner extends AbstractWidget
{

    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = AjudaAlimentar::count();
        $string = trans_choice('AjudaAlimentars', $count);
        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-news',
            'title'  => "{$count} {$string}",
            'text'   => "você possui {$count} pedidos de Ajuda Alimentar no sistema ",
            'button' => [
                'text' => 'Visualizar',
                'link' => route('voyager.ajuda-alimentars.index'),
            ],
            'image' => asset('storage/widget/alimentar.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', AjudaAlimentar::first());
    }
}
