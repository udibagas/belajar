<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Student</title>

    <style>
        .login-container {
            width: 400px;
        }
    </style>
</head>

<body class="bg-light">


    <div class="container shadow rounded-3 mt-4 p-4">
        <h1>Student</h1>

        <div class="shadow p-4 rounded-3 mx-auto bg-white">
            <form method="POST" action="proses.php">
                <div class="mb-3">
                    <label class="form-label">First Name</label>
                    <input type="text" name="first_name" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Last Name</label>
                    <input type="text" name="last_name" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Foto</label>
                    <input type="file" name="foto" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Gender : </label>

                    <input class="form-check-input" type="radio" name="gender" id="male">
                    <label class="form-check-label" for="male">
                        Male
                    </label>

                    <input class="form-check-input" type="radio" name="gender" id="female">
                    <label class="form-check-label" for="female">
                        Female
                    </label>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nilai</label>
                    <input type="number" name="nilai" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>



        <hr>

        <?php

        $data = [
            [
                'First Name' => 'Bagas',
                'Last Name' => 'Udi',
                'Nilai' => '10'
            ],
            [
                'First Name' => 'Bagas',
                'Last Name' => 'Udi',
                'Nilai' => '10'
            ],
            [
                'First Name' => 'Easa',
                'Last Name' => 'Nurnita',
                'Nilai' => '10'
            ],
            [
                'First Name' => 'Bagas',
                'Last Name' => 'Udi',
                'Nilai' => '10'
            ],
            [
                'First Name' => 'Bagas',
                'Last Name' => 'Udi',
                'Nilai' => '10'
            ],
        ];

        ?>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // foreach ($data as $d) {
                //     echo "<tr>";
                //     echo "<td>{$d['First Name']}</td>";
                //     echo "<td>{$d['Last Name']}</td>";
                //     echo "<td>{$d['Nilai']}</td>";
                //     echo "</tr>";
                // }

                ?>

                <!-- READABLE -->
                <?php foreach ($data as $d) : ?>
                    <tr>
                        <td>
                            <?= $d['First Name'] ?></td>
                        <td><?= $d['Last Name'] ?></td>
                        <td><?= $d['Nilai'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>