<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>play with jquery</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/jquery.css">

    <!-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script> -->

</head>

<body>
    <h1 class="p-1 text-info" title="hello ">hello Nahid</h1>
    <h2 class="test " align="center" id="programmer">Hello again</h2>
    <h1 class="concat"></h1>
    <!-- <img src="img/brand1.png"id="imgid" alt="" width="200" height="200"> -->
    <p>Date: <input type="text" id="datepicker"></p>
    <button onclick="Lefttime()"> Hurry!!... Tick - Tok - Tick - Tok </button>
    <input type="text" id="content">
    <h1 class="mt-4">Type of language</h1>
    <ul>
        <li id="first">Python</li>
        <li>PHP</li>
        <li>JS</li>
        <li>Golang</li>
    </ul>
    <button onclick="Lang()">Click</button>

    <table id="first" width="129" border="3" class="table mt-2">
        <thead>
            <tr>
                <th>first table array</th>
                <th>seocnd table array</th>
                <th>third table array</th>
                <th>four table array</th>
                <th>fifth table array</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td>Sum is:</td>
                <td>Sum is:</td>
                <td>Sum is:</td>
                <td>Sum is:</td>
                <td>Sum is:</td>
            </tr>
        </tfoot>
    </table>

    <form action="#">
        <label>Your Name::</label>
        <input type="text" name="Name" value="Amardeep">
        <br>
        <br><label> Your Age:: </label>
        <input type="text" name="Age" value="27">
        <br>
    </form>
    <div class="button">
        <button>Get JSON Data</button>
    </div>
    </div>
    <div class="JsonData" id="displayArea"></div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script src="js/jquery.js"></script>

</body>

</html>