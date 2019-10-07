<?php


class UserService
{

    /**
     * @var Users
     */
    private $users;

    public function __construct(Users $users)
    {
        $this->users = $users;
    }

    public function all()
    {
        $this->users->getData();
    }
    
}