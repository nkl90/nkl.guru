<?php
/**
 * Created by PhpStorm.
 * User: nkl
 * Date: 07.11.17
 * Time: 13:45
 */

namespace AppBundle\Interfaces;


interface Rival
{
    public function setTeam(object $team);
    public function getTeam();
}