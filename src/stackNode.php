<?php
/**
 * Created by PhpStorm.
 * User: dean
 * Date: 27/05/17
 * Time: 09:44
 */

namespace App;


class stackNode
{

    protected $item;

    /**
     * stackNode constructor.
     * @param $item
     */
    public function __construct($item)
    {
        $this->item = $item;
        return $this->item;
    }
}