<?php
    $name = 'Homepage';
    include 'assets/php/nav.php';
?>
    <main>
        <div>
            <h1>Some Title</h1>
            <p>If your computer has the Unix operating system installed, all you need to do is power it on to start
                using it. Upon powering on the computer, the operating system will begin to boot up, and eventually, it
                will display a prompt asking you to log in. Logging in will give you access to the system, allowing you
                to perform your daily tasks.</p>
        </div>
        <div>
            <h2>LOGIN TUTORIAL</h2>
            <ol>
                <li>type your userid in the login prompt and press enter <p>login: amrood</p>
                </li>
                <li>type password in the password prompt and press enter <p>amrood's password:</p>
                </li>
                <li>Upon successfully entering the correct user ID and password, you will be presented with a command
                    prompt, which is often denoted by the symbol "$". This prompt is where you can enter all of your
                    commands. <p>$</p>
                </li>

            </ol>
        </div>

        <div>
            <h2>CHANGE PASSWORD </h2>

            <ol>
                <li>
                    <p>Type password at the command prompt as shown</p>
                    <p>$ passwd
                        Changing password for amrood
                    </p>
                </li>
                <li>
                    <p>Enter password you're currently using </p>
                    <p>(current) Unix password:******</p>
                </li>
                <li>
                    <p>type new password </p>
                    <p>New UNIX password:*******</p>
                </li>
                <li>
                    <p>Retype password for verification</p>
                    <p>Retype new UNIX password:*******</p>
                </li>
                <li>
                    <p>If all done correctly you should get the following: </p>
                    <p>passwd: all authentication tokens updated  successfully</p>
                </li>
                
            </ol>
            <p>
                To find out "who you are" use ;  $ whoami. 
            </p>
            <p>To find out who is logged in to the computer use ; </p>
            <ul>
                <li>$ users</li>
                <li>$ who</li>
                <li>$w</li>
            </ul>
        </div>

        <div>
            <h2>Logging Out</h2>
            <p>$ logout</p>
            <p>Commands you can use to shut down the system: </p>
            <ol>
                <li>halt- Brings the system down immediately</li>
                <li>init 0 -Powers off the system using predefined scripts to synchronize and clean up the system prior to shutting down</li>
                <li>init 6 -Reboots the system by shutting it down completely and then restarting it</li>
                <li>poweroff- Shuts down the system by powering off</li>
                <li>reboot -Reboots the system</li>
                <li>shutdown- Shuts down the system</li>
            </ol>
        </div>
<?php
    include "assets/php/footer.php";
?>