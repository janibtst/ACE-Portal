<style type="text/css">
    
    .cvbutton{
        display: flex;
        justify-content: center;
    }
</style>

<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2"><?= $_SESSION['name']; ?></span>
                    <strong><span class="text-secondary text-small">Human Resources</span></strong>
                </div>
                
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
            <i class="mdi mdi-account-multiple menu-icon mx-0"></i>
                <span class="menu-title mx-2">Dashboard</span>
                
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="applicant.php">
            <i class="mdi mdi-home menu-icon mx-0"></i>
                <span class="menu-title mx-2">Applicant</span>
             
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-briefcase menu-icon mx-0"></i>
                <span class="menu-title mx-2">Job posts</span>
                <i class="menu-arrow"></i>
               
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="manage.php">Manage</a></li>
                    <li class="nav-item"> <a class="nav-link" href="view_posted_job.php">View posted jobs</a></li>
                </ul>
            </div>
        </li>

        <div class="cvbutton">
        <li class="nav-item sidebar-actions">
            <span class="nav-link">
                <button class="btn btn-block btn-lg btn-gradient-primary" data-bs-toggle="modal" data-bs-target="#post">+ Create post</button>
            </span>
        </li>
    </div>
    </ul>
</nav>