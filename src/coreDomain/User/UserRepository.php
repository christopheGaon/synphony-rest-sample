<?php
/**
 * Created by PhpStorm.
 * User: kokoala
 * Date: 28/04/2017
 * Time: 14:10
 */

namespace coreDomain\User;


interface UserRepository
{
    public function find(string $userId);

    public function findAll();

    public function add(User $user);

    public function remove(User $user);
}