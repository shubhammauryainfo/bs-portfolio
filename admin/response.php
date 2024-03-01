<!doctype html>
<html lang="en">
    <head>
        <title>ARSH | Dashboard</title>
        <link rel="icon" href="../assets/img/profile.jpg" type="image/x-icon"> 
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
   <a href="logout.php"><button type="button" class="mx-4 btn btn-danger">Logout</button></a> 
        <nav class="pt-3">
          
            <ul class="nav justify-content-center">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="dashboard.php"><button type="button" class="btn btn-primary">Dashboard</button></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../add_design.html"><button type="button" class="btn btn-primary">Add Design</button></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="response.php"><button type="button" class="btn btn-primary">Forms</button></a>
                </li>

              </ul>
        </nav>
        </header>
        <div class="row ">
        <section>
          <?php
     
          session_start();
          
        
          $admin=$_SESSION['admin'];
          if ($admin==true) {
          
          }
          else{
            header("location:index.html");
          }
    echo"  <div class='container rounded mt-3 bg-white p-md-5'>
          <div class='h2 font-weight-bold'>Form Responses</div>
          
          ";
         include "connect.php";
         $query = "SELECT * FROM `contact` ORDER BY `No` DESC;" ;
     
         $result = mysqli_query($conn,$query);
         if(mysqli_num_rows($result)>0) {
          echo "
          <div class='table-responsive'>
              <table class='table'>
                 
                  <thead>
                      <tr>
                          <th scope='col'>Name</th>
                          <th scope='col'>Email</th>
                          <th scope='col'>phone</th>
                          <th scope='col'>Subject</th>
                          <th scope='col'>Message</th>
                      </tr>
                  </thead>
                  <tbody>";
                      while ($rows = mysqli_fetch_array($result)) {
                          echo "
                     
                      <tr class='bg-blue'>
                      <td class='pt-3'>{$rows['name']}</td>
                          <td class='pt-3'>{$rows['email']}</td>
                          <td class='pt-3'>{$rows['phone']}</td>
                          <td class='pt-3'>{$rows['subject']}</td>
                          <td class='pt-3'>{$rows['message']}</td>
                          <td class='pt-3'> <a class='btn btn-danger mx-1' href='del_formresponses.php?no={$rows['no']}' role='button'>delete</a></td>
                      </tr>
                  
              
                  </tbody>
                  ";
                      }
                      echo"
              </table>
          </div>";
                  }
                  else{
                      echo "no records found......"; 
                  }
                  ?>
      </div>


      <script
          src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
         
      ></script>

      <script
          src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
         
      ></script>
     

        </section>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
    <style>
        body{
      margin-top:20px;
      color: #1a202c;
      text-align: left;
      background: linear-gradient(45deg, #ce1e53, #8f00c7);
      min-height: 100vh; 
        }
</style>









</div>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
    <style>
        body{
      margin-top:20px;
      color: #1a202c;
      text-align: left;
      background: linear-gradient(45deg, #ce1e53, #8f00c7);
      min-height: 100vh; 
        }
</style>
</html>
