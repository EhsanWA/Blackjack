<?php

class Dealer
{
    private $hand;

    public function __construct()
    {
        $this->hand = [];
    }

    public function addCard(Card $card)
    {
        $this->hand[] = $card;
    }

    public function showPartialHand()
    {
        if (empty($this->hand)) {
            return '';
        }

        return 'Dealer heeft ' . $this->hand[0]->show() . ' en een verborgen kaart';
    }

    public function showHand()
    {
        $handString = 'Dealer heeft ';

        foreach ($this->hand as $card) {
            $handString .= $card->show() . ' ';
        }

        return $handString;
    }

    public function getHand()
    {
        return $this->hand;
    }
}
?>
