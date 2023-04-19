<?php
    $name = 'Homepage';
    include 'assets/php/nav.php';
?>
    <main>
        <div>
            <!-- Title -->
            <h1>UNIX ARCHITECTURE</h1>
        </div>
        <div class="jumpLinks">
        <ul class="linksUl">
            <li><a class="link" href="#">Jump Link</a></li>
            <li><a class="link" href="#">Jump Link</a></li>
            <li><a class="link" href="#">Jump Link</a></li>
        </ul>
    </div>
        <!-- Content 1 -->
        <div>
            <h2>Some Title</h2>
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
            <h2>Some Title</h2>
            <p>Made up of three parts: </p>
            <ol>
                <li>THE KERNEL</li>
                <li>
                    <ul>
                        <li>provides services to start and end programs</li>
                        <li>handles low-level operations(  allocates memory, manage files, responds to system calls, schedules tasks..)</li>
                    </ul>
                </li>
                <li>THE SHELL</li>
                <li>
                    <ul>
                        <li>an interface between the user and the kernel</li>
                        <li>a command line interpreter (CLI)which interprets the commands the user types  in and arranges for them to be carried out</li>
                        <li><ul><li>Different types of shells available (e.g. bash, csh, zsh)</li></ul></li>
                    </ul>
                </li>
                <li>THE PROGRAMS</li>
                <li>
                    <ul>
                        <li>commands </li>
                        <li>everything in Unix is either a FILE(collection of data) or a PROCESS (   executing program identified by a unique process identifier)</li>
                    </ul>
                </li>
            </ol>

            <img src="assets/imgs/kernal_wheel.jpg" alt="Kernal Wheel">
        </div>
<?php
    include "assets/php/footer.php";
?>