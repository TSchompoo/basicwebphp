<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Run for ตุ๊ดตู่</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Style the header */
        header {
            background-color: #006600;
            padding: 30px;
            text-align: center;
            font-size: 35px;
            color: white;
        }

        /* Create two columns/boxes that floats next to each other */
        nav {
            float: left;
            width: 30%;
            height: 400px; /* only for demonstration, should be removed */
            background: #00CC33;
            padding: 20px;
        }

        /* Style the list inside the menu */
        nav ul {
            list-style-type: none;
            padding: 0;
        }

        article {
            float: left;
            padding: 20px;
            width: 70%;
            background-color: #17ea56;
            height: 400px; /* only for demonstration, should be removed */
        }

        /* Clear floats after the columns */
        section:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Style the footer */
        footer {
            background-color: #006600;
            padding: 10px;
            text-align: center;
            color: white;
        }

        /* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
        @media (max-width: 600px) {
            nav, article {
                width: 100%;
                height: auto;
            }
        }
    </style>
</head>
<body>
<header>
    <h2>Run for ตุ๊ตตู่ กันเถอะ</h2>
</header>

<section>
    <nav>
        <ul>
            <li><a href="register.php">สมัคร Run</a></li>
            <li><a href="#">ตรวจสอบ BIB</a></li>
            <li><a href="#">ดูแผนที่ เส้นทางวิ่ง</a></li>
        </ul>
    </nav>

    <article>
        <h1>ฉันจะ Run For ตุ๊ดตู่</h1>
        <p>
            <?php
            // define variables and set to empty values
            $name = $email = $gender = $comment = $website = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $firstname= test_input($_POST["firstname"]);
                $lastname = test_input($_POST["lastname"]);
                $phoneNumber = test_input($_POST["phoneNumber"]);
                $email = test_input($_POST["email"]);
                $sex = test_input($_POST["sex"]);
                $date = test_input($_POST["date"]);
                $running = test_input($_POST["running"]);
                $runOld = test_input($_POST["runOld"]);
                $payRun = test_input($_POST["payRun"]);
                $size = test_input($_POST["size"]);
                $group = test_input($_POST["group"]);
                $country = test_input($_POST["country"]);
                $User_ID = test_input($_POST["User_ID"]);





            }

            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            echo "<h2>Your Input:</h2>";
            echo $firstname;
            echo "<br>";
            echo $lastname;
            echo "<br>";
            echo $phoneNumber;
            echo "<br>";
            echo $email;
            echo "<br>";
            echo $sex;

            echo "<br>";
            echo $date;
            echo "<br>";
            echo  $running;
            echo "<br>";
            echo $runOld ;
            echo "<br>";
            echo $payRun;
            echo "<br>";
            echo $size;
            echo "<br>";
            echo "$group";
            echo "<br>";
            echo  $country;
            echo "<br>";
            echo $User_ID ;

            ?>
<p>
</article>
</section>

<footer>
    <p>Footer</p>
</footer>
</body>
</html>
