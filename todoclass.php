<?php

class ToDoclass
  {
    private $user ;
    private $completed;
    private $text;

    public function __construct($user,$completed,$text)
    {
      $this->user = $user;
      $this->completed = $completed;
      $this->text = $text;
    }

    public function getUser()
    {
      return user ;
    }

    public function getCompleted()
      {
        return completed;
      }

    public function getText()
      {
        return text;
      }
  }
