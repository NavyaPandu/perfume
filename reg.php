<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body{ 
      background: -webkit-linear-gradient(#3b1a69,#7450a4);
      padding-top:50px;
      padding-bottom:120px;

    }
    .form-container {
      max-width: 400px;
      margin: 50px auto;
      font-family:;  
      background-color: #ccbbdf;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .mt-3{
        text-align:center;
    }
    .mb-4{
      text-align:center;
    }
  
  </style>
</head>
<body>

<div class="container">
  <div class="form-container">
    <h2 class="mb-4">Registration Form</h2>
    <form action="re.php" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" required>
      </div>
      <div class="mb-3">
        <label for="phone number" class="form-label">Phone Number</label>
        <input type="text" class="form-control" id="phone" name="phone" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <button type="submit" class="btn btn-success">submit</button><br>

     
    </form>

    <div class="mt-3">
      <p>Already signed up?  <a href="login.php">Login here</a></p>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>