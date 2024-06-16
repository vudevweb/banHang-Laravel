<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description" content="vudevweb make website ecom with laravel frameword">
     <meta name="keywords" content="vudevweb,website ban hang, website laravel">
     <meta name="author" content="vudevweb">

     <!-- Favicon icon-->
     <!-- Libs CSS -->
     <link href="/assets/base/fonts/feather/feather.css" rel="stylesheet">
     <link href="/assets/base/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
     <link href="/assets/base/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
     <link href="/assets/base/libs/simplebar/dist/simplebar.min.css" rel="stylesheet">

     <!-- Theme CSS -->
     <link rel="stylesheet" href="/assets/base/css/theme.min.css">
     <title>Đăng nhập admin</title>
     <script>
          // Render blocking JS:
          if (localStorage.theme) document.documentElement.setAttribute("data-theme", localStorage.theme);
     </script>
</head>

<body>
     <!-- Page content -->
     <main>
          <section class="container d-flex flex-column">
               <div class="row align-items-center justify-content-center g-0 min-vh-100">

                    <div class="col-lg-5 col-md-8 py-8 py-xl-0">
                         <!-- Card -->
                         <div class="card shadow ">
                              <!-- Card body -->
                              <div class="card-body p-6">
                                   <div class="mb-4">
                                        <a href=""><img src="/assets/base/images/brand/logo/logo-icon.svg"
                                                  class="mb-4" alt="logo-icon"></a>
                                        <h1 class="mb-1 fw-bold">Đăng nhập admin</h1>
                                   </div>
                                   <!-- Form -->
                                   <form action="{{route('admin.doLogin')}} " method="POST">
                                        @csrf
                                        <!-- Username -->
                                        <div class="mb-3">
                                             <label for="email" class="form-label">Email</label>
                                             <input type="text" id="email" class="form-control" name="email"
                                                  placeholder="Email address here">
                                                  @if ($errors -> has('email'))
                                                       <span class="text-danger">
                                                            *{{ $errors -> first('email') }}
                                                       </span>
                                                  @endif
                                        </div>
                                        <!-- Password -->
                                        <div class="mb-3">
                                             <label for="password" class="form-label">Password</label>
                                             <input type="password" id="password" class="form-control" name="password"
                                                  placeholder="**************">
                                                  @if ($errors -> has('password'))
                                                  <span class="text-danger">
                                                       *{{ $errors -> first('password') }}
                                                  </span>
                                             @endif
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="d-lg-flex justify-content-between align-items-center mb-4">
                                             <div class="form-check">
                                                  <input type="checkbox" class="form-check-input" id="rememberme">
                                                  <label class="form-check-label " for="rememberme">Remember me</label>
                                             </div>
                                             <div>
                                                  <a href="forget-password.html">Forgot your password?</a>
                                             </div>
                                        </div>
                                        <div>
                                             <!-- Button -->
                                             <div class="d-grid">
                                                  <button type="submit" class="btn btn-primary ">Sign in</button>
                                             </div>
                                        </div>
                                        <hr class="my-4">
                                        <div class="mt-4 text-center">
                                             <!--Facebook-->
                                             <a href="#" class="btn-social btn-social-outline btn-facebook">
                                                  <i class="mdi mdi-facebook fs-4"></i>
                                             </a>
                                             <!--Twitter-->
                                             <a href="#" class="btn-social btn-social-outline btn-twitter">
                                                  <i class="mdi mdi-twitter fs-4"></i>
                                             </a>
                                             <!--LinkedIn-->
                                             <a href="#" class="btn-social btn-social-outline btn-linkedin">
                                                  <i class="mdi mdi-linkedin"></i>
                                             </a>
                                             <!--GitHub-->
                                             <a href="#" class="btn-social btn-social-outline btn-github">
                                                  <i class="mdi mdi-github"></i>
                                             </a>
                                        </div>
                                   </form>
                              </div>
                         </div>
                    </div>
               </div>
          </section>
     </main>
     <!-- Scripts -->
     <!-- Libs JS -->
     <script src="/assets/base/libs/jquery/dist/jquery.min.js"></script>
     <script src="/assets/base/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
     <script src="/assets/base/libs/simplebar/dist/simplebar.min.js"></script>


     <!-- Theme JS -->
     <script src="/assets/base/js/theme.min.js"></script>

</body>

</html>