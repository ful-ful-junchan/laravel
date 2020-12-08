<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class AppController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * 認証を必要とするか
     * @return boolean
     */
    protected function isAuthorized()
    {
        return true;
    }

    /**
     * コンストラクタ
     */
    public function __construct()
    {
        exit();

        // ログインしているか
        if ($this->isAuthorized()) redirect()->route('auth/login');
    }
}
