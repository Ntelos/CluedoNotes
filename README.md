## Table of Contents
* [General Info](#general-info)
* [Demo](#demo)
* [Future Updates](#future-updates)

## General Info
An interactive page for keeping notes of your Cluedo games.
	
Keep in mind that the names at the board are displayed in the Greek language.
You can easily alter them in your language by editing the <th> elements at the board.php file.

## Demo
By visiting the index.html page you can:
Select the number of the players including yourself
Type their names 
Select their pawn's color
<image>

When you are ready press the "Start" button and you will be redirected to the board.php page.
There you can see the names of the players colored with their pawn's color.
At this page you can click in every cell of any row except the first one. By clicking in any cell you mark randomly with
one of the following colors: green, red, yellow.
<image>

My thinking about the marking:

If you mark the first column:
Red: The card of the suspect/object/room is held by someone.
Green: The card of the suspect/object/room is in the envelope, thus it will be included to your final accusation.
Yellow: You are not sure about the suspect/object/room.

Marking a Player's column:
Red: This player does not hold the card that its name is displayed at the start of the row. If the whole row is red-mark 
means that this card is inside the envelope, thus you can green-mark the name of the card.
Green: This player holds the card that its name is displayed at the start of the row. That means that this card is not 
inside the envelope so you can red-mark its name.
Yellow: This player was questioned about the card of this row but you are not sure if you hold it or not.

## Future Updates
* Style up the pages
* Use the contents of images folder instead of color change
* Change the way you put your marks 
* Floating players' names when scrolling down the page
* Whenever you green-mark something automate the red-marking of the rest columns