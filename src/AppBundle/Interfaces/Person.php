<?php
namespace AppBundle\Interfaces;

interface Person
{
    public function setFirstName(string $firstName);
    public function getFirstName();

    public function setLastName(string $lastName);
    public function getLastName();

    public function setBirthday(object $birthday);
    public function getBirthday();
}