<?php
require('../css/csslink.php');
?>
<div class="container-fluid bg-white mt-5">
    <div class="row">
        <div class="col-lg-4 p-4">
            <h3 class="h-font fw-bold fs-3 mb-2">Royal hotel</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Officiis id voluptatum nostrum aliquid doloremque debitis,
                sequi, sapiente culpa unde minus tempora totam veritatis, sed
                modi fugiat exercitationem obcaecati impedit? Cum.
            </p>
        </div>
        <div class="col-lg-4 p-4">
            <h5 class="mb-3">Links</h5>
            <a href="index.php" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a> <br>
            <a href="rooms.php" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a><br>
            <a href="facilities.php" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a><br>
            <a href="contact_us.php" class="d-inline-block mb-2 text-dark text-decoration-none">Contact us</a><br>
            <a href="about_us.php" class="d-inline-block mb-2 text-dark text-decoration-none">About us</a><br>
        </div>
        
        <div class="col-lg-4 p-4">
            
            <?php
            $hasSocialLinks = false;
            if ($contact_r['fb'] != '') {
                $hasSocialLinks = true;
            }
            if ($contact_r['insta'] != '') {
                $hasSocialLinks = true;
            }
            if ($contact_r['tw'] != '') {
                $hasSocialLinks = true;
            }
            if ($hasSocialLinks) {
                echo '<h5 class="mb-3">Follow us</h5>';
                if ($contact_r['fb'] != '') {
                    echo <<<data
                                    <a href="$contact_r[fb]" class="d-inline-block text-dark fs-5 mb-2 ">                                        
                                            <i class="bi bi-facebook me-1"></i>Facebook
                                    </a>         
                                    <br>
                                data;
                }
                if ($contact_r['insta'] != '') {
                    echo <<<data
                                    <a href="$contact_r[insta]" class="d-inline-block text-dark fs-5 mb-2">                                        
                                        <i class="bi bi-instagram me-1"></i>Instagram
                                    </a> 
                                    <br>                                   
                                data;
                }
                if ($contact_r['tw'] != '') {
                    echo <<<data
                                    <a href="$contact_r[tw]" class="d-inline-block text-dark fs-5 mb-2">                                        
                                        <i class="bi bi-twitter-x me-1"></i>Twitter
                                     </a>              
                                     <br>                       
                                 data;
                }
            }
            ?>
        </div>
    </div>
</div>
<h6 class="text-center bg-dark text-white p-3 m-0">Designed and developed by Royal Hotel</h6>
<?php
require('../js/jslink.php');
?>