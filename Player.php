<?php 

class Player
{
    private string $name;
    private array $hand;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->hand = [];
    }

    public function addCard(Card $card): void
    {
        $this->hand[] = $card;
    }

    public function showHand(): string
    {
        $handDescription = $this->name . " heeft ";

        $cards = [];
        foreach ($this->hand as $card) {
            $cards[] = $card->show();
        }

        $handDescription .= implode(' ', $cards);

        return $handDescription;
    }

    public function showPartialHand(): string
    {
        $handDescription = $this->name . " heeft " . $this->hand[0]->show() . " en een verborgen kaart.";
        return $handDescription;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getHand(): array
    {
        return $this->hand;
    }
}
