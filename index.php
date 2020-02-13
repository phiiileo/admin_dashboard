<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard || Codac.ng</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/dashboard.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>

<body>
    <main>
        <section class="container">
            <header>
                <i class="fa fa-bars" id="menu"></i>
                <h1>Administrator</h1>
                <nav>
                    <a href="profile.html"><img src="./images/user.png" alt="dp"></a>
                    <a href="#"> <i class="fas fa-sign-out-alt"></i> </a>

                </nav>
            </header>
            <section class="wrapper">
                <section class="sidebar" id="sidebar">
                    <div class="admin_info">
                        <img src="./images/user.png" alt="admin image">
                        <p>Phileo Maner</p>
                        <p>Super Admin</p>
                    </div>
                    <div class="sidebar_menu">
                        <ul>
                            <li class="active_menu"><a href="#"> <i class="fas fa-chart-line"></i> Dashboard </a>
                            </li>
                            <li><a href="students.html"> <i class="fa fa-user-graduate"></i> Students </a></li>
                            <li><a href="tutors.html"> <i class="fas fa-chalkboard-teacher"></i> Tutors </a></li>
                            <li><a href="admins.html"> <i class="fas fa-chalkboard-teacher"></i>
                                Admins </a></li>
                            <li><a href="profile.html"> <i class="fa fa-cogs"></i> Profile </a></li>
                            <li><a href="change-password.html"> <i class="fa fa-key"></i> Change Password
                                </a></li>
                        </ul>
                    </div>
                </section>
                <section class="main_board">
                    <section class="intro">
                        <div class="intro_lead">
                            <h1>Welcome, Phileo Maner!</h1>
                            <p>Last Login: Monday, 10th February, 2020 -10:20PM</p>
                        </div>
                    </section>
                    <section class="cards">
                        <div class="cards_body">
                            <a href="#"><i class="fa fa-user-graduate"></i></a>
                            <span>70</span>
                            <p>Registered Students</p>
                        </div>
                        <div class="cards_body">
                            <a href="#"><i class="fas fa-chalkboard-teacher"></i></a>
                            <span>7</span>
                            <p>Registered Tutors</p>
                        </div>
                        <div class="cards_body">
                            <a href="#"><i class="fab fa-discourse"></i></a>
                            <span>16</span>
                            <p>Available Courses</p>
                        </div>
                        <div class="cards_body">
                            <a href="#"><i class="fas fa-users-cog"></i></a>
                            <span>3</span>
                            <p>Registered Admins</p>
                        </div>
                    </section>
                </section>
            </section>
        </section>

    </main>
</body>
<script src="./js/dashboard.js"></script>
<!-- <script>
    let control = document.getElementById("control");
    let sidebar = document.getElementById("sidebar");
    let timeEl = document.getElementById("time");

    //Time update
    const GetTime = () => {
        let date = new Date();
        myTime = date.getHours() + ":" + date.getMinutes() + ":" + date.getSeconds();
        timeEl.innerHTML = myTime;
    };
    setInterval(GetTime, 100)

    //Click event on sidebar
    control.addEventListener("click", () => {
        let moveEl = sidebar.style.left;
        if (moveEl === "-350px") {
            sidebar.style.left = 0;
            control.classList.remove("fa-arrow-right");
            control.classList.add("fa-arrow-left");
        } else {
            sidebar.style.left = "-350px";
            control.classList.add("fa-arrow-right");
            control.classList.remove("fa-arrow-left")

        }
    })
</script> -->

</html>