<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form action="logu.php" method="post">
      <div class="">
        <h1>Sign up</h1><br/>
        <div class="">
          <label>Username</label>
          <input type="text" class="" placeholder="someone" name="username" autocomplete="off" required="required">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" placeholder="Password" name="pass" autocomplete="off" required="required">
        </div>

        <br>
        <div class="">
          <label>phnnumber</label>
          <input type="text" class="" placeholder="Enter your phnnumber" name="phnnumber" autocomplete="off" required="required">
        </div>
        <br>
        <div class="">
          <label>occupation</label>
          <input type="text" class="" placeholder="someone" name="occupation" autocomplete="off" required="required">
        </div>
        <br>
        <div class="">
          <label>email</label>
          <input type="email" class="" placeholder="Enter you email" name="email" autocomplete="off" required="required">
        </div>
        <br>

        <div class="">
              <label>Gender</label>
              <select class="" name="gender" required="required">
                <option>Select a Gender</option>
                <option>Male</option>
                <option>Female</option>
                <option>Others</option>
              </select>
            </div>
            <br>
            <div class="">
              <label>nationality</label>
              <input type="text" class="" placeholder="enter your nationality" name="nationality" autocomplete="off" required="required">
            </div>
            <br>



          <button type="submit" name="Sign_up" class="icon-arrow-right"><span>Sign up</span></button>
      </div>
      <br>


</form>

  </body>
</html>
