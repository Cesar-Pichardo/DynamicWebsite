<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <!---- basic styling---->
    <style>
        #contacts{
            background-color: darkgray;
            width: 50vh;
            margin: auto;
        }
    </style>
</head>
<body>
    <!---Create div to style --->
    <div id="contacts">
        <h1>Existing Contacts</h1>
        <form>
            <p id="scroll">
                <!----php to open file and read it to webpage, error will be thrown if file cannot be opened---->
                <?php
                $file = fopen("contacts.txt", "r") or die("Unable to open file!");
                echo fread($file, filesize("contacts.txt"));
                fclose($file);
                ?>
            </p>
        </form>
        <!----Link to main page--->
        <p id="links">
            <a href="/index.html">Return to main page</a>
        </p>
    </div>
</body>
</html>