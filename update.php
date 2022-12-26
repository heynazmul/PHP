<?php


include "config.php";

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  

  $sql = "INSERT INTO `contact`(`name`, `email`, `phone`, `message`) VALUES ('$name','$email','$phone','$message')";

  $result = $conn->query($sql);

    if ($result == TRUE) {
        echo "Record updated successfully.";
    }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];
    $sql = "SELECT * FROM `contact` WHERE `id`='$user_id'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $message = $_POST['message'];
            $id = $row['id'];
        }
    ?>
    <h2>User Update Form</h2>
    <form action="" method="post">
        <fieldset>
            <legend>Contact information:</legend>
            Name:<br>
            <input type="text" name="name" value="<?php echo $name; ?>">
            <input type="hidden" name="user_id" value="<?php echo $id; ?>">
            <br>
            Last name:<br>
            <input type="text" name="email" value="<?php echo $email; ?>">
            <br>
            Email:<br>
            <input type="email" name="phone" value="<?php echo $phone; ?>">
            <br>
            Password:<br>
            <input type="password" name="message" value="<?php echo $message; ?>">
            <br>
            <input type="submit" value="Update" name="update">
        </fieldset>
    </form>
</body>
</html>

<?php

} else{
    header('Location: view.php');
}
}

?> 