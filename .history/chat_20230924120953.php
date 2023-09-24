<?php
session_start();
if (!isset($_SESSION['unique_id'])) {
    header("location: login.php");
}
?>

<?php include_once "header.php" ?>

<body>
    <div class="wrapper">
        <section class="chat-area">
            <header>
                <?php
                include_once "php/config.php";
                $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
                $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = $user_id ");
                if (mysqli_num_rows($sql) > 0) {
                    $row = mysqli_fetch_assoc($sql);
                }
                ?>

                <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                <img src="images/<?= $row['img'] ?>" alt="">
                <div class="details">
                    <span><?= $row['fname'] . " " . $row['lname'] ?></span>
                    <p><?= $row['status'] ?></p>
                </div>
            </header>

            <div class="chat-box">

                <div class="chat outgoing">
                    <div class="details">
                        <p>Lorem ipsum dolor, sit Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium
                            placeat ipsa ab dolore ut natus nisi! Corrupti veniam culpa neque animi hic quibusdam vero
                            nulla possimus quo provident. A, numquam? amet consectetur adipisicin ipsum.</p>
                    </div>
                </div>

                <div class="chat incoming">
                    <img src="images/124374760.jpg" alt="">
                    <div class="details">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicin ipsum.</p>
                    </div>
                </div>


                <div class="chat outgoing">
                    <div class="details">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicin ipsum.</p>
                    </div>
                </div>

                <div class="chat incoming">
                    <img src="images/124374760.jpg" alt="">
                    <div class="details">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicin ipsum.</p>
                    </div>
                </div>


                <div class="chat outgoing">
                    <div class="details">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicin ipsum.</p>
                    </div>
                </div>

                <div class="chat incoming">
                    <img src="images/124374760.jpg" alt="">
                    <div class="details">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicin ipsum. Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. At et voluptatem eaque voluptatum expedita delectus molestiae
                            est quidem consequatur numquam, corrupti, quis veritatis neque accusamus maiores explicabo
                            laboriosam sunt! Eaque?</p>
                    </div>
                </div>


                <div class="chat outgoing">
                    <div class="details">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicin ipsum.</p>
                    </div>
                </div>

                <div class="chat incoming">
                    <img src="images/124374760.jpg" alt="">
                    <div class="details">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicin ipsum.</p>
                    </div>
                </div>


                <div class="chat outgoing">
                    <div class="details">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicin ipsum.</p>
                    </div>
                </div>

                <div class="chat incoming">
                    <img src="images/124374760.jpg" alt="">
                    <div class="details">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicin ipsum.</p>
                    </div>
                </div>


            </div>

            <form action="" class="typing-area">
                <input type="text" class="input-field" placeholder="Type a message here...">
                <button><i class="fab fa-telegram-plane"></i></button>
            </form>
        </section>
    </div>

    <script src="javascript/chat.js"></script>
</body>

</html>