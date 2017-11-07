<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Model\Base\Play as BasePlay;
/**
 * PlaySmall
 *
 * @ORM\Table(name="play_small")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PlaySmallRepository")
 */
class PlaySmall// extends BasePlay
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="playerOne", type="object")
     */
    private $playerOne;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="playerTwo", type="object")
     */
    private $playerTwo;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set playerOne
     *
     * @param \stdClass $playerOne
     *
     * @return PlaySmall
     */
    public function setPlayerOne($playerOne)
    {
        $this->playerOne = $playerOne;

        return $this;
    }

    /**
     * Get playerOne
     *
     * @return \stdClass
     */
    public function getPlayerOne()
    {
        return $this->playerOne;
    }

    /**
     * Set playerTwo
     *
     * @param \stdClass $playerTwo
     *
     * @return PlaySmall
     */
    public function setPlayerTwo($playerTwo)
    {
        $this->playerTwo = $playerTwo;

        return $this;
    }

    /**
     * Get playerTwo
     *
     * @return \stdClass
     */
    public function getPlayerTwo()
    {
        return $this->playerTwo;
    }
}

