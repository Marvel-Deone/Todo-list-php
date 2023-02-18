<?php
    session_start();
    // print_r('hello');

    require 'db.php';
    // $_SESSION['status'] ='false';

    if (isset($_POST['update_todo'])) {
        echo "gg";
        $todo_id = mysqli_real_escape_string($con, $_POST['todo_id']);
        $todo_name = mysqli_real_escape_string($con, $_POST['todo_name']);
        $todo_time = mysqli_real_escape_string($con, $_POST['todo_time']);
        $query = "UPDATE `todo` SET todo='$todo_name', todo_time='$todo_time' WHERE id='$todo_id'";
        $query_run = mysqli_query($con, $query);

        if ($query_run) {
            $_SESSION['message'] ='Todo Updated Successfully';
            header("Location: index.php");
            exit(0);
        }else {
            $_SESSION['message'] ='Todo Update failed';
            header("Location: index.php");
            exit(0);
        }
    }

    if (isset($_POST['delete_todo'])) {
        $todo_id = mysqli_real_escape_string($con, $_POST['delete_todo']);
        $query = "DELETE FROM `todo` WHERE id='$todo_id'";
        $query_run = mysqli_query($con, $query);

        if ($query_run) {
            $_SESSION['message'] ='Todo removed';
            header("Location: index.php");
            exit(0);
        }else {
            $_SESSION['message'] ='Todo removed failed';
            header("Location: index.php");
            exit(0);
        }
    }

    if(isset($_POST['add-todo'])) {
        $todo_name = mysqli_real_escape_string($con, $_POST['todo_name']);
        $todo_date = mysqli_real_escape_string($con, $_POST['todo_date']);

        $query = "INSERT INTO  todo (todo,todo_time,status) VALUES ('$todo_name', '$todo_date', 1)";

        $query_run = mysqli_query($con, $query);
        if ($query_run) {
            $_SESSION['message'] ='Todo added successfully';
            // $_SESSION['color'] ='success';
            header("Location: index.php");
            exit(0);
        }else {
            $_SESSION['message'] ='Todo not added';
            // $_SESSION['color'] ='danger';
            header("Location: index.php");
            exit(0);
        }
    }
?>