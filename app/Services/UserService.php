<?php
namespace App\Services;

use App\Models\Users;

class UserService
{

    /**
     * @var Users
     */
    private $users;

    public function __construct()
    {
        $this->users = new Users();
    }

    public function all()
    {
        return $this->users->getData();
    }
    
}