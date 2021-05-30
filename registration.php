
<html>
<head>
<title>
    Registration Form
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("rahi.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="bg">


<center>

<h2 align=center class="bg-info text-white">REGISTRATION FORM</h2>

    
<form action="display.php" method="post">
<table>

<tr>
<td> First Name</td>
<td> <input type="name" class="form-control" name="txt1" require /> </td>    
</tr>

<tr>
<td></td>
<td></td>    
</tr>

<tr>
<td> Last Name </td>
<td> <input type="name" class="form-control"name="txt2" require /> </td>    
</tr>


<tr>
<td> Email </td>
<td> <input type="email" class="form-control" name="txt3" require /> </td>    
</tr>

<tr>
<td> Mobile Number </td>
<td> <input type="number" class="form-control" name="txt4" require /> </td>    
</tr>

<tr>
<td> Password </td>
<td><input type=password  id="pass" class="form-control" name="txt5" placeholder="*******" ></td>
 
</tr>


<tr>
<td> <input  type="Submit" class="btn btn-success" /></td>
<td> <input type="Reset" class="btn btn-primary" /> </td>
</tr>



</table>
</form>

</center>



</div>
</body>
</html>

