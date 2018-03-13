<html>
<head>
    <meta charset="UTF-8">
    <title>scond project ever yo</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <script src="jquery-3.3.1.js"></script>
    <script src="fade.js"></script>
</head>
<body>
    <div class="top">
        <div class="logo">
            <a href="first_file.html" style="margin: 0;">
            <img src="transport.png" width="140px"/></a>
        </div>
        <div class="nav">
            <ul>
                <li id="go_home"><a  href="first_file.html">Available Offers</a></li>
                <li id="go_facility"><a  href="second_file.html">Requested Routes</a></li>
                <li id="go_book"><a  href="booking.html">My Routes Offered</a></li>
                <li id="go_book"><a  href="booking.html">My Routes Booked</a></li>
            </ul>
            <hr style="padding: 0; margin-top: 1px;"/>
        </div>
        
    </div>
    <div  class="content">
        <div id="changin_content"><h1>Available Offers</h1><p style="margin: 0;">
            <?php
            echo $_SESSION["category"];
            ?>

            
        </p>
        </div>
        
    </div>
    <div class="bottom">
        © 2017 Pramana Experience - All Rights Reserved.
    </div>
    
</body>
</html>