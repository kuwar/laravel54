<?php
namespace App\Repositories\Contracts;

interface UserInterface
{

    public function getAll();

    public function getById($id);

    public function getByAttribute($attribute, $value);

    public function add();

    public function edit($id);

    public function remove($id);

}