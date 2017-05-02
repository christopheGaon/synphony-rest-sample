<?php
/**
 * Created by PhpStorm.
 * User: kokoala
 * Date: 28/04/2017
 * Time: 18:58
 */

namespace appDomain\dto;


class DataDTO
{
  private $data;

    /**
     * DataDTO constructor.
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

}