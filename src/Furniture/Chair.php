<?php

namespace Training\Furniture;

/**
 * Undocumented class
 */
class Chair
{

    protected $color;
    protected $material;

    /**
     * Undocumented function
     *
     * @return void
     */
    public function getColor()
    {
        if (null === $this->color) {
            return "#FF0000";
        }
        return $this->color;
    }

    /**
     * Undocumented function
     *
     * @param [type] $color
     * @return void
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Undocumented function
     *
     * @param [type] $material
     * @return void
     */
    public function setMaterial($material)
    {
        $this->material = $material;
    }

    public function isSoft()
    {
        
        switch ($this->getMaterial()) {
            case "wood":
                return true;
            case "steel":
                return false;
        }

        throw new \Exception("Unknown Material, Can't tell if it's soft or not");
    }
}
