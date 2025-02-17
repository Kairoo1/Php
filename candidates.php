<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cand.css">
</head>
<body>
    <header>
<div class="logo">
       <h1>Candidates result</h1>
        </div>
        <div class="navbar">
          <a href="index.php">home</a>
          <a href="post.php">post</a>
          <a href="">candidates Results</a>
          <a href="login.php">logout</a>
        </div>
        </header>

<center>
<form action="">
    <h1>Candidates Form</h1>
        First Name: <input type="text"  require maxlength=20><br><br>
        Last Name:  <input type="text" require maxlength=20><br><br>
        Gender:     male <input type="radio" name="" id=""><br>
                    Female: <input type="radio" name="" id=""><br><br>
     Date OF Birth: <input type="date" name="" id=""><br><br>  
        Post_ID     <input type="number" require maxlength=20><br><br>  
        Exame date: <input type="date" require maxlength=20><br><br>  
        Phone.N:   <input type="tel"  require maxlength=15><br><br>  
        Marks:     <input type="text" require maxlength=20><br><br>  
          
          <button type="submit"><a href="candidateList.php">submit</a></button>
        </form>

</center>
       
        <footer>
    <p>&copy; copyligth 2025 </p>
</footer>
    
</body>
</html>