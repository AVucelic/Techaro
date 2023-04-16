<?php
    $name = 'Commands';
    include 'assets/php/nav.php';
?>
    <main>
    <main class="main1">
        <div class>
            <h1 >Unix Commands & File Manipulation</h1>
            <h2>COMMANDS</h2>
            
                <p class="p1"> List files and directories: </p>
                   <p class="p2"> % ls -> ls(list) </p>
                <p class="p1"> List all files and directories:  </p>
                    <p class="p2">% ls -a</p>
                <p class="p1"> Make a new directory: </p>
                    <p class="p2">% mkdir nameofdirectory</p>
                <p class="p1"> To change to another directory:  </p>
                    <p class="p2">% cd nameofdirectory</p>
                <p class="p1"> To get to the current directory:  </p>
                    <p class="p2">% cd.  (. means the current directory)</p>
                <p class="p1"> To get to the parent directory: </p>
                    <p class="p2"> % cd ..</p>
                <p class="p1"> Print working directory:</p>
                    <p class="p2"> % pwd  pwd</p>
                <p class="p1"> To specify paths starting at your home directory:  </p>
                    <p class="p2">~</p>
            
            
        </div>
        <div>
            <h2>MANIPULATING FILES</h2>
            
                <p class="p1">To copy file1 and call it file2: </p>
                    <p class="p2">% cp file1 file2</p>
                <p class="p1">To move or rename file1 to file2:</p>
                    <p class="p2"> % mv </p>
                <p class="p1">To remove a file:</p>
                    <p class="p2"> %rm file</p>
                <p class="p1">To make a directory: </p>
                    <p class="p2"> % mkdir  nameofdirectory</p>
                <p class="p1">To remove a directory: </p>
                    <p class="p2">%Rmdir directory</p>
                <p class="p1">To display a file: </p>
                    <p class="p2">%cat file</p>
                <p class="p1">To display a file a page at a time:</p>
                    <p class="p2">%less file</p>
                <p class="p1">To display the first few lines of a file:</p>
                    <p class="p2">%head file</p>
                <p class="p1">To display the last few lines of a file:</p>
                    <p class="p2">%tail file	</p>
                <p class="p1">To file	search a file for keywords:</p>
                    <p class="p2">%grep 'keyword'</p>
            
            <p class="p1">Some of the other options of grep are:</p>
            <ul>
                <li class="p1">-v display those lines that do NOT match </li>
                <li class="p1">-n precede each matching line with the line number </li>
                <li class="p1">-c print only the total count of matched lines</li>
            </ul>
            <p class="p1"> Getting the number of lines/words/characters in file:</p>
                <p class="p2"> %wc file	count</p>
            <p class="p1"> Redirect standard output to a file: </p>
                <p class="p2">command > file</p>
            <p class="p1"> Appending standard output to a file:</p>
                <p class="p2"> command >> file	</p>
            <p class="p1">	Redirecting standard input from a file:</p>
                <p class="p2"> command < file</p>
            <p class="p1"> Piping the output of command1 to the input of command2:</p>
                <p class="p2"> command1 | command2	</p>
            <p class="p1"> Concatenating file1 and file2 to file0:</p>
                <p class="p2">cat file1 file2 > file0</p>
            <p class="p1">	Sorting data: </p>
                <p class="p2">sort</p>
            <p class="p1">	Listing users currently logged in:</p>
                <p class="p2"> %who</p>

            <h2>WILDCARDS</h2>
            <p class="p1">	Match any number of characters: </p>
                <p class="p2">*</p>
            <p class="p1">	match one character (e.g ?ouse can be house,mouse):</p>
            <p class="p2">?</p>
            <p class="p1">	Read the online manual page for a command:</p>
                <p class="p2"> %man command</p>
            <p class="p1">	Brief description of a command:</p>
                <p class="p2"> %whatis command</p>
            <p class="p1"v>	Match commands with keyword in their man pages: </p>
                <p class="p2">%apropos keyword</p>
        </div>

        <footer> Copyright &copy; 2023. Techaro Group. All Rights Reserved.</footer>
        
        
<?php
    include "assets/php/footer.php";
?>