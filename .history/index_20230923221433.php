<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realtime Chat App</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="wrapper">
        <section class="form signup">
            <header>RealTime Cat App</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-txt"></div>
                <div class="name-details">

                    <div class="field input">
                        <label for="">First Name</label>
                        <input type="text" required placeholder="First Name" name="fname">
                    </div>

                    <div class="field input">
                        <label for="">Last Name</label>
                        <input type="text" required placeholder="Last Name" name="lname">
                    </div>
                </div>

                <div class="field input">
                    <label for="">Email Address</label>
                    <input type="text" required placeholder="Email Address" name="email">
                </div>
                <div class="field input">
                    <label for="">password</label>
                    <input type="password" required placeholder="Enter new password" name="password">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label for="">Select Image</label>
                    <input type="file" name="image" required>
                </div>
                <div class="field button">
                    <input type="submit" value="Continue to Chat">
                </div>
            </form>
            <div class="link">Aleardy signedup? <a href="">Login Now</a></div>
        </section>
    </div>


    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>
</body>

</html>