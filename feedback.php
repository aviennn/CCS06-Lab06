<!DOCTYPE html>
<html>
<title>Feedback Form</title>
<h1><center>Feedback Form</center></h1>

<style>

.submit {
    position: absolute;
    left: 340px;
    top: 350px;
    height: 25px;
    width: 100px;
}
</style>
<form method="POST" action="thankyou.php">

Name: <input type="text" name="complete_name" class = "n_in" /> <br /> 

Email Address: <input type="email" name="email" size="30" required class ="em_in" /> <br />

Type:
<select name = "type" >
<option value = "Inquiry"> Inquiry </option>
<option value = "Feedback"> Feedback </option>
<option value = "Other"> Other/s </option>
</select>
<br />

Level of Satisfaction (between 0 to 10): <input type="range" name="satisfaction_level" min="0" max="10" step = "1" /><br /><br />

Feedback message: <textarea rows="10" cols="70" name="message" class ="box" > </textarea> <br />

<button class ="submit" >Submit</button>
</form>

</html>