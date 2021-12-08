<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container" style="max-width: 500px;">

        <?php

        require('db.php');

        // Read
        $query = "SELECT * FROM students";
        $result = mysqli_query($con, $query);

        ?>

        <div class="shadow p-4 rounded-3 mx-auto bg-white mt-4">
            <form method="post" action="proses.php">
                <div class="mb-3">
                    <label class="form-label">First Name</label>
                    <input type="text" name="first_name" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Last Name</label>
                    <input type="text" name="last_name" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Birth Day</label>
                    <input type="date" name="birth_day" class="form-control">
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Save</button>
            </form>
        </div>

        <table class="table table-striped shadow mt-4 mx-auto">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Birth Day</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($data = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?= $data['first_name'] ?></td>
                        <td><?= $data['last_name'] ?></td>
                        <td><?= $data['birth_day'] ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>


</body>

</html>