<?php
    $name = 'Homepage';
    include 'assets/php/nav.php';
?>
    <title>Tutorial</title>
    <main class="main1">
        <div>
            <h1>Tutorial</h1>
        </div>
        <div>
            <ol>
                <li>First make sure you have a specific type of server you want to upload to. This can be a free online version like AWS. Just make sure it is a reliable web hosting company.</li>
                <li>Next you can connect to the server by using the ssh or sftp command and connecting to the server</li>
                <li>The next step is to make sure you are in the correct directory in order to properly put your website on the web. This can be done using the ls commands and cd command.</li>
                <li>Once in the correct directory, copy your directory or files to the correct space. This can be done using either the scp or sftp commands. </li>
                <li>Once done your files should be accessible online. Make sure to check the permissions on the files and directories to allow those to access your information</li>
            </ol>
        </div>
<?php
    include "assets/php/footer.php";
?>