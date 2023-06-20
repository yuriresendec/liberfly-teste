<?php

namespace App\Services;

use Config;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class AuthService
{
    public $key;

    public function __construct()
    {
        $this->key = config('jwt.key');
    }

    public function getToken()
    {
        $dados['msg'] = 'Processo Seletivo Liberfly';
        $dados['iat'] = time();
        $dados['exp'] = time() + 3600;

        return ['token' => JWT::encode($dados, $this->key, 'HS256')];
    }
}