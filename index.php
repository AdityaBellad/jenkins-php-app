
<?php
$message = "Welcome to my Updated  CI/CD project!";
$version = "Version 2.0";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Jenkins CI/CD Demo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1><?php echo $message; ?></h1>
        <h2>Automated Deployment Using Jenkins</h2>
        <p><?php echo $version; ?></p>
        <p>Deployed successfully on AWS EC2.</p>
    </div>
</body>
</html>
