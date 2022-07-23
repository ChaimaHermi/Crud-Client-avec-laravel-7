<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client  ;
class ClientController extends Controller
{



    public function showFormClient (){
        return view('AjoutClient' ) ;
    }




    //Ajout dun client
     public function Ajout(Request $request) {

        //traitement d'ajout 
        $c = new Client();
       $c->nom =$request->nom ;
        $c->prenom=$request->prenom ;

        if ($c-> save ()) {
            return redirect('/client/list')->with('msg' , 'client ajouter avec succés');
    
        }
    
    else {
        return'erreur dajout' ;
    
    }




    }

//affichage de la liste 

public function showList () {
    //recuperer les  clients  de la base de données 
    $clients = Client::all() ;
    return view('list')->with ('clients',$clients) ;
}


///supression 

public function delete($id)
{
    $client =  Client::find($id) ;


    if ($client->delete()) {
        return redirect('/client/list')->with('msg' , 'client supprimer avec succés');

    }

else {
    return'erreur de supression' ;

}

}


   ////modification

 public function  edit($id) {

$clients = Client::find($id) ;
return view('edit', compact('clients'));

 }





 
public function update(Request $request , $id) {

    $clients = Client::find($id) ;

    $clients->nom = $request->nom ;
    $clients->prenom = $request->prenom ;



    if ($clients->update()) {
        return redirect('/client/list')->with('msg' , 'client modifier avec succés');

    }

else {
    return'erreur de modification' ;

}
    

}















}
