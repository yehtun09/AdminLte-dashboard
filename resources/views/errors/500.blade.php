<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found</title>
     <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <style>
    </style>
</head>
<body style="text-align: center; margin-top:300px;">
     <!-- Main content -->
     <section class="content">
        <div class="error-page">
          <h2 class="headline text-danger">500</h2>
  
          <div class="error-content">
            <h3><i class="fas fa-exclamation-triangle text-danger"></i> Oops! Page not found.</h3>
  
            <p>
              We could not find the page you were looking for.
              Meanwhile, you may <a href="{{ url('/') }}">return to dashboard</a> or try using the search form.
            </p>
  
            <form class="search-form">
              <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search">
  
                <div class="input-group-append">
                  <button type="submit" name="submit" class="btn btn-danger"><i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
              <!-- /.input-group -->
            </form>
          </div>
          <!-- /.error-content -->
        </div>
        <!-- /.error-page -->
      </section>

      <script>
        <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      </script>
</body>
</html>

