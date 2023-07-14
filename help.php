<!DOCTYPE html>
<html>
<head>
    <title>Chatbot</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .chat-container {
            max-height: 300px;
            overflow-y: auto;
            padding: 10px;
        }
        .m1{
            margin:3%;
        }
        .m1 button{
            background-color:white;
        }
        .m1 button a{
            text-decoration:none;
            color:black;
        }
    </style>
</head>
<body>
<div class="a">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="index.php"><img src=".\rough\Photo_navbar.jpeg" height="60px", width="80px"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            
              <li class="nav-item ">
                <a class="nav-link" href="index.php">HOME <span class="sr-only"></span></a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="NOTIFICATION.pdf">NOTIFICATION</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Grivence.html">GRIVENCE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="help.php">HELP </a>
              </li>
            
              <li class="nav-item">
                <a class="nav-link" href="contact.html">contact us</a>
              </li>
            
            </ul>
          </div>
        </nav>
          
      </div>
    <div class="container">
        <h1>Chatbot Assistant</h1>

        <div class="chat-container">
            <?php
            // Establish a connection to the database
            $host = 'localhost'; // Replace with your MySQL host
            $username = 'root'; // Replace with your MySQL username
            $password = ''; // Replace with your MySQL password
            $database = 'provothon'; // Replace with your MySQL database name
            
            // Create a connection
            $conn = new mysqli($host, $username, $password, $database);
            
            // Check the connection
            if ($conn->connect_error) {
                die('Connection failed: ' . $conn->connect_error);
            }

            // Check if the form is submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $userQuery = $_POST["user_query"];

                // Prepare the SQL statement to fetch the answer from the database
                $sql = "SELECT answer FROM chat WHERE question LIKE '%$userQuery%'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Match found, display the answer
                    $row = $result->fetch_assoc();
                    $answer = $row["answer"];
                    echo '<div class="alert alert-primary" role="alert">' . $answer . '</div>';
                } else {
                    // No match found
                    echo '<div class="alert alert-warning" role="alert">Sorry, I don\'t understand. Can you please rephrase your question?</div>';
                }
            }
            ?>
        </div>

        <form method="POST">
            <div class="form-group">
                <input type="text" class="form-control" name="user_query" placeholder="Ask me a question">
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
        <div class = "m1">
            <button type="submit" class="btn btn-primary"><a href="index.php">Home</a></button>
        </div>
    </div>
    <footer class="bg-light text-center py-4" style="margin-top: 2%;">
    <div class="container">
      <p class="m-0">© 2023 THE CURIOUS MINDS. All rights reserved.</p>
      <p class="m-0">Website created by <a href="#">THE CURIOUS MINDS TEAM </a></p>
    </div>
  </footer>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
