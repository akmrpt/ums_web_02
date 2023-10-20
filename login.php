<?php 
        require('header.php') ; 
        ?>
<div class='container' style="width: 400px;">

<h1>DX APP Login</h1>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="row">

<form id="frm_login" name="frm_login" method="post" action="loginvalidate.php">
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="text" id="login_id" name="login_id" class="form-control" />
    <label class="form-label" for="login_id">Login ID</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="login_pw" name="login_pw" class="form-control" />
    <label class="form-label" for="login_pw">Password</label>
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <!-- <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked /> -->
        <!-- <label class="form-check-label" for="form2Example31"> Remember me </label> -->
      </div>
    </div>

    <div class="col">
      <!-- Simple link -->
      <!-- <a href="#!">Forgot password?</a> -->
    </div>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

   
</form>
</div>
</div>
<?php 
        require('footer.php') ; 
        ?>