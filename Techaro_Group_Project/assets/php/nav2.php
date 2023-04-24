<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?></title>
    <link href="../css/navbar.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <img src="assets/imgs/logo.svg" alt="" class="logo">
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="history.php">History</a>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Basics of Linux</a>
                    <div class="dropdown-content">
                        <a href="unix_arch.php">Unix Archteicture</a>
                        <a href="dir_stru">Directory Structure</a>
                    </div>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Help</a>
                    <div class="dropdown-content">
                        <a href="commands.php">Commands</a>
                        <a href="permissions.php">Permissions</a>
                        <a href="logging.php">Logging</a>
                        <a href="create_files.php">Creating Files</a>
                    </div>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Linux Server</a>
                    <div class="dropdown-content">
                        <a href="networking.php">Networking</a>
                        <a href="comp_networks.php">Types of Computer Networks</a>
                    </div>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">SSH</a>
                    <div class="dropdown-content">
                        <a href="ssh.php">What is SSH?</a>
                        <a href="ssh_commands.php">SSH Commands</a>
                    </div>
            </li>
            <li>
                <a href="tutorial.php">How To</a>
            </li>
            <li>
                <a href="quiz.php">Quiz</a>
            </li>
        </ul>


    </nav>