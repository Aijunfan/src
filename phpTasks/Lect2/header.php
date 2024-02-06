<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title><?php echo $title;?></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">    
    <link rel="stylesheet" href="../Lect2/styles.css">
<style>
  a, .nav-link,.navbar-brand {
    color: white;
}
    </style>
</head>
<body>

      <header>
        <div class="logo">
            <a href=#><img src="../Lect2/image/LOGO/logo1.png" alt="my logo"></a>
        </div>

        <nav class="navigation">
            
            <div><a href="new.php">Home</a></div>
            <div><a href="ex1.php">Exercise 1</a></div>
            <div><a href="ex2.php">Exercise 2</a></div>
            <div><a href="ex3.php">Exercise 3</a></div>
            <div><a href="ex4.php">Exercise 4</a></div>
            <div><a href="ex5.php">Exercise 5</a></div>
            <div><a href="ex6.php">Exercise 6</a></div>
            <div><a href="../CRUD/index.php">Exercise 7</a></div>
            <div><a href="contactus.php">Contact Us</a></div>
            <div><a href="aboutus.php">About Us</a></div>
        
        </nav>

        <div class="search">
            <form action="#" method="get">
                <input type="text" name="search" placeholder="Search...">
                <a href=#><img src="../Lect2/image/search.png" alt="search icon" width="20" height="20"></a>
            </form>
        </div>

        <div class="login">
            <a href=#>Sign In</a>
        </div>

    </header>

    