<?php
namespace AppBundle\Interfaces;

interface Play
{
    public function setDatetime(object $datetime);
    public function getDateTime();

    public function setFirstRival(object $rival);
    public function getFirstRival();

    public function setSecondRival(object $rival);
    public function getSecondRival();

    public function setFirstRivalScore(int $score);
    public function getFirstRivalScore();

    public function setSecondRivalScore(int $score);
    public function getSecondRivalScore();
}