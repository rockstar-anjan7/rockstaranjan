<?php
$insert=false;
if (isset($_POST['name'])){


$server="localhost";
$username="id18266451_root";
$password="ModernAnjan@777.";
$database="id18266451_localhost";
$con=mysqli_connect($server,$username,$password,$database);
// $con = mysqli_connect($server,"root", "ModernAnjan@777.","id18266451_localhost");
if(!$con){
    die("connection to this database is failed due to".mysqli_connect_error());
}
    echo "Conncected Succesfully to this database";
    
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $text = $_POST['text'];
    
    $sql="INSERT INTO `contact` ( `name`, `phone`, `email`, `text`, `dt`) VALUES ( '$name', '$phone', '$email', '$text', current_timestamp());";
    // echo $sql;
    if ($con->query($sql)==true){
        // echo "Succecfully Inserted";
        $insert=true;
    }
    else{
        echo "Error:$sql </br> $con->error";
    }
    $con->close();
} 
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to Modern Career Classes.Modern Career Classes is a coaching institute where students gets educate with our fully exprience teachers"/>
    <meta name="keywords" content="Modern Career Classes,modern career classes,modern career classes parsauni,modern career classes itkhori ,coaching at itkhori,coaching at village parsauni">
    <meta itemprop="url" content="https://footless-importance.000webhostapp.com/">
    <meta itemprop="name" content="Modern Career Classes Tumbi Chowk Parsauni">
    <meta name="google-site-verification" content="_8d96kWGNWYgNXTlpDlsi_fZFwesKN7zHvuePzNOLgw" />
    
    <title>Modern Career Classes</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsivse.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <nav class="navbar background h-nav-resp ">
        <ul class="nav-list v-class-resp">
            <div class="logo"><img src="image/logo2.jpg " alt="logo"></div>
            <li><a href="home.html">Home</a> </li>
            <li><a href="about.html">About  </a></li>
            <li><a href="service.html">Services</a></li>
            <li><a href="#contact">Contact Us</a></li>
        </ul>
        <div class="right-nav v-class-resp">
            <input type="text" name="search"   id="search">
            <button class="btn-sm">search</button>
        </div>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>
    <section class="firstSection background">
        <div class="box-main">
            <div class="firsthalf">
                <p class="text-big">Modern Career Classes</p>
                <p class="text-small">In this world 7billion of people wants to educate but there is no coaching like Modern Career Classes.If You Want to educate yourself just go with given button !</p>
                <div class="buttons">
                    <button class="btn">Subscribe</button>
                    <button class="btn">Admission</button>
                </div>
            </div>
            <div class="secondhalf">
                <img src="image/education.webp"  alt="this is my picture">
                <button></button>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="paras">
        <p class="sectionTag text-big">To Know Our Teachers Just Read The Paragraph</p>
        <p class="sectionSubtag text-small">Education in India is primarily managed by state-run public education system, which fall under the command of the government at three levels: Central, state and local. Under various articles of the Indian Constitution and the Right of Children to Free and Compulsory Education Act, 2009, free and compulsory education is provided as a fundamental right to children aged 6 to 14. The approximate ratio of public schools to private schools in India is 7:5. Major policy initiatives in Indian education are numerous. Up until 1976, education policies and implementation were determined legally by each of India’s constitutional states. The 42nd amendment to the constitution in 1976 made education a ‘concurrent subject’. From this point on the central and state governments shared formal responsibility for funding and administration of education. In a country as large as India, now with 28 states and eight union territories, this means that the potential for variations between states in the policies, plans, programs and initiatives for elementary education is vast. Periodically, national policy frameworks are created to guide states in their creation of state-level programs and policies. State governments and local government bodies manage the majority of primary and upper primary schools and the number of government-managed elementary schools is growing.</p>
    </div>
        <div class="thumbnail">
            <img src="image/DeepakSir.jpg"  alt="Deepak Sir image">
        </div>
    </section>
    <section class="section sectionLeft">
        <div class="paras">
        <p class="sectionTag text-big">This is History of Education in India</p>
        <p class="sectionSubtag text-small">Early education in India commenced under the supervision of a guru or prabhu.[26] Takshasila (in modern-day Pakistan) was the earliest recorded centre of higher learning in India from possibly 8th century BCE, and it is debatable whether it could be regarded a university or not in modern sense, since teachers living there may not have had official membership of particular colleges, and there did not seem to have existed purpose-built lecture halls and residential quarters in Taxila, in contrast to the later Nalanda university in eastern India. Nalanda was the oldest university-system of education in the world in the modern sense of university. There all subjects were taught in Ariano -Páli language.[27]</p>
    </div>
        <div class="thumbnail">
            <img src="image/VikashSir.jpg" alt="Vikash Sir image">
        </div>
    </section> <section class="section">
        <div class="paras">
        <p class="sectionTag text-big">Changes In Future India</p>
        <p class="sectionSubtag text-small">The new National Education Policy 2020 (NEP 2020) introduced by the central government is expected to bring profound changes to education in India. The policy approved by the Cabinet of India on 29 July 2020, outlines the vision of India's new education system.[29] The new policy replaces the 1986 National Policy on Education. The policy is a comprehensive framework for elementary education to higher education as well as vocational training in both rural and urban India. The policy aims to transform India's education system by 2021.[30]</p>
    </div>
        <div class="thumbnail">
            <img src="image/teacher3.jpg" alt="teachers image">
        </div>
    </section>
    <hr>
    <section class="contact" id="contact">
        <h2 class="text-center">Contact Us</h2>
        <div class="form">
            <form action="index.php" method="post">
            <input class="form-input" type="text" name="name" id="name" placeholder="Enter Your Name">
            <input  class="form-input"type="text" name="phone" id="phone" placeholder="Enter Your phone">
            <input  class="form-input"type="email" name="email" id="email" placeholder="Enter Your Email Id">
            <textarea  class="form-input"name="text" id="text" cols="30" rows="10" placeholder="Elloborate Your Ideas"></textarea>
            <button class=" btn  btn-dark">Submit</button>
             </form>

        </div>
    </section>
    <footer class="background">
        <p class="text-footer">
        Copyright &copy; 2027 www.ModernCareerClasses.com All Rights Are Reserved
    </p>
    </footer>
    <script src="js/java-resp.js"></script>
</body>
</html>