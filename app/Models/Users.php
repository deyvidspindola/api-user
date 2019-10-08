<?php
namespace App\Models;

class Users
{

    protected $data = [
        ['id' => 1, 'name' => 'Deyvid', 'age' => 27],
        ['id' => 2, 'name' => 'Thainara', 'age' => 24],
        ['id' => 3, 'name' => 'Murilo', 'age' => 04],
        ['id' => 4, 'name' => 'Angelina', 'age' => 02],
    ];

    public function getData()
    {
        return $this->data;
    }

}