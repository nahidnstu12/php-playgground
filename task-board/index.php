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
    <script src="Sortable.js"></script>
</head>
<?php
include_once "./controller.php";
$pdo = include_once "../productcrud/database.php";
$projectName = "Learning";
$statusResult = getAllStatus($pdo);
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST["title"];
    $statusId = $_POST["status_id"];
    $projectName = $_POST["project_name"];
    echo "<h1>$title</h1>";
    if (!$title) {
        $errors[] = "don't be lazy!!";
    }
    if (empty($errors) && !empty($title)) {
        addTaskItem($statusId, $title, $projectName, $pdo);
        header("location: index.php");
        // header("location:".$_SERVER["PHP_SELF"]);
    }
}
?>

<body class="container">
    <h1 class="text-center text-info">Task Board Management</h1>
    <form action="" method="post">
        <div class="form-group d-flex" style="gap: 8px;">
            <label for="addnew">Add New Feature</label>
            <input type="text" class="form-control" id="addnew" placeholder="Task 1" name="title" required>
            <input type="hidden" class="form-control" id="addnew" placeholder="Task 1" name="project_name" value="Learning">
            <input type="hidden" class="form-control" id="addnew" placeholder="Task 1" name="status_id" value="1">
            <button class="btn btn-sm btn-success">Add New Feature</button>
        </div>
    </form>
    <div class="task-board">
        <?php
        foreach ($statusResult as $statusRow) {

            $taskResult = getProjectTaskByStatus($statusRow["id"], $projectName, $pdo);

        ?>
            <div class="status-card" style="min-height: 300px;">
                <div class="card-header">
                    <span class="card-header-text">
                        <?php echo $statusRow["status_name"]; ?>
                    </span>
                </div>
                <ul class="sortable ui-sortable" id="sort<?php echo $statusRow["id"]; ?>" data-status-id="<?php echo $statusRow["id"]; ?>">

                    <?php
                    if (!empty($taskResult)) {
                        foreach ($taskResult as $taskRow) {
                    ?>

                            <li class="text-row ui-sortable-handle" data-task-id="<?php echo $taskRow["id"]; ?>"><?php echo $taskRow["title"]; ?></li>

                    <?php
                        }
                    }
                    ?>

                </ul>

                <!-- <div class="add_form">

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
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
            </div> -->


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