<?php

namespace Training\House;

class House
{

    protected $rooms;

    /**
     * getRooms
     *
     * @return array
     */
    public function getRooms(): array
    {
        return $this->rooms;
    }

    /**
     * setRooms
     *
     * @param array $rooms
     * @return array
     */
    public function setRooms(array $rooms)
    {
        $this->rooms = $rooms;
    }
}
