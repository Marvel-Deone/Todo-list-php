<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">

        <div class="card">
            <div class="card-body p-5">
                <h2 class="text-center text-info fw-bold">Todo</h2>
                <?php include('message.php') ?>
            <form action="function.php" method="POST" class="d-flex justify-content-center align-items-center mb-4">
              <div class="form-outline flex-fill">
                <input type="text" name="todo_name" id="form2" placeholder="New task..." class="form-control" />

                <input type="date" name="todo_date" id="form2"  class="form-control mt-3" />
                <!-- <a href="#!" data-mdb-toggle="tooltip" title="Set due date"><i
                        class="fas fa-calendar-alt fa-lg me-3"></i></a> -->
                <!-- <label class="form-label" for="form2">New task...</label> -->
              </div>
              <button type="submit" name="add-todo" class="btn btn-info ms-2 mt-5" style="margin-top: 6.7% !important">Add</button>
            </form>

            <!-- Tabs navs -->
            <!-- <ul class="nav nav-tabs mb-4 pb-2" id="ex1" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" id="ex1-tab-1" data-mdb-toggle="tab" href="#ex1-tabs-1" role="tab"
                  aria-controls="ex1-tabs-1" aria-selected="true">All</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="ex1-tab-2" data-mdb-toggle="tab" href="#ex1-tabs-2" role="tab"
                  aria-controls="ex1-tabs-2" aria-selected="false">Active</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="ex1-tab-3" data-mdb-toggle="tab" href="#ex1-tabs-3" role="tab"
                  aria-controls="ex1-tabs-3" aria-selected="false">Completed</a>
              </li>
            </ul> -->
            <!-- Tabs navs -->

            <!-- Tabs content -->
            <?php include('displayTodo.php') ?>
            <!-- Tabs content -->

          </div>
        </div>

      </div>
    </div>
  </div>
</section>
</body>
</html>
