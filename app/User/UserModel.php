<?php

declare(strict_types=1);

namespace App\User;

use App\Util\Helpers\Password;
use App\Core\Models\Base\MongoModel;

/**
 * Class UserModel
 * @property string $email
 * @property string $password
 * @property string $createdAt
 * @property string $updateAt
 * @package App\Core\Models
 */
class UserModel extends MongoModel
{
    /** @var string */
    protected $collectionNAme = 'users';

    /** @var array */
    protected $rules = [
        'email' => ['required', 'email'],
        'password' => ['required', ['lengthMin', 6]],
    ];

    /**
     * @return bool|string
     */
    public function _beforeSave()
    {
        $this->password = Password::hash($this->password);
        return parent::_beforeSave();
    }
}