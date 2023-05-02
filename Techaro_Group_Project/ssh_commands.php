

<?php
   $name = 'SSH Commands';
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
           <h1>SSH Commands</h1>
       </div>
       <div class="jumpLinks">
       <ul class="linksUl">
           <li><a class="link" href="#scp">Secure File Copy - scp</a></li>
           <li><a class="link" href="#ftp">SSH File Transfer Protocol (SFTP): Get SFTP client & server</a></li>
           <li><a class="link" href="#lin">SCP Command on Linux</a></li>
           <li><a class="link" href="#sftp">SFTP Command on Linux</a></li>
           <li><a class="link" href="#meth">Method</a></li>
       </ul>
   </div>
       <div id="scp">
           <h2 class = "sshH2">Secure File Copy - scp </h2>
           <p>Scp is a program for copying files between computers. It uses the SSH protocol. It is included by default in most Linux and Unix distributions. It is also included in the Tectia SSH and OpenSSH packages.</p>
           <p><b>Basic usage of scp is as follows:</b> </p>


          <div class="snippet">
           <pre><code class="language-bash">
               # wanting to send a file to some host website or server


               scp file host:path
           </code></pre> </div>






          
           <p>This copies the file to the remote host. The destination path is optional, but can be a directory on the server, or even a file name if copying a single file. It is possible to specify multiple files; the last one is the destination.</p>
           <p><b>To copy a file from the remote host, use:</b></p>


           <div class="snippet">
           <pre><code class="language-bash">
               # getting file from a remote server


               scp host:file path
           </code></pre> </div>




           <p>This fetches the file from the host, and puts it in the directory indicated by path</p>
               <p><b>Copying directory trees with scp</b></p>
              
           <p>To copy entire directory trees instead of single files, add the -option. For example:</p>


           <div class="snippet">
           <pre><code class="language-bash">
               # getting an entire directory from the server


               scp -r host:path/directory .
           </code></pre> </div>






           <p>This would fetch path/directory from the host, copying it to the current working directory (creating directory in current working directory).</p>
       </div>
       <div id="ftp">
           <h2 class = "sshH2">SSH File Transfer Protocol (SFTP): Get SFTP client & server</h2>
           <p>SFTP (SSH File Transfer Protocol) is a secure file transfer protocol. It runs over the SSH protocol. It supports the full security and authentication functionality of SSH.</p>
           <p>SFTP has pretty much replaced legacy FTP as a file transfer protocol, and is quickly replacing FTP/S. It provides all the functionality offered by these protocols, but more securely and more reliably, with easier configuration. There is basically no reason to use the legacy protocols any more.</p>
           <p>SFTP also protects against password sniffing and man-in-the-middle attacks. It protects the integrity of the data using encryption and cryptographic hash functions, and authenticates both the server and the user.</p>
       </div>
       <div id="lin">
           <h2 class = "sshH2">SCP Command on Linux</h2>
           <p>The scp command is a file transfer program for SFTP in Linux. The scp command line interface was designed after the old rcp command in BSD Unix. The scp also usually comes with the OpenSSH package.</p>
           <p>Its typical use is:</p>


           <div class="snippet">
           <pre><code class="language-bash">
               # Sending to the host


               scp [-r] file ... [user@]host:[path]
           </code></pre> </div>




           <p>Basically, this copies one or more files to the given host. If a user is given, then they are copied to that account on the host. If no user is supplied, then the same username as on the client side is assumed. If path is given, then the files are copied to that directory (relative to the given user's home directory). If no path is given, the files are copied to the user's home directory. If the
               -r option is supplied, then files may be directories, and the given directory and all its subdirectories and files in them (recursively) are copied.
               </p>
           <p>
               One can also copy in the reverse direction:
           </p>


           <div class="snippet">
           <pre><code class="language-bash">
               # getting from the host


               scp [-r] [user@]host:file path
           </code></pre> </div>
          
      
       </div>
       <div id="sftp">
           <h2 class = "sshH2">SFTP Command on Linux</h2>
           <p>The sftp command in Linux is a client program for SFTP.  The  sftp command line interface was designed to be similar to the ftp command. The sftp command is typically part of the OpenSSH package.</p>
           <p>UPLOADING/DOWNLOADING FILES AND DIRECTORIES TO SERVER
               Upload a file using SFTP or SCP commands
               </p>
           <p>Use the SFTP or SCP client of your choice. Click "Enter/Return" on your keyboard after each command. Note: Commands are case-sensitive and all alphabetic characters must be lowercase.</p>
           <!--Make 2x3 grid-->
           <div id="meth">
               <div>
                   <h2 class = "sshH2" >Method</h2>
                   <div class = "liDirStru"><b>SFTP - Commands</b></div>
                  
               </div>
               <div>
                   <div>
                       <ol class = "liDirStru">
                           <li class = "liDirStru"><p>Using your institution's assigned username, enter the following command: </p>


                           <div class="snippet">
                                 <pre><code class="language-bash">
                                       # similar to scp


                                       sftp [username]@[data center]
                                  </code></pre>
                                </div>




                           </li>
                           <li>Enter your institution's assigned password</li>
                           <li><p>Choose directory (see directory folders). Enter:</p>


                           <div class="snippet">
                                 <pre><code class="language-bash">
                                       # going to the directory on the server


                                       cd [directory name or path]
                                  </code></pre>
                                </div>
                           </li>
                           <li><p>Enter:</p>




                           <div class="snippet">
                                 <pre><code class="language-bash">
                                       # getting a list of directories or files you want onto your system


                                       put [myfile] (copies file from your local system to OCLC's system)
                                  </code></pre>
                                </div>
                           </li>
                           <li><p>Enter quit</p>
                           <div class="snippet">
                                 <pre><code class="language-bash">
                                       # Quit out of the ssh


                                       exit
                                  </code></pre>
                                </div>
                      
                       </li>
                       </ol>
                   </div>
                   <div>
                       <div class = "liDirStru"><b>Secure, Copy - Commands</b></div>
                       <ol>
                           <li class = "liDirStru"><p>Enter:</p>


                           <div class="snippet">
                                 <pre><code class="language-bash">
                                       # a way to do it all in one go


                                       scp [myfile] [username]@[data center]:[directory name or path]
                                  </code></pre>
                                </div>
                           </li>
                           <li class = "liDirStru"><p>Enter the password when prompted</p>




                           <div class="snippet">
                                 <pre><code class="language-bash">
                                       # The text will blank and the text hidden so
                                       # make sure you are confident in what you are typing


                                       Password:
                                  </code></pre>
                                </div>
                           </li>
                       </ol>
                   </div>
               </div>
           </div>
       </div>
<?php
   include "assets/php/footer.php";
?>

