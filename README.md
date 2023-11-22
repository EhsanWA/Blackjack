# Blackjack Game Readme
This PHP script allows you to play a simple text-based version of the popular card game, Blackjack. Follow the instructions below to set up and play the game.

## Prerequisites
PHP: Make sure you have PHP installed on your machine. You can download it from the official PHP website.

## How to Play

### Download the Files:

Download the following files: Card.php, Deck.php, Player.php, Blackjack.php, Dealer.php, and the main script containing the game logic.
### Run the Game:

Open a terminal or command prompt.
Navigate to the directory where the downloaded files are located.
Run the PHP script by executing the following command:
bash
Copy code
php your_script_name.php
Replace your_script_name.php with the actual name of the script file.
### Follow the Prompts:

Enter your name when prompted to start the game.
You will be dealt two cards, and the dealer will have one card face up.
You can choose to "hit" (draw another card) or "stand" (keep your current hand) until you decide to stand or your hand exceeds 21 points.
### Game Outcome:

Once you decide to stand, the dealer will reveal their second card and draw additional cards until their hand is at least 17 points.
The winner is determined based on the total points in each hand:
If your hand exceeds 21 points, or the dealer's hand is closer to 21 without exceeding it, the dealer wins.
If the dealer's hand exceeds 21 points, or your hand is closer to 21 without exceeding it, you win.
If both hands have the same total points, it's a tie.
### Play Again:

After the game ends, you can choose to play again by running the script once more.
## Code Structure
Card.php: Defines the Card class, representing a playing card with a suit and value.

Deck.php: Defines the Deck class, representing a deck of playing cards. It includes methods for initializing, shuffling, and drawing cards.

Player.php: Defines the Player class, representing a player in the game. It includes methods for adding cards, showing the player's hand, and retrieving the player's name.

Dealer.php: Defines the Dealer class, representing the dealer in the game. It includes methods for adding cards, showing the dealer's hand, and revealing a partial hand.

Blackjack.php: Defines the Blackjack class, which calculates the score of a hand in the game.

Main Script: Contains the main game logic, including user prompts, card dealing, player and dealer actions, and determining the game outcome.

#### Feel free to explore and modify the code to customize the game further or integrate it into a larger project. Enjoy playing Blackjack!
