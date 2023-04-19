<?php
    $name = 'Homepage';
    include 'assets/php/nav.php';
?>
    <main class="main1">
        <div>
            <h1>Starting Linux</h1>
            <p>If your computer has the Unix operating system installed, all you need to do is power it on to start
                using it. Upon powering on the computer, the operating system will begin to boot up, and eventually, it
                will display a prompt asking you to log in. Logging in will give you access to the system, allowing you
                to perform your daily tasks.</p>
        </div>
        <div>
            <h2>LOGIN TUTORIAL</h2>
            <ol>
                <li>type your userid in the login prompt and press enter
                     <div class="snippet">
                        <pre><code class="language-bash">
                            # Logging in

                            % login: amrood #put your user name here  
                        </code></pre> 
                    </div>
                </li>
                <li>type password in the password prompt and press enter 
                    <div class="snippet">
                        <pre><code class="language-bash">
                            # Logging in

                            % amrood's password: #put your password name here  
                            #it will be blank as you type for security reasons
                        </code></pre> 
                    </div>
                </li>
                <li>Upon successfully entering the correct user ID and password, you will be presented with a command
                    prompt, which is often denoted by the symbol "$". This prompt is where you can enter all of your
                    commands. 
                    <div class="snippet">
                        <pre><code class="language-bash">
                            # Command Terminal

                            $ #this is where your commands will go 
                           
                        </code></pre> 
                    </div>
                    
                </li>

            </ol>
        </div>

        <div>
            <h2>CHANGE PASSWORD </h2>

            <ol>
                <li>
                    <p>Type password at the command prompt as shown</p>
                    
                    <div class="snippet">
                        <pre><code class="language-bash">
                            # Changing password for amrood

                            $ passwd
                        </code></pre> 
                    </div>
                    
                </li>
                <li>
                    <p>Enter password you're currently using </p>
                    <div class="snippet">
                        <pre><code class="language-bash">
                            # current password for amrood

                            $ Unix password:******
                        </code></pre> 
                    </div>
                </li>
                <li>
                    <p>type new password </p>
                    <div class="snippet">
                        <pre><code class="language-bash">
                            # new password for amrood

                            $ New UNIX password:*******
                        </code></pre> 
                    </div>
                </li>
                <li>
                    <p>Retype password for verification</p>
                    <div class="snippet">
                        <pre><code class="language-bash">
                            # retype password for amrood

                            $ Retype new UNIX password:*******
                        </code></pre> 
                    </div>
                </li>
                <li>
                    <p>If all done correctly you should get the following: </p>
                    <div class="snippet">
                        <pre><code class="language-bash">
                            # authentication

                            $ passwd: all authentication tokens updated  successfully
                        </code></pre> 
                    </div>
                </li>
                
            </ol>
            <p>
                To find out "who you are" use ;  $ whoami. 
            </p>
                <div class="snippet">
                    <pre><code class="language-bash">
                        # Who you are

                        $ whoami
                    </code></pre> 
                </div>
            <p>To find out who is logged in to the computer use ; </p>
            <div class="snippet">
                <pre><code class="language-bash">
                    # More ways to find out who you are

                    $ users
                    $ who
                    $ w
                </code></pre> 
            </div>
        </div>

        <div>
            <h2>Logging Out</h2>
            <div class="snippet">
                <pre><code class="language-bash">
                    # Time to log out

                    $ logout
                </code></pre> 
            </div>
            <p>Commands you can use to shut down the system: </p>
            <div class="snippet">
                <pre><code class="language-bash">
                    # Commands to Shut down Linux

                    $ halt #Brings the system down immediately

                    $ init 0 #Powers off the system using predefined scripts to synchronize and clean up the system prior to shutting down

                    $ init 6 #Reboots the system by shutting it down completely and then restarting it

                    $ poweroff #Shuts down the system by powering off

                    $ reboot #Reboots the system

                    $ shutdown #Shuts down the system
                </code></pre> 
            </div>
        </div>
<?php
    include "assets/php/footer.php";
?>