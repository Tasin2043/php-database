

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>Form Submission</title>
</head>
<body>
  <h1>REGISTRATION FORM</h1>

  <?php
  require 'DbInsert.php';
  $firstname = $lastname= $gender = $dob = $religion = $presentaddress =$permanentaddress =  $phone = $email = $personalweblink = $username = $password =  "";

  $firstnameErr = $lastnameErr = $genderErr = $dobErr = $religionErr = $presentaddressErr =$permanentaddressErr =  $phoneErr = $emailErr = $personalweblinkErr = $usernameErr = $passwordErr =  "";
    $flag = false;

  if($_SERVER['REQUEST_METHOD'] ==="POST") {
    $firstname = $_POST['firstname']; 
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $religion = $_POST['religion'];
    $presentaddress = $_POST['presentaddress'];
    $permanentaddress = $_POST['permanentaddress']; 
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $personalweblink = $_POST['personalweblink']; 
    $userName = $_POST['username'];
    $passWord = $_POST['password'];
    

    if(empty($firstname)) {
      $firstnameErr = "Empty!";
    
    $flag = true;

  }
   if(empty($lastname)) {
    $lastnameErr = "Empty!";
    $flag = true;
  }

 if(empty($gender)) {
      $genderErr = "Empty!";
    
    $flag = true;

  }
   if(empty($dob)) {
    $dobErr = "Empty!";
    $flag = true;
  }
   if(empty($religion)) {
      $religionErr = "Empty!";
    
    $flag = true;

  }
   if(empty($presentaddress)) {
    $presentaddressErr = "Empty!";
    $flag = true;
  }
   if(empty($permanentaddress)) {
      $permanentaddressErr = "Empty!";
    
    $flag = true;

  }
   if(empty($phone)) {
    $phoneErr = "Empty!";
    $flag = true;
  }
   if(empty($email)) {
      $emailErr = "Empty!";
    
    $flag = true;

  }
   if(empty($personalweblink)) {
    $personalweblinkErr = "Empty!";
    $flag = true;
  }
 

  if(empty($username)) {
    $userNameErr = "Empty!";
    $flag = true;
  }

if(empty($password)) {
    $passWordErr = "Empty!";
    $flag = true;
  }


  if(!$flag){
    if(strlen($username) > 10) {
        $usernameErr = "Username max size 10!";
        $flag = false;
        }
      if(strlen($password) > 10) {
        $passwordErr = "Password max size 10!";
        $flag = false;
        }

        if(!$flag){
    $firstname = test_input($firstname);
    $lastname = test_input($lastname);
    $gender = test_input($gender);
    $dob = test_input($dob);
    $religion = test_input($religion);
    $presentaddress = test_input($presentaddress);
    $permanentaddress = test_input($permanentaddress);
    $phone = test_input($phone);
    $email = test_input($emaiL);
    $personalweblink = test_input($personalweblink);
    $username = test_input($username);
    $password = test_input($password);

    $response = register($username, $password);  
if($response){
   $successfulMessage = "Successfully saved!";
 }
 else{
  $errorMessage = "Error while saving!";
     }
    }
   } 
  } 
  function test_input($data) {
         $data =trim($data);
         $data =stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
       } 

?>


<fieldset>
   <legend>Basic Information:</legend>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">

 
   <br> <label for="firstname">FIRST NAME <span style="color: red;">*</span>:</label>
        <input type="text" id="firstname" name="firstname"> <span style="color: red;"><?php echo $firstnameErr; ?></span>
        <br><br>


        <label for="lastname">LAST NAME <span style="color: red;">*</span>:</label>
        <input type="text" id="lastname" name="lastname"> <span style="color: red;"><?php echo $lastnameErr; ?></span>
        <br><br>


<label for="gender"> GENDER <span style="color: red;">*</span>:
<input type="radio" name="gender" value="gender"> Male
<input type="radio" name="gender" value="gender"> Female 
<span style="color: red;"><?php echo $genderErr; ?></span> </label> <br><br>



<label for="dob">BIRTHDAY<span style="color: red;">*</span>:</label>
    <input type="date" id="dob" name="dob"> <span style="color: red;"><?php echo $dobErr; ?></span> <br><br>


    
      <label for="religion">RELIGION <span style="color: red;">*</span>: </label>
      <select name="religion" id="religion">
      <option value=""></option>
      <option value="islam">Islam</option>
      <option value="hindu">Hindu </option>
      <option value="buddho">Buddho</option>
      <option value="christan">Christan</option>
      <span style="color:red"><?php echo $religionErr; ?></span> </select> 


</fieldset>



<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
  <fieldset>
    <legend>Contact Information:</legend>

  <br><label for="presentaddress">PRESENT ADDRESS:</label>
        <input type="textarea" id="presentaddress" name="presentaddress"> <span style="color: red;"><?php echo $presentaddressErr; ?></span><br><br>

   <label for="permanentaddress">PERMANENT ADDRESS:</label>
        <input type="textarea" id="permanentaddress" name="permanentaddress"> <span style="color: red;"><?php echo $permanentaddressErr; ?></span><br><br>


    <label for="phone">Phone:</label>
    <input type="tel" id="phone" name="phone"> <span style="color: red;"><?php echo $phoneErr; ?></span><br><br>

     <label for="email">Email<span style="color: red;">*</span>:</label>
    <input type="email" id="email" name="email"> <span style="color: red;"><?php echo $emailErr; ?></span><br><br>

     <label for="personalweblink">PERSONAL WEBSITE LINK:</label>
    <input type="url" id="personalweblink" name="personalweblink"> <span style="color: red;"><?php echo $personalweblinkErr; ?></span><br><br>

  </fieldset>

<form action="/action_page.php">
  <fieldset>
    <legend>Account Information:</legend>

    <br><label for="username">USER NAME <span style="color: red;">*</span>:</label>
        <input type="text" id="username" name="username"><span style="color: red;"><?php echo $usernameErr; ?></span><br><br>

   <label for="password">PASSWORD <span style="color: red;">*</span>:</label>
        <input type="password" id="password" name="password"><span style="color: red;"><?php echo $passwordErr; ?></span><br><br>


 </fieldset>

 <br><br>
 <input type="submit" name="submit" value="REGISTER">
</form>

<br>
<br>

<span style ="color:green;"><?php echo $successfulMessage; ?></span>
<span style ="color:red;"><?php echo $errorMessage; ?></span>

<p>Back to<a href="login-form.php">LOGIN</a></p>
</body>
</html>