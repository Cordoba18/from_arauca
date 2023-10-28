<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Facades\Excel;
class HomeController extends Controller
{

    function Index(){
        $citys = DB::select('SELECT * FROM citys where id_departament =  3 OR id_departament = 22 OR id_departament = 27 OR id_departament = 6 OR id_departament = 9 OR id_departament = 32');
        return view('welcome' ,compact('citys'));
    }

    function save_participant(Request $request){

        $name = $request->name;
        $nit = $request->nit;
        $address = $request->address;
        $phone = $request->phone;
        $id_city = $request->city;
        $find_participtant = DB::selectOne("SELECT * FROM participants WHERE nit = '$nit'");
        if ($find_participtant) {
            $participant = Participant::find($find_participtant->id);
            $participant->name = $name;
            $participant->nit = $nit;
            $participant->address = $address;
            $participant->phone = $phone;
            $participant->id_city = $id_city;
            $participant->save();
            return redirect()->route('home.show_participant', $nit);
        }else {
            $participant = new Participant();
            $participant->name = $name;
            $participant->nit = $nit;
            $participant->address = $address;
            $participant->phone = $phone;
            $participant->id_city = $id_city;
            $participant->save();
            return redirect()->route('home.show_participant', $nit);
        }

    }

    function show_participant($nit){

        $participant = DB::selectOne("SELECT * FROM participants WHERE nit = '$nit'");
        return view('shows.show_participant' , compact('participant'));
    }

    function participants(){

        $participants = DB::select("SELECT p.id, p.name, p.nit, p.address, p.phone, c.city FROM participants p INNER JOIN citys c ON p.id_city = c.id");
        return view('shows.show_participants_arauca' , compact('participants'));
    }


}
