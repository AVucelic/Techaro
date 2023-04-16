<?php
    $name = 'Commands';
    include 'assets/php/nav.php';
?>
    <main>
    <main class="main1">
        <div class>
            <h1 >Unix Commands & File Manipulation</h1>
            <h2>COMMANDS</h2>
            
                <p id="p1"> List files and directories: </p>
                   <p id="p2"> % ls -> ls(list) </p>
                <p id="p1"> List all files and directories:  </p>
                    <p id="p2">% ls -a</p>
                <p id="p1"> Make a new directory: </p>
                    <p id="p2">% mkdir nameofdirectory</p>
                <p id="p1"> To change to another directory:  </p>
                    <p id="p2">% cd nameofdirectory</p>
                <p id="p1"> To get to the current directory:  </p>
                    <p id="p2">% cd.  (. means the current directory)</p>
                <p id="p1"> To get to the parent directory: </p>
                    <p id="p2"> % cd ..</p>
                <p id="p1"> Print working directory:</p>
                    <p id="p2"> % pwd  pwd</p>
                <p id="p1"> To specify paths starting at your home directory:  </p>
                    <p id="p2">~</p>
            
            
        </div>
        <div>
            <h2>MANIPULATING FILES</h2>
            
                <p id="p1">To copy file1 and call it file2: </p>
                    <p id="p2">% cp file1 file2</p>
                <p id="p1">To move or rename file1 to file2:</p>
                    <p id="p2"> % mv </p>
                <p id="p1">To remove a file:</p>
                    <p id="p2"> %rm file</p>
                <p id="p1">To make a directory: </p>
                    <p id="p2"> % mkdir  nameofdirectory</p>
                <p id="p1">To remove a directory: </p>
                    <p id="p2">%Rmdir directory</p>
                <p id="p1">To display a file: </p>
                    <p id="p2">%cat file</p>
                <p id="p1">To display a file a page at a time:</p>
                    <p id="p2">%less file</p>
                <p id="p1">To display the first few lines of a file:</p>
                    <p id="p2">%head file</p>
                <p id="p1">To display the last few lines of a file:</p>
                    <p id="p2">%tail file	</p>
                <p id="p1">To file	search a file for keywords:</p>
                    <p id="p2">%grep 'keyword'</p>
            
            <p id="p1">Some of the other options of grep are:</p>
            <ul>
                <li id="p1">-v display those lines that do NOT match </li>
                <li id="p1">-n precede each matching line with the line number </li>
                <li id="p1">-c print only the total count of matched lines</li>
            </ul>
            <p id="p1"> Getting the number of lines/words/characters in file:</p>
                <p id="p2"> %wc file	count</p>
            <p id="p1"> Redirect standard output to a file: </p>
                <p id="p2">command > file</p>
            <p id="p1"> Appending standard output to a file:</p>
                <p id="p2"> command >> file	</p>
            <p id="p1">	Redirecting standard input from a file:</p>
                <p id="p2"> command < file</p>
            <p id="p1"> Piping the output of command1 to the input of command2:</p>
                <p id="p2"> command1 | command2	</p>
            <p id="p1"> Concatenating file1 and file2 to file0:</p>
                <p id="p2">cat file1 file2 > file0</p>
            <p id="p1">	Sorting data: </p>
                <p id="p2">sort</p>
            <p id="p1">	Listing users currently logged in:</p>
                <p id="p2"> %who</p>

            <h2>WILDCARDS</h2>
            <p id="p1">	Match any number of characters: </p>
                <p id="p2">*</p>
            <p id="p1">	match one character (e.g ?ouse can be house,mouse):</p>
            <p id="p2">?</p>
            <p id="p1">	Read the online manual page for a command:</p>
                <p id="p2"> %man command</p>
            <p id="p1">	Brief description of a command:</p>
                <p id="p2"> %whatis command</p>
            <p id="p1"v>	Match commands with keyword in their man pages: </p>
                <p id="p2">%apropos keyword</p>
        </div>

        <footer> Copyright &copy; 2023. Techaro Group. All Rights Reserved.</footer>
        
        
<?php
    include "assets/php/footer.php";
?>