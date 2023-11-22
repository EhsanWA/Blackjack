<?php

class Blackjack
{
    public function scoreHand(array $hand): int
    {
        $score = 0;
        $numAces = 0;

        foreach ($hand as $card) {
            $value = $card->getValue();
            if ($value === 'Boer' || $value === 'Vrouw' || $value === 'Heer') {
                $score += 10;
            } elseif ($value === 'Aas') {
                $score += 11;
                $numAces++;
            } else {
                $score += intval($value);
            }
        }

        while ($score > 21 && $numAces > 0) {
            $score -= 10;
            $numAces--;
        }

        return $score;
    }
}
