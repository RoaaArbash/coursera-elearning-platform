<?php
session_start();


if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!--page: home-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
<header>
    <h1 id="logo"> <img src="logo.png" width="225" height="40"></h1>

    <nav>
         <a href="courses.php">Courses</a>
        <a href="extra.php">FAQ</a>
        <a href="login.php">login</a>
        <a href="signup.php">signup</a>
    </nav>
</header>

<main>
      <section class="about-section">

    <div class="txt">
        <h1>start learning on Coursera!</h1>

        <ul type="circle">
            <li><h3>We offer a leading platform from world-class universities. Our goal is to provide educational content that focuses on developing your skills.</h3></li>
            <li><h3>Learn at your own pace with high-quality content trusted by millions of learners around the world.</h3></li>
            <li><h3>Gain job-ready skills with hands-on projects.</h3></li>
        </ul>
    </div>

    <div class="img-box">
        <img src="about.jpg" alt="about"width="100" height="200">
    </div>

</section>


<section class="last-news">
    <button class="main-btn" onclick="showOffers()">Last News</button>

    <div id="offers-btn" style="display:none; margin-top: 15px;">
        <button class="sub-btn" onclick="showContent()">Offers</button>
    </div>

    <div id="news-content" style="display:none; margin-top: 20px;">
        <img src="offers.png" width="275" height="250">
        <p>New Year Offers: Special discount for students in December!</p>
    </div>
</section>
<section class="tip-news">
    <button class="main-btn" onclick="showtip()">tip of the day</button>

      <div id="tip-btn" style="display:none; margin-top: 15px;">
        <h3>parctice coding every day to improve your skills!</h3>
    </div>
</section>
    <section class="courses-table">
        <table>
            <tr>
                <th>Our New Courses</th>
                <th>Registration</th>
                <th>Skills For You</th>
            </tr>

            <tr>
                <td>
                    <img src="new courses.png" width="250" height="250"><br><br>
                    <b>Explore new courses from top universities and industry leaders.</b><br>
                          <b>Learn anytime, anywhere at your own pace.</b><br>
                    <b><h4 id="s">Our top courses:</h4> Web Development, Data Science, Machine Learning.</b><br>
         
                    <a href="courses.php">See more</a>
                </td>

                <td>
                    <img src="reg.png" width="250" height="250"><br><br>
                   <b>Join Coursera today and start learning immediately.</b><br>
<b>Access thousands of courses and certificates.</b><br>
<b>Flexible schedules and professional instructors.</b><br>
<a href="courses.php">Register now</a>
                </td>

                <td>
                    <img src="skills2.png" width="250" height="250"><br><br>
                   <b>Develop the skills you need to succeed in today's job market.</b><br>
<p><h4 id="s">Popular skills include:</h4> Data Analysis, AI, Programming, Business, and Design.</p>
                   <p>Choose the perfect program for your career goals.</p><br>
                </td>
            </tr>

        </table>
    </section>

</main>
<section class="gallery">
    <h2>Featured Courses</h2>

    <div class="slider-container">
        <div class="slider">
            <div class="slide">
                <h3>"web development"</h3>
                <img src="slider1.png" alt="web development">
                <a href="courses.php">enrol now</a>
            </div>
            <div class="slide">
                <h3>"machine learning"<h3>
                <img src="slider3.png" alt="machine learning">
                                <a href="courses.php">enrol now</a>
            </div>
            <div class="slide">
                <h3>"artificial intelligence"</h3>
                <img src="slider22.png" alt="artificial intelligence">
                            <a href="courses.php">enrol now</a>
            </div>
        </div>
    </div>

    <div class="slider-buttons">
        <button id="prev">❮</button>
        <button id="next">❯</button>
    </div>
</section>
<section class="contact-us">
    <h2>visit us</h2>

    <div class="map">
        <!-- Google Map-->
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.086983465322!2d-122.08424968468136!3d37.42206597982569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb24f0c23f85b%3A0x7a9a8f9f5e5c5f8f!2sCoursera!5e0!3m2!1sen!2sus!4v1700000000000!5m2!1sen!2sus" 
            width="400" 
            height="250" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
<a href="https://about.coursera.org/contact" target="_blank" class="contact button">
    <button>Contact Coursera</button>
</a>
</section>
<footer>
    ©️ 2025 Coursera Inc. All rights reserved.
</footer>
<style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body{
            background-color:  #acc3daff;
        }

        header{
            width: 100%;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #logo{
            color: #1e3a8a;
            font-size: 10px;
            margin-left: 40px;
        }

        nav a{
            margin: 0 15px;
            text-decoration: none;
            color: #333;
            font-size: 18px;
            text-transform: capitalize;
        }

        nav a:hover{
            color: #1e3a8a;
        }

       .about-section{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 40px;
    gap: 30px;
}

.about-section h1{
    color: #1e3a8a; 
    margin-bottom: 15px;
    text-transform: capitalize;
    font-size: 55px;

}

