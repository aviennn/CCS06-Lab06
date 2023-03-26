<?php

if (isset($_POST['complete_name'])):
    echo "<hr />";
    echo "<h1>Your Profile</h1>";
    echo "Full name: " . $_POST['complete_name'];
    echo "<hr />";
    // Debug
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
else:
?>

<html>
<style>
body{
    background-image: url('https://i.stack.imgur.com/wN3s7.png');
    background-size: cover;
    background-repeat: no-repeat;
}
.name {
    position: absolute;
    color: black;
    font-family: 'Moul';
    font-size: 32px;
    left: 50x;
    top: 20px;
}
.n_in{
    position: absolute;
    left: 40px;
    top: 40px;
    width: 400px;
    height: 25px;
}
.birth {
    position: absolute;
    color: black;
    font-family: 'Moul';
    font-size: 32px;
    left: 50x;
    top: 85px;
}
.bir_in{
    position: absolute;
    left: 40px;
    top: 40px;
    height: 25px;
}
.email {
    position: absolute;
    color: black;
    font-family: 'Moul';
    font-size: 32px;
    left: 10px;
    top: 150px;
}
.em_in{
    position: absolute;
    left: 40px;
    top: 40px;
    width: 400px;
    height: 25px;
}
.prog {
    position: absolute;
    color: black;
    font-family: 'Moul';
    font-size: 32px;
    left: 10px;
    top: 215px;
}
.pro_in{
    position: absolute;
    left: 40px;
    top: 40px;
    height: 25px;
}
.color {
    position: absolute;
    color: black;
    font-family: 'Moul';
    font-size: 32px;
    left: 10px;
    top: 280px;
}
.col_in{
    position: absolute;
    left: 40px;
    top: 40px;
    height: 25px;
    width: 190px;
}
.power {
    position: absolute;
    color: black;
    font-family: 'Moul';
    font-size: 32px;
    left: 10px;
    top: 345px;
}
.pow_in{
    position: absolute;
    left: 40px;
    top: 40px;
    height: 25px;
    width: 190px;
}
.submit{
    position: absolute;
    left: 10px;
    top: 460px;
    height: 25px;
    width: 100px;
}


</style>

<h1><center>Profile Form</center></h1>

<form method="POST" action="profile-form.php">

<p class = "name"> Name: <input type="text" name="complete_name" class = "n_in" /> </p> <br /> 

<p class = "birth"> Birthdate: <input type="date" name="birthdate" class = "bir_in"/> </p> <br />

<p class = "email"> Email Address: <input type="email" name="email" size="30" required class ="em_in" /> </p> <br />

<p class = "prog"> Program:
<select name="program" class ="pro_in">
<option value="BSCS">B.S. Computer Science</option>
<option value="BSIT">B.S. Information Technology</option>
</p> </select>
<br />

<p class = "color"> Favorite Color: <input type="color" name="favorite_color" class = "col_in" /> </p> <br />

<p class = "power"> Superpower Level: <input type="range" name="superpower_level" min="1" max="1000000" step="5000" class = "pow_in"/> </p> <br />

<button class = "submit" >Submit</button>
</form>

</html>
<?php
endif;
?>