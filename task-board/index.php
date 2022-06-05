<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks Management</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">


    <link rel="stylesheet" href="style.css">
</head>
<?php
include_once "./controller.php";
$pdo = include_once "../productcrud/database.php";
$projectName = "Learning";
// $controller = new TaskManagement();
// $statusResult = $controller->getAllStatus($projectName);

$statusResult = getAllStatus($pdo);

//  echo '<pre>'; 
// var_dump($statusResult);
// exit;
// echo '<pre>'; 

?>
<body>
    <div class="task-board">
        <?php
        foreach ($statusResult as $statusRow) {

            $taskResult = getProjectTaskByStatus($statusRow["id"],$projectName,$pdo);
           
        ?>
            <div class="status-card">
                <div class="card-header">
                    <span class="card-header-text">
                        <?php echo $statusRow["status_name"]; ?>
                    </span>
                </div>
                <?php echo '<div class="list" id="c_' . $statusRow["id"] . '" data-status-id="' . $statusRow["id"] . '" >';
                ?>
                <!-- <script type="text/javascript">
                    new Sortable.create(document.getElementById(<? //echo '"c_' . $statusRow["id"] . '"'; ?>), opt);
                </script> -->

                <?
                if (!empty($taskResult)) {
                     
                    foreach ($taskResult as $taskRow) {
                      
                ?>
                        <div class="text-row ui-sortable-handle" data-task-id="<?php echo $taskRow["id"]; ?>">
                            <?php 
                             echo '<pre>'; 
                             var_dump($taskRow);
                            var_dump($taskResult);
                            exit;
                            echo '<pre>'; 
                            
                            ?>
                        </div>

                <?
                    }
                }
                // end cards
                ?>
            </div>


            <div class="add_form">

                <form action="<? echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="action" value="submit">

                    <?php
                    //echo '<input type="hidden" name="form" value="'.$taskRow["status_id"].'">'; 
                    echo '<input type="hidden" name="form" value="' . $statusRow["id"] . '">';

                    ?>
                    <div class="table_view">
                        <div class="table_row">
                            <div class="table_cell_70 input-row">

                                <?php
                                echo '<input name="title" type="text" required size=200 value="" autocomplete="off" />';

                                ?>

                            </div>
                            <div class="table_cell_action">
                                <?php
                                echo '<input class="button button-block" type="submit" name="save" value="Add item"/>';
                                ?>
                            </div>

                        </div>
                    </div>
                </form>
            </div>



    </div>
<?php
            // all boards	
        }
?>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="script.js"></script>
   

</div>
</body>

</html>