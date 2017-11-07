<?php
/**
 * Created by PhpStorm.
 * User: nkl
 * Date: 07.11.17
 * Time: 13:46
 */

namespace AppBundle\Interfaces;


interface Team
{
    public function setPlayers(array $players);
    public function getPlayers();

    public function setPlayersCount(int $count);
    public function getPlayersCount();
}