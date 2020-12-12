<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Cartalyst\Sentinel\Native\Facades\Sentinel as Auth;

abstract class AppController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * 認証を必要とするか
     * @return boolean
     */
    protected function _requiredAuthorized()
    {
        return true;
    }

    /**
     * サイドバー非表示判定
     * @return boolean
     */
    protected function _isSideBarHidden()
    {
        return false;
    }

    // View引き渡しデータ
    protected $_response = [];

    /**
     * テンプレート名
     * @var string
     */
    protected $_templateName = '/mypage';

    /**
     * コンストラクタ
     */
    public function __construct()
    {
        // ログインしているか
        if ($this->_requiredAuthorized() && !Auth::check()) redirect()->route('auth/login');

        // サイドバーの表示／非表示
        $this->setView( 'isSideBarHidden', $this->_isSideBarHidden() );

        // サイドバーを表示する場合
        if ( !$this->_isSideBarHidden() ) {
            // サイドバーリスト
            $sidebarList = [
                1 => [
                    'id' => 1,
                    'title' => 'Dashboard',
                    'url' => '/bootstrap/home',
                    'icon' => 'design_app',
                ],
                2 => [
                    'id' => 2,
                    'title' => 'Icons',
                    'url' => '/bootstrap/icons',
                    'icon' => 'education_atom',
                ],
                3 => [
                    'id' => 3,
                    'title' => 'Maps',
                    'url' => '/bootstrap/map',
                    'icon' => 'location_map-big',
                ],
                4 => [
                    'id' => 4,
                    'title' => 'Notifications',
                    'url' => '/bootstrap/notifications',
                    'icon' => 'ui-1_bell-53',
                ],
                5 => [
                    'id' => 5,
                    'title' => 'User Profile',
                    'url' => '/bootstrap/user',
                    'icon' => 'users_single-02',
                ],
                6 => [
                    'id' => 6,
                    'title' => 'Table List',
                    'url' => '/bootstrap/tables',
                    'icon' => 'design_bullet-list-67',
                ],
                7 => [
                    'id' => 7,
                    'title' => 'Typography',
                    'url' => '/bootstrap/typography',
                    'icon' => 'text_caps-small',
                ],
            ];
            $this->setView( 'sidebarList', $sidebarList );
            $this->setView( 'currentSidebar', (isset($sidebarList[ $request->menuId ]) ? $sidebarList[ $request->menuId ] : current( $sidebarList ) ) );
        }
    }

    /**
     * 描画
     */
    protected function render()
    {
        return view($this->_templateName, $this->getViewResponse());
    }

    /**
     * テンプレートへ渡す変数を格納
     * @param mixed $key
     * @param mixed $value
     * @return \App\Http\Controllers\AppController
     */
    public function setView( $key, $value = null )
    {
        $this->_response[ $key ] = $value;
        return $this;
    }

    /**
     * テンプレートへ渡す変数を取得
     */
    public function getViewResponse()
    {
        return $this->_response;
    }
}
