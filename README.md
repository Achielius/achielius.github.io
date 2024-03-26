<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Menu</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
<style>
        /* Add some basic styling for the menu */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            background-color: rgba(51, 51, 51, 0.7); /* Use rgba for transparency */
            overflow: hidden;
            display: flex;
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000; /* Ensure the menu is on top of the background */
        }

        li {
            margin-right: 20px; /* Add some spacing between items */
        }

        li.logo {
            margin-right: auto; /* Move the logo to the left corner */
            margin-left: 20px; /* Add margin for spacing */
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li i {
            margin-right: 8px;
        }

        li a:hover {
            background-color: #111;
        }

        /* Add styling for the logo */
        .logo {
            display: inline-block;
            padding-top: 0.3125rem;
            padding-bottom: 0.3125rem;
            margin-right: 1rem;
            font-size: 1.25rem;
            line-height: inherit;
            white-space: nowrap; 
        }
  
        .navbar-brand:hover, .navbar-brand:focus {
            text-decoration: none;
        }

        /* Move the navigation links to the right */
        li.right-align {
            float: right;
            display: flex;
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
        }

        .container {
            max-width: 100%;
            margin: 0 auto;
            overflow: hidden;
        }

        .columns {
            display: flex;
            justify-content: space-between;
            margin: 0; /* Remove margin */
            height: 100vh; /* Set height to 100% of viewport height */
        }

        .column {
            flex: 50%; /* Adjust the width as needed */
            width: 100%;
            box-sizing: border-box;
            overflow: hidden;
            background: rgba(255, 255, 255, 0.8); /* Example background color with transparency */
            margin: 0; /* Remove margin */
    
       }

       .column img {
            max-width: 100%; /* Make the image responsive to the column width */
            height: 100%; /* Maintain aspect ratio */
            object-fit: cover;
            object-position: center;
        }

        .slideshow-container {
            width: 100%;
            height: 100%;
            position: relative;
            overflow: hidden;
        }

        .slide {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            transition: opacity 2s ease-in-out;
        }

        .slide.active {
            opacity: 1;
        }

        .hello-overlay {
            font-family: "Barlow Condensed", Arial, sans-serif;
            text-transform: uppercase;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: transparent;
            font-size: 49vw; /* Responsive font size based on viewport width */
            line-height: .1vh;
            font-weight: bold;
            -webkit-text-stroke-width: 2px;
            -webkit-text-stroke-color: white;              
        }

        /* Add styling for the footer */
        footer {
            background-color: rgba(51, 51, 51, 0.7);
            color: white;
            padding: 20px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
            z-index: 1000; /* Ensure the footer is on top of the background */
        }

        .footer-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .footer-column {
            flex: 0 0 23%; /* Adjust the width as needed */
        }

        .copyright {
            margin-top: 10px;
        }
        
    </style>
</head>
<body>

    <ul>
        <li class="logo"><a href="#">AMM</a></li>
        <li class="right-align"><a href="#about"><i class="fas fa-info-circle"></i>About</a></li>
        <li class="right-align"><a href="#portfolio"><i class="fas fa-cogs"></i>Portfolio</a></li>
        <li class="right-align"><a href="#contact"><i class="fas fa-envelope"></i>Contact</a></li>
    </ul>

    <div class="content-container">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <div class="slideshow-container">
                        <img class="slide active" src="img/tree.jpg" alt="Slideshow Image 1">
                        <img class="slide" src="img/tree_b.jpg" alt="Slideshow Image 2">
                        <img class="slide" src="img/tree_c.jpg" alt="Slideshow Image 3">
                        <!-- Add more images as needed -->
                    </div>

                    <img src="img/tree.jpg" alt="Column 1 Image">
                    
                </div>
                <div class="column">
                    <img src="img/tree_b.jpg" alt="Column 1 Image">
                    
                </div>
            </div>
        </div>

        <div class="container">
            <div class="hello-overlay">AMM</div>
            <div class="columns">
                <div class="column">
                    <p>Second row, 1st column</p>
                    
                </div>
                <div class="column">
                    <p>Second row, 2nd column</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="columns">
            <div class="column">
                <p>Third row, 1st column</p>
                
            </div>
            <div class="column">
                <p>Third row, 2nd column</p>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer>
    <!-- First row in the footer -->
    <div class="footer-row">
        <div class="footer-column">
            <h4>Column 1</h4>
            <p>Content for column 1.</p>
        </div>
        <div class="footer-column">
            <h4>Column 2</h4>
            <p>Content for column 2.</p>
        </div>
        <div class="footer-column">
            <h4>Column 3</h4>
            <p>Content for column 3.</p>
        </div>
        <div class="footer-column">
            <h4>Column 4</h4>
            <p>Content for column 4.</p>
        </div>
    </div>
    <!-- Second row in the footer -->
    <div class="footer-row copyright">
        <p>Copyright ©2024 All rights reserved | This template is made by Angelito Marianoo</p>
    </div>
</footer>

<script>
    // JavaScript for the slideshow
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let slides = document.getElementsByClassName("slide");
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.opacity = "0";
        }
        slideIndex++;
        if (slideIndex > slides.length) { slideIndex = 1 }
        slides[slideIndex - 1].style.opacity = "1";
        setTimeout(showSlides, 5000); // Change slide every 2 seconds (adjust as needed)
    }
</script>

</body>
</html>
