<?php
if(isset($_POST['send']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  $service = $_POST['service'];

  $host = 'localhost';
  $user = 'root';
  $pass = 'P887@#*';
  $dbname = 'ayurvedic';

  $conn = mysqli_connect($host,$user,$pass,$dbname);
  if($conn)
  {
    // echo "connection ok";
  }

  $query = "INSERT INTO appoinment(name, email, date, time, service) values('$name','$email', '$date', '$time', '$service')";
  $data =  mysqli_query($conn,$query);
  
  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Appointment Form</title>
  <link rel="stylesheet" href="appoint.css">
  <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
  
   
</head>
<body>
  <div class="container-fluid bg-white sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-2 py-lg-0">
            <a href="index.html" class="navbar-brand">
                <img style="border-radius:20%;"class="img-fluid" src="img/logo.jpg" alt="Logo">
    
            </a>
    <h5 style="padding-left:180px;padding-top:5px;text-align:justify;" class="maincolor">Dr.Chandur's<br>Prakritik Chikitsa</h5>
            <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
         
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="services.html" class="nav-item nav-link">Speciality</a>
                    <a href="ayurveda.html" class="nav-item nav-link ">Ayurveda</a>
                  
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
             
            </div>
        </nav>
    </div>
</div>
  
  <div class="appointment-form-container">
    <h2>Book an Appointment</h2>
    <form action="" 
          method="post">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>
      </div>
      <div class="form-group">
        <label for="time">Time:</label>
        <input type="time" id="time" name="time" required>
      </div>
      
      <div class="form-group">
        <label for="service">Choose a Service</label>
                     <select id="service" name="service">
                            <option value="Panchakarma">Panchakarma</option>
                             <option value="Yoga">Yoga</option>
                              <option value="Nadi-Parikshan">Nadi-Parikshan</option>
                          <option value="Ayurvedic-Diet">Ayurvedic-Diet</option>
                          <option value="Garbha-Sanskar">Garbha-Sanskar</option>
                      </select>
      <div class="form-group">
        <input type="submit" value="Book Appointment" name="send">
      </div>
    </form>
  </div>
  

</body>

</html>
