<nav class="navbar-vertical navbar">
     <div class="vh-100" data-simplebar>
          <!-- Brand logo -->
          <a class="navbar-brand" href="../../index.html">
               <img src="/assets/base/images/brand/logo/logo-inverse.svg" alt="">
          </a>
          <!-- Navbar nav -->
          <ul class="navbar-nav flex-column" id="sideNavbar">
               <li class="nav-item">
                    <a class="nav-link  " href="#" data-bs-toggle="collapse" data-bs-target="#navDashboard"
                         aria-expanded="false" aria-controls="navDashboard">
                         <i class="nav-icon fe fe-home me-2"></i> Dashboard
                    </a>
                    <div id="navDashboard" class="collapse  show " data-bs-parent="#sideNavbar">
                         <ul class="nav flex-column">
                              <li class="nav-item ">
                                   <a class="nav-link  active " href="admin-dashboard.html">
                                        Overview
                                   </a>
                              </li>
                              <!-- Nav item -->
                              <li class="nav-item ">
                                   <a class="nav-link " href="dashboard-analytics.html">
                                        Analytics

                                   </a>
                              </li>
                         </ul>
                    </div>
               </li>

               <!-- Nav user -->
               <li class="nav-item">
                    <a class="nav-link " href="{{ route('admin.user') }}">
                         <i class="nav-icon fe fe-user me-2"></i> User
                    </a>
               </li>


          </ul>
          <!-- Card -->
          <div class="card bg-dark-primary shadow-none text-center mx-4 my-8">
               <div class="card-body py-6">
                    <img src="/assets/base/images/background/giftbox.png" alt="">
                    <div class="mt-4">
                         <h5 class="text-white">Unlimited Access</h5>
                         <p class="text-white-50 fs-6">
                              Upgrade your plan from a Free trial, to select ‘Business Plan’. Start Now
                         </p>
                         <a href="#" class="btn btn-white btn-sm mt-2">Upgrade Now</a>
                    </div>
               </div>
          </div>
     </div>
</nav>