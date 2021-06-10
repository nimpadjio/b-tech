<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.min.css" th:href="@{/bootstrap.min.css}" rel="stylesheet" media="screen" />
    <!-- <link rel="stylesheet" href="css/Home.css"> -->
    <title>Document</title>
    <style>
        body{
            /*margin:0;
            border:none;
            size: 100%;*/
            background-image: url("Nature-Beautiful-Backgrounds.jpg");
            background-size: 100%;
            background-repeat: no-repeat;
            background-attachment: fixed;

        }

        #header {
            background-color: #66CCFF;
            color: white;
            padding: 8px;
            text-align: center;
            height: 7rem;
            margin-bottom: px;
        }

        li {
            list-style-type: none;
            padding: 10px;
            display: inline-block;
            text-decoration: none;
        }

        ul {
            padding: 10px;
            margin: 0;
            color: black;
        }

        #container {
            background-color: rgb(110, 95, 100, 0.7);
            width: 950px;
            height: 500px;
            margin-bottom: 30px;
            margin-left: auto;
            margin-right: auto;
        }

        div
        {
            padding-top:10px;
        }
        
        /*#course1 {*/
        /*    height: 350px;*/
        /*    width: 260px;*/
        /*    background-color: rgb(110, 95, 100, 0.7);*/
        /*    display: inline-block;*/
        /*    margin-left: 9rem;*/
        /*    margin-right: 15px;*/
        /*    text-align: center;*/
        /*}*/
        
        /*div #image*/
        /*{*/
        /*    width: 260px;*/
        /*    height: 135px;*/
        /*    background: white;*/
        /*    border: none;*/
        /*    margin-: 20px;*/
        /*}*/
       #inform
       {
           color: white;
           text-decoration: none;
           background: rgb(0, 0, 0, 0.5);
           padding: 1px;
           border-radius: 6px;
           float: right;
           width: 120px;
           margin-top: 160px;
           margin-right: 85px;
       }

       #btn
       {
           color: #fff;
           border: 1px;
           border-radius: 6px;
           background: limegreen;
           padding: 5px;
           width: 80px;
           float: right;
           z-index: 1;
           top: 20px;
           
       }

        footer
        {
            background-color: #000000;
            width: 100%;
            height: 35%;
        }

        footer li
        {
            color: #ffffff;
            display: block;
            text-decoration: none;
            list-style: none;
        }

       .getinto
       {
           color: #fff;

           font-family: "Times New Roman", Times, serif;
           font-size: 19px;
           float: right;
           /* margin-left: 800px; */
           margin-right: 30px;
       }

       .getinto a
       {
           text-decoration: none;
       }

        #loader 
        {
            position: absolute;
            left: 50%;
            top: 50%;
            z-index: 1;
            width: 150px;
            height: 150px;
            margin: -75px 0 0 -75px;
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #3498db;
            width: 120px;
            height: 120px;
            -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
        }

        @-webkit-keyframes spin 
        {
            0% { -webkit-transform: rotate(0deg); }
            100% { -webkit-transform: rotate(360deg); }
        }

        @keyframes spin 
        {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

/* Add animation to "page content" */
        .animate-bottom 
        {
            position: relative;
            -webkit-animation-name: animatebottom;
            -webkit-animation-duration: 1s;
            animation-name: animatebottom;
            animation-duration: 1s
        }

        @-webkit-keyframes animatebottom 
        {
            from { bottom:-100px; opacity:0 } 
            to { bottom:0px; opacity:1 }
        }

        @keyframes animatebottom 
        { 
            from{ bottom:-100px; opacity:0 } 
            to{ bottom:0; opacity:1 }
        }
       
    </style>
</head>

<body onclick="appear()">
<?php include('includes/header.php');?>
    <div class="loader"></div>

    <div id="container"name="things">
       
<!--        <a href="firstcourse.php" id="forme" class="animate-bottom" target="iframe_a">-->
<!--            <div id="course1" href="firstcourse.php">-->
<!--                <div id="image">-->
<!--                -->
<!--                </div>-->
<!--                <span id="inform"><li>Start Now</li></span>-->
<!--            </div>-->
<!--        </a>-->
    </div>
<?php include('includes/footer.php');?>
</body>

<script>
    function hideCourse()
    {
        document.getElementById("course1").style.display = "none";
        // function appear()
        // {
        //     document.getElementById("course1").style.display = "inline-block";
        // }
    }

    var myVar;
    function appear()
    {
        myVar = setTimeout(showPage, 3000);
    }

    function showPage()
    {
        document.getElementById("loader").style.display = "none";
        document.getElementById("forme").style.display = "block";
    }
</script>
</html>