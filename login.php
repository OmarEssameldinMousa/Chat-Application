<?php include_once "header.php" ?>

<body>
    <div class="wrapper">
        <section class="form login">
            <header>RealTime Cat App</header>
            <form action="#">
                <div class="error-txt"></div>
                <div class="field input">
                    <label for="">Email Address</label>
                    <input type="text" name="email" placeholder="Email Address">
                </div>
                <div class="field input">
                    <label for="">password</label>
                    <input type="password" name="password" placeholder="Enter Your password">
                    <i class="fas fa-eye"></i>
                </div>

                <div class="field button">
                    <input type="submit" value="Continue to Chat">
                </div>
            </form>
            <div class="link">Not signed up yet? <a href="index.php">Signup now</a></div>
        </section>
    </div>

    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/login.js"></script>
</body>

</html>