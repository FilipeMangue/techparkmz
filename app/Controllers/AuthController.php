<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Csrf;
use App\Core\Session;
use App\Models\AuditLog;
use App\Models\User;

class AuthController extends Controller
{
    public function loginForm(): void
    {
        $this->view('auth/login', [], 'auth');
    }

    public function login(): void
    {
        Csrf::verify();

        $email = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';

        $user = User::findByEmail($email);

        if (!$user || !password_verify($password, $user['password_hash'])) {
            AuditLog::record('login_failed', 'auth', 'Tentativa falhada de login', ['email' => $email]);
            redirect('login');
        }

        Session::regenerate();
        Session::put('user_id', $user['id']);
        Session::put('user_name', $user['name']);
        Session::put('user_email', $user['email']);
        Session::put('user_role', $user['role']);

        AuditLog::record('login_success', 'auth', 'Login realizado com sucesso');
        redirect('admin');
    }

    public function logout(): void
    {
        Csrf::verify();
        AuditLog::record('logout', 'auth', 'Logout realizado');
        Session::destroy();
        redirect('login');
    }
}
