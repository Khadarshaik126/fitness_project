<?php
include ('registration.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Registration Form | Fitness factory</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
            background: linear-gradient(135deg, #1a5139, #2A9D8F);
        }

        .container {
            max-width: 700px;
            width: 100%;
            background-color: #fff;
            padding: 25px 30px;
            border-radius: 5px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
        }

        .container .title {
            font-size: 25px;
            font-weight: 500;
            position: relative;
        }

        .container .title::before {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            height: 3px;
            width: 30px;
            border-radius: 5px;
            background: linear-gradient(135deg, #1a5139, #2A9D8F);
        }

        .content form .user-details {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 20px 0 12px 0;
        }

        form .user-details .input-box {
            margin-bottom: 15px;
            width: calc(100% / 2 - 20px);
        }

        form .input-box span.details {
            display: block;
            font-weight: 500;
            margin-bottom: 5px;
        }

        .user-details .input-box input {
            height: 45px;
            width: 100%;
            outline: none;
            font-size: 16px;
            border-radius: 5px;
            padding-left: 15px;
            border: 1px solid #ccc;
            border-bottom-width: 2px;
            transition: all 0.3s ease;
        }

        .user-details .input-box input:focus,
        .user-details .input-box input:valid {
            border-color: #2A9D8F;
        }

        form .memb-details .memb-title {
            font-size: 20px;
            font-weight: 500;
        }

        form .category {
            display: flex;
            width: 80%;
            margin: 14px 0;
            justify-content: space-between;
        }

        form .category label {
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        form .category label .dot {
            height: 18px;
            width: 18px;
            border-radius: 50%;
            margin-right: 10px;
            background: #d9d9d9;
            border: 5px solid transparent;
            transition: all 0.3s ease;
        }

        #dot-1:checked~.category label .one,
        #dot-2:checked~.category label .two,
        #dot-3:checked~.category label .three {
            background: #2A9D8F;
            border-color: #d9d9d9;
        }

        form input[type="radio"] {
            display: none;
        }

        form .button {
            height: 45px;
            margin: 35px 0
        }

        form .button input {
            height: 100%;
            width: 100%;
            border-radius: 5px;
            border: none;
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: linear-gradient(135deg, #1a5139, #2A9D8F);
        }

        select {
            margin: 0%;
            padding: 3%;
            width: 100%;
            height: 60%;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 400;
            letter-spacing: 1px;
        }

        
        form .button input:hover {
            background: linear-gradient(-135deg, #1b543a, #035a4f);
            /* background: black; */
        }

        @media(max-width: 584px) {
            .container {
                max-width: 100%;
            }

            form .user-details .input-box {
                margin-bottom: 15px;
                width: 100%;
            }

            form .category {
                width: 100%;
            }

            .content form .user-details {
                max-height: 300px;
                overflow-y: scroll;
            }

            .user-details::-webkit-scrollbar {
                width: 5px;
            }
        }

        @media(max-width: 459px) {
            .container .content .category {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="title">Registration Form</div>
        <div class="content">
            <form method="POST">
                <div class="user-details">

                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" placeholder="Enter your name" name="name"  required>
                    </div>

                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" placeholder="Enter your email" name="email"  required>
                    </div>

                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="tel" placeholder="Enter your number" name="phone"  required>
                    </div>

                    <div class="input-box">
                        <span class="details">Birthdate</span>
                        <input type="date" placeholder="Enter your date of birth" name="birthdate" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Gender</span>
                        <select name="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">other</option>
                        </select>
                    </div>
                    
                    <div class="input-box">
                        <span class="details">Location</span>
                        <input type="text" placeholder="Enter your location" name="location" required>
                    </div>
                </div>

                <div class="memb-details" >
                    <input type="radio" name="membership" id="dot-1">
                    <input type="radio" name="membership" id="dot-2">
                    <input type="radio" name="membership" id="dot-3">
                    <span class="memb-title">Membership</span>
                    <div class="category">
                        <label for="dot-1" >
                            <span class="dot one"></span>
                            <span class="membership" value="Basic">Basic plan</span>
                        </label>
                        <label for="dot-2">
                            <span class="dot two"></span>
                            <span class="membership" value="Standard" >Standard plan</span>
                        </label>
                        <label for="dot-3">
                            <span class="dot three"></span>
                            <span class="membership" value="Premium">Premium plan</span>
                        </label>
                    </div>

                    <div class="button">
                        <input type="submit" value="Register" name="register">
                    </div>
            </form>
        </div>
    </div>

</body>

<?php
if(isset($_POST['register']))
{
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
   $birthdate="";
   if (isset($_POST["birthdate"])) {
     $birthdate = $_POST["birthdate"];
   }
    $gender="";
 if (isset($_POST["gender"])) {
     $gender = $_POST["gender"];
   }
   $location="";
   if (isset($_POST["location"])) {
     $location = $_POST["location"];
   }
   $membership="";
   if (isset($_POST["membership"])) {
     $membership = $_POST["membership"];
   }
  
   $query = "INSERT INTO data(name,email,phone,birthdate,gender,location,membership)
   VALUES ('$name', '$email', '$phone', '$birthdate' ,' $gender' ,'$location','$membership')";
     $data = mysqli_query($conn,$query);
     if($data)
     { 
        // echo "data stored ";
     }else{
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
 
    }


 ?>