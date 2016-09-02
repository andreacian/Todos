<?php

include 'todoclass.php';
print_r ($_POST);

$completed = $_POST[completed];
$text = $_POST[text];
$user = $_POST[user];

$todoitem = new ToDoclass ($user,$completed,$text);
//print_r ($todoitem);

// aggiunta Todo
$todolist[] = $todoitem;
$_POST = $todolist ;

print_r ($_POST);


header ('location: todolist.php');
