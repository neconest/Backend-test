<?php

namespace Boarding\BoardingCard;

class TrainBoardingCard extends BoardingCard
{
    /**
     * @var string
     */
    private $trainCode;

    /**
     * @param string $departure
     * @param string $destination
     * @param string $seat
     * @param string $trainCode
     */
    public function __construct(string $departure, string $destination, string $seat, string $trainCode)
    {
        parent::__construct($departure, $destination, $seat);
        $this->trainCode = $trainCode;
    }

    /**
     * @return string
     */
    public function getTrainCode(): string
    {
        return $this->trainCode;
    }

    /**
     * @param string $trainCode
     */
    public function setTrainCode(string $trainCode)
    {
        $this->trainCode = $trainCode;
    }

    /**
     * @return string
     */
    public function toString(): string
    {
        return 'Take train ' . $this->getTrainCode() . ' from ' . $this->getDestination() . ' to ' .
            $this->getDestination() . '. Sit in seat ' . $this->getSeat() . '.';
    }
}
