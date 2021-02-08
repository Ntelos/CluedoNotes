## Table of Contents
* [General Info](#general-info)
* [Demo](#demo)
* [Future Updates](#future-updates)

## General Info
An interactive page for keeping notes of your <b>Cluedo</b> games.
	
Keep in mind that the names at the board are displayed in the Greek language.
You can easily alter them in your language by editing the \<th> elements at the <i>board.php</i> file.

## Demo
By visiting the <i>index.html</i> page you can:
* Select the number of the players including yourself
* Type their names 
* Select their pawn's color


![Demo Screenshot from the index page](https://github.com/Ntelos/Cluedo-Notes/blob/main/images/demo_index.png?raw=true)

When you are ready press the "Start" button and you will be redirected to the <i>board.php</i> page.
There you can see the names of the players colored with their pawn's color.
At this page you can click in every cell of any row except the first one. By clicking in any cell you mark randomly with
one of the following colors: green, red, yellow.


![Demo Screenshot from the index page](https://github.com/Ntelos/Cluedo-Notes/blob/main/images/demo_board.png?raw=true)

My thinking about the <b>marking</b>:

If you mark the <b>first column</b>:

<b>Red:</b> The card of the suspect/object/room is held by someone.

<b>Green:</b> The card of the suspect/object/room is in the envelope, thus it will be included to your final accusation.

<b>Yellow:</b> You are not sure about the suspect/object/room.

Marking a <b>player's column</b>:

<b>Red:</b> This player does not hold the card that its name is displayed at the start of the row. If the whole row is red-mark 
means that this card is inside the envelope, thus you can green-mark the name of the card.

<b>Green:</b> This player holds the card that its name is displayed at the start of the row. That means that this card is not 
inside the envelope so you can red-mark its name.

<b>Yellow:</b> This player was questioned about the card of this row but you are not sure if you hold it or not.

## Future Updates
* Style up the pages
* Use the contents of images folder instead of color change
* Change the way you put your marks 
* Floating players' names when scrolling down the page
* Whenever you green-mark something automate the red-marking of the rest columns