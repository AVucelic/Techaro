
<?php
    $name = 'Directory Structure';

?>
<div id="nav-mobile">
    <?php include 'assets/php/mobile_nav.php'; ?>
</div>

<div id="nav-desktop">
    <?php include 'assets/php/nav2.php'; ?>
</div>
    <title>Directory Structure</title>
    <main class="main1">

        <div>
            <h1>Directory structure</h1>
            <h2 class = "sshH2">General</h2>
            <div>
                <p>All  files are grouped  in the directory structure.<br>
                The file-system is arranged in a hierarchical structure (inverted tree).<br>
                <b>Root</b>- top of the hierarchy (denoted with a slash <b>/</b> ) </p>
                <img src="assets/imgs/dir_struc.png" alt="Directorhy Structure " id="wider">
            </div>
            
        </div>

        <div>
            <h2 class = "sshH2">Files</h2>
            <p>Unix systems have three primary types of files: </p>
            <ol>
                <li class = "liDirStru"><b class="bTagDirStru">Ordinary files</b>- contain data, text, or program instructions</li>
                <li class = "liDirStru"><b class="bTagDirStru">Directories</b> -used to store both ordinary and special files. (similar to folders)</li>
                <li class = "liDirStru"><b class="bTagDirStru">Special files</b>- provide access to hardware such as hard drives, CD-ROM drives, modems, and Ethernet adapters. Some special files are also used as aliases or shortcuts, allowing you to access a single file using different names
                    Unix is case sensitive from the console terminal end </li>
            </ol>
        </div>
<?php
    include "assets/php/footer.php";
?>