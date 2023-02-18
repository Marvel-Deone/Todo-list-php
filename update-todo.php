<?php
    session_start();
    require 'db.php';
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
                <h2 class="text-center text-info fw-bold">Edit Todo</h2>
                <?php include('message.php') ?>

                <?php 
                    if (isset($_GET['id'])) {
                        $todo_id = mysqli_real_escape_string($con, $_GET['id']);
                        $query = "SELECT * FROM todo WHERE id='$todo_id'";
                        $query_run = mysqli_query($con, $query);
                        if (mysqli_num_rows($query_run) > 0) {
                            $todo = mysqli_fetch_array($query_run);
                            ?>

                <form action="function.php" method="POST" class="d-flex justify-content-center align-items-center mb-4">
                    <div class="form-outline flex-fill">
                        <input type="text" name="todo_name" id="form2" placeholder="Task" value="<?= $todo['todo']; ?>"  class="form-control" />
                        <input hidden type="text" name="todo_id" id="form2" placeholder="Task" value="<?= $todo['id']; ?>"  class="form-control" />

                        <input type="date" name="todo_time" id="form2"  class="form-control mt-3" value="<?= $todo['todo_time']; ?>" />
                        <!-- <a href="#!" data-mdb-toggle="tooltip" title="Set due date"><i
                                class="fas fa-calendar-alt fa-lg me-3"></i></a> -->
                        <!-- <label class="form-label" for="form2">New task...</label> -->
                    </div>
                    <button type="submit" name="update_todo" class="btn btn-info ms-2 mt-5" style="margin-top: 6.7% !important">Save Changes</button>
                </form>
                <?php
                        }else {
                                echo "No Such Id Found";
                        }
                    }
                ?>
     

          </div>
        </div>

      </div>
    </div>
  </div>
</section>
</body>
</html>

</html>