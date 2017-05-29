<?php
/**
 * Author: Dean Haines
 * Date: 27/05/17
 */

namespace App;

use App\stackNode;

/**
 * Class stack
 * @package App
 */
class stack
{

    protected $count;
    protected $list;


    /**
     * stack constructor.
     */
    public function __construct()
    {
        $this->list = [];
        $this->count = 0;
    }

    /**
     * @param $data
     */
    public function add($data)
    {
        $item = new stackNode($data);
        $this->insert($item);

    }

    /**
     * @param \App\stackNode $item
     */
    protected function insert(stackNode $item)
    {
        array_push($this->list,$item);
        $this->count++;
    }


    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @return mixed
     */
    public function remove()
    {
        $temp = $this->list[0];
        unset($this->list[0]);
        $this->list = array_values($this->list);

        $this->count--;
        return $temp;
    }

}