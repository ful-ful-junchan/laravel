<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\AppController;
use Illuminate\Http\Request;

class LoginController extends AppController
{
    /**
     * 認証を必要とするか
     * @return boolean
     */
    protected function _isAuthorized()
    {
        return false;
    }

    /**
     * サイドバー非表示判定
     * @return boolean
     */
    protected function _isSideBarHidden()
    {
        return true;
    }

    protected $_pageName = 'auth.login';

    /**
     * 初期表示
     */
    public function index()
    {
        $this->render();
    }
}
