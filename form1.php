<!DOCTYPE html>
<html>
    <head>
        <title>REGESTRATION FORM</title>
        <style>
            table{
               margin:auto;
            }
            
        </style>
        <link href = "/bootstrap/css/bootstrap.min.css" rel = "stylesheet">
      <script src = "/scripts/jquery.min.js"></script>
      <script src = "/bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <h2 align=center class="bg-dark text-white">REGESTRATION FORM</h2>
        <div>
            <table>
                <form action="#" method="get"s>
                <tr>
                    <div class="form-group">
                        <td><lable for="fname">First Name:</lable></td>
                        <td><input type="text" id="fname" class="form-control"  name="fname" placeholder="First Name" required></td>
                    </div>
                </tr>
                    <tr><td><br></td><td><br></td></tr>
                <tr>
                    <div class="form-group">
                        <td><lable for="mname">Middle Name:</lable></td>
                        <td><input type="text" id="mname" class="form-control" name="mname" placeholder="Middle Name" ></td>
                    </div>
                </tr>
                   <tr><td><br></td><td><br></td></tr>
                <tr>
                    <div class="form-group">
                        <td><lable for="lname">Last Name:</lable></td>
                        <td><input type="text" id="lname" class="form-control" name="lname" placeholder="Last Name" required></td>
                    </div>
                </tr>
                    <tr><td><br></td><td><br></td></tr>
                <tr>
                    <div class="form-group">
                        <td><lable for="mail">Email :</lable></td>
                        <td><input type="email" id="mail" class="form-control" name="mail" placeholder="abc@gmail.com"></td>
                    </div>
                </tr>
                    <tr><td><br></td><td><br></td></tr>
                <tr>
                    <div class="form-group">
                        <td><lable for="pass">Password :</lable></td>
                        <td><input type=password  id="pass" class="form-control" name="pass" placeholder="*******" ></td>
                    </div>
                </tr>
                    <tr><td><br></td><td><br></td></tr>
                <tr>
                    <div class="form-group">
                        <td><lable for="game">Select your fav game:  </lable></td>
                        <td><select name="games" id="games">
                        <option value="cricket">cricket</option>
                        <option value="football">foot ball</option>
                        <option value="volleyball" disabled>volleyball</option>
                        <option value="hockey">hockey</option>
                        </select></td>
                    </div>
                </tr>
                    <tr><td><br></td><td><br></td></tr> 
                <tr>
                    <td><label for="cars">Choose a car: </label></td>
                    <td>
                        <select  name="cars" id="cars" multiple>
                        <optgroup label="Swedish Cars">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        </optgroup>
                        <optgroup label="German Cars">
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                        </optgroup>
                        </select>
                    </td>
                </tr>
                    <tr><td><br></td><td><br></td></tr>
                <tr>
                     <div class="form-group">
                        <td><lable for="gender">Gender</lable></td>
                         <td>                       
                            <input type="radio"  name="gender" id="male">
                            <label for="male">Male</label><br>
                            <input type="radio"  name="gender" id="female">
                            <label for="female">Female</label>
                       
                         </td>
                    </div>
                </tr>
                    <tr><td><br></td><td><br></td></tr>
                <tr>
                    <td><lable for="country">Country to be visit:</lable></td>
                    <td>
                    <div class="form-group">
                        <div class="form-check">
                        <input type="checkbox"  name="country" id="india">
                        <label for="india">India</label><br>
                        <input type="checkbox"  name="country" id="Canada">
                        <lable for="canada">Canada</lable><br>
                        <input type="checkbox"   name="country" id="USA">
                        <lable for="USA">USA</lable><br>
                        <input type="checkbox"  name="country" id="switzerland">
                        <lable for="switzerland">Switzerland</lable><br>
                        <input type="checkbox"  name="country" id="london">
                        <lable for="London">London</lable>
                        </div>
                        </div>
                    </td>
                </tr>
                    <tr><td><br></td><td><br></td></tr>
                <tr>
                    <div class="form-group">
                        <td><lable for="bday">Birth date :</lable></td>
                        <td><input type="date" class="form-control" name="bday" id="bday"></td>
                    </div>
                </tr>
                    <tr><td><br></td><td><br></td></tr>
                <tr>
                    <div class="form-group">
                        <td><lable for="mob">Mobile number : </lable></td>
                        <td><input type="number" class="form-control" name="mob" id="mob" max=9999999999></td>
                    </div>
                </tr>
                    <tr><td><br></td><td><br></td></tr>
                
                <tr>
                    <div class="form-group">
                        <td><lable for="photo">Upload your Image :</lable></td>
                        <td><input type="file" class="form-control" name="photo" id="photo"></td>
                    </div>
                </tr>
                    <tr><td><br></td><td><br></td></tr>
                <tr>
                    <div class="form-group">
                        <td><lable for="doc">Madical documents:</lable></td>
                        <td><input type="file" class="form-control" name="doc" id="doc"></td>
                    </div>
                </tr>
                    <tr><td><br></td><td><br></td></tr>
                <tr>
                    <div class="form-group">
                        <td><label for="Description">Description:</label> </td>
                        <td><textarea rows="5" class="form-control" cols="50" name="Description" id="Description"></textarea></td>
                    </div>
                </tr>
                <tr><td><br></td><td><br></td></tr>
                <tr>
                    <div class="form-group">
                        <td><input class="btn btn-success" type="submit"></td>
                        <td><input class="btn btn-primary" type="reset"></td>
                    </div>
                </tr>
                    
                </form>
            </table>
        </div>
    </body>
</html>