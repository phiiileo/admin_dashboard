<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admins || Codac.ng</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/admins.css">

</head>

<body>
    <main>
        <section class="container">
            <?php include_once "./dashboard-fragments/dashboard_header.php" ?>
            <section class="wrapper">
                <?php include_once "./dashboard-fragments/dashboard_sidebar.php" ?>
                <section class="main_board">
                    <!-- <section>Hello world</section> -->
                    <section class="table">
                        <h3>Admins Information</h3>
                        <p class="control">
                            <button class="active" id="active">Active Admins</button>
                            <button id="deactivated">Deactivated Admins</button>
                        </p>
                        <div class="table_container">
                            <table id="table">
                                <tbody>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Action</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </section>
            </section>
        </section>
        </section>

    </main>
</body>
<script src="./js/admins.js"></script>
<script src="./js/dashboard.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

</html>