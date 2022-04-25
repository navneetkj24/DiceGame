<html>
 <head>
<title>Assignment 5 </title>
 <style>
td{
 
 border:2px solid black;
 padding:0px;
text-align:center;
font-family: "Verdana"

 
}
 #m{
 border-spacing:0;
 border: 2px solid black;
 background-color:"green";

}
 tr td:last-child{
 background-color:green;
 } 

 tr:nth-of-type(2n) {
background-color: gray;
 }



</style>
</head>
<body>

<?php

 
 $scoresOfPlayer1 = 0;
 $scoresOfPlayer2 = 0;


 $table = array();

 for($i=1; $i<=20; $i++){

 $table[$i][0] = $i;
// Dice 1
 $table[$i][1] = rand(1,6);
// Dice 2
 $table[$i][2] = rand(1,6);
// sum of dice1 and dice2
$table[$i][3] = $table[$i][1] + $table[$i][2];
// if the scores of player 1 is odd
 if($table[$i][3]%2 == 1){
 $scoresOfPlayer1 += 10;
 }else{
$scoresOfPlayer1 -= 5;
}
 // if the scores of player 2 is even
if($table[$i][3]%2 == 0){
$scoresOfPlayer2 += 10;
 }else{
 $scoresOfPlayer2 -= 5;
 }
//player 1/2 score
 $table[$i][4] = $scoresOfPlayer1;
 $table[$i][5] = $scoresOfPlayer2;
//if score of player1 is equal to the player2,then tie 
 if($scoresOfPlayer1 == $scoresOfPlayer2){
 $table[$i][6] = "Tie";
}
else if($scoresOfPlayer1 > $scoresOfPlayer2){
$table[$i][6] = "Player 1";
}
else{
 $table[$i][6] = "Player 2";
}

}
 echo '<table id = "m" ><tr>';
 echo '<td>#Serial No.';
 echo '<td>#Dice1';
 echo '<td>#Dice2';
 echo '<td>#Sum';
 echo '<td>#Player1 Score';
 echo '<td>#Player2 Score';
 echo '<td>#Winner';
 echo '</tr>';

 
 for($i=1; $i<=20; $i++){
 echo '<tr>';

 echo '<td>'.$table[$i][0].'</td>'; 
 echo '<td>'.$table[$i][1].'</td>';
 echo '<td>'.$table[$i][2].'</td>';
 echo '<td>'.$table[$i][3].'</td>';
 echo '<td>'.$table[$i][4].'</td>';
 echo '<td>'.$table[$i][5].'</td>';
 echo '<td>'.$table[$i][6].'</td>';
 echo '</tr>';
 }

echo '</table>';
?>

</body>
</html>
