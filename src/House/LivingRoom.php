<?php

namespace Training\House;

class LivingRoom
{
    protected $furniture;

    /**
     * Undocumented function
     *
     * @return array
     */
    public function getFurniture():array
    {
        return $this->furniture;
    }

    /**
     * setFurniture
     *
     * @param array $furniture
     * @return void
     */
    public function setFurniture(array $furniture)
    {
        $this->furniture = $furniture;
    }

    /**
     * addFurniture
     *
     * @param Object $furniture
     * @return void
     */
    public function addFurniture(Object $furniture)
    {
        $this->furniture[] = $furniture;
    }
}
