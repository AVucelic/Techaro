<?php
   $name = 'Unix Architecture';
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
           <!-- Title -->
           <h1>Unix Architecture</h1>
       </div>
       <!-- Content 1 -->
       <div>
           <h2>Basic of Linux</h2>
           <p>The following four fundamentals are the main idea that links all versions of Unix;</p>
           <ol>
               <li>Kernel </li>
               <li>Shell</li>
               <li>Commands and Utilities</li>
               <li>Files and Directories</li>
           </ol>
       </div>


       <!-- Content 2 -->
       <div>
           <h2>Core Parts</h2>
           '<p>Made up of three parts: </p>
           <div class="text-image">
              
               <div class="text2">
                  
                   <ol>
                       <li><p>The Kernel</p>
                      
                           <ul>
                               <li>provides services to start and end programs</li>
                               <li>handles low-level operations(  allocates memory, manage files, responds to system calls, schedules tasks..)</li>
                           </ul>
                       </li>
                       <li><p>The Shell</p>
                      
                           <ul>
                               <li>an interface between the user and the kernel</li>
                               <li>a command line interpreter (CLI)which interprets the commands the user types  in and arranges for them to be carried out</li>
                               <li><ul><li>Different types of shells available (e.g. bash, csh, zsh)</li></ul></li>
                           </ul>
                       </li>
                       <li><p>The Programs</p>
                      
                           <ul>
                               <li>commands </li>
                               <li>everything in Unix is either a FILE(collection of data) or a PROCESS (   executing program identified by a unique process identifier)</li>
                           </ul>
                       </li>
                   </ol>
               </div>
               <img src="assets/imgs/unix_arch.png" alt="Kernel Wheel">
           </div>
          


          
       </div>
<?php
   include "assets/php/footer.php";
?>

