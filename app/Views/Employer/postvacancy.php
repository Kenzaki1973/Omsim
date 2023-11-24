<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/employer/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/employer/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <?= $this->include('Employer/inc/sidebar')?>;

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Post a Job Vacancy</h1>
          </div>
          <div class="col-sm-6">
           
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= site_url('/addjob') ?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Company Name</label>
                    <input type="text" name="company_name" class="form-control" id="exampleInputEmail1" required placeholder="Enter company name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Occupation Title</label>
                    <input type="text" name="occupation_title" class="form-control" id="exampleInputPassword1" required placeholder="Enter occupation title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Required Number of Employees</label>
                    <input type="number" name="required_no" class="form-control" id="exampleInputPassword1" required placeholder="Enter required number of employees">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Salary</label>
                    <input type="number" name="salary" class="form-control" id="exampleInputPassword1" required placeholder="Enter salary">
                  </div>

                  
                       
                  <div class="form-group">
                    <label for="exampleInputPassword1">Per</label>
                    
                        <select name="per" required class="form-control">
                                <option value="" disabled selected>Select Category</option>
                                <option value="Hour">Hour</option>
                                <option value="Day">Day</option>
                                <option value="Week">Week</option>
                                <option value="15 Days">15 Days</option>
                                <option value="Month">Month</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Location</label>
                    <input type="text" name="location" class="form-control" id="exampleInputPassword1" required placeholder="Enter location">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputPassword1">Category</label>
                    
                    <select name="category" required class="form-control">
                                <option value="" disabled selected>Select Category</option>
                                <option value="AcountingFinance">Accounting/Finance</option>
                                <option value="ConstructionFacilities">Construction/Facilities</option>
                                <option value="DesignArtAndMultimedia">Design, Art & Multimedia</option>
                                <option value="EducationTraining">Education Training</option>
                                <option value="Health">Health</option>
                                <option value="HumanResource">Human Resource</option>
                                <option value="Restaurant/FoodService">Restaurant/Food Service</option>
                                <option value="Telecommunication">Telecommunication</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Qualification/Work Experience</label>
                    <input type="text" name="qualification" class="form-control" id="exampleInputPassword1" required placeholder="Enter qualification/experience">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Job Description</label>
                    <input type="text" name="job_description" class="form-control" id="exampleInputPassword1" required placeholder="Enter job description">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Prefered Sex</label>
                    
                    <select name="prefered" required class="form-control">
                            <option value="" disabled selected>Select preferred sex</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Both">Both Male and Female</option>
                            </select>
                  </div>
                  
                  <!-- <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div> -->
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="assets/employer/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/employer/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="assets/employer/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/employer/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="assets/employer/dist/js/demo.js"></script> -->
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
