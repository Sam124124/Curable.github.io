<?php 
$conn =mysqli_connect('localhost','root','','contact') or die('connection failed');

if(isset($_POST['submit'])){
    $name=mysqli_real_escape_string($conn, $_POST['name']);
    $email=mysqli_real_escape_string($conn, $_POST['email']);
    $number=$_POST['number'];
    $date=$_POST['date'];

    $insert =mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date)VALUES('$name','$email','$number','$date')") or die('query failed');

    if($insert){
        $message[]='appointment made successfully';
    }else{
        $message[]='appointment failed';
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>healthcare website</title>

    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!--custom css file link-->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!--header section starts-->

    <header class="header">
        <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> <strong>Curable</strong> </a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="about.html">about</a>
            <a href="#services">services</a>
            <a href="http://127.0.0.1:5000">Consult online</a>
            <a href="#appointment">appointment</a>
            <a href="find.html">Find a doctor</a>
            <a href="Curable_loc/loc.html">services near me</a>
            
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

</header>
<!--header section ends-->

<!--home section starts-->

<section class="home" id="home">

    <div class="image">
        <img src="image/home-img.jpg" alt="">
    </div>

    <div class="content">
        <h3>you will be cured</h3>
        <p>Trust your body. Learn from your body. Nourish your body. Watch your life transform and be healthy.</p>
        <a href="#appointment" class="btn">get an appointment <span class="fas fa-chevron-right"></span></a>

    </div>

</section>

<!--home section ends-->
<!--icon section starts-->
<section class="icons-container">

    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>150+</h3>
        <p>doctors at work</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>2500+</h3>
        <p>satisfied patients</p>
    </div>

    <div class="icons">
        <i class="fas fa-procedures"></i>
        <h3>500+</h3>
        <p>bed facility</p>
    </div>

    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>90+</h3>
        <p>available hospital</p>
    </div>
</section>
<!--icon section ends-->
<!--about section starts-->

<!--<section class="about" id="about">
    <h1 class="heading"> <span>about</span> us </h1>
    <div class="row">
        <div class="image">
            <img src="image/about-img.jpg" alt="">
        </div>

        <div class="content">
            <h3>get best service</h3>
            <p>gshgs gsgfsfh iourihru gejgweutwug gewhfgryy3th238 iuirhjvvfvfeyef vhwfwfgwb4v4f evfgefhwvf3wfh gehwrgyrhrev </p>
            <p>gshgs gsgfsfh iourihru gejgweutwug gewhfgryy3th238 iuirhjvvfvfeyef vhwfwfgwb4v4f evfgefhwvf3wfh gehwrgyrhrev </p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>

        </div>
    </div>
</section>-->

<!--about section ends-->
<!--services section starts-->

<section class="services" id="--services">
    <h1 class="heading">our <span> services</span></h1>

    <div class="box-container">
        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>free checkups</h3>
            <p>we are providing a free checkup for every one..register yourslef for checkup </p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
            
        </div>

        <div class="box">
            <i class="fas fa-ambulance"></i>
            <h3>24/7 ambulance service</h3>
            <p>we are providing 24/7 ambulance service..call us and we'll be at your doorstep </p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
            
        </div>

        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>expert doctors</h3>
            <p>connecting people with 50+ expert doctors </p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
            
        </div>

        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>medicines</h3>
            <p>tell us what you need </p>
            <a href="curable_medicine/index2.html" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
            
        </div>

        <div class="box">
            <i class="fas fa-procedures"></i>
            <h3>bed facility</h3>
            <p>we are providing bed facility at 25+ hospitals </p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
            
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>total care</h3>
            <p>not feeling well? no worries..we are here for you.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
            
        </div>
    </div>
</section>

<!--services section ends-->
<!--doctors section starts-->

<section class="doctors" id="doctors">
    <h1 class="heading">our <span> doctors</span></h1>

    <div class="box-container">
        <div class="box">
            <img src="image/doc-1.jpg" alt="">
            <h3>Dr. Ritabrata Chatterjee</h3>
            <span>Child's specialist</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-2.jpg" alt="">
            <h3>Dr. Srijon Ghosh</h3>
            <span>general physician</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-3.jpg" alt="">
            <h3>Dr. Bristilekha Dutt</h3>
            <span>gynecologist</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-4.jpg" alt="">
            <h3>Dr. Rjarashee Sen</h3>
            <span>ENT specialist</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-5.jpg" alt="">
            <h3>Dr. Bhoomi Karar</h3>
            <span>Oncologist</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-6.jpg" alt="">
            <h3>Dr. Diyan Mukherjee</h3>
            <span>Opthalmologist</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-7.jpg" alt="">
            <h3>Dr. Suhana Khatun</h3>
            <span>Orthpedist</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-8.jpg" alt="">
            <h3>Dr. Anubhab Paul</h3>
            <span>neurologist</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-9.jpg" alt="">
            <h3>Dr. Parikkhit Nandi</h3>
            <span>general physician</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
    </div>
</section>

<!--doctors section ends-->
<!--appointment section starts-->

<section class="appointment" id="appointment">

    <h1 class="heading"> <span>take appointment</span>now</h1>

    <div class="row">

        <div class="image">
            <img src="image/appointment-img.jpg" alt="">
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>"  method="post">
        <?php
            if(isset($message)){
                foreach($message as $message){
                echo'<p class ="message">'.$message. '</p>';
                }
            }
        ?>
            <h3>make appointment</h3>
            <input type="text" name="name" placeholder="your name" class="box">
            <input type="number" name="number" placeholder="your contact number" class="box">
            <input type="email" name="email" placeholder="your email id" class="box">
            <input type="date" name="date" class="box">
            <input type="submit" name="submit" placeholder="book appointment" class="btn">
            
        </form>
    </div>
</section>

<!--appointment section ends-->
<!--review section starts-->
<section class="review" id="review">

    <h1 class="heading">patients'<span>review</span></h1>
    <div class="box-container">

        <div class="box">
            <img src="image/pic-1.jpg" alt="">
            <h3>Monoj Karar</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Trust me..curable gives you the best service.</p>
        </div>

        <div class="box">
            <img src="image/pic-2.jpg" alt="">
            <h3>Deepanjan Roy</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Thanks Curable for everything </p>
        </div>

        <div class="box">
            <img src="image/pic-3.jpg" alt="">
            <h3>Jeet Saha</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">the free checkup facility is very good</p>
        </div>
    </div>
</section>

<!--review section ends-->

<!--blog section starts-->
<section class="blogs" id="blogs">

    <h1 class="heading">our <span>blogs</span></h1>

    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="image/blog-1.jpg" alt="">
            </div>

            <div class="content">
                <div class="icon">
                    <a href="#"><i class="fas fa-calender"></i>22 december,2022</a>
                    <a href="#"><i class="fas fa-user"></i>by diya karar</a>
                </div>
                <h3>corona virus spreading out again</h3>
                <p>whfwjgfqgwdchqfdyfqyw hfwhfdyfdfvhdvhwqfytuv hfwfww</p>
                <a href="#" class="btn">learn more <span class="fas fa-chevron-right"></span></a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/blog-2.jpg" alt="">
            </div>

            <div class="content">
                <div class="icon">
                    <a href="#"><i class="fas fa-calender"></i>22 december,2022</a>
                    <a href="#"><i class="fas fa-user"></i>by diya karar</a>
                </div>
                <h3>hwdghdg hghwdghwd hgwhg</h3>
                <p>whfwjgfqgwdchqfdyfqyw hfwhfdyfdfvhdvhwqfytuv hfwfww</p>
                <a href="#" class="btn">learn more <span class="fas fa-chevron-right"></span></a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/blog-3.jpg" alt="">
            </div>

            <div class="content">
                <div class="icon">
                    <a href="#"><i class="fas fa-calender"></i>22 december,2022</a>
                    <a href="#"><i class="fas fa-user"></i>by diya karar</a>
                </div>
                <h3>hwdghdg hghwdghwd hgwhg</h3>
                <p>whfwjgfqgwdchqfdyfqyw hfwhfdyfdfvhdvhwqfytuv hfwfww</p>
                <a href="#" class="btn">learn more <span class="fas fa-chevron-right"></span></a>
            </div>
        </div>

        
        <div class="box">
            <div class="image">
                <img src="image/blog-4.jpg" alt="">
            </div>

            <div class="content">
                <div class="icon">
                    <a href="#"><i class="fas fa-calender"></i>22 december,2022</a>
                    <a href="#"><i class="fas fa-user"></i>by diya karar</a>
                </div>
                <h3>hwdghdg hghwdghwd hgwhg</h3>
                <p>whfwjgfqgwdchqfdyfqyw hfwhfdyfdfvhdvhwqfytuv hfwfww</p>
                <a href="#" class="btn">learn more <span class="fas fa-chevron-right"></span></a>
            </div>
        </div>

        
        <div class="box">
            <div class="image">
                <img src="image/blog-5.jpg" alt="">
            </div>

            <div class="content">
                <div class="icon">
                    <a href="#"><i class="fas fa-calender"></i>22 december,2022</a>
                    <a href="#"><i class="fas fa-user"></i>by diya karar</a>
                </div>
                <h3>hwdghdg hghwdghwd hgwhg</h3>
                <p>whfwjgfqgwdchqfdyfqyw hfwhfdyfdfvhdvhwqfytuv hfwfww</p>
                <a href="#" class="btn">learn more <span class="fas fa-chevron-right"></span></a>
            </div>
        </div>
    </div>
</section>

<!--blogs section ends-->

<!--footer section starts-->

<section class="footer">

    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i>home</a>
            <a href="#"> <i class="fas fa-chevron-right"></i>about</a>
            <a href="#"> <i class="fas fa-chevron-right"></i>services</a>
            <a href="#"> <i class="fas fa-chevron-right"></i>doctors</a>
            <a href="#"> <i class="fas fa-chevron-right"></i>appointment</a>
            <a href="#"> <i class="fas fa-chevron-right"></i>review</a>
            <a href="#"> <i class="fas fa-chevron-right"></i>blogs</a>
        </div>
    
        <div class="box">
            <h3>our services</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i>dental care</a>
            <a href="#"> <i class="fas fa-chevron-right"></i>diagonosis</a>
            <a href="#"> <i class="fas fa-chevron-right"></i>cardiology</a>
            <a href="#"> <i class="fas fa-chevron-right"></i>eye care</a>
            <a href="#"> <i class="fas fa-chevron-right"></i>ambulance</a>
            <a href="#"> <i class="fas fa-chevron-right"></i>emergency service</a>
            <a href="#"> <i class="fas fa-chevron-right"></i>checkups</a>
        </div>
    
        <div class="box">
            <h3>appointment info</h3>
            <a href="#"> <i class="fas fa-faceappointment-f"></i>fa-faceappointment</a>
            <a href="#"> <i class="fas fa-twitter"></i>twitter</a>
            <a href="#"> <i class="fas fa-twitter"></i>twitter</a>
            <a href="#"> <i class="fas fa-instagram"></i>instagram</a>
            <a href="#"> <i class="fas fa-linkedin"></i>linkedin</a>
            <a href="#"> <i class="fas fa-pinterest"></i>pinterest</a>
        </div>
    </div>
    
    <div class="credit">created by <span> diya karar</span>| all rights reserved</div>


</section>

<!--footer section ends-->

<script src="js/script.js"></script>

</body>
</html>