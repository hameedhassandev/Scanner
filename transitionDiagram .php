<?php

class transitionDiagram
{
private $transition_table = array(
'a' => array(82,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,30,null,32,null,null,35,null,null,null,null,null,null,null,null,null,null,46,null,null,null,
    null,null,null,null,54,null,null,null,null,59,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,82,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
'b' => array(82,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,82,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
'c' => array(34,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,31,null,null,null,null,null,null,null,28,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,82,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
'd' => array(82,null,null,null,null,null,null,8,null,null,null,null,null,null,15,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,38,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,65,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,82,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
'e' => array(4,null,null,82,null,null,82,null,null,null,null,null,null,null,null,null,null,null,82,24,null,null,null,82,null,null,null,null,82,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,49,
    null,51,null,null,60,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,82,null,75,null,null,null,79,null,81,null,82,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
'f' => array(82,null,null,null,null,null,null,null,null,null,null,null,82,14,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,82,null,null,null,null,null,null,null,null,82,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,82,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
'g' => array(82,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,82,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
'h' => array(76,null,null,null,null,null,null,null,null,10,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,82,null,null,null,null,74,null,null,null,null,null,null,null,null,82,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
'i' => array(12,null,null,null,null,null,null,null,null,null,11,null,null,null,null,null,null,null,null,20,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,39,null,41,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,56,null,null,null,null,null,null,null,null,null,null,67,null,null,null,71,null,null,null,null,null,null,null,null,null,null,null,82,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
'j' => array(82,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,18,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,82,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
'k' => array(82,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,23,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,82,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
'l' => array(82,null,null,null,5,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,47,null,null,
    50,null,null,null,null,null,null,null,null,null,82,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,82,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
'm' => array(82,null,null,null,7,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,82,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
'n' => array(82,null,null,null,null,null,null,null,null,null,null,null,13,null,null,null,null,null,null,null,null,null,null,null,null,null,27,null,null,null,null,null,82,null,null,null,37,null,null,null,null,null,43,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,58,null,null,null,null,null,64,null,null,null,null,null,null,null,null,null,null,null,null,null,82,null,null,null,null,82,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
'o' => array(82,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,17,null,null,null,null,22,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,42,null,44,null,null,null,null,null,
    null,null,null,null,null,null,null,57,null,null,null,null,null,63,null,null,null,null,null,null,null,null,null,null,null,null,null,77,null,null,null,null,null,82,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
'p' => array(82,null,3,null,null,null,null,null,null,null,null,null,16,null,null,null,null,null,null,null,21,null,null,null,null,null,null,null,null,null,82,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,62,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,82,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
'q' => array(82,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,25,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,69,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,82,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
'r' => array(53,null,null,null,null,null,null,null,null,null,null,null,null,null,null,82,null,null,null,29,null,null,null,null,null,null,null,null,null,null,null,null,null,34,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,72,null,null,null,null,null,null,null,null,null,82,82,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
's' => array(20,null,null,null,null,6,null,null,null,null,null,82,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,52,82,null,null,null,null,null,null,null,61,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,82,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
't' => array(1,null,null,null,null,null,null,null,9,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,40,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,55,null,null,null,null,null,null,null,null,null,null,null,null,68,null,null,null,null,null,null,null,null,null,null,null,null,null,null,82,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
'u' => array(82,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,26,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,48,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,70,null,null,null,null,null,null,null,null,null,null,null,null,82,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
'v' => array(45,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,80,null,null,82,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
'w' => array(73,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,66,null,null,null,null,null,null,null,null,null,null,null,78,null,null,null,null,82,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
'x' => array(82,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,82,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
'y' => array(82,2,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,82,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
'z' => array(82,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,82,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
'_' => array(82,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,82,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
'0' =>  array(84,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,82,null,84, null,null,null,null,null,null,null,null,null,null,null,null,null),
'1' =>  array(84,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,82,null,84, null,null,null,null,null,null,null,null,null,null,null,null,null),
'2' => array(84,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,82,null,84, null,null,null,null,null,null,null,null,null,null,null,null,null),
'3' => array(84,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,82,null,84, null,null,null,null,null,null,null,null,null,null,null,null,null),
'4' => array(84,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,82,null,84, null,null,null,null,null,null,null,null,null,null,null,null,null),
'5' => array(84,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,82,null,84, null,null,null,null,null,null,null,null,null,null,null,null,null),
'6' => array(84,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,82,null,84, null,null,null,null,null,null,null,null,null,null,null,null,null),
'7' => array(84,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,82,null,84, null,null,null,null,null,null,null,null,null,null,null,null,null),
'8' => array(84,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,82,null,84, null,null,null,null,null,null,null,null,null,null,null,null,null),
'9' => array(84,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,82,null,84, null,null,null,null,null,null,null,null,null,null,null,null,null),
'+' =>  array(83,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
'-' =>  array(93,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
'*' =>  array(89,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null, null,null,null,null,90,91,null,null,null,null,null,null,null),
'/' =>  array(83,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null, null,87,88,null,null,null,null,null,null,null,null,null,null),
'&' =>  array(97,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null, null,null,null,null,null,null,null,null,null,null,null,null,83),
'~' =>  array(83,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
'=' =>  array(95,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null, null,null,null,null,null,null,null,83,null,83,83,null,null),
'!' =>  array(94,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
'<' =>  array(86,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
'>' =>  array(92,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null, null,null,null,83,null,null,null,null,83,null,null,null,null),
'|' =>  array(96,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null, null,null,null,null,null,null,null,null,null,null,null,83,null),
'@' =>  array(83,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
'$' =>  array(83,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
'^' =>  array(83,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
'#' =>  array(83,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
'"' =>  array(83,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
"'" =>  array(83,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
'[' =>  array(83,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
']' =>  array(83,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
'{' =>  array(83,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
'}' =>  array(83,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
'(' =>  array(83,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
')' =>  array(83,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
';' =>  array(83,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null, 83,null,87,null,null,null,83,null,null,null,null,null,null),
' ' => array(0,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,
    83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83,83, 83,83,87,null,83,null,91,83,null,83,83,83,83),
'\n' => array(83,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null, 83,null,87,null,null,null,83,null,null,null,null,null,null),
'other'=> array(85,82,82,82,82,82,82,82,82,82,82,82,82,82,82,82,82,2,82,82,82,82,82,82,82,82,82,82,82,82,82,82,82,82,82,82,82,82,82,82,82,82,82,82,82,82,82,82,82,
    82,82,82,82,82,82,82,82,82,82,82,82,82,82,82,82,82,82,82,82,82,82,82,82,82,82,82,82,82,82,82,82,82,85,null,82, 82,82,87,87,82,82,91,85,85,83,85,85,85),
'accepting'=> array(null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,
    null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,true,null, null,null,null,null,null,null,null,null,null,null,null,null,null),
);

public function next_transition($input , $currentState){
    $input = strtolower($input);
    //handle error input
    if (!array_key_exists($input, $this->transition_table)){
        $input = 'other';
        return $this->transition_table[$input][$currentState];
    }
    //handle null state
    elseif ($this->transition_table[$input][$currentState] == null && $currentState != 0){
        $input = 'other';
        return $this->transition_table[$input][$currentState];
    }
    else{
        return $this->transition_table[$input][$currentState];
    }
}


public function is_accepting($nextState){
    return $this->transition_table['accepting'][$nextState];
}

}