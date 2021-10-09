<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TimeKeeper</title>
</head>
<header style="height: 150px; width: 100%;">
    <div>
        <p style="font-size:50px; color:white; margin-left:11%;">TimeKeeper</p>
        <a href="home.php"><img class="homelogo" src="TKWhite.png" alt="homelogo"></a>
        <div class="group1">
            <i class="fa users fa-user"></i>
            <p>Hello, User</p>  
        </div>
    </div>
</header>
<body>
    <div class="topnav">
        <a href="#">Home</a>
        <a href="#browse">Browse</a>
        <a href="home.php">List</a>
        <a href="logout.php">Logout</a>
        <div class="search-container">
            <form action="/action_page.php">
                <input type="text" id="searchbarhome" placeholder="What are you looking for?" name="search"></input>
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    <div class="divider">
    <div class="containerbrowse">
        <h2 class="browseh21">Upcoming Appointments</h2>
        <div style="background-color:#4E4E4E;" class="boxescontainer">
            <div  class="box">
                <div class="meetings1">Monday, 13 September 2021</div>
                <div class="storename1">KotsoRodos</div>
                <div class="date1"></div>
                <div class="storeocupation1">Current occupation estimate: (N/A) </div>
                <div class="openhours1">Appointment in: 1 hour</div>
            </div>
        </div>
        <div style="background-color:#4E4E4E;" class="boxescontainer">
            <div  class="box">
                <div class="meetings1">Tuesday, 14 September 2021</div>
                <div class="storename1">PrivateStores</div>
                <div class="date1"></div>
                <div class="storeocupation1">Current occupation estimate: (N/A) </div>
                <div class="openhours1">Appointment in: 23 hours</div>
            </div>
        </div>
        <div style="background-color:#4E4E4E;" class="boxescontainer">
            <div  class="box">
                <div class="meetings1">Tuesday, 14 September 2021</div>
                <div class="storename1">FrenchStores</div>
                <div class="date1"></div>
                <div class="storeocupation1">Current occupation estimate: (N/A) </div>
                <div class="openhours1">Appointment in: 1 day and 1 hour</div>
            </div>
        </div>
        <input class="favorite styled" type="button" value="Load More..">
    </div>
    
</body>

</html>