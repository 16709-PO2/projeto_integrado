<?php

namespace App\Widgets;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use Arrilot\Widgets\AbstractWidget;
use App\ AlojamentoTemporario;
class  AlojamentoTemporariosDinner extends AbstractWidget
{

    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = AlojamentoTemporario::count();
        $string = trans_choice('AlojamentoTemporarios', $count);
        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-news',
            'title'  => "{$count} {$string}",
            'text'   => "você possui {$count} pedidos de alojamento Temporario no sistema ",
            'button' => [
                'text' => 'Visualizar',
                'link' => route('voyager.alojamento-temporarios.index'),
            ],
            'image' => asset('storage/widget/alojamenttemp.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', AlojamentoTemporario::first());
    }
}
