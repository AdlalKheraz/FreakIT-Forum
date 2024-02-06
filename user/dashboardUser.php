<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Custom Styling -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- Admin Styling -->
    <link rel="stylesheet" href="../assets/css/admin.css">

    <title>user Section - Dashboard</title>
</head>

<body>

    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

    <!-- Admin Page Wrapper -->
    <div class="admin-wrapper">
        <?php include(ROOT_PATH . "/app/includes/userSidebar.php"); ?>


        <!-- user Content -->
        <div class="admin-content">

            <div class="content">

                <h2 class="page-title">accout</h2>

                <?php include(ROOT_PATH . '/app/includes/messages.php'); ?>



            </div>

        </div>

    </div>




    <!-- Custom Script -->
    <script src="../assets/js/scripts.js"></script>

</body>

</html>