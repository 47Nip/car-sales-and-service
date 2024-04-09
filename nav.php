<!DOCTYPE html>
<html>
<head>
    <title>Nav bar for all</title>
    <link rel="stylesheet" href="home (2).css">

    <style>
        /* Add custom CSS styles to adjust the link size */
        .nav.container .navber li a {
            /* Example styles (modify as needed) */
            font-size: 16px; /* Adjust the font size */
        }

        .active {
            /* Add styles for the active link */
            color: red; /* For example, change the color */
        }
    </style>
</head>
<body>
    <header>
        <div class="nav container">
            <i class='bx bx-menu' id="menu-icon"></i>
            <a href="home.php" class="logo">Radhe <span>group</span></a>
            <ul class="navber">
                <li><a href="home.php" >Home</a></li>
                <li><a href="carsale.php" >Cars</a></li>
                <li><a href="carservice.php">Car Service</a></li>
                <li><a href="about.php">About-Us</a></li>
                <li><a href="contact-us.php">Contact Us</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
            <i class='bx bx-search' id="search-icon"></i>
            <div class="search-box container">
                <input type="search" placeholder="Search here...." id="search-input">
            </div>
            <div class="profile">
                <a href="PROFILE1.php">
                    <img src="img\admin1.png" alt="Click me" width="40px" height="40px">
                </a>
            </div>
        </div>
    </header>

    <script>
        const activepage = window.location.pathname;
        const navlinks =document.querySelectorAll('.navber a').
        forEach(link => {
            if(link.href.includes(`${activepage}`)){
                link.classList.add('active');
            }
        })

    </script>
</body>
</html>
