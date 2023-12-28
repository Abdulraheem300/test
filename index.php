<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Your Website</title>
    
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }

        header {
            padding: 10px;
            text-align: right;
        }

        nav ul {
            list-style: none;
            display: flex;
            margin-right: 100px;
        }

        nav ul li {
            margin-left: 50px;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
        }

        nav ul li a:hover {
            color: #ffd700;
        }

        #toggle-btn {
            display: none;
            cursor: pointer;
            font-size: 20px;
            margin-right: 10px;
        }

        @media only screen and (max-width: 600px) {
            nav ul {
                display: none;
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            nav ul.show {
                display: flex;
            }

            #toggle-btn {
                display: block;
            }
        }
        
        .button-container {
            text-align: left;
            margin-top: 20px;
            margin-left: 100px;
        }

        .hire-button {
            background-color: #4B72EB;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Add box shadow */
        }

        .projects-button {
            color: #4B72EB;
            border: 2px solid #4B72EB;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 10px;
        }
    </style>
</head>
<body>

<header>
    <i class="fa fa-bars" id="toggle-btn"></i>
    <nav>
        <ul dir="rtl" id="nav-list">
            <li><a href="#contact">Contact Me <i class="fa fa-phone" aria-hidden="true"></i></a></li>
            <li><a href="#about">About Me <i class="fa fa-user" aria-hidden="true"></i></a></li>
            <li><a href="#home">Home <i class="fa fa-home" aria-hidden="true"></i></a></li>
        </ul>
    </nav>
</header>

<div style="width: 300px;">
    <p style="margin-left: 100px; color: darkcyan; font-size: 16px;">Welcome to my site</p>
</div>
	


<div style="width: 400px;">
    <p style="margin-left: 100px; color: darkcyan; font-size: 30px;"><b>Hi, I am Abdulraheem, a UI UX <span style="color: #DD7C12;">Designer</span></b></p>
</div>
	<div style="width: 600px;">
    <p style="margin-left: 100px;  font-size: 16px;">Iam Abdulraheem and I wish to be famust in progrramming</p>
</div>
<div>
    <img src="images/img.jpg" width="300px" height="300px" style="display: block; margin: auto; margin-top: -10px; max-width: 100%;">
</div>

<div class="button-container">
    <button class="hire-button">Hire Me</button>
    <button class="projects-button">See My Projects</button>
</div>

<script>
    document.getElementById('toggle-btn').addEventListener('click', function() {
        var navList = document.getElementById('nav-list');
        if (navList.style.display === 'flex') {
            navList.style.display = 'none';
        } else {
            navList.style.display = 'flex';
        }
    });
</script>

</body>
</html>
