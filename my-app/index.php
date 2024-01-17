<?php

?>


<html>
<head>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            color: white;
            background: linear-gradient(
                rgba(0, 0, 0, 0.65),
                rgba(0, 0, 0, 0.65),
                rgba(0, 0, 0, 0.38),
                rgba(0, 0, 0, 0)
            ), url(foodd.jpg) no-repeat;
            background-size: cover;
        }

        .box {
            width: 900px;
            float: right;
            border: 1px solid none;
        }

        .box ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            margin-left: -80px;
        }

        .box ul li {
            width: 120px;
            float: left;
            margin: 20px auto;
            text-align: center;
        }

        .box ul li a {
            text-decoration: none;
            color: darkgrey;
        }

        .box ul li:hover {
            background-color: green;
        }

        .box ul li a:hover {
            color: white;
        }

        .wd {
            width: 300px;
            height: 1000px;
            background-color: black;
            opacity: 0.9;
            padding: 55px;
        }

        .wd h1 {
            text-align: center;
            text-transform: uppercase;
            font-weight: 100;
        }

        .wd h4 {
            text-align: justify;
            color: darkgray;
        }

        .opt form,
        input[type="button"] {
            background-color: black;
            color: white;
            padding: 10px;
            margin: -14px auto;
            padding-left: 50px;
            padding-right: 50px;
            text-align: center;
        }

        .opt form,
        input[type="button"]:hover {
            background-color: #f0f0f0;
        }

        
    </style>
</head>
<body>



</h1>
    <div class="box">
        <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Menu</a></li>
                <ul class="sub">
                    <li>Static Menu</li>
                    <li>Wine Menu</li>
            <li><a href="#">Online Order</a></li>
            <li><a href="#">Team</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href= "logout.php">Logout</a></li>
        </ul>
         </nav>
    </div>

    <div class="wd">
        <h1><i>Welcome</i></h1>

        <h4>
            Indulge in an exquisite culinary experience at our high dining establishment, where sophistication meets flavor. Elevate your senses with a menu meticulously crafted to tantalize the taste buds, showcasing the finest ingredients and culinary expertise. Immerse yourself in an ambiance of refined elegance, where each dish is a masterpiece and every moment is an opportunity to savor the artistry of fine dining. Whether you seek a romantic evening, a celebration, or simply a moment of culinary delight, our high dining destination promises to elevate your gastronomic journey to new heights. Welcome to a world where impeccable service and exceptional cuisine converge to create an unforgettable dining affair.
        </h4>

        <h2>Reservation</h2>
        <div class="opt"></div>
        <form action="" method="post">
            <input type="button" value="Start Now">
        </form>
    </div>
</body>
</html>
