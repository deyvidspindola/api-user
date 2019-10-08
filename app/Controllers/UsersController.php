<?php
namespace App\Controllers;


use App\Services\UserService;

class UsersController
{

    /**
     * @var UserService
     */
    private $userService;

    public function __construct()
    {
        $this->userService = new UserService();
    }

    public function index()
    {
        return responseJson($this->userService->all());
    }

    public function create()
    {
        
    }

    public function store($id)
    {
        dd($id);

        echo $id;
    }

    public function update()
    {
        
    }

    public function destroy()
    {
        
    }
}