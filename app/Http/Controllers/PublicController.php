<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    // Mostra la vista welcome
    public function welcome() {
        return view('welcome');
    }

    // Mostra la vista con le card degli studenti
    public function index() {
        $students = [        
            ['id' => 1, 'image'=>'/media/card-1.jpg', 'name'=> 'Raffaele',  'surname'=> 'Ungolo'],
            ['id' => 2, 'image'=>'/media/card-2.jpg', 'name'=> 'Marco',  'surname'=> 'Pipita'],
            ['id' => 3, 'image'=>'/media/card-3.jpg', 'name'=> 'Florenn',  'surname'=> 'Tabayoyong'],
            ['id' => 4, 'image'=>'/media/card-4.jpg', 'name'=> 'Soheila',  'surname'=> 'Mira']
        ];
    
        return view('students', ['items' => $students]);
    }

    // Mostra il dettaglio di un singolo studente
    public function showStudent($id) {

        $students = [        
            ['id' => 1, 'image'=>'/media/card-2.jpg', 'name'=> 'Raffaele',  'surname'=> 'Ungolo'],
            ['id' => 2, 'image'=>'/media/card-4.jpg', 'name'=> 'Marco',  'surname'=> 'Pipita'],
            ['id' => 3, 'image'=>'/media/card-1.jpg', 'name'=> 'Florenn',  'surname'=> 'Tabayoyong'],
            ['id' => 4, 'image'=>'/media/card-3.jpg', 'name'=> 'Soheila',  'surname'=> 'Mira']
        ];
    
        foreach($students as $student) {
            if($id == $student['id']) {
                return view('detail-student', ['student' => $student]);
            }
        }
    }
}
