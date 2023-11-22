<?php

class Card
{
    private string $suit;
    private string $value;

    public function __construct(string $suit, string $value)
    {
        $validSuits = ['Harten', 'Ruiten', 'Klaveren', 'Schoppen'];

        if (!in_array($suit, $validSuits)) {
            throw new InvalidArgumentException("Ongeldige suit: {$suit}");
        }

        $this->suit = $suit;
        $this->value = $value;
    }

    public function show(): string
    {
        $symbol = '';

        switch ($this->suit) {
            case 'Harten':
                $symbol = '♥';
                break;
            case 'Ruiten':
                $symbol = '♦';
                break;
            case 'Klaveren':
                $symbol = '♣';
                break;
            case 'Schoppen':
                $symbol = '♠';
                break;
            default:
                $symbol = '';
                break;
        }

        return " {$symbol} {$this->value}";
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
