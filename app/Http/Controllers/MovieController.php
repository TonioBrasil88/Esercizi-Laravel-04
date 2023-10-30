<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{

    public $movies = [
    
        [   
            'title' => 'Pirati dei Caraibi', 
            'year' => '2003', 
            'description' => 'La figlia del governatore viene rapita da un pirata malvagio. Will Turner, amico d infanzia della ragazza segretamente innamorato di lei, si unisce a Jack Sparrow, un pirata vagabondo, per portare in salvo la fanciulla.',
            'img' => '/img/maledizione.jpg',
        ],

        [   
            'title' => 'The Matrix', 
            'year' => '1999', 
            'description' => 'Il mondo nel quale Neo è vissuto fin dalla nascita è in realtà Matrix, una neuro-simulazione interattiva costruita sul modello del mondo del 1999 per tenere calmi gli umani coltivati, immobilizzati fin dalla nascita e nutriti con i cadaveri dei defunti.',
            'img' => '/img/matrix.jpg',
        ],

        [   
            'title' => 'Intestellar',
            'year' => '2014', 
            'description' => 'Un gruppo di scienziati è intenzionato a trovare un nuovo pianeta per permettere agli essere umani di sopravvivere. Fra questi, l ingegnere ed ex pilota della NASA Joseph Cooper e la biologa Amelia Brand. Per farlo, Cooper dovrà lasciare la figlia e imbarcarsi in una missione estrema, addentrandosi in un buco nero.',
            'img' => '/img/interstellar.jpg',
        ]


    ];

    public function index (){ 
        return view('movies',[
            'movies' => $this->movies
        ]);                                                                                     
    }     
    
    public function show($title){
        foreach($this->movies as $movie){
            if($movie['title'] == $title){
                return view('show-movies',[
                    'movie' => $movie
                ]);
            }
        }

        abort(404);

    }
}    
    
