<?php

// create a variables in php using ($)
$username = "BSIT NT 3103";
$user_id = 123456789;
$user_email = "24-71394@g.batstate-u.edu.ph";
$status = "TAO";
$address = "Sitio Himuran, Brgy. Malapad na Natipuan";

echo "<u>Output from pure php code</u>";
echo "<br>";
echo $username;
echo "<br>";
echo $user_id;
echo "<br>";
echo $user_email;
echo "<br>";
echo $status;
echo "<br>";
echo $address;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DEMO BSIT NT 3103</title>
</head>
<body>
   <!-- <h1>Hello World Po Koyah</h1> -->
    <?php //echo "<h1>Hello Po Ulit Koyah</h1>"; ?>

    <a href="next_page.php">Go to Next Page</a>
    <h3>
        Username: <u><?php echo $username ?></u>
        <br>
        UserID: <u><?php echo $user_id ?></u> 
        <br>
        UserEmail: <u><?php echo $user_email ?></u>
        <br>
        Status: <u><?php echo $status ?></u>
        <br>
        Address: <u><?php echo $address ?></u>

    </h3>
    <button type= "button" onclick="greetUser()">Greet User</button>
    <!-- internal javascript -->
     <script>
        const username = "<?php echo $username; ?>";
        const userID = "<?php echo $user_id; ?>";
        const userEmail = "<?php echo $user_email; ?>";
        const status = "<?php echo $status; ?>";
        const address = "<?php echo $address; ?>";


        function greetUser(){
            alert(
  "Nagana ako, Besterbonia " + username +
  ", Your User ID is " + userID +
  ", Your Email is " + userEmail +
  ", status is: " + status +
  ", nakatira sa " + address
);
        }
     </script>
</body>
</html>