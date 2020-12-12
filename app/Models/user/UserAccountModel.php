<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAccountModel extends Model
{
    use HasFactory;

    /** Const Role **/
    const ROLE_ROOT = 99; // システム管理者
    const ROLE_INIT = 0; // 登録時
    const ROLE_GENERAL = 50; // 一般使用者
    const ROLE_ADMIN = 90; // 管理者
    const ROLE_LIST = [
        self::ROLE_INIT => '初期',
        self::ROLE_GENERAL => '一般',
        self::ROLE_ADMIN => '管理者',
    ];

    /** TableName **/
    protected $table = 'user_account_t';

    /** PrimaryKey **/
    protected $primaryKey = 'user_account_id';

    /** fillable **/
    protected $fillable = [
        'account_name',
        'email',
        'password',
        'expire_date',
        'role',
    ];
}
