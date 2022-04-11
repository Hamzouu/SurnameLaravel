<?php

namespace App\Http\Controllers;

use App\Models\teacherUsername;



class UsernameController extends Controller{


    //route de la page d'index (inscription)
    public function index(){

        $teacherUsernames = teacherUsername::all();
       

        return view('index', compact('teacherUsernames') );
    }

    //route de la page de modification d'un username (id)
    public function modifyUsername($id){

        //find or fail permet de gerer les erreurs si le contenu que l'on veut afficher n'existe pas 
        $teacherUsername = teacherUsername::findOrFail($id);
      

        // ?? veut dire que si la valeur n'est pas, bonne on affiche "pas de titre"
        //$post = $posts[$id] ?? 'pas de titre';
        //retourne la vue "userParameter"
         return view('userParameter', [

            'teacherUsername' => $teacherUsername
        ]);
    }


    public function login(){

        return view('login');
    }
}