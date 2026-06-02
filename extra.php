<!--page: details-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ Page</title>
</head>
<body>
<header>
    <h1 id="logo"> <img src="logo.png" width="225" height="40"></h1>

    <nav>
        <a href="home.php">Home</a>
        <a href="courses.php">Courses</a>
        <a href="login.php">login</a>
        <a href="signup.php">signup</a>
    </nav>
</header>
 <h2>Frequently Asked Questions (FAQ)</h2>
<div class="faq-section">

   

    <div class="faq-item">
        <h3>1. What subjects and specializations does Coursera offer?</h3>
        <p>
            Our platform provides a wide range of courses in Computer Science, Data Science,
            Business Administration, Digital Marketing, Web Development, Artificial Intelligence,
            Psychology, Languages, Graphic Design, and more. Many programs are taught in collaboration
            with top universities and international institutions.
        </p>
    </div>
<section class="tip-news">
    <button class="main-btn" onclick="showtip()">Best TIP for you</button>

      <div id="tip-btn" style="display:none; margin-top: 15px;">
        <h3>⭐ “More than 70% of learners say that studying just 20 minutes a day made learning feel easier and more fun.”</h3>
    </div>
</section>
    <div class="faq-item">
        <h3>2. Are the courses suitable for beginners?</h3>
        <p>
            Yes. Each course includes detailed descriptions, requirements, and difficulty levels.
            Beginners can start with introductory courses, while advanced learners can choose
            professional certificates or specialization tracks.
        </p>
    </div>

    <div class="faq-item">
        <h3>3. How are the courses delivered?</h3>
        <p>
            Courses include high-quality video lectures, reading materials, weekly assignments,
            hands-on projects, peer reviews, and quizzes. Students can learn at their own pace,
            and many courses offer flexible deadlines to fit different schedules.
        </p>
    </div>

    <div class="faq-item">
        <h3>4. Do I receive a certificate after completion?</h3>
        <p>
            Yes. Upon successfully finishing all required assessments, students receive a verified
            digital certificate that can be shared on LinkedIn or added to professional resumes.
            Certificate availability may vary depending on the course type and partner institution.
        </p>
    </div>

    <div class="faq-item">
        <h3>5. Are the courses free or paid?</h3>
        <p>
            Many courses can be audited for free, giving access to video lectures and reading materials.
            However, graded assignments, peer reviews, and certificates require a paid subscription
            or one-time course fee. Some financial aid options are available for eligible students.
        </p>
    </div>

    <div class="faq-item">
        <h3>6. How do I enroll in a course?</h3>
        <p>
            Simply create an account, browse the course catalog, and click the "Enroll" button.
            You can start learning immediately or save the course to your dashboard for later.
        </p>
    </div>

    <div class="faq-item">
        <h3>7. What happens if I forget my password?</h3>
        <p>
            You can reset your password at any time by clicking the “Forgot Password?” link on the
            login page. An email will be sent to you with instructions to create a new password
            securely.
        </p>
    </div>
  <div class="faq-item">
        <h3>8. Can I access the courses on mobile?</h3>
        <p>
            Yes. Our platform is fully responsive and works on all devices, including mobile phones,
            tablets, and laptops. You can learn from anywhere, anytime with a stable internet connection.
        </p>
    </div>

    <div class="faq-item">
        <h3>9. Are assignments and quizzes timed?</h3>
        <p>
            Most quizzes are untimed with multiple attempts, while major assessments may have deadlines.
            Deadlines can usually be adjusted according to your learning pace, depending on the course.
        </p>
    </div>

    <div class="faq-item">
        <h3>10. Can I contact instructors or support?</h3>
        <p>
            Students can interact through discussion forums, ask questions, share feedback, and engage
            with peers worldwide. Technical support is also available through the help center for any
            account or payment issues.
        </p>
    </div>

</div>
<footer>
    <a href="https://about.coursera.org/contact" target="_blank" class="contact button">
    <button>Contact us for more details</button>
</a><br>
    ©️ 2025 Coursera Inc. All rights reserved.
</footer>
<style> body{
            background-color:  #acc3daff;
        }
header{
    width: 100%;
    padding: 20px 9px;
    background-color: white;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: relative;
        margin: -10px;
}

#logo{
    margin: 0;
    display: flex;
    margin-left: 40px;
}

nav a{
    margin: 0 15px;
    text-decoration: none;
    color: #000000ff;
    font-size: 18px;
    text-transform: capitalize;
}

nav a:hover{
    color: #1e3a8a;

}
h2{
       text-align: center;
font-size: 35px;
}
.faq-item h3 {
    font-size: 30px;
    color:  #112761ff;
    margin-bottom: 10px;
}

.faq-item p {
    display:grid;
    font-size: 25px;
    color: #000000ff;
    line-height: 2;
    

}

footer{
    text-align:right;
    padding: 20px 0;
    color:#333;
    margin-top: 50px;
    font-size: 14px;
}
.contact button{
    padding: 12px 250px;
    background-color: #1e3a8a;
    color: white;
    font-size: 18px;
    border: none;
    border-radius: 25px;
    cursor: pointer;
  
     

}
.main-btn{
    margin-left:1000px;
    padding: 10px 25px;
    background-color: #1e3a8a;
    color: white;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 18px;
    transition: 0.3s;
}

.main-btn:hover{
    background-color: #1550a0;
}
@media (max-width: 1024px) {
    .main-btn {
        margin-left: 50%;
        transform: translateX(-50%);
        padding: 10px 20px;
    }

    .faq-item h3 {
        font-size: 24px;
    }

    .faq-item p {
        font-size: 20px;
        line-height: 1.6;
    }

    header {
        flex-direction: column;
        align-items: flex-start;
        padding: 15px;
    }

    nav a {
        margin: 5px 10px;
        font-size: 16px;
    }

    h2 {
        font-size: 28px;
    }
}

@media (max-width: 600px) {
    .main-btn {
        margin-left: 50%;
        transform: translateX(-50%);
        padding: 8px 15px;
        font-size: 16px;
    }

    .faq-item h3 {
        font-size: 20px;
    }

    .faq-item p {
        font-size: 18px;
        line-height: 1.4;
    }

    nav a {
        margin: 5px 5px;
        font-size: 14px;
    }

    h2 {
        font-size: 24px;
        text-align: center;
    }
}
</style>
</body>
</html><script>
function showtip(){
    document.getElementById('tip-btn').style.display = 'block';
}


</script>