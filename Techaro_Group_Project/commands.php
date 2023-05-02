<?php
    $name = 'Commands';
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
            <h1>Unix Commands & File Manipulation</h1>
            <div class="jumpLinks">
                <ul class="linksUl">
                    <li><a class="link" href="#section_Commands">Commands</a></li>
                    <li><a class="link" href="#section_Manipulate">File Manipulation</a></li>
                    <li><a class="link" href="#section_Wildcards">Wildcards</a></li>
                </ul>
            </div>
            <h2 id="section_Commands">COMMANDS</h2>

            
                <p class="p1"> List files and directories: </p>

                <div class="snippet">
            <pre><code class="language-bash">
                # list all seeable files

                % ls -> ls(list)    
            </code></pre> </div>
        

                 <!-- <p class="p2"> % ls -> ls(list) </p> -->
                <p class="p1"> List all files and directories:  </p>

                <div class="snippet">
            <pre><code class="language-bash">
                # list some of the hidden files

                % ls -a    
            </code></pre> </div>

                <p class="p1"> Make a new directory: </p>

                <div class="snippet">
            <pre><code class="language-bash">
                # making a new directory

                % mkdir name directory    
            </code></pre> </div>
            <p class="p1">To remove a directory: </p>

                <div class="snippet">
            <pre><code class="language-bash">
                # removing a directory

                %Rmdir directory
            </code></pre> </div>

                


                <p class="p1"> To change to another directory:  </p>

                <div class="snippet">
            <pre><code class="language-bash">
                # change the current directory

                % cd name directory  
            </code></pre> </div>


                    
                <p class="p1"> To get to the current directory:  </p>

                <div class="snippet">
            <pre><code class="language-bash">
                # Moving to the current directory

                % cd.  (. means the current directory) 
            </code></pre> </div>
                    
                <p class="p1"> To get to the parent directory: </p>

                <div class="snippet">
            <pre><code class="language-bash">
                # going up in the directory structure

                % cd ..
            </code></pre> </div>


                <p class="p1"> Print working directory:</p>

                <div class="snippet">
            <pre><code class="language-bash">
                # list the current path 

                % pwd 
            </code></pre> </div>
                    
                <p class="p1"> To specify paths starting at your home directory:  </p>

                <div class="snippet">
            <pre><code class="language-bash">
                # a way to go back to the highest point in directory structure

                ~
            </code></pre> </div>
                    
                    
            
            
        </div>
        <div>
            <h2 id="section_Manipulate">Manipulating Files</h2>
            
                <p class="p1">To copy file1 and call it file2: </p>
                    
                    <div class="snippet">
            <pre><code class="language-bash">
                # A way to copy files

                % cp file1 file2
            </code></pre> </div>



                    
                <p class="p1">To move or rename file1 to file2:</p>
                <div class="snippet">
            <pre><code class="language-bash">
                # Renaming the file with file 1
                #or replacing file2 with file1 in its directory

                % mv file1 file2
            </code></pre> </div>
                    
            

                <p class="p1">To remove a file:</p>
                <div class="snippet">
            <pre><code class="language-bash">
                # Removing a file

                %rm file
            </code></pre> </div>

                
                   
                
                   
                
                    

                <p class="p1">To display a file: </p>
                <div class="snippet">
            <pre><code class="language-bash">
                # also can edit the file

                %cat file
            </code></pre> </div>


                
                    
                <p class="p1">To display a file a page at a time:</p>
                <div class="snippet">
            <pre><code class="language-bash">
                # looking at the file in unix

                %less file
            </code></pre> </div>




                <p class="p1">To display the first few lines of a file:</p>
                <div class="snippet">
            <pre><code class="language-bash">
                # wanting to see the initial lines

                %head file
            </code></pre> </div>





                <p class="p1">To display the last few lines of a file:</p>
              
                <div class="snippet">
            <pre><code class="language-bash">
                # seeing the last lines in the file

                %tail file
            </code></pre> </div>



                <p class="p1">To file search a file for keywords:</p>       
                <div class="snippet">
            <pre><code class="language-bash">
                # checking to see if file has the keyword

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
                # Seeing the size of the file

                %wc file count
            </code></pre> </div>
            <p class="p1"> Redirect standard output to a file: </p>
            <div class="snippet">
            <pre><code class="language-bash">
                # putting all the commands into the file to write a script 

                command > file    
            </code></pre> </div>
                

                
            

            <p class="p1"> Appending standard output to a file:</p>
               
                <div class="snippet">
            <pre><code class="language-bash">
                # Adding more to the file

                command >> file
            </code></pre> </div>


            <p class="p1">	Redirecting standard input from a file:</p>
                

                <div class="snippet">
            <pre><code class="language-bash">
                # Changing input from file

                command &lt; file
            </code></pre> </div>


            <p class="p1"> Piping the output of command1 to the input of command2:</p>

                
                <div class="snippet">
            <pre><code class="language-bash">
                # moving the output 

                command1 | command2
            </code></pre> </div>


            <p class="p1"> Concatenating file1 and file2 to file0:</p>
              
                <div class="snippet">
            <pre><code class="language-bash">
                # putting files together to make a new one

                cat file1 file2 > file0
            </code></pre> </div>


            <p class="p1">	Sorting data: </p>

                
                <div class="snippet">
            <pre><code class="language-bash">
                # sort some file or something

                sort
            </code></pre> </div>



            <p class="p1">	Listing users currently logged in:</p>
         
                <div class="snippet">
            <pre><code class="language-bash">
                # seeing everyone who is one the computer or network

                %who
            </code></pre> </div>



            <h2 id="section_Wildcards">WILDCARDS</h2>
            <p class="p1">	Match any number of characters: </p>
             
                
                <div class="snippet">
            <pre><code class="language-bash">
                # A way to test any character

                *
            </code></pre> </div>


            <p class="p1">	match one character (e.g ?ouse can be house,mouse):</p>
            
           
                <div class="snippet">
            <pre><code class="language-bash">
                # test only one type of character

                ?
            </code></pre> </div>



            <p class="p1">	Read the online manual page for a command:</p>
               
                <div class="snippet">
            <pre><code class="language-bash">
                # Seeing what a command can do

                %man command
            </code></pre> </div>


            <p class="p1">	Brief description of a command:</p>

                <div class="snippet">
            <pre><code class="language-bash">
                # seeing what a unknown command is

                %whatis command
            </code></pre> </div>

            
            <p class="p1">	Match commands with keyword in their man pages: </p>
                

                <div class="snippet">
            <pre><code class="language-bash">
                # Matching commands

                %apropos keyword
            </code></pre> </div>
        </div>

        
<?php
    include "assets/php/footer.php";
?>

