<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <!---- basic styling---->
    <style>
        #submitted{
            background-color: darkgray;
            width: 50vh;
            margin: auto;
            
        }
    </style>
</head>
<body>
    <!---Create div to style --->
    <div id="submitted">
        <h1>Thanks for Registration!</h1>
        <p>Your information is:</p>
        <form>
            <!--- php to open a file, write contact info to webpage and write contact information to file --->
            <?php 
            $file = fopen("contacts.txt", "a");
            $first = "First Name: " . $_POST['firstname'] . "<br>";
            echo $first;
            $last = "Last Name: " . $_POST['lastname'] . "<br>";
            echo $last;
            $address = "Address: " . $_POST['addr'] . "<br>";
            echo $address;
            $state = "State: " . $_POST['state'] . "<br>";
            echo $state;
            $zip = "Zip: " . $_POST['zip'] . "<br>";
            echo $zip;
            $phone = "Telephone: " . $_POST['phone'] . "<br>";
            echo $phone;
            $email = "Email: " . $_POST['email'] . "<br>";
            echo $email;
            fwrite($file, $first);
            fwrite($file, $last);
            fwrite($file, $address);
            fwrite($file, $state);
            fwrite($file, $zip);
            fwrite($file, $phone);
            fwrite($file, $email);
            fwrite($file, "<br>");
            fclose($file);
            ?>
        </form>
        <!----Link to main page--->
        <p>
            <a href="/index.html">Return to main page</a>
        </p>
    </div>
</body>
</html>