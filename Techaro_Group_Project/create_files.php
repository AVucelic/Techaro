<?php
    $name = 'Create Files';
    include 'assets/php/nav.php';
?>
    <main>
        <div>
            <h1>Some Title</h1>
        </div>
        <div>
            <h2>Some Title</h2>
            <ol>
                <li>
                    <p>To create an ordinary file on a Unix system using the vi editor, you can use the following
                        command which will open a file with a given name:</p>
                    <p>$ vi filename</p>
                </li>
                <li>
                    <p>press i to open edit mode and write your content </p>
                    <p>This is unix file....I created it for the first time.....</p>
                </li>
                <li>
                    <p>Once done: </p>
                    <p>Press esc to come out of the edit mode</p>
                    <p>Press Shift + ZZ together to come out of the file completely</p>
                </li>
            </ol>
        </div>
        <div>
            <h2>Variables</h2>
            <ul>
                <li>Variables are used in Unix shell scripts to store values that can be used later in the program</li>
                <li>The name of a variable can contain only letters (a to z or A to Z), numbers ( 0 to 9) or the
                    underscore character ( _)</li>
                <li>By convention, Unix shell variables will have their names in UPPERCASE</li>
            </ul>
            <p>There are three main types of variables in Unix:</p>
            <ol>
                <li>Local Variables: only present within the current instance of the shell and are not available to
                    programs started by the shell;set at the command prompt.</li>
                <li>Environment Variables: available to any child process of the shell. Programs may require certain
                    environment variables to function correctly.</li>
                <li>Shell Variables: set by the shell and are required for the shell to function correctly. Some of
                    these variables are environment variables, while others are local variables.</li>
            </ol>

            <p>Variables are defined as : </p>
            <p>variable_name=variable_value</p>
            <p>To access a variable in Unix, we simply need to prepend its name with a '$' symbol
                e.g to print the value of the 'PATH' environment variable, we would write:
                echo $PATH
            </p>
        </div>
<?php
    include "assets/php/footer.php";
?>