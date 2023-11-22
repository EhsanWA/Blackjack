<?php

require_once 'Card.php';
require_once 'Deck.php';
require_once 'Player.php';
require_once 'Blackjack.php';
require_once 'Dealer.php';

function prompt($prompt)
{
    echo $prompt;
    return trim(readline());
}

$deck = new Deck();
$blackjack = new Blackjack();
$dealer = new Dealer();

$name = prompt("Wat is jouw naam?: ");

if (empty($name)) {
    die("Name cannot be empty.");
}

$player = new Player($name, $blackjack);

$deck->shuffle();

for ($i = 0; $i < 2; $i++) {
    $player->addCard($deck->drawCard());
    $dealer->addCard($deck->drawCard());
}

echo "Welkom bij Blackjack!\n";
echo "Hand van {$name}:\n" . $player->showHand() . "\n";
echo "Eerste kaart van de dealer:\n" . $dealer->showPartialHand() . "\n";

while ($blackjack->scoreHand($player->getHand()) < 21) {
    $choice = prompt("Wil je nog een kaart trekken? (ja/nee): ");
    if (strtolower($choice) === 'ja') {
        $player->addCard($deck->drawCard());
        echo "Hand van {$name}:\n" . $player->showHand() . "\n";
    } else {
        break;
    }
}

echo "Tweede kaart van de dealer:\n" . $dealer->showHand() . "\n";
while ($blackjack->scoreHand($dealer->getHand()) < 17) {
    $dealer->addCard($deck->drawCard());
    echo "Hand van de dealer:\n" . $dealer->showHand() . "\n";
}

$playerScore = $blackjack->scoreHand($player->getHand());
$dealerScore = $blackjack->scoreHand($dealer->getHand());

if ($playerScore > 21 || ($dealerScore <= 21 && $dealerScore >= $playerScore)) {
    echo "De dealer wint!\n";
} elseif ($dealerScore > 21 || $playerScore > $dealerScore) {
    echo "{$name} wint!\n";
} else {
    echo "Gelijkspel!\n";
}
