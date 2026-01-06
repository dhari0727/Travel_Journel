<?php


require 'PHPMailer-master/PHPMailerAutoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userEmail = $_POST["email"]; // Get user's email address
    $password = getPasswordFromDatabase($userEmail);

    if ($password !== false) {
        $mail = new PHPMailer;

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;
        $mail->Username = 'dharinithakkar4@gmail.com';
        $mail->Password = 'jaandhari';

        $mail->setFrom('dharinithakkar4@gmail.com', 'Dhari Thakkar');
        $mail->addAddress($userEmail);
        $mail->addReplyTo('dharinithakkar4@gmail.com', 'Dhari Thakkar');

        $mail->isHTML(true);
        $mail->Subject = 'Your Password';
        $mail->Body = "Your password is: $password";

        if ($mail->send()) {
            echo 'Password sent to your email address.';
        } else {
            echo 'Unable to send password. Please try again later.';
        }
    } else {
        echo 'No password found for the provided email address.';
    }
}

function getPasswordFromDatabase($email) {
    // Replace these database connection details with your actual values
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "project";

        $conn = mysqli_connect($server,$user,$pass,$db);

        if($conn){
            
        }
        else{
            echo "unsuccesfull!";
        }
    // Fetch password from the database
    $sql = "SELECT psw FROM signup WHERE eml = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $databasePassword = $row["psw"];
        $conn->close();
        return $databasePassword;
    } else {
        $conn->close();
        return false;
    }
}

?>
