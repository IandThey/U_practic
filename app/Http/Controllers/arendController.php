<?php

namespace App\Http\Controllers;

use App\Helper\Mod;
use App\Models\Arend;
use Illuminate\Http\Request;

class arendController extends Controller
{
    function arend(Request $data){
        $data_rip = $data -> all();
        $login = session('login');
        $name = $data_rip['name'];
        $price = $data_rip['price'];
        $time = $data_rip['time'];
        if($login == null){
            Mod::session_message('Вы не вошли','warning');
            return redirect()->route('home');
        }else{
            if(Arend::where('name', $name)->exists()){
                Mod::session_message('Вы уже заказывали данную машину','warning');
                return redirect()->route('home');
            }else{
                $pricee = $price*$time;
                $data_rip['price'] = $pricee;
                $data_rip['login'] = $login;
                Arend::add($data_rip);
                return redirect()->route('kabinet');
            }
        }
        
    }

    function kabinet(){
        $login = session('login');
        if($login == null){
            return redirect()->route('home');
        }else{
            $allMachines = Arend::where('login', $login)->get();
            return view('kabinet' ,['mass' => $allMachines]);
        }
    }
}
