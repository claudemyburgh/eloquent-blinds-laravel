<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ContactUs extends Component
{

    public array $users = [
        [
            'name' => 'Hendry Ollewagen',
            'email' => 'hendry@eloquentblinds.co.za',
            'phone' => [
                'formatted' => '+27 (0) 79 419 2812',
                'plain' => '+27794192812'
            ]
        ],
        [
            'name' => 'Claude Myburgh',
            'email' => 'claude@eloquentblinds.co.za',
            'phone' => [
                'formatted' => '+27 (0) 81 719 8302',
                'plain' => '+27817198302'
            ]
        ],
    ];


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.contact-us', [
            'users' => collect($this->users)->all()
        ]);
    }
}
