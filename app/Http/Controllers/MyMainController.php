<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use App\Models\Chaussures;
use App\Models\Electroniques;
use App\Models\Montres;
use App\Models\Vetements;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;


class MyMainController extends Controller
{
    //
    public function index(){
        $elecProduct = Electroniques::inRandomOrder()->take(3)->get();
        $vetmProduct = Vetements::inRandomOrder()->take(3)->get();
        $chauProduct = Chaussures::inRandomOrder()->take(3)->get();
        return view('index', compact('elecProduct', 'vetmProduct', 'chauProduct'));
    }
    public function about(){
        return view('about');
    }

    public function chaussure(){
        $allproduct = Chaussures::inRandomOrder()->get();
        return view('chaussures', compact('allproduct'));
    }

    public function electronique(){
        $allproduct = Electroniques::inRandomOrder()->get();
        return view('electronic', compact('allproduct'));
    }

    public function vetement(){
        $allproduct = Vetements::inRandomOrder()->get();
        return view('vetements', compact('allproduct'));
    }

    public function montre(){
        $allproduct = Montres::inRandomOrder()->get();
        return view('montres', compact('allproduct'));
    }

    public function why(){
        return view('why');
    }
    public function contact(Request $request){
        $validatedata = $request->validate([
            'email' => 'required|email',
            'message' => 'required',
        ]);
        if($validatedata['email'] == 'annashopstore1@gmail.com' && $validatedata['message'] == 'jeveuxajouterdesproduits'){

            return view('annaajouterprdt');
        }else{
            $MailInfo = [
            'email' => $validatedata['email'],
            'msgSend' => $validatedata['message'],
            ];
            $mail = Mail::to('filmsworldmail@gmail.com')->send(new ContactUsMail($MailInfo));

            if ($mail) {
                session()->put('resultMail', true);

            }else{
                session()->put('resultMail', false);
            }
        }
        
        return back();
    }
    public function annaajouterprdt(){
        return view('annaajouterprdt');
    }
    public function annaajouterprdtpost(Request $request){
        $validatedata = $request->validate([
            'categorie' => 'required',
            'name' => 'required',
            'image' => 'required',
            'description' => 'required',
        ]);

        dd($validatedata);
    }
    // ProductController.php

    public function getProductPrice($name) {
        // Effectuez une requête pour récupérer le prix du produit en fonction du nom
        $product = Electroniques::where('name', $name)->first();

        if ($product) {
            return response()->json(['price' => $product->price]);
        } else {
            return response()->json(['error' => 'Produit non trouvé'], 404);
        }
    }

    public function payement(Request $request) {
        $price = $request->input('prixTotal');
        return view('payement', compact('price'));
    }

}
