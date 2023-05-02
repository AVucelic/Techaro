<?php
    $name = 'History';
    include 'assets/php/top_nav.php';

    
?>
<div id="nav-mobile">
    <?php include 'assets/php/mobile_nav.php'; ?>
</div>

<div id="nav-desktop">
    <?php include 'assets/php/nav2.php'; ?>
</div>
    <main class="main1">
        <!-- Style this to look like the thing in the document outline-->
        <div>
            <h1>History of Linux</h1>
        </div>
        <div class="jumpLinks">
        <ul class="linksUl">
            <li><a class="link" href="#lin">Linus Torvalds</a></li>
            <li><a class="link" href="#ken">Ken Thompson</a></li>
            <li><a class="link" href="#den">Dennis Ritchie</a></li>
        </ul>
    </div>
        

        <div class="container">

            <!--1969-->
            <div  class="grid-item">
                <p>1969</p>
                <p>The Beginning</p>
                <p>Ken Thompson, Dennis Ritchie and others started working on the "little-used PDP-7 in a corner" at Bell Labs and what was to become UNIX.</p>
            </div>

            <div class="grid-item">
                <p>1971</p>
                <p>First Edition</p>
                <p> Had an assembler for a PDP-11/20, file system, fork(), roff and ed
                    It was used for text processing of patent documents.
                    </p>
            </div>

            <div class="grid-item">
                <p>1973</p>
                <p>Fourth Edition</p>
                <p>It was rewritten in C. This made it portable and changed the history of OS's.</p>
            </div>
            <div class="grid-item">
                <p>1975</p>
                <p></p>
                <p>Unix V6 was released and became very popular. It was free and was distributed with its source code.</p>
            </div>

            <div class="grid-item">
                <p>Early 1980's</p>
                <p></p>
                <p>The market for UNIX systems had grown enough to be noticed  by industry analysts and researchers. 
                    "What is a UNIX system?" changed to "Is a UNIX system suitable for business and commerce?"
                    </p>
            </div>

            <div class="grid-item">
                <p>2007</p>
                <p></p>
                <p>Apple Mac OS X certified to UNIX 03.</p>
            </div>
        </div>
        <!--People-->
        <div id="lin">
            <h2>Linus Torvalds</h2>
            <div class="text-image">
                <div class="text2">
                    <p>Linus Torvalds is a software engineer and the creator of the Linux operating system. He was born on December 28, 1969, in Helsinki, Finland</p>
                    <p>Torvalds grew up in a family of journalists and studied computer science at the University of Helsinki.•	In 1991, at the age of 21, Torvalds started working on a new operating system as a hobby project. He named the project "Linux," which is a combination of his first name and the word Unix.</p>
                    <p>Over the years, Linux has grown into a popular and powerful operating system used by individuals, businesses, and organizations around the world. Today, Linux powers a wide range of devices, from smartphones and laptops to servers and supercomputers.•	In addition to his work on Linux, Torvalds has also contributed to several other open-source projects, including Git, a version control system widely used in software development.</p>
                    <p>Torvalds has received numerous awards and honors for his contributions to computer science and open-source software. In 2012, he was awarded the Millennium Technology Prize, which is often referred to as the "Nobel Prize of technology”</p>
                    <p>Despite his many achievements, Torvalds is known for his humble and down-to-earth personality; He has said that he never intended for Linux to become as big as it has and that he is still amazed by its success today</p>
                </div>
                <img src="assets/imgs/linus.png" alt="LINUS TORVALDS">
            </div>
            
            
        </div>
        <div id="ken">
            <h2>Ken Thompson</h2>
            <div class="text-image">
                <img src="assets/imgs/ken.jpg" alt="Ken Thompson">
                <div class="text1">
                    <p>Ken Thompson is an American computer scientist who is best known for his contributions to the development of the Unix operating system and the programming languages B and C</p>
                    <p>He was born on February 4, 1943, in New Orleans, Louisiana. Thompson received his bachelor's degree in electrical engineering from the University of California, Berkeley, in 1965. He then went on to earn his master's degree and Ph.D. in computer science from the same institution.</p>
                    <p>In the late 1960s, Thompson worked at Bell Labs, where he began developing the Unix operating system along with his colleague Dennis Ritchie. Unix was a ground-breaking operating system that introduced many new concepts, such as a hierarchical file system and the use of pipes for interprocess communication. Thompson also played a key role in the development of the B programming language, which was used to write the first version of Unix.</p>
                    <p>He later worked with Ritchie to develop the C programming language, which became one of the most widely used programming languages in the world. Thompson has received many awards and honors for his contributions to computer science. •	In 1983, he was awarded the Turing Award, which is often referred to as the "Nobel Prize of computing." In 1990, he was inducted into the National Academy of Engineering.</p>
                </div>
            </div>
            
            
        </div>

        <div>
            <h2 id="den">Dennis Ritchie</h2>
            <div class="text-image">
                <div class="text2">
                    <p>Dennis Ritchie was an American computer scientist who is best known for his contributions to the development of the Unix operating system and the C programming language.</p>
                    <p>He was born on September 9, 1941, in Bronxville, New York, and passed away on October 12, 2011. Ritchie received his bachelor's degree in physics from Harvard University in 1963 and his Ph.D. in computer science from the Massachusetts Institute of Technology (MIT) in 1968. He then joined Bell Labs, where he began working on the development of Unix, along with his colleague Ken Thompson.</p>
                    <p>Ritchie played a key role in the development of the C programming language, which was used to write the first version of Unix. C became one of the most widely used programming languages in the world and has influenced the development of many other programming languages. Ritchie was also a co-author of the book "The C Programming Language," which is often referred to as the "bible" of the C programming language.</p>
                    <p>In addition to his work on Unix and C, Ritchie also contributed to several other areas of computer science, including algorithms, software tools, and operating systems. Ritchie received many awards and honors for his contributions to computer science, including the Turing Award in 1983 and the National Medal of Technology in 1998.</p>
                </div>
                <img src="assets/imgs/dennis.jpeg" alt="Dennis Ritchie">
            </div>
            
            
        </div>


<?php
    include "assets/php/footer.php";
?>