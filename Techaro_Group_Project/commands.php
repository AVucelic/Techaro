<?php
    $name = 'Commands';
    include 'assets/php/nav.php';
?>
    <main>
    <main class="main1">
        <div class>
            <h1 >Unix Commands & File Manipulation</h1>
            <div class="jumpLinks">
                <ul class="linksUl">
                    <li><a class="link" href="#section_Commands">Commands</a></li>
                    <li><a class="link" href="#section_Manipulate">File Manipulation</a></li>
                    <li><a class="link" href="#section_Wildcards">Wildcards</a></li>
                </ul>
            </div>
            <h2>COMMANDS</h2>
            
                <p class="p1"> List files and directories: </p>

                <div class="snippet">
            <pre><code class="language-bash">
                # Testing Unix (Bash) code here

                % ls -> ls(list)    
            </code></pre> </div>
        </div>

                 <!-- <p class="p2"> % ls -> ls(list) </p> -->
                <p class="p1"> List all files and directories:  </p>

                <div class="snippet">
            <pre><code class="language-bash">
                # Testing Unix (Bash) code here

                % ls -a    
            </code></pre> </div>

                <p class="p1"> Make a new directory: </p>

                <div class="snippet">
            <pre><code class="language-bash">
                # Testing Unix (Bash) code here

                % mkdir nameofdirectory    
            </code></pre> </div>

                


                    <p class="p2"></p>
                <p class="p1"> To change to another directory:  </p>

                <div class="snippet">
            <pre><code class="language-bash">
                # Testing Unix (Bash) code here

                % cd nameofdirectory  
            </code></pre> </div>


                    
                <p class="p1"> To get to the current directory:  </p>

                <div class="snippet">
            <pre><code class="language-bash">
                # Testing Unix (Bash) code here

                % cd.  (. means the current directory) 
            </code></pre> </div>
                    
                <p class="p1"> To get to the parent directory: </p>

                <div class="snippet">
            <pre><code class="language-bash">
                # Testing Unix (Bash) code here

                % cd ..
            </code></pre> </div>


                <p class="p1"> Print working directory:</p>

                <div class="snippet">
            <pre><code class="language-bash">
                # Testing Unix (Bash) code here

                % pwd  pwd
            </code></pre> </div>
                    
                <p class="p1"> To specify paths starting at your home directory:  </p>

                <div class="snippet">
            <pre><code class="language-bash">
                # Testing Unix (Bash) code here

                ~
            </code></pre> </div>
                    
                    
            
            
        </div>
        <div>
            <h2>MANIPULATING FILES</h2>
            
                <p class="p1">To copy file1 and call it file2: </p>
                    
                    <div class="snippet">
            <pre><code class="language-bash">
                # Testing Unix (Bash) code here

                % cp file1 file2
            </code></pre> </div>



                    
                <p class="p1">To move or rename file1 to file2:</p>
                <div class="snippet">
            <pre><code class="language-bash">
                # Testing Unix (Bash) code here

                % mv
            </code></pre> </div>
                    
            

                <p class="p1">To remove a file:</p>
                <div class="snippet">
            <pre><code class="language-bash">
                # Testing Unix (Bash) code here

                %rm file
            </code></pre> </div>

                
                   
                <p class="p1">To make a directory: </p>

                <div class="snippet">
            <pre><code class="language-bash">
                # Testing Unix (Bash) code here

                % mkdir  nameofdirectory
            </code></pre> </div>
                   
                <p class="p1">To remove a directory: </p>
                <p class="p1">To make a directory: </p>

                <div class="snippet">
            <pre><code class="language-bash">
                # Testing Unix (Bash) code here

                %Rmdir directory
            </code></pre> </div>
                    

                <p class="p1">To display a file: </p>
                <div class="snippet">
            <pre><code class="language-bash">
                # Testing Unix (Bash) code here

                %cat file
            </code></pre> </div>


                
                    
                <p class="p1">To display a file a page at a time:</p>
                <div class="snippet">
            <pre><code class="language-bash">
                # Testing Unix (Bash) code here

                %less file
            </code></pre> </div>




                <p class="p1">To display the first few lines of a file:</p>
                <div class="snippet">
            <pre><code class="language-bash">
                # Testing Unix (Bash) code here

                %head file
            </code></pre> </div>





                <p class="p1">To display the last few lines of a file:</p>
              
                <div class="snippet">
            <pre><code class="language-bash">
                # Testing Unix (Bash) code here

                %tail file
            </code></pre> </div>



                <p class="p1">To file search a file for keywords:</p>       
                <div class="snippet">
            <pre><code class="language-bash">
                # Testing Unix (Bash) code here

                %grep 'keyword'
            </code></pre> </div>
            
            <p class="p1">Some of the other options of grep are:</p>
            <ul>
                <li class="p1">-v display those lines that do NOT match </li>
                <li class="p1">-n precede each matching line with the line number </li>
                <li class="p1">-c print only the total count of matched lines</li>
            </ul>
            <p class="p1"> Getting the number of lines/words/characters in file:</p>

                <div class="snippet">
            <pre><code class="language-bash">
                # Testing Unix (Bash) code here

                %wc file	count
            </code></pre> </div>
            <p class="p1"> Redirect standard output to a file: </p>
            <div class="snippet">
            <pre><code class="language-bash">
                # Testing Unix (Bash) code here

                command > file    
            </code></pre> </div>
                

                
            

            <p class="p1"> Appending standard output to a file:</p>
               
                <div class="snippet">
            <pre><code class="language-bash">
                # Testing Unix (Bash) code here

                command >> file
            </code></pre> </div>


            <p class="p1">	Redirecting standard input from a file:</p>
                <p class="p2"> </p>

                <div class="snippet">
            <pre><code class="language-bash">
                # Testing Unix (Bash) code here

                command < file
            </code></pre> </div>


            <p class="p1"> Piping the output of command1 to the input of command2:</p>

                
                <div class="snippet">
            <pre><code class="language-bash">
                # Testing Unix (Bash) code here

                command1 | command2
            </code></pre> </div>


            <p class="p1"> Concatenating file1 and file2 to file0:</p>
              
                <div class="snippet">
            <pre><code class="language-bash">
                # Testing Unix (Bash) code here

                cat file1 file2 > file0
            </code></pre> </div>


            <p class="p1">	Sorting data: </p>

                
                <div class="snippet">
            <pre><code class="language-bash">
                # Testing Unix (Bash) code here

                sort
            </code></pre> </div>



            <p class="p1">	Listing users currently logged in:</p>
         
                <div class="snippet">
            <pre><code class="language-bash">
                # Testing Unix (Bash) code here

                %who
            </code></pre> </div>



            <h2>WILDCARDS</h2>
            <p class="p1">	Match any number of characters: </p>
             
                
                <div class="snippet">
            <pre><code class="language-bash">
                # Testing Unix (Bash) code here

                *
            </code></pre> </div>


            <p class="p1">	match one character (e.g ?ouse can be house,mouse):</p>
            
           
                <div class="snippet">
            <pre><code class="language-bash">
                # Testing Unix (Bash) code here

                ?
            </code></pre> </div>



            <p class="p1">	Read the online manual page for a command:</p>
               
                <div class="snippet">
            <pre><code class="language-bash">
                # Testing Unix (Bash) code here

                %man command
            </code></pre> </div>


            <p class="p1">	Brief description of a command:</p>

                <div class="snippet">
            <pre><code class="language-bash">
                # Testing Unix (Bash) code here

                %whatis command
            </code></pre> </div>

            
            <p class="p1"v>	Match commands with keyword in their man pages: </p>
                

                <div class="snippet">
            <pre><code class="language-bash">
                # Testing Unix (Bash) code here

                %apropos keyword
            </code></pre> </div>
        </div>

        <footer> Copyright &copy; 2023. Techaro Group. All Rights Reserved.</footer>
        
        
<?php
    include "assets/php/footer.php";
?>