<?php
    $name = 'Directory Structure';
    include 'assets/php/nav.php';
?>
    <main>
        <div>
            <h1>Some title</h1>
            <p>All  files are grouped  in the directory structure</p>
            <p>The file-system is arranged in a hierarchical structure (inverted tree) </p>
            <p>Root- top of the hierarchy (slash /  </p>
            <img src="assets/imgs/dir_struc.png" alt="Directorhy Structure ">
        </div>

        <div>
            <h2>Files</h2>
            <p>Unix systems have three primary types of files: </p>
            <ol>
                <li>ordinary files- . contain data, text, or program instructions</li>
                <li>Directories -used to store both ordinary and special files. (similar to folders)</li>
                <li>Special files- provide access to hardware such as hard drives, CD-ROM drives, modems, and Ethernet adapters. Some special files are also used as aliases or shortcuts, allowing you to access a single file using different names
                    Unix is case sensitive from the console terminal end </li>
            </ol>
        </div>
<?php
    include "assets/php/footer.php";
?>