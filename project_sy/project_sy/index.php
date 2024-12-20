<?php include 'config.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Time and Date page</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
    <section class="main">
        <div class="nav">
            <img class="logo_img" src="C:\internship\logo.png">
            <div class="nav_part">
                <a href="#" class="link">Home</a>
                <a href="#" class="link">Contact</a>
                <a href="#" class="link">Gallery</a>
                <a href="#" class="link">Gallery</a>
            </div>
        </div>
    </section>

    <div class="datetimemain">
        <form method="post">
            <label class="lab">Date:</label>
            <input type="date" name="date" class="lab" placeholder="Enter the date you want to visit">
            <br>
            <label class="lab">Time:</label>
            <input type="time" class="lab" name="time" placeholder="Enter the time you reach">
            <br>
            <label class="lab">Dinner/Lunch:</label>
            <input type="text" name="dinner_lunch" placeholder="Enter the type">
            <label class="lab">Decision:</label>
            <select name="menu">
    <option>Select the menu</option>
    <optgroup label="thali"></optgroup>
    <option>Pulav</option>
    <option>Pulav</option>
    <option>Pulav</option>
    <option>Pulav</option>
    </optgroup>
    <optgroup label="sigle menue">
    <option>Pulav</option>
    <option>Pulav</option>
    <option>Pulav</option>
    </optgroup>
</select>

            <br><br><br>
            <label class="lab">Select the table number:</label>
            <select name="table_no">
                <option class="lab">Select the table</option>
                <optgroup label="Indoor tables">
                    <option>Pulav</option>
                    <option>Pulav</option>
                    <option>Pulav</option>
                    <option>Pulav</option>
                </optgroup>
                <optgroup label="Outdoor tables">
                    <option>Pulav</option>
                    <option>Pulav</option>
                    <option>Pulav</option>
                </optgroup>
                <optgroup label="Special tables">
                    <option>1</option>
                    <option>1</option>
                    <option>1</option>
                    <option>1</option>
                </optgroup>
            </select>
            <br><br><br>
            <button type="submit" name="submit" style="margin-left:20px;margin-bottom: 20px;" class="btn">Submit</button>
            <button type="button" style="margin-left: 20px; margin-bottom: 20px;" class="btn"><a href="minue.html">Next</a></button>
        </form>
    </div>

    <?php
    // Your PHP code for handling form submission and database insertion should be here
    ?>
</body>
</html>
