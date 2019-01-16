<?php

namespace App\Domain\Model;

class Champion
{
    private $id;
    private $key;
    private $name;
    private $title;
    /** @var ChampionImage */
    private $image;
    /** @var SkinChampion[] */
    private $skins;

    private $lore;

    /** @var array */
    private $allyTips;
    /** @var array */
    private $enemyTips;

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
     * Get the value of Key
     *
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set the value of Key
     *
     * @param mixed key
     *
     * @return self
     */
    public function setKey($key)
    {
        $this->key = $key;

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
     * Get the value of Title
     *
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of Title
     *
     * @param mixed title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of Image
     *
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of Image
     *
     * @param mixed image
     *
     * @return self
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of Skin Array
     *
     * @return mixed
     */
    public function getSkins()
    {
        return $this->skins;
    }

    /**
     * Set the value of Skin Array
     *
     * @param mixed skinArray
     *
     * @return self
     */
    public function setSkins($skins)
    {
        $this->skins = $skins;

        return $this;
    }

    /**
     * Get the value of Lore
     *
     * @return mixed
     */
    public function getLore()
    {
        return $this->lore;
    }

    /**
     * Set the value of Lore
     *
     * @param mixed lore
     *
     * @return self
     */
    public function setLore($lore)
    {
        $this->lore = $lore;

        return $this;
    }

    /**
     * Get the value of Ally Tips
     *
     * @return mixed
     */
    public function getAllyTips()
    {
        return $this->allyTips;
    }

    /**
     * Set the value of Ally Tips
     *
     * @param mixed allyTips
     *
     * @return self
     */
    public function setAllyTips($allyTips)
    {
        $this->allyTips = $allyTips;

        return $this;
    }

    /**
     * Get the value of Enemy Tips
     *
     * @return mixed
     */
    public function getEnemyTips()
    {
        return $this->enemyTips;
    }

    /**
     * Set the value of Enemy Tips
     *
     * @param mixed enemyTips
     *
     * @return self
     */
    public function setEnemyTips($enemyTips)
    {
        $this->enemyTips = $enemyTips;

        return $this;
    }
}
