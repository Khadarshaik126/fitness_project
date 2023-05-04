<?php include('Registration.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background: linear-gradient(to bottom right, #00ffff, #008080);
        }

        h1 {
            text-align: center;
            color: #ffffff;
            text-shadow: 1px 1px #008080;
        }

        form {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 2px 2px 10px #008080;
            padding: 20px;
            max-width: 500px;
            margin: 0 auto;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            box-shadow: 1px 1px 5px #008080;
        }

        input[type="submit"] {
            background-color: #008080;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            box-shadow: 1px 1px 5px #008080;
        }

        input[type="submit"]:hover {
            background-color: #ffffff;
            color: #008080;
            transition: all 0.3s ease-in-out;
        }
    </style>

</head>

<body>
    <h1>Join Our Gym Today!</h1>
    <form action="#" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="others">Other</option>
        </select>

        <label for="birthdate">Birthdate:</label>
        <input type="date" id="birthdate" name="birthdate" required>

        <label for="membership">Membership Type:</label>
        <select id="membership" name="membership" required>
            <option value="monthly">Monthly</option>
            <option value="quaterly">Quarterly</option>
            <option value="yearly">Yearly</option>
        </select>

        <label for="message">Message:</label>
        <textarea id="message" name="message"></textarea>

        <input type="submit" value="Submit" name="register">
    </form>


</body>

</html>
<?php

 $name="";
  if (isset($_POST["name"])) {
     $name = $_POST["name"];
   } 
   $email="";
   if (isset($_POST["email"])) {
     $email = $_POST["email"];
   } 
   $phone="";
   if (isset($_POST["phone"])) {
     $phone = $_POST["phone"];
   } 
   $gender="";
 if (isset($_POST["gender"])) {
     $gender = $_POST["gender"];
   }
   $birthdate="";
   if (isset($_POST["birthdate"])) {
     $birthdate = $_POST["birthdate"];
   }
   $membership="";
   if (isset($_POST["membership"])) {
     $membership = $_POST["membership"];
   }
   $message="";
   if (isset($_POST["message"])) {
     $message = $_POST["message"];
   }
                
   $query = "INSERT INTO data (name,email,phone,gender,birthdate,membership,message)
   VALUES ('$name', '$email', '$phone', '$gender' ,' $birthdate' , '$membership','$message')";
     $data = mysqli_query($conn,$query);
     if($data)
     { 
         echo "data stored ";
     }else{
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
 

 ?>
 