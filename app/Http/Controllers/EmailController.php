<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function footerForm(Request $request){

        $message = "Новое сообщение из формы обратной связи: Имя: $request->text E-Mail: $request->email Текст сообщения: $request->textarea";

        mail( null , null , $message);
        return redirect()->route('contacts');
    }
}

