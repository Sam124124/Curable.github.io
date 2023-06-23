<?php
session_start(); // Start the session

$conn = mysqli_connect('localhost', 'root', '', 'contact') or die('connection failed');

$message = array(); // Initialize the message array

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $health_issue = mysqli_real_escape_string($conn, $_POST['health_issue']); // Corrected: changed 'health issue' to 'health_issue'

    $insert = mysqli_query($conn, "INSERT INTO `booking` (name, email, number, date, health_issue) VALUES ('$name', '$email', '$number', '$date', '$health_issue')") or die('query failed');
    
    // Simulating a failed database query
    // $insert = false;

    if ($insert) {
        $message[] = 'Booking made successfully';
        $_SESSION['booking_success'] = true;
        echo "<script>openPopup('success-popup');</script>"; // Open the success pop-up
        header("Location: " . $_SERVER['PHP_SELF']); // Redirect to the same page to clear form submission data
        exit();
    } else {
        $message[] = 'Booking failed';
        $_SESSION['booking_failed'] = true; // Set the session variable for failure
        header("Location: " . $_SERVER['PHP_SELF']); // Redirect to the same page to clear form submission data
        exit();
    }
}

// Check for failure session variable
if (isset($_SESSION['booking_failed']) && $_SESSION['booking_failed'] === true) {
    $message[] = 'Booking failed';
    unset($_SESSION['booking_failed']); // Unset the failure session variable
    echo "<script>openPopup('error-popup');</script>"; // Open the error pop-up
}
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>healthcare website</title>

    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!--custom css file link-->
    <link rel="stylesheet" href="css/booking.css">

    <script>
        function openPopup(popupId) {
            var popup = document.getElementById(popupId);
            popup.style.display = 'block';
        }

        function closePopup(popupId) {
            var popup = document.getElementById(popupId);
            popup.style.display = 'none';
    }
    </script>
</head>

<body>
    <section class="appointment" id="appointment">
        <h1 class="heading"> <span>book appointment now</span></h1>
        <div class="row">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <?php
                if (isset($message)) {
                    foreach ($message as $msg) {
                        echo '<p class="message">' . $msg . '</p>';
                    }
                }
                ?>
                <h3>Please enter your details</h3>
                <input type="text" name="name" placeholder="your name" class="box">
                <input type="email" name="email" placeholder="your email id" class="box">
                <input type="number" name="number" placeholder="your contact number" class="box">
                <input type="date" name="date" class="box">
                <input type="text" name="health_issue" placeholder="tell us a bit about your problem" class="box">
                <input type="submit" name="submit" value="book appointment" class="btn">
            </form>
        </div>
        <div class="popup" id="success-popup">
            <img src="image/tick.png">
            <h2>Thank you for choosing us!</h2>
            <p>Booking is done successfully. You will receive a confirmation message from your end.</p>
            <button type="button" onclick="closePopup('success-popup')">OKAY</button>
        </div>

        <div class="popup" id="error-popup">
            <img src="image/error.png">
            <h2>Something went wrong!</h2>
            <p>Please try again later.</p>
            <button type="button" onclick="closePopup('error-popup')">OKAY</button>
        </div>

        <?php
        if (isset($_SESSION['booking_success']) && $_SESSION['booking_success']) {
            echo "<script>setTimeout(function() { openPopup('success-popup'); }, 100);</script>"; // Open the success pop-up with a slight delay
            unset($_SESSION['booking_success']); // Unset the session variable after displaying the success pop-up
        }

        if (isset($message)) {
            foreach ($message as $msg) {
                if ($msg === 'Booking failed') {
                    echo "<script>setTimeout(function() { openPopup('error-popup'); }, 100);</script>"; // Open the error pop-up with a slight delay
                    break;
                }
            }
        }
        ?>
    </section>
</body>

</html>