<?php
/**
 * Created by PhpStorm.
 * User: kokoala
 * Date: 28/04/2017
 * Time: 14:05
 */

namespace coreDomain\User;


class User
{
    private $id;

    private $firstName;

    private $lastName;

    /**
     * User constructor.
     * @param $id
     * @param $firstName
     * @param $lastName
     */
    public function __construct($id, $firstName, $lastName)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }


}