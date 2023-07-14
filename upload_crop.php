<!DOCTYPE html>
<html>
<head>
    <title>Upload Crop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .upload-form {
            max-width: 500px;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
    </style>
</head>
<body>
<div class="a">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="../index.php"><img src="../Photo.jpeg" height="60px", width="80px"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            
              <li class="nav-item ">
                <a class="nav-link" href="../index.php">HOME <span class="sr-only"></span></a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="../NOTIFICATION.pdf">NOTIFICATION</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Grivence.html">GRIVENCE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../help.php">HELP </a>
              </li>
            
              <li class="nav-item">
                <a class="nav-link" href="../contact.html">contact us</a>
              </li>
            
            </ul>
          </div>
        </nav>
          
      </div>
    <div class="container">
        <div class="upload-form">
            <h2>Upload Crop</h2>
            <form action="upload_crop_process.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="cropName">Crop Name:</label>
                    <input type="text" class="form-control" id="cropName" name="cropName" required>
                </div>
                <div class="form-group">
                    <label for="cropImage">Crop Image:</label>
                    <input type="file" class="form-control-file" id="cropImage" name="cropImage" required>
                </div>
                <div class="form-group">
                    <label for="cropType">Crop Type:</label>
                    <input type="text" class="form-control" id="cropType" name="cropType" required>
                </div>
                <div class="form-group">
                    <label for="pricePerKg">Price per Kg:</label>
                    <input type="number" class="form-control" id="pricePerKg" name="pricePerKg" step="0.01" required>
                </div>
                <div class="form-group">
                    <label for="availableQuantity">Available Quantity:</label>
                    <input type="number" class="form-control" id="availableQuantity" name="availableQuantity" required>
                </div>
                <div class="form-group">
                    <label for="cropDescription">Crop Description:</label>
                    <textarea class="form-control" id="cropDescription" name="cropDescription" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <footer class="bg-light text-center py-4" style="margin-top: 2%;">
    <div class="container">
      <p class="m-0">© 2023 THE CURIOUS MINDS. All rights reserved.</p>
      <p class="m-0">Website created by <a href="#">THE CURIOUS MINDS TEAM </a></p>
    </div>
  </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
