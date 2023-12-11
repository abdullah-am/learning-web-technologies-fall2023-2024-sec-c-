<?php
require_once ('model/db.php');
$conn = getConnection();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, role, gender FROM users";
$result = $conn->query($sql);
$totalId = 0;
$totalRole = 0;
$totalGender = 0;
while ($row = $result->fetch_assoc()) {
    $totalId += $row["id"];
 
    $totalRole += strlen($row["role"]);
    $totalGender += strlen($row["gender"]);
}

// Close connection
$conn->close();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        table {
            width: 100%;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }

        header img {
            max-width: 100%;
        }

        main {
            margin: 20px;
        }

        .total-box {
            width: 200px;
            padding: 10px;
            background-color: #e0e0e0;
            border: 1px solid #ccc;
            text-align: center;
        }

        .average-rating {
            width: 200px;
            padding: 10px;
            background-color: #e0e0e0;
            border: 1px solid #ccc;
            text-align: center;
        }

        .average-rating h3 {
            margin-bottom: 10px;
        }

        div {
            margin-top: 20px;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        hr {
            margin-top: 10px;
            margin-bottom: 10px;
            border: 0;
            border-top: 1px solid #ccc;
        }
    </style>
</head>

<body>

    <table>

        <tr height="60px">
            <header>
                <td>
                    <img src="" alt="">
                </td>
                <td align="right">
                    <a href="index.php">Home</a>|
                    <a href="view/login.php">Login</a>|
                    <a href="view/registration.php">Registration</a>|
                </td>
            </header>
        </tr>

        <tr>
            <td colspan="2" height="2px">
                <hr>
            </td>
        </tr>


        <td colspan="2" align="center">
            <h2>
                <b>
                    Welcome to our esteemed matrimonial platform, dedicated to facilitating meaningful connections.<br>
                    With a focus on compatibility and shared values, we provide a sophisticated space for individuals seeking a committed,
                    long-term relationship. Embark on this journey with us, where professionalism meets matters of the heart.
                </b>
            </h2>
        </td>


        <tr height="350px">
            <td colspan="2">
                <main>
                    <div style="display: flex; justify-content: space-around; margin-top: 0px;">
                        <!-- Adjusted margin-top -->
                        <div class="total-box" id="total-member-box">
                            <h3>Total Member</h3>
                            <p><?php echo $totalId; ?></p>
                        </div>
                        <div class="total-box" id="total-biodata-box">
                            <h3>Total Biodata Download</h3>
                            <p><?php echo $totalRole; ?></p>
                        </div>
                        <div class="total-box" id="total-success-box">
                            <h3>Total Success</h3>
                            <p><?php echo $totalGender; ?></p>
                        </div>
                        <div class="average-rating">
                            <h3>Average Rating</h3>
                            <?php

                            // Retrieve average rating from the database and display it
                            $con = getConnection();
                            $sql = "SELECT AVG(rating) as average FROM rating";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_assoc($result);
                            $averageRating = round($row['average'], 2);
                            echo $averageRating;
                            ?>
                        </div>
                    </div>
                    <div>
                        <h3>User Reviews</h3>
                        <?php
                        $con = getConnection();
                        $sql = "SELECT * from review";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_assoc($result);
                        echo $row['review'];
                        ?>
                    </div>
                </main>
            </td>
        </tr>

        <tr height="60px">
            <td colspan="2" align="center">
                <hr>
                <footer>
                    <a href="viewabout.php">About Us</a>
                    <a href="">Helpline</a>
                    <a href="">FAQ</a>
                    <a href="viewT&C.php">Terms and Condition<br></a>
                    Copyright &copy; 2023
                </footer>
            </td>
        </tr>
    </table>

</body>

</html>