.about-section ul{
    font-size: 17px;
    line-height: 1.7;
    color: #000000ff;
}

.img-box img{
    width: 480px;
    height: 280px;
    object-fit: cover;
    border-radius: 15px;
}
    
        
        .courses-table{ 
            display: grid;
            width: 90%;
            margin: 40px auto;
            background-color: white;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }

        table{
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }

        th{
            padding: 15px;
            font-size: 22px;
            color: #1e3a8a;
        }

        td{
            padding: 20px;
        }

        img{
            border-radius: 10px;
        }

        footer{
            text-align: right;
            padding: 20px;
            margin-top: 50px;
            color: #666;
        }
        #s{
                    font-size: 20px;
        color: #1e3a8a;

                }

.last-news{
    width: 30%;
    margin: 50px auto;
    padding: 20px;
    background-color: white;
    border-radius: 15px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    text-align: center;
}

.main-btn, .sub-btn{
    padding: 10px 25px;
    background-color: #1e3a8a;
    color: white;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 18px;
    transition: 0.3s;
}

.main-btn:hover, .sub-btn:hover{
    background-color: #1550a0;
}

#news-content p{
    margin-top: 15px;
    font-size: 20px;
    color: #000;
}





.gallery{
    width: 90%;
    margin: 50px auto;
    text-align: center;
    background: white;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
}

.gallery h2{
    color: #1e3a8a;
    font-size: 30px;
    margin-bottom: 20px;
}

/* SLIDER BOX */
.slider-container{
    width: 100%;
    overflow: hidden;
    border-radius: 10px;
}

.slider{
    display: flex;
    width: 100%; 
    transition: transform 0.5s ease; 
}

.slide{
    width: 100%;
    flex-shrink: 0;  
}

.slide img{
    width: 100%;
    height: 350px;
    object-fit: cover;
    border-radius: 10px;
}


.slider-buttons{
    margin-top: 10px;
}

.slider-buttons button{
    padding: 10px 20px;
    font-size: 18px;
    border: none;
    background-color: #1e3a8a;
    color: white;
    cursor: pointer;
    border-radius: 8px;
}

.slider-buttons button:hover{
    background-color: #1550a0;
}
.contact-us{
    width: 50%;
    margin: 50px auto;
    padding: 25px;
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    text-align: left;
}

.contact-us h2{
    color: #1e3a8a;
    font-size: 32px;
    margin-bottom: 25px;
}

.contact-us .map iframe{
    width: 100%;
    height: 400px;
    border-radius: 10px;
    margin-bottom: 25px;
}
.contact button{
    padding: 12px 25px;
    background-color: #1e3a8a;
    color: white;
    font-size: 18px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: 0.3s;
    text-decoration: none; 
    display: inline-block;
}


@media (max-width: 1024px) {
    .about-section {
        flex-direction: column;
        align-items: center;
        padding: 30px;
        gap: 20px;
    }

    .img-box img {
        width: 100%;
        height: auto;
    }

    .courses-table, .gallery, .contact-us, .last-news {
        width: 95%;
        padding: 15px;
    }

    .courses-table td, .courses-table th {
        padding: 10px;
        font-size: 16px;
    }
}

@media (max-width: 768px) {
    nav a {
        font-size: 16px;
        margin: 0 10px;
    }

    .about-section h1 {
        font-size: 40px;
        text-align: center;
    }

    .about-section ul {
        font-size: 15px;
        text-align: center;
    }

    .slider .slide img {
        height: 250px;
    }

    .contact-us h2 {
        font-size: 24px;
        text-align: center;
    }

    .last-news {
        width: 90%;
    }
}

@media (max-width: 480px) {
    header {
        flex-direction: column;
        padding: 10px;
    }

    nav a {
        display: block;
        margin: 5px 0;
    }

    .about-section h1 {
        font-size: 30px;
    }

    .slider .slide img {
        height: 200px;
    }

    .courses-table td, .courses-table th {
        font-size: 14px;
        padding: 8px;
    }

    .contact-us {
        width: 100%;
        padding: 10px;
    }

    .last-news {
        width: 95%;
        padding: 10px;
    }
}
    </style>
    <script>
function showOffers(){
    document.getElementById('offers-btn').style.display = 'block';
}

function showContent(){
    document.getElementById('news-content').style.display = 'block';
}
</script>
  <script>
function showtip(){
    document.getElementById('tip-btn').style.display = 'block';
}


</script>
<script>
let index = 0;

function showSlide() {
    const slider = document.querySelector(".slider");
    slider.style.transform = `translateX(-${index * 100}%)`;
}

document.getElementById("next").addEventListener("click", function(){
    index = (index + 1) % 3;
    showSlide();
});

document.getElementById("prev").addEventListener("click", function(){
    index = (index - 1 + 3) % 3;
    showSlide();
});

setInterval(function(){
    index = (index + 1) % 3;
    showSlide();
}, 1500);
</script>
</body>
</html>