<?php

namespace App\Widgets;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use Arrilot\Widgets\AbstractWidget;
use App\ AcompanhamentoSocial;
class  AcompanhamentoSocialsDinner extends AbstractWidget
{

    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = AcompanhamentoSocial::count();
        $string = trans_choice('AcompanhamentoSocials', $count);
        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-news',
            'title'  => "{$count} {$string}",
            'text'   => "você possui {$count} pedidos de Acompanhamento Social no sistema ",
            'button' => [
                'text' => 'Visualizar',
                'link' => route('voyager.acompanhamento-socials.index'),
            ],
            'image' => asset('storage/widget/acompanhamento.png'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', AcompanhamentoSocial::first());
    }
}
