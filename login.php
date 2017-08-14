<?php include "header.php" ?>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4" style="margin-top:30px">
            <h1 class="text-center login-title">Login to Admin</h1>
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                <form class="form-signin" action="include/loginScript.php" method="post">
                <input type="text" class="form-control" name="email" placeholder="Email" required autofocus>
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">
                    Sign in</button>
<!--                <label class="checkbox pull-left">-->
<!--                    <input type="checkbox" value="remember-me">-->
<!--                    Remember me-->
<!--                </label>-->
              
                </form>
            </div>

        </div>
    </div>
</div>
