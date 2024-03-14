<?php
ob_start();
session_start();
include 'conn.php';

$sql = "SELECT students.first_name,
       students.last_name,
       exams.exam_name,
       courses.course_name,
       specializations.specialization_name,
       majors.major_name,
       exams.date,
       grades.grade_value
    FROM grades
    LEFT JOIN exams ON exams.exam_id = grades.exam_id
    LEFT JOIN courses ON courses.course_id = grades.course_id
    LEFT JOIN majors ON majors.major_id = grades.major_id
    LEFT JOIN students ON  students.student_id = grades.student_id
    LEFT JOIN specializations ON specializations.specialization_id = grades.specialization_id
    
 ";
$result = mysqli_query($conn, $sql);



?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Join 3 Table Level 1</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
	
</head>
<body>

<div class="container">
    <h3 align="center">1st Level Join Tables</h3>


    <!-- Nav Bar -->
    
    <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">


    <!-- Dropdown -->
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    1
  </button>
  <ul class="dropdown-menu dropdown-menu-dark">
    <li><a class="dropdown-item active" href="#">2</a></li>
    <li><a class="dropdown-item" href="#">3</a></li>
    <li><a class="dropdown-item" href="#">4</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">More</a></li>
  </ul>
</div>

<!-- Continuation of Navbar -->
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>


<!-- HAHSRETRHEU -->
        <div class="table-responsive">
            <table id="student_data" class="table table-striped table-bordered">
                 <thead>
                    <tr>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th> Course Name </th>
                      <th> Major Name </th>
                      <th> Specialization Name </th>
                      <th>Exam Name</th>
                      <th>Date</th>
                     <th>Grade Value</th> 
                     </tr>
              
          </thead>
           <?php  
		
                while ($row = mysqli_fetch_array($result)) 
                {
                    echo '
                    <tr >
                        <td> '.$row["first_name"].' </td>
                        <td> '.$row["last_name"].' </td>
                        <td> '.$row["course_name"].' </td>
                        <td> '.$row["major_name"].' </td>
                        <td> '.$row["specialization_name"].' </td>
                        <td> '.$row["exam_name"].' </td>
                        <td> '.$row["date"].' </td>
                        <td> '.$row["grade_value"].' </td>

                    </tr>
                    ';
                }

		  ?>
       </table>
      
      <!-- Button -->
       <button type="button" class="btn btn-primary">Click me</button>

      <!-- Pagination -->
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-end">
    <li class="page-item disabled">
      <a class="page-link">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>


    </div>
    
    
</div>

	

<!--
		<a href="index2.php">Insert Data Here</a>&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="search_filter_print.php">Search Data Here</a>&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="update.php">Update Data Here</a>&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="index.php">Go to Home</a>&nbsp;&nbsp;&nbsp;&nbsp;
-->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>



<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script> -->

</html>


