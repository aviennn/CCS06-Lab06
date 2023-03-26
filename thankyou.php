<!DOCTYPE html>
<head>
<title>Thank You!</title>
</head>

<body>

<h1> Thank You! </h1>
<p style = "font-size:30px">
Received <b> <?php echo $_POST["type"]; ?> </b> message from <b> <?php echo $_POST["complete_name"]; ?> </b> ( <b> <?php echo $_POST["email"]; ?> </b>) <br> <br>

<b> <?php echo $_POST["message"]; ?> </b> <br> <br>

Satisfaction level: <b> <?php echo $_POST["satisfaction_level"]; ?> </b>

</p>
</body>
</html>