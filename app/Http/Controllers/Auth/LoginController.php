<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{
    public function redirectToGoogle()
{
    return Socialite::driver('google')->redirect();
}

public function handleGoogleCallback()
{
    try {
        // Obter os detalhes do usuário do Google
        $user = Socialite::driver('google')->user();

        // Verificar se o usuário já existe no seu sistema (usando o email, por exemplo)
        $existingUser = User::where('email', $user->email)->first();

        if ($existingUser) {
            // Se o usuário já existe, faça o login
            Auth::login($existingUser);
        } else {
            // Se o usuário não existe, crie um novo registro no banco de dados
            $newUser = new User();
            $newUser->name = $user->name;
            $newUser->email = $user->email;
            $newUser->google_id = $user->id; // Armazene o ID do Google, se necessário
            $newUser->save();

            // Faça o login com o novo usuário
            Auth::login($newUser);
        }

        return redirect('/welcome'); // Redirecione para onde desejar após a autenticação.

    } catch (\Exception $e) {
        // Lida com possíveis erros
        return redirect('/login')->with('error', 'Ocorreu um erro ao fazer login com o Google.');
    }
}

}
