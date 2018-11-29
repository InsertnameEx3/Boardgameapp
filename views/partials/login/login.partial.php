<div class="container">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <!-- Default form login -->
            <form class="text-center border border-light p-5" action="login" method="post">

                <p class="h4 mb-4">Sign in</p>

                <!-- Email -->

                <div class="form-group ">

                    <label for="mail">Email</label>

                    <?php if ($Emailerror == true) {
                        echo "  <input type=\"email\" class=\"form-control is-invalid\" id=\"mail\" name=\"mail\" required>
                                <div class=\"invalid-feedback\">
                                    $Emailerror.
                                </div>";
                    } else {
                        echo "<input type=\"email\" class=\"form-control\" id=\"mail\" name=\"mail\" required>";
                    }
                    ?>

                </div>

                <!-- Password -->
                <div class="form-group">

                    <label for="password">Password</label>


                    <?php if ($Passworderror == true) {

                        echo "<input type=\"password\" class=\"form-control is-invalid\" id=\"password\" name=\"password\" required>
                                <div class=\"invalid-feedback\">
                                    $Passworderror.
                                </div>";
                    } else {
                        echo "<input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" required>";
                    }
                    ?>


                </div>


                <div class="invalid-feedback">
                    <?=$error?>
                </div>

                <div>
                    <!-- Forgot password -->
                    <a href="registreren">Registreren</a>

                </div>

                <!-- Sign in button -->
                <button class="btn btn-primary btn-block my-4" type="submit">Login</button>

            </form>
            <!-- Default form login -->
        </div>
        <div class="col-lg-3"></div>
    </div>
</div>

