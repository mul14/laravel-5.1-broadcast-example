<?php namespace App\Http\Controllers;

use App\Events\UserRegisteredEvent;
use App\Http\Requests\RegistrationRequest;
use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration');
    }

    public function store(RegistrationRequest $request)
    {
        $user = User::register($request->all());

        // Kirim notifikasi
        // 1) Notifikasi SMS
        // 2) Notifikasi email
        // 3) Notifikasi ke dashboard admin via web socket
        event(new UserRegisteredEvent($user));

        return redirect()->back()
            ->withSuccess("Thanks, your email {$user->email} successfully registered");
    }
}
