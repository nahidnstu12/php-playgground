<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>jquery ui play with </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">

    <link rel="stylesheet" href="css/test.css">

</head>

<body>
    <section class="container p-5 border my-1" style="background-color: #9db9d76b;">
        <h1>Drag and Drop Task Mangement(Drag&Drop)</h1>
        <!-- <form>
            <div class="form-group">
                <label for="addnew">Add New Feature</label>
                <input type="text" class="form-control" id="addnew" placeholder="Task 1">
            </div>
        </form> -->
         <div class="card-deck card-drop">
            <div class="card card-drag" id="newFeature" ></div>
            <div class="card card-drag" id="inProgress" >

            </div>
            <div class="card card-drag" id="pending" >

            </div>
            <div class="card card-drag" id="complete" >

            </div>
            
        </div> 
    </section>
    <section class="container p-5 border  my-1">
    <h1>Drag and Drop Task Mangement(Sortable)</h1>
        <!-- <form>
            <div class="form-group">
                <label for="addnew">Add New Feature</label>
                <input type="text" class="form-control" id="addnew" placeholder="Task 1">
            </div>
        </form> -->
        <div class="card-deck">
            <div class="card " id="newFeature1" ></div>
            <div class="card " id="inProgress1" >

            </div>
            <div class="card " id="pending1" >

            </div>
            <div class="card " id="complete1" >

            </div>
            <!-- <div class="card" id="complete">
                <div class="card-header">
                    Successfully Completed
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">

                    </ul>
                </div>
            </div> -->
        </div>
    </section>
    <section class="container p-5 border  my-1"> </section>
    <section class="container p-5 border  my-1"> </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="js/jq-ui.js"></script>
    <script src="db/data.js"></script>

</body>

</html>