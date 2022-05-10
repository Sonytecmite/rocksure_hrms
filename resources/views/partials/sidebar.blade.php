<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="index.html"><img src="../../assets/images/rocksure-logo.webp" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="../../assets/images/rocksure-logo-mini.png" alt="logo" /></a>
    </div>
    <ul class="nav">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="count-indicator">
              <img class="img-xs rounded-circle " src="../../assets/images/faces/face15.jpg" alt="">
              <span class="count bg-success"></span>
            </div>
            <div class="profile-name">
              <h5 class="mb-0 font-weight-normal">{{auth()->user()->staff_id}}</h5>
              <span>Gold Member</span>
            </div>
          </div>
          <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
          <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-settings text-primary"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-onepassword  text-info"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-calendar-today text-success"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
              </div>
            </a>
          </div>
        </div>
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('admin/dashboard')}}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">Employee Management</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-account-multiple"></i>
          </span>
          <span class="menu-title">Employees</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('employee-form')}}">Add Employee</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">All Employees</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Emergency Contact</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Employment History</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Education</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Certifications</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Driving Licenses</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Departments</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Dependants</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Designations</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Disciplinary Actions</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Next of Kins</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Leaves</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">Human Resource</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#attendance" aria-expanded="false" aria-controls="attendance">
          <span class="menu-icon">
            <i class="mdi mdi-account-card-details"></i>
          </span>
          <span class="menu-title">Attendance</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="attendance">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="#">Daily Attendance</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Roster</a></li>
            <li class="nav-item"> <a class="nav-link" href="#"> Hospital</a></li>
            <li class="nav-item"> <a class="nav-link" href="#"> Permissioin</a></li>
            <li class="nav-item"> <a class="nav-link" href="#"> Absent</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <span class="menu-icon">
            <i class="mdi mdi-security"></i>
          </span>
          <span class="menu-title">Reports</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="#"> Staff Report</a></li>
            <li class="nav-item"> <a class="nav-link" href="#"> Labour Report</a></li>
            <li class="nav-item"> <a class="nav-link" href="#"> Leave Report</a></li>
            <li class="nav-item"> <a class="nav-link" href="#"> Certification Report</a></li>
            <li class="nav-item"> <a class="nav-link" href="#"> Daily Attendance Report</a></li>
            <li class="nav-item"> <a class="nav-link" href="#"> Employee Report</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#finance" aria-expanded="false" aria-controls="finance">
          <span class="menu-icon">
            <i class="mdi mdi-cash-multiple"></i>
          </span>
          <span class="menu-title">Payroll</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="finance">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="#"> Pay Slip</a></li>
            <li class="nav-item"> <a class="nav-link" href="#"> Employee Salary</a></li>
            <li class="nav-item"> <a class="nav-link" href="#"> Bank Details</a></li>
            <li class="nav-item"> <a class="nav-link" href="#"> Upgrades</a></li>
            <li class="nav-item"> <a class="nav-link" href="#"> Provident Funds</a></li>
            <li class="nav-item"> <a class="nav-link" href="#"> Tier 2</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="#">
          <span class="menu-icon">
            <i class="mdi mdi-account-off"></i>
          </span>
          <span class="menu-title">Separation Log</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="#">
          <span class="menu-icon">
            <i class="mdi mdi-book-multiple"></i>
          </span>
          <span class="menu-title">References</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="#">
          <span class="menu-icon">
            <i class="mdi mdi-book-open"></i>
          </span>
          <span class="menu-title">Contract Renewal</span>
        </a>
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">Profile</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#profile" aria-expanded="false" aria-controls="profile">
          <span class="menu-icon">
            <i class="mdi mdi-account-card-details"></i>
          </span>
          <span class="menu-title">Profile</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="profile">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="#"> Age</a></li>
            <li class="nav-item"> <a class="nav-link" href="#"> Employee Profile</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="#">
          <span class="menu-icon">
            <i class="mdi mdi-account"></i>
          </span>
          <span class="menu-title">User Account</span>
        </a>
      </li>
    </ul>
  </nav>


 