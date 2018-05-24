<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>panBit services</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/style.css">
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>


  </head>

  <body>

    <!-- Navigation -->
    <?php include ("includes/header.php"); ?>
    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Carpentry
        <small>Services</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Carpentry Services</li>
      </ol>

      <div class="mb-4" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="card">
          <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="text-decoration: none; color: brown;"><b>Carpentry Services Details...</b></a>

            </h5>
          </div>
           


              

<!-- <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button> -->

<?php include ('login.php'); ?>























































          <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="card-body">
            	<div class="container">
              		<div class="table-responsive">          
  						<table class="table">
    						<thead>
      							<tr>
        							<th>S.no.</th>
        							<th>Our Services</th>
        							<th>Price</th>
        							<th></th>
      							</tr>
    						</thead>
   							<tbody>
      							<tr>
        							<td>1.</td>
        							<td>Furniture Repairing</td>
        							<td>500 to 1000</td>
        							<td>
                      <button onclick="document.getElementById('id01').style.display='block'" style="width:auto; background-color: grey">Get Service</button>
                      </td>

      							</tr>
      							<tr>
        							<td>2.</td>
        							<td>Door Repairing</td>
        							<td>200 to 500</td>
        							<td><button onclick="document.getElementById('id01').style.display='block'" style="width:auto; background-color: grey">Get Service</button></td>
      							</tr>
      							<tr>
        							<td>3.</td>
        							<td>Cupboard Repairing</td>
        							<td>500 to 1000</td>
        							<td><button onclick="document.getElementById('id01').style.display='block'" style="width:auto; background-color: grey">Get Service</button></td>
      							</tr>
                    <tr>
                      <td>4.</td>
                      <td>Another</td>
                      <td>Depends on your issues</td>
                      <td><button onclick="document.getElementById('id01').style.display='block'" style="width:auto; background-color: grey">Get Service</button></td>
                    </tr>
    						</tbody>
  						</table>
  					</div>
				</div>
            </div>
           </div> 

          </div>
        </div>   
      </div>



    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
     <!-- login java script -->
     <script src="assets/bootstrap/js/main.js"></script>
  </body>

</html>