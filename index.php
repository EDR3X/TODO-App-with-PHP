<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>TODO List</h1>
        <p>Select, Insert, update and Delete Operations in TODO list</p>
        <table class="table">
            <caption></caption>
            <th></th>
            <tbody>
                <?php include 'read.php'; ?>
            </tbody>
        </table>

        <form class="form-inline m-2" action="create.php" method="POST">
            <label for="name">FirstName:</label>
            <input type="text" class="form-control m-2" id="firstname" name="firstname">
            <label for="name">lastName:</label>
            <input type="text" class="form-control m-2" id="lastname" name="lastname">
            <label for="score">Score:</label>
            <input type="number" class="form-control m-2" id="score" name="score">
            <button type="submit" class="btn btn-primary">Add</button>
        </form>

    </div>
</body>

</html>