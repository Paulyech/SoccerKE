<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Soccer World
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
</head>

<body class="off-canvas-sidebar">
  @include('sweetalert::alert')
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">
    <div class="container">
      <div class="navbar-wrapper">
        <p class="navbar-brand">Admin Login Page </p>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
      </button>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper wrapper-full-page">
    <div class="page-header login-page header-filter" filter-color="black" style="background-image: url('../../assets/img/04.jpg'); background-size: cover; background-position: top center;">
      <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
              <form id="login" class="form" method="post" action="{{ url('/admin') }}">
                {{ csrf_field() }}
                      
                  <div class="card card-login card-hidden">
                    <div class="card-header card-header-info text-center">
                      <h4 class="card-title">Login</h4>
                    </div>
                    <div class="card-body ml-3 mr-3">
                      <div class="form-group">
                        <label class="bmd-label-floating"> Email *</label>
                        <input type="text" class="form-control" id="email" name="email" required="true">
                      </div>
                      <div class="form-group">
                        <label class="bmd-label-floating"> Password *</label>
                        <input type="password" class="form-control" id="password" name="password" required="true">
                      </div>
                    </div>
                    <div class="card-footer justify-content-center">
                      <input type="submit" class="btn btn-info btn-link btn-lg" value="LOGIN">
                    </div>
                  </div>
                </form>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container">
          <div class="copyright text-center">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script> Made with <i class="material-icons">favorite</i> by
          <a href="https://musumbidenis.github.io" target="_blank">Paul Liech</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../../assets/js/core/jquery.min.js"></script>
  <script src="../../assets/js/core/popper.min.js"></script>
  <script src="../../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../../assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../../assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
  <script src="../../assets/js/plugins/jquery.validate.min.js"></script>
  <script>
    function setFormValidation(id) {
      $(id).validate({
        /* Add custom validation here -- rules,messages e.t.c */

        highlight: function(element) {
          $(element).closest('.form-group').removeClass('has-success').addClass('has-danger');
          $(element).closest('.form-check').removeClass('has-success').addClass('has-danger');
        },
        success: function(element) {
          $(element).closest('.form-group').removeClass('has-danger').addClass('has-success');
          $(element).closest('.form-check').removeClass('has-danger').addClass('has-success');
        },
        errorPlacement: function(error, element) {
          $(element).closest('.form-group').append(error);
        },
      });
    }
    $(document).ready(function() {
      setFormValidation('#login');
      setFormValidation('#register');
      setFormValidation('#resetPassword');
    });
  </script>
  <script>
    $(document).ready(function() {
      md.checkFullPageBackgroundImage();
      setTimeout(function() {
        /* after 1000 ms we add the class animated to the login/register card */
        $('.card').removeClass('card-hidden');
      }, 700);
    });
  </script>
</body>

</html>