<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    public $shows = [ 
        [   
            'title' => 'The Big Bang Theory', 
            'year' => '2007', 
            'description' => 'Ideata da Chuck Lorre e Bill Prady, e interpretata principalmente da Johnny Galecki, Jim Parsons e Kaley Cuoco, la serie racconta in maniera ironica le vicende quotidiane di un gruppo di giovani scienziati e di come la loro condizione di nerd e geek ne influenzi i rapporti con il mondo circostante.',
            'img' => '/img/BBT.jpg',
        ],

        [   
            'title' => 'Finge', 
            'year' => '1999', 
            'description' => 'Ideata da J.J. Abrams, Alex Kurtzman e Roberto Orci, è una serie di fantascienza che segue le vicende della divisione Fringe dell FBI di Boston, in Massachusetts, e che opera sotto la supervisione del Dipartimento della Sicurezza Interna degli Stati Uniti.',
            'img' => '/img/fringe.jpg',
        ],

        [   
            'title' => 'Shameless',
            'year' => '2011', 
            'description' => 'Un gruppo di scienziati è intenzionato a trovare un nuovo pianeta per permettere agli essere umani di sopravvivere. Fra questi, l ingegnere ed ex pilota della NASA Joseph Cooper e la biologa Amelia Brand. Per farlo, Cooper dovrà lasciare la figlia e imbarcarsi in una missione estrema, addentrandosi in un buco nero.',
            'img' => '/img/shameless.jpg',
        ]

    ];

    public function index() { 
        return view('shows',[ 
            'series' => $this->shows
        ]);  
    }
    
    public function show($title){
        foreach ($this->shows as $show) {
            if($title == $show['title']){
                return view('show-series',[
                    'show' => $show
                ]);
            }
        }

        abort(404);
    }

}
