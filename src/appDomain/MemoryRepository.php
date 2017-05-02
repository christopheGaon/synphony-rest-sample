<?php
/**
 * Created by PhpStorm.
 * User: kokoala
 * Date: 28/04/2017
 * Time: 14:13
 */

namespace appDomain;


use coreDomain\User\User;
use coreDomain\User\UserRepository;

class MemoryRepository implements UserRepository
{
    private $users;

    /**
     * MemoryRepository constructor.
     */
    public function __construct()
    {
        $this->users[] = new User(
            '8CE05088-ED1F-43E9-A415-3B3792655A9B', 'John', 'Doe'
        );
        $this->users[] = new User(
            '62A0CEB4-0403-4AA6-A6CD-1EE808AD4D23', 'Jean', 'Bon'
        );
    }

    /**
     * @param string $userId
     * @return mixed
     */
    public function find(string $userId)
    {
        // TODO: Implement find() method.
    }

    /**
     * @return mixed
     */
    public function findAll()
    {
        // TODO: Implement findAll() method.
        return $this->users;
    }

    /**
     * @param User $user
     * @return mixed
     */
    public function add(User $user)
    {
        // TODO: Implement add() method.
    }

    /**
     * @param User $user
     * @return mixed
     */
    public function remove(User $user)
    {
        // TODO: Implement remove() method.
    }

}