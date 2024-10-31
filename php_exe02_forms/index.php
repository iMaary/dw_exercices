<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <h1>PHP forms</h1>

    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <?php
            if(isset($_POST['first-name'])){
                $first = $_POST['first-name'];
                $surname = $_POST['surname'];
                print "Your submitted data is Name: $first and Surname: $surname";
            } 
            else{
                print "Welcome to the form PHP exercise!";
            }
        ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    
    <div style="width: 400px; margin: 50px">
        <form method="post">
            <div class="mb-3">
                <label for="first-name" class="form-label">Name</label>
                <input type="text" class="form-control" id="first-name" name="first-name" placeholder="Type your name" required>
            </div>
            <div class="mb-3">
                <label for="surname" class="form-label">Surname</label>
                <input type="text" class="form-control" id="surname" name="surname" placeholder="Type your surname">
            </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
            <!-- <input type="text" class="btn btn-primary" value="Submit"> -->
        </form>
    </div>
    
    <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>