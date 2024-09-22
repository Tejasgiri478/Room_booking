<?php
    require_once('../admin/db_config.php');
    require_once('../admin/essentials.php');
    
        $contact_q = "SELECT * FROM `contact_details` WHERE `sr_no` = ?";
        $values = [1];
        $contact_r = mysqli_fetch_assoc(select($con, $contact_q, $values, 'i'));
        
?>
<nav id="nav-bar" class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Royal Hotel</a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link me-2" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="rooms.php">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="facilities.php">Facilities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="contact_us.php">Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="about_us.php">About us</a>
                </li>
            </ul>
            <div class="d-flex">
                <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-" data-bs-toggle="modal"
                    data-bs-target="#Loginmodal">
                    Login
                </button>
                <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal"
                    data-bs-target="#Registermodal">
                    Register
                </button>
            </div>
        </div>
    </div>
</nav>
<!-- Loginmodal -->
<div class="modal fade" id="Loginmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="#" method="post">
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center">
                        <i class="bi bi-person-circle fs-3 me-2"></i>User Login
                    </h5>
                    <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control" id="Email" placeholder="Enter your register email"
                            aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" id="Password" placeholder="Enter your password">
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <button type="submit" class="btn btn-dark">LOGIN</button>
                        <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot
                            Password</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Registermodal -->
<div class="modal fade" id="Registermodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="Query/Register.php" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center">
                        <i class="bi bi-person-lines-fill fs-3 me-2"></i> User Registration
                    </h5>
                    <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                        Note : your detaile must match ID(Adhaar Card, PassPort, Driving Licence etc..)
                        that will be requered during chack-in.
                    </span>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" name="rnm">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Surname</label>
                                <input type="text" class="form-control" name="rsnm">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="remail">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Pin Code</label>
                                <input type="number" class="form-control" name="rpincode">
                            </div>
                            <div class="col-md-12 ps-0 mb-3">
                                <label class="form-label">Address</label>
                                <textarea class="form-control " rows="4" name="raddress"></textarea>
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="number" class="form-control" name="rpno">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Date Of Birth</label>
                                <input type="date" class="form-control" name="rdob">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Picture</label>
                                <input type="file" class="form-control" name="rimage">
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-dark shadow-none my-1">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>