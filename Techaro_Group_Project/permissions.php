<?php
    $name = 'Homepage';
    include 'assets/php/nav2.php';
?>
    <title>Permissions</title>
    <main class="main1"> 
        <div> 
        <h1>Permissions in Unix</h1>
        <div class="jumpLinks">
        <ul class="linksUl">
            <li><a class="link" href="#">Jump Link</a></li>
            <li><a class="link" href="#">Jump Link</a></li>
            <li><a class="link" href="#">Jump Link</a></li>
        </ul>
    </div>
                <!-- Make a 3 x 4 box -->
            

            <h2>SETS REPRESENTING DIFFERENT LEVELS OF OWNERSHIP</h2>
            <div class="container">
                <div class="grid-item">Permission</div>
                <div class="grid-item">Files</div>
                <div class="grid-item">Directories</div>
                <div class="grid-item">r</div>              
                <div class="grid-item">can read the file</div>
                <div class="grid-item">can ls the directory</div>
                <div class="grid-item">w</div>
                <div class="grid-item">can write the file</div>
                <div class="grid-item">can modify the directory's contents</div>
                <div class="grid-item">x</div>
                <div class="grid-item">can execute the file</div>
                <div class="grid-item">can cd to the directory</div>
            </div>
            <p class="p1">Owner or user permissions: after directory (d) slot, the first set of three characters 
                indicate permission settings for the owner.</p>
            <p class="p1"><i>Examples:</i></p>
                    <ol>
                        <li class="p1"> Owner permissions are rw-, indicating that the owner can read and write to the file but can't execute it as a program.</li>
                        <div class="snippet">
                            <pre><code class="language-bash">
                            #owner can read and write but not execute

                            rw--r--r-- 
                            </code></pre> 
                        </div>
                        
                        <li class="p1">The owner permissions are rwx, indicating that the owner can view, modify, and enter the directory.</li>
                        <div class="snippet">
                            <pre><code class="language-bash">
                            #for directories

                            drwxr-xr-x
                            </code></pre> 
                        </div>
                       
                    </ol>
            <p class="p1">Group permissions: The second rwx set indicates the <strong>group permissions.</strong></p>
            <p class="p1"><i>Examples:</i>  </p>
                    <ol>
                        <li class="p1">Group members can only read the file.</li>
                        <div class="snippet">
                            <pre><code class="language-bash">
                            #for groups

                            r--rw-r--
                            </code></pre> 
                        </div>
                        <li class="p1">Group members can view as well as enter the directory.</li>
                        <div class="snippet">
                            <pre><code class="language-bash">
                            #for groups

                            drwxr-xr-x
                            </code></pre> 
                        </div>
                    </ol>
                
            <p class="p1">Other permissions: The final rwx set is for "other" (sometimes referred to as "world"). This is anyone outside the group. </p>
        
        </div>

        <div>
            <h2>CHANGING PERMISSIONS</h2>
            <p class="p1">To modify file and directory permissions on a Unix-like operating system, you can use the chmod (change mode) command. The chmod command allows you to change the permissions for the owner of a file or directory (represented by "u"), the group owner of a file or directory (represented by "g"), or other users on the system (represented by "o").You can add (+) or subtract (-) read, write, and execute permissions for each of these categories.</p>
            <p class="p1">SYMBOLIC METHOD- lets you specify permissions with single letter abbreviations. A chmod command using this method consists of at least three parts from the following lists:</p>
            <!-- Make a 3 x 4 box -->
            <div>
                <div class="container">
                    <div class="grid-item">Access class</div>
                    <div class="grid-item">Operator</div>
                    <div class="grid-item">Access Type</div>
                    <div class="grid-item">u (user)</div>
                    <div class="grid-item">+ (add access)</div>
                    <div class="grid-item">r (read)</div>
                    <div class="grid-item">g (group)</div>
                    <div class="grid-item">- (remove access)</div>
                    <div class="grid-item">w (write)</div>
                    <div class="grid-item">o (other)</div>
                    <div class="grid-item">= (set exact access)</div>
                    <div class="grid-item">x (execute)</div>
                    <div class="grid-item">a (all: u, g, and o)</div>
                    <div class="grid-item"></div>
                    <div class="grid-item"></div>

                </div>
            
                <p class="p1">E.g  to add permission for everyone to read a file in the current directory named myfile, at the Unix prompt, enter:</p>
                <div class="snippet">
                    <pre><code class="language-bash">
                        #changing permisions 

                        chmod a+r myfile
                    </code></pre> 
                </div>
                <p class="p1">The 'a' stands for "all", the + for "add", and the r for "read".</p>
                
            </div>

            <footer> Copyright &copy; 2023. Techaro Group. All Rights Reserved.</footer>
        </div>
<?php
    include "assets/php/footer.php";
?>