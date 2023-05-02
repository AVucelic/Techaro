<?php
   $name = 'Tutorial';
   include 'assets/php/top_nav.php';


  
?>
<div id="nav-mobile">
   <?php include 'assets/php/mobile_nav.php'; ?>
</div>


<div id="nav-desktop">
   <?php include 'assets/php/nav2.php'; ?>
</div>
   <main class="main1">
       <div>
           <h1>Tutorial</h1>
       </div>
          


       <div>
           <ol>
               <li>First make sure you have a specific type of server you want to upload to. This can be a free online version like AWS. Just make sure it is a reliable web hosting company.</li>
               <li><p>Next you can connect to the server by using the ssh or sftp command and connecting to the server</p>
               <div><pre><code class="language-bash">
                   # Connecting to your server


                   $ ssh username@servername


                   #server would then ask if it is your first time to add the server o
                   #your list of known hosts


                   #then enter in your own password


               </code></pre> </div></li>
               <li><p>The next step is to make sure you are in the correct directory in order to properly put your website on the web. This can be done using the ls commands and cd command.</p>
               <div><pre><code class="language-bash">
                   # looking in your server


                   $ ls
                   #some folders and files
                   #might need to change directory
                   $ cd
               </code></pre> </div></li>
              
               <li><p>Once in the correct directory, copy your directory or files to the correct space. This can be done using either the scp or sftp commands.</p>
               <div><pre><code class="language-bash">
                   # adding your content to the server can be a file or directory


                   scp localfile.txt username@servername:/remote/directory


               </code></pre> </div> </li>
               <li><p>Once done your files should be accessible online. Make sure to check the permissions on the files and directories to allow those to access your information</p>
               <div><pre><code class="language-bash">
                   # checking if everything has the write permissions


                   $ ls -l


               </code></pre> </div></li>
           </ol>
       </div>
<?php
   include "assets/php/footer.php";
?>

