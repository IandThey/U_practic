<?php

namespace App\Http\Controllers;

use App\Helper\Mod;
use App\Models\User;
use Illuminate\Http\Request;

class registerController extends Controller
{
    function register_form(Request $data){
        $data_rip = $data -> all();
        $login = $data_rip['login'];
        $password = $data_rip['password'];
        $surname = $data_rip['surname'];
        $name = $data_rip['name'];
        $patronymic = $data_rip['patronymic'];
        $email = $data_rip['email'];
        $PasswordRepit = $data_rip['PasswordRepit'];
        if($login != '' && $password != '' && $surname != '' && $name != '' && $patronymic != '' && $PasswordRepit != '' && $email != ''){
            $chek_profile = User::where('login',$login)->exists();
            if($password == $PasswordRepit){
                if(strstr($email,'@mail.ru') != false || strstr($email,'@internet.ru') != false || strstr($email,'@bk.ru') != false || strstr($email,'@inbox.ru') != false || strstr($email,'@yandex.ru') != false || strstr($email,'@gmail.com') != false){
                    if($chek_profile == false){
                        if(preg_match('/[a-z]/i',$login) && preg_match('/[А-Яа-я]/', $surname) && preg_match('/[А-Яа-я]/', $name) && preg_match('/[А-Яа-я]/', $patronymic)){
                            if (preg_match("/([%$#<>*=&?]+)/", $login) && preg_match("/([%$#<>*=&?]+)/", $email) && preg_match("/([%$#<>*=&?]+)/", $surname) && preg_match("/([%$#<>*=&?]+)/", $name) && preg_match("/([%$#<>*=&?]+)/", $patronymic)) {
                                Mod::session_message('Недопустимые символы!','warning');
                                return redirect()->route('register');
                            }else{
                                Mod::session_profile_add($login,$password);
                                User::add($data_rip);
                                return redirect()->route('home');
                            }
                        }else{
                            Mod::session_message('Логин на англ, ФИО на рус','warning');
                            return redirect()->route('register');
                        } 
                    }else{
                        Mod::session_message('Пользователь с таким логином уже есть','warning');
                        return redirect()->route('register');
                    }
                }else{
                    Mod::session_message('Email введен не коректно','warning');
                    return redirect()->route('register');
                }
            }else{
                Mod::session_message('Второй пороль не совподает','warning');
                return redirect()->route('register');
            }
        }else{
            Mod::session_message('Не все поля заполнены','warning');
                return redirect()->route('register');
        }
    }

    function login_form(Request $data){
        $data_rip = $data -> all();
        $login = $data_rip['login'];
        $password = $data_rip['password'];
        if($login != '' && $password != ''){
            $chek_profile = User::where('login',$login)->exists();
                    if($chek_profile == false){
                        Mod::session_message('Такого пользователя нет','warning');
                        return redirect()->route('login');
                    }else{
                        if(preg_match('/[a-z]/i',$login)){
                            if (preg_match("/([%$#<>*=&?]+)/", $login) && preg_match("/([%$#<>*=&?]+)/", $password)) {
                                Mod::session_message('Недопустимые символы!','warning');
                                return redirect()->route('login');
                            }else{
                                if(User::access($login, $password)){
                                    Mod::session_profile_add($login, $password);
                                    return redirect()->route('home');
                                }
                            }
                        }else{
                            Mod::session_message('Логин на англ','warning');
                            return redirect()->route('login');
                        } 
                    }
        }else{
            Mod::session_message('Не все поля заполнены','warning');
                return redirect()->route('login');
        }
    }
}
