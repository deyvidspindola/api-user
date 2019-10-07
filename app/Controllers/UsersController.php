<?php


class UsersController
{

    /**
     * @var UserService
     */
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $data = $this->userService->all();
        var_dump($data);
    }

    public function create()
    {
        
    }

    public function store()
    {
        
    }

    public function update()
    {
        
    }

    public function destroy()
    {
        
    }
}