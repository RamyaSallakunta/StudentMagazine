<head>
    <link rel="stylesheet" href="css/header.css">
    <style>
        .hero{
    height:150px;
    width:100%;
    font-family: 'Poppins';
}
.logo{
    color:orange;
    font-size:28px;
    padding-bottom: 0;
    padding-top: 0;
    margin-bottom: 0;
}
.logo span{
    color:white;
}
nav{
    display:flex;
    align-items:center;
    justify-content: space-between;
    padding-top: 30px;
    padding-left: 10%;
    padding-right:10%;
}
nav ul li{
    list-style-type: none;
    display: inline-block;
    padding:10px 20px;
}
nav ul li a{
    color:whitesmoke;
    text-decoration:none;
    font-weight: bold;
   /* font-size:20px;*/
}
nav ul li a:hover{
    color:orange;
    transition:0.3s;
}
button{
    border:none;
    background: orange;
    padding:12px 30px;
    border-radius:30px;
    color:white;
    font-weight:bold;
    font-size:20px;
    transition:0.4s;
}
button:hover{
    transform:scale(1.3);
    cursor:pointer;
}
    </style>
</head>
<body>
<div class="hero">
        <nav>
            <h2 class="logo">VMEG <span>Magazine</span></h2>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="blogs.php">Blogs</a></li>
                <li><a href="events.php" >Events</a></li>
                <li><a href="clubs.php" >Student Clubs</a></li>
                <li><a href="cform.php">Contact Us</a></li>
            </ul>
            <!-- <button id="loginButton">Login</button> -->
        </nav>
    </div>
</body>