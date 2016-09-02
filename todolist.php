<?php
// inizializziamo le sessioni
  // session_start();

//  include 'todoadd.php';
// include 'libs/carrello.php';
// $todolist = new ToDoclass;

?>
<!DOCTYPE html>
<html>
  <head>
    <title>ToDo List</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
  </head>
  <body>
    <?php //include 'include/header.php'; ?>
    <?php //include 'grazie.php'; ?>

    <main>
      <div class="row">
        <div class="col-md-12">
          <h1>To Do List</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">


          <?php
          $todolist = $_POST;
          print_r ($todolist);

        foreach($todolist as $todoriga) {
        ?>

          <div> <?=$todoriga['text']?></div>
          <div><?=$todoriga['completed']?></div>
          <div><a href="" class="btn btn-link">rimuovi</a></div>

        <?php } ?>

<!--
          <div class="form-group">
            <label for="cap">Cosa devo fare?</label>
            <input type="text" class="form-control" name="text" placeholder="Cosa devo fare">
          </div>

          <div class="checkbox">
            <label>
              <input type="checkbox" name="completed"> Fatto
            </label>
          </div>
          <button type="submit" class="btn btn-primary">Aggiungi</button>

-->

        </div>
      </div>
      <?php //if (count($prodottiCarrello) > 0) { ?>
      <div class="row">
        <div class="col-md-8">
        </div>
        <div class="col-md-4">
      <!--   <a href="ToDoclass.php" class="btn btn-success btn-lg">Aggiungi</a>  -->
        </div>
      </div>
      <?php //} ?>
    </main>
    <?php //include 'include/footer.php'; ?>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
</html>
