<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/slate/bootstrap.min.css">
    <title>Create</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>Create Task</h1>
        <form action="store.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="title">
            </div>


            <div class="form-group">
                <textarea name="content" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-success" type="Submit">Submit</button>
            </div>
        </form>
        </div>


    </div>
</div>
</body>
</html>