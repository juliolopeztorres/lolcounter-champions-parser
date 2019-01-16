<?php

namespace App\Domain\Model;

class ChampionSkin
{
    private $id;
    private $name;
    private $num;

    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of Id
     *
     * @param mixed id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of Name
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of Name
     *
     * @param mixed name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of Num
     *
     * @return mixed
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Set the value of Num
     *
     * @param mixed num
     *
     * @return self
     */
    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }
}
