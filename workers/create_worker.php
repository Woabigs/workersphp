<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Worker</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Create worker</h1>
            <form action="store.php" method="post">
                <div class="form-group">
                    name<input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    surname<input type="text" class="form-control" name="surname">
                </div>
                <div class="form-group">
                    email<input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    info<input type="text" class="form-control" name="info">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>