<!DOCTYPE html>
<html>

<head>
    <title>Page Title</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

</head>
<style>
@import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    list-style: none;
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
}



.wrapper {
    display: grid;
    position: relative;
}

.wrapper .sidebar {
    width: 200px;
    height: 100%;
    background: #dce1eb;
    padding: 30px 0px;
    grid-template-columns: 14rem auto 14rem;
    position: fixed;
}

.wrapper .sidebar h2 {
    background-color: transparent;
    color: #ff3333;
    text-transform: uppercase;
    text-align: center;
    padding-top: 30px;
    
    margin-bottom: 30px;
    font-size: 20px;
    
    font-weight: bold;
   
    color: #333;
    
    transition: color 0.3s ease-in;
}

.wrapper .sidebar h2:hover span:nth-child(1) {
    color: #ff0000; /* R */
}

.wrapper .sidebar h2:hover span:nth-child(2) {
    color: white; /* a */
}

.wrapper .sidebar h2:hover span:nth-child(3) {
    color: #0000ff; /* d */
}

.wrapper .sidebar h2:hover span:nth-child(4) {
    color: #ff00ff; /* h */
}

.wrapper .sidebar h2:hover span:nth-child(5) {
    color: #ffff00; /* e */
}



.wrapper .sidebar h2:hover span:nth-child(7) {
    color: #ff7f00; /* G */
}

.wrapper .sidebar h2:hover span:nth-child(8) {
    color: #ff007f; /* r */
}

.wrapper .sidebar h2:hover span:nth-child(9) {
    color: #7f00ff; /* o */
}

.wrapper .sidebar h2:hover span:nth-child(10) {
    color: #00ff7f; /* u */
}

.wrapper .sidebar h2:hover span:nth-child(11) {
    color: white; /* p */
}


.wrapper .sidebar ul li {
    padding: 15px;
    border-bottom: 1px solid #bdb8d7;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    border-top: 1px solid rgba(255, 255, 255, 0.05);
}

.wrapper .sidebar ul li a {
    color: #ff5050;
    display: flex;
    transition: background-color 0.3s ease;
    transition: all .2s ease-out;


}

.wrapper .sidebar ul li a .span {
    width: 25px;


}

.wrapper .sidebar ul li:hover {
    background-color: #c4cbd5;
    display: grid;
    color: #ff5050;
    font-size: 0.8rem;
}

.wrapper .sidebar ul li:hover a {
    color: #ff5050;
}

.wrapper .sidebar .social_media {
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
}

.wrapper .sidebar .social_media a {
    display: block;
    width: 40px;
    background: #594f8d;
    height: 40px;
    line-height: 45px;
    text-align: center;
    margin: 0 5px;
    color: #bdb8d7;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
}

.wrapper .main_content {
    /* width: 100%; */
    margin-left: 200px;
}



.wrapper .main_content .info {
    margin: 20px;
    color: #717171;
    line-height: 25px;
}

.wrapper .main_content .info div {
    margin-bottom: 20px;
}

@media (max-height: 500px) {
    .social_media {
        display: none !important;
    }
}

.dropdown-menu {
    display: none;

}

.dropdown:hover .dropdown-menu {
    display: contents;
    background-color: #c4cbd5;
}

</style>


<body>

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <div class="wrapper">
        <div class="sidebar">
            <h2>
                <span>R</span>
                <span>a</span>
                <span>d</span>
                <span>h</span>
                <span>e</span>
                
                <span>G</span>
                <span>r</span>
                <span>o</span>
                <span>u</span>
                <span>p</span>
            </h2>

            <ul>
                <li>
                    <a href="admin.php">
                        <span class="material-symbols-outlined">grid_view</span>Dashboard</a>
                </li>
                <li class="dropdown" id="customerDropdown">
                    <a href="admin.php">
                        <span class="material-symbols-outlined">person_outline</span>
                        Customer</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="userlist.php">View Customers</a></li>
                        <li><a class="dropdown-item" href="Removeuser.php">Remove Customer</a></li>
                    </ul>
                </li>
                <li class="dropdown" id="customerDropdown">
                    <a href="admin.php">
                        <span class="material-symbols-outlined">insights</span>Anyaltics
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="Anyaltics_carsales.php">Car Sales</a></li>
                        <li><a class="dropdown-item" href="Anyaltics_carservice.php">Car Service</a></li>
                    </ul>
                </li>
                <li class="dropdown" id="customerDropdown">
                    <a href="Adminpurchase.php">
                        <span class="material-symbols-outlined">directions_car</span>Cars
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="new order.php">View New Order</a></li>
                        <li><a class="dropdown-item" href="allcomapnycar.php">View All Company Cars Brand</a></li>
                    </ul>
                </li>
                <li class="dropdown" id="customerDropdown">
                    <a href="admin.php">
                        <span class="material-symbols-outlined"> car_repair</span>Car Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="Adminservice.php">View All Car Service</a></li>
                        <li><a class="dropdown-item" href="Adminbookingap.php">Service Booking Appotiment</a></li>
                    </ul>
                </li>
                <li class="dropdown" id="customerDropdowan">
                    <a href="admin.php">
                        <span class="material-symbols-outlined">mail </span>Inquary
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="Admininquary.php">Contact Dashboard</a></li>
                        <li><a class="dropdown-item" href="carinquary.php">Cars Inquary</a></li>
                    </ul>

                </li>
                <li>
                    <a href="testdrive.php">
                    <span class="material-symbols-outlined">schedule</span>Test Drive Appotiment
</a>
                </li>

                <br><br>
                <li>

                    <a href="logout.php">
                        <span class="material-symbols-outlined">logout</span>

                        LogOut</a>
                </li>
            </ul>

        </div>


</body>

</html>
