<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function footerForm(Request $request){

        mail( null , null ,"Новое сообщение из формы обратной связи: Имя: $request->text E-Mail: $request->email Текст сообщения: $request->textarea");
        return redirect()->route('contacts');
    }
}

