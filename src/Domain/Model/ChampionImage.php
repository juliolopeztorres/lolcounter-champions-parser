<?php

namespace App\Domain\Model;

class ChampionImage
{
    private $full;
    private $sprite;
    private $group;
    private $x;
    private $y;
    private $w;
    private $h;

    /**
     * Get the value of Full
     *
     * @return mixed
     */
    public function getFull()
    {
        return $this->full;
    }

    /**
     * Set the value of Full
     *
     * @param mixed full
     *
     * @return self
     */
    public function setFull($full)
    {
        $this->full = $full;

        return $this;
    }

    /**
     * Get the value of Sprite
     *
     * @return mixed
     */
    public function getSprite()
    {
        return $this->sprite;
    }

    /**
     * Set the value of Sprite
     *
     * @param mixed sprite
     *
     * @return self
     */
    public function setSprite($sprite)
    {
        $this->sprite = $sprite;

        return $this;
    }

    /**
     * Get the value of Group
     *
     * @return mixed
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Set the value of Group
     *
     * @param mixed group
     *
     * @return self
     */
    public function setGroup($group)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get the value of x
     *
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Set the value of x
     *
     * @param mixed x
     *
     * @return self
     */
    public function setX($x)
    {
        $this->x = $x;

        return $this;
    }

    /**
     * Get the value of y
     *
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Set the value of y
     *
     * @param mixed y
     *
     * @return self
     */
    public function setY($y)
    {
        $this->y = $y;

        return $this;
    }

    /**
     * Get the value of w
     *
     * @return mixed
     */
    public function getW()
    {
        return $this->w;
    }

    /**
     * Set the value of w
     *
     * @param mixed w
     *
     * @return self
     */
    public function setW($w)
    {
        $this->w = $w;

        return $this;
    }

    /**
     * Get the value of h
     *
     * @return mixed
     */
    public function getH()
    {
        return $this->h;
    }

    /**
     * Set the value of h
     *
     * @param mixed h
     *
     * @return self
     */
    public function setH($h)
    {
        $this->h = $h;

        return $this;
    }
}
