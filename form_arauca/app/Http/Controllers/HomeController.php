<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ParticipantsExport;

class HomeController extends Controller
{

    public function Index(){
        $citys = DB::select('SELECT * FROM citys where id =  128');
        $neighborhoods = DB::select("SELECT  * FROM neighborhoods n");
        return view('welcome' ,compact('citys', 'neighborhoods'));
    }

    public function save_participant(Request $request){

        $name = $request->name;
        $nit = $request->nit;
        $phone = $request->phone;
        $id_city = $request->city;
        $id_neighborhood = $request->neighborhood;
        $find_participtant = DB::selectOne("SELECT * FROM participants WHERE nit = '$nit'");
        if ($find_participtant) {
            $participant = Participant::find($find_participtant->id);
            $participant->name = $name;
            $participant->nit = $nit;
            $participant->phone = $phone;
            $participant->id_city = $id_city;
            $participant->id_neighborhood = $id_neighborhood;
            $participant->save();
            return redirect()->route('home.show_participant', $nit);
        }else {
            $participant = new Participant();
            $participant->name = $name;
            $participant->nit = $nit;
            $participant->phone = $phone;
            $participant->id_city = $id_city;
            $participant->id_neighborhood = $id_neighborhood;
            $participant->save();
            return redirect()->route('home.show_participant', $nit);
        }

    }

    public function show_participant($nit){

        $participant = DB::selectOne("SELECT * FROM participants WHERE nit = '$nit'");
        return view('shows.show_participant' , compact('participant'));
    }

    public function participants(){

        $participants = DB::select("SELECT p.id, p.name, p.nit, p.phone, c.city, n.neighborhood FROM participants p
        INNER JOIN neighborhoods n ON p.id_neighborhood = n.id
         INNER JOIN citys c ON p.id_city = c.id");
        return view('shows.show_participants_arauca' , compact('participants'));
    }

    public function get_participants(){

        {
            return Excel::download(new ParticipantsExport, 'Participantes_Arauca.xlsx');
        }
    }

    public function get_code(Request $request){


        $code = DB::selectOne("SELECT c.code FROM codes c");

        return response()->json(['code' => $code], 200);
    }

    public function terminos_condiciones(){

        return view('shows.show_tyc');
    }

}
