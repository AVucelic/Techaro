<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?></title>
    <link href="assets/css/home-navbar.css" rel="stylesheet" />
    <link href="assets/css/prism.css" rel="stylesheet" />
    <link href="assets/css/snippet.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500&display=swap" rel="stylesheet">

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        nav#nav-menu {
        display: flex;
        flex-direction: column;
        list-style: none;
        margin: 0;
        padding: 0;
        }
        

        .menu li {
        position: relative;
        }
        #menu{
            display:none;
        }
        #vertical-menu{
            display:block;
        }

        
        .sub-menu{
            display: none;
        }
        .hamburger{
            width: 100%;
            background-color:orange; 
        }
       


    </style>
    <script src="assets/js/code.js">
    </script>
</head>

<body>
    <div class="hamburger">
        <a href="javascript:void(0);" class="icon" onclick="openingMenu();" >
                    <i class="fa fa-bars"></i>
        </a>
    </div>
    
    <nav id="nav-menu">
        
        <ul id="vertical-menu">
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="history.php">History</a>
                
            </li>
            <li>
                <a href="javascript:void(0)" class="dropbtn" onclick="openSubMenu(0);">Basics of Linux ></a>
                <ul class="sub-menu">
                    <li><a href="unix_arch.php">Unix Archteicture</a></li>
                    <li><a href="dir_stru">Directory Structure</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0)" class="dropbtn" onclick="openSubMenu(1);">Help ></a>
                <ul class="sub-menu">
                    <li><a href="commands.php">Commands</a></li>
                    <li><a href="permissions.php">Permissions</a></li>
                    <li><a href="logging.php">Logging</a></li>
                    <li><a href="create_files.php">Creating Files</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0)" class="dropbtn" onclick="openSubMenu(2);">Linux Server ></a>
                <ul class="sub-menu">
                    <li><a href="networking.php">Networking</a></li>
                    <li><a href="comp_networks.php">Types of Computer Networks</a></li>
                </ul>

            </li>
            <li>
                <a href="javascript:void(0)" class="dropbtn" onclick="openSubMenu(3);">SSH ></a>
                <ul class="sub-menu">
                    <li><a href="ssh.php">What is SSH?</a></li>
                    <li><a href="ssh_commands.php">SSH Commands</a></li>
                </ul>

            </li>
            <li>
                <a href="tutorial.php">How To</a>
            </li>
            <li>
                <a href="quiz.php">Quiz</a>
            </li>
        </ul>


    </nav>    
</body>
</html>