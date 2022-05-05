<?php
$conn=mysqli_connect("localhost","root","","customer")or die("unable to connect");
$message="";
if(isset($_POST['submit']))
{

    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];

if($conn)
{
    // echo "Connection sucessful";
}
$sql="INSERT INTO travel(name,email,contact)VALUES('$name','$email','$contact')";
if(mysqli_query($conn,$sql))
{
$message= "registration successful our team will contact you in 24 hours";
}
else{
    $message= "fail";
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box
        }

        body {
            /* background-size: cover; */
            background-image: linear-gradient(to right, rgb(132, 218, 221), rgb(224, 224, 109));
        }

        form {
            padding: 2%;
            /* margin: auto; */
            margin-left: auto;
            margin-right: auto;
            margin-top:13%;
            background-image: linear-gradient(to bottom,rgb(83, 219, 185) , rgb(0, 68, 255));
            text-align: center;
            width: 50%;
            border: 10px solid #010233; 
            border-radius: 10px;
            column-width: auto;
            /* box-shadow: inset 10px 10px 30px #108beb, inset -10px 10px 30px #108beb, inset -10px -10px 30px #108beb; */
        }

        h2
        {
            font-family: Arial, Helvetica, sans-serif;
        }

        input {
            margin: 2px;
            border-radius: 10px;
            padding: 5px;
            border: 2px solid #ffc400; 
        }

        label {
            display: block;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

        input[type=submit] {
            margin-top: 8px;
            background-color: #ffffff;
            font-family: Arial, Helvetica, sans-serif;
            font-size: auto;
            width: 100px;
            border: 2px solid #4CAF50; 
            cursor: pointer;


        }

        .message {
            background: lightgreen;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="message">
        <h1>
            <?php echo $message ?>
        </h1>
    </div>
    <form action="project.php" method="POST" >
        <h2 style="color: white;">For Any Queries Contact</h2>
        <br>
        <input type="text" placeholder="Name">
        <br>
        <br>
        <input type="text" placeholder="E-Mail">
        <br>
        <br>
        <input type="number" placeholder="Contact">
        <br>
        <br>
        <input type="submit" value="SUBMIT" placeholder="submit">
    </form>
    <br><br>

    </table>
</body>

</html>