<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change Password || Codec.ng</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="css/change_password.css">
</head>

<body>
    <main>
        <section class="container">
        <?php include_once "./dashboard-fragments/dashboard_header.php" ?>
            <section class="wrapper">
                <?php include_once "./dashboard-fragments/dashboard_sidebar.php" ?>
                <section class="main_board">
                    <form action="">
                        <h3>Change your password</h3>
                        <div class="form-group">
                            <label for="old_password">Old Password:</label>
                            <input type="password" name="old_password" placeholder="Enter your old password" required>
                        </div>
                        <div class="form-group">
                            <label for="new_password">New Password:</label>
                            <input type="password" name="new_password" placeholder="Enter a new password" required>
                        </div>
                        <div class="form-group">
                            <label for="confirm_new_password">Comfrim New Password:</label>
                            <input type="password" name="password" placeholder="Confirm your new password" required>
                        </div>
                        <button>Change Pasword</button>
                    </form>
                </section>
            </section>
        </section>
        </section>

    </main>
</body>
<script src="./js/dashboard.js"></script>

</html>