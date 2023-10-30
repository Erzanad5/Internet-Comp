
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>
            .container
            {
                margin-left: 0px;
            }
            form 
            {
                margin: auto;
                max-width: 1200px;
            }
            .form-group 
            {
                margin-bottom: 15px;
                display: flex;
                align-items: left;
            }
            .form-control
            {
                margin-bottom: 15px;
                display: flex;
                align-items: left;
                margin-left: 10px;
            }
            label 
            {
                flex: 1;
            }
            input,
            textarea 
            {
                flex: 2;
                width: 100%;
                padding: 8px;
                box-sizing: border-box;
            }
            .btn-container 
            {
                text-align: center;
            }
            .btn-container button
            {
                text-align: center;
            }
            @media (max-width: 576px) 
            {
                .form-group 
                {
                    flex-direction: column;
                }
                .btn-container 
                {
                    margin-left: 0;
                    justify-content: flex-start;
                }
            }  
        </style>
    </head>
    <body>
        <h1 class="text-center">The Cool Crew's Resort</h1>

        <!-- LOGO -->
        <nav class="navbar navbar-expand-sm bg-dark">
            <a class="navbar-brand" href="index.html">
                <img class="logo" src="lionLogo.jpg" alt="lionLogo">
            </a>
            <!-- Navbar Button-->
            <div class="hamburger" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>

            <!-- Navbar Links-->
            <div class="collapse navbar-collapse text-center" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="navbar-nav">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="yurts.php">Yurts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="activities.php">Activities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reservation.php">Reservation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="comments.php">Comments</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
        <h2 class="text-left">Reservation at The Cool Crew's Resort</h2>
        <form action="commentResults.php" method="post" class="comment-form">
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" id="first_name" name="first_name" autofocus>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" class="form-control" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="123-456-7890">
            </div>
            <div class="form-group">
                <label for="email">E-mail Address:</label>
                <input type="email" class="form-control" id="email" name="email" onkeyup="setGreetingTitle()">
            </div>
            <div class="form-group">
                <label for="your_comments">Your Comments:</label>
                <textarea class="form-control" id="your_comments" name="your_comments"></textarea>
            </div>
            <div class="btn-container">
            <button type="submit" class="btn btn-primary" style="width: 200px; background-color: blue; color: white; margin-bottom: 10px">Submit Comments</button>
            </div>
        </form>
        </div>
        <footer class="bg-dark text-white">
            <div class="text-center">
                <p>Copyright &copy; <?php echo date("Y");?> Cool Crew Resort</p>
                <p>email: cool.crew@mail.montclair.edu</p>
            </div>
        </footer>
    </body>
</html>