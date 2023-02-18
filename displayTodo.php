<?php
    require 'db.php';
    
?>

<!-- Tabs content -->
<div class="tab-content" id="ex1-content">
  <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel" aria-labelledby="ex1-tab-1">
    <ul class="list-group mb-0">
      <?php
                        $query = "SELECT * FROM todo";
                        $query_run = mysqli_query($con, $query);
                        if (mysqli_num_rows($query_run) > 0) {
                            foreach($query_run as $todo) {
                                ?>
      <li class="list-group-item d-flex justify-content-between align-items-center border-0 mb-2 rounded"
        style="background-color: #f4f6f7;">
        <div>
          <input class="form-check-input me-2" type="checkbox" value="" aria-label="..."   />
          <!-- <s> -->
            <?= $todo['todo'] ?>
        </div>
        <div>
          <?= $todo['todo_time'] ?>
         <form action="function.php" method="POST" class="d-inline">
          <button type="submit" name="delete_todo" style="border: 0 !important; focus: 0 !important;" value="<?=$todo['id']; ?>"><a href="#!" class="text-danger ms-3" data-mdb-toggle="tooltip" title="Delete todo"><i class="fas fa-trash-alt"></i></a></button>
         </form>
          <button type="submit" style="border: 0 !important; focus: 0 !important;" value="<?=$todo['id']; ?>">  <a href="update-todo.php?id=<?=$todo['id']; ?>" class="text-info" data-mdb-toggle="tooltip" title="Edit todo"><i class="fas fa-pencil-alt me-3"></i></a></button>
        </div>
      </li>
      <?php
        }
        }else {
        echo "<h5 class='text-center text-primary fs-3'>No Record Found</h5>";
        }
      ?>
    </ul>
  </div>
</div>
<!-- Tabs content -->