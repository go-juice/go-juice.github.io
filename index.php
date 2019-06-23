<!DOCTYPE html>
<html>
<head>
<title>Jaco | Portal</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php include("includes/head-tags.php"); ?>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">


<style>
    body, html {
        height: 100%;
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }
    
    * {
        box-sizing: border-box;
    }
    
    .bg-image {
        /* The image used */
        background-image: url("images/image.jpg");
        
        /* Add the blur effect */
        filter: blur(8px);
        -webkit-filter: blur(8px);
        
        /* Full height */
        height: 100%; 
        
        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    
    /* Position text in the middle of the page/image */
    .bg-text {
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
        color: white;
        font-weight: bold;
        border: 3px solid #f1f1f1;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
        width: 80%;
        padding: 20px;
        text-align: center;
    }
    </style>
</head>
<body>
    
    <div class="bg-image"></div>
    
    <div class="bg-text">
        <h2>Hello</h2>
        <h1 style="font-size:50px">Simple Design</h1>
        <p>More content to come</p>
    </div>
</body>
</html>