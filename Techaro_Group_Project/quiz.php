<?php
    $name = 'Homepage';
    include 'assets/php/nav.php';
?>
    <main class="main1">
        <div>
            <h1>Quiz</h1>
        </div>
        <div>
            <form method="post" action="" onsubmit="return validateForm();" id="quiz-form">
                <p>
                    <p>1.Unix is the oldest operating system that has ever existed.</p>
                    
                    <input type="radio" name="q1" value="a" id="q1True"><label for="q1True">True</label><br>
                    <input type="radio" name="q1" value="b" id="q1False"><label for="q1False">False</label><br>
                </p>


                <p>
                    <p>2.Some of Unix's main features are:</p>
                    
                    <input type="radio" name="q2" value="a" id="q2a"><label for="q2a">a. Simplicity</label><br>
                    <input type="radio" name="q2" value="b" id="q2b"><label for="q2b">b. Portability</label><br>
                    <input type="radio" name="q2" value="c" id="q2c"><label for="q2c">c. Multitasking</label><br>
                    <input type="radio" name="q2" value="d" id="q2d"><label for="q2d">d. All of the above </label><br>



                </p>

                <p>
                    <p>3. The creator of Linux operating system is:</p>
                    
                    <input type="radio" name="q3" value="a" id="q3a"><label for="q3a">a. Dennis Ritchie</label><br>
                    <input type="radio" name="q3" value="b" id="q3b"><label for="q3b">b. Linus Torvalds</label><br>
                    <input type="radio" name="q3" value="c" id="q3c"><label for="q3c">c. Ken Thompson</label><br>

                </p>

                <p>
                    <p>4. Unix is made up of the kernel, shell, and programs.</p>
                    
                    <input type="radio" name="q4" value="a" id="q4True"><label for="q4True">True</label><br>
                    <input type="radio" name="q4" value="b" id="q4False"><label for="q4False">False</label><br>

                </p>

                <p>
                    <p>5. Unix systems have two primary types of files.</p>
                    
                    <input type="radio" name="q5" value="a" id="q5True"><label for="q5True">True</label><br>
                    <input type="radio" name="q5" value="b" id="q5False"><label for="q5False">False</label><br>

                </p>

                <p>
                    <p>6. Command ls -a   - list all files and directories.</p>
                    
                    <input type="radio" name="q6" value="a" id="q6True"><label for="q6True">True</label><br>
                    <input type="radio" name="q6" value="b" id="q6False"><label for="q6False">False</label><br>

                </p>

                <p>
                    <p>7. Which command do you use to modify file and directory permissions on a Unix-like operating system.</p>
                     
                    <input type="radio" name="q7" value="a" id="q7a"><label for="q7a">a. chmod</label><br>
                    <input type="radio" name="q7" value="b" id="q7b"><label for="q7b">b. ls -a</label><br>
                    <input type="radio" name="q7" value="c" id="q7c"><label for="q7c">c. pwd</label><br>
                    <input type="radio" name="q7" value="d" id="q7d"><label for="q7d">d. cd</label><br>
                </p>

                <p>
                    <p>8. The name of a variable can contain only letters (a to z or A to Z), numbers ( 0 to 9) or the underscore character ( _)</p>
                    <input type="radio" name="q8" value="a" id="q8True"><label for="q8True">True</label><br>
                    <input type="radio" name="q8" value="b" id="q8False"><label for="q8False">False</label><br>

                </p>

                <p>
                    <p>9. The Secure Shell protocol was originally developed by Ken Thompson in 1995 in response to a hacking incident in the Finnish university network</p>
                    <input type="radio" name="q9" value="a" id="q9True"><label for="q9True">True</label><br>
                    <input type="radio" name="q9" value="b" id="q9False"><label for="q9False">False</label><br>

                </p>

                <p>
                    <p>10. With which two basic blocks is a computer network built?</p>
                    
                    <input type="radio" name="q10" value="a" id="q10a"><label for="q10a">a. nodes or network devices</label><br>
                    <input type="radio" name="q10" value="b" id="q10b"><label for="q10b">b. shell</label><br>
                    <input type="radio" name="q10" value="c" id="q10c"><label for="q10c">c. kernel</label><br>
                    <input type="radio" name="q10" value="d" id="q10d"><label for="q10d">d. links</label><br>

                </p>
                
                
                
                

                

                <input type="submit" name="submit" value="Submit">
            </form>

            <?php
                if(isset($_POST['submit'])){
                    
                    include 'assets/php/dbConn.php';


                    //why is form going through and not being stopped by javascript form 
                    $answers = array(
                        isset($_POST['q1']) ? $_POST['q1'] : 'default_value',
                        isset($_POST['q2']) ? $_POST['q2'] : 'default_value',
                        isset($_POST['q3']) ? $_POST['q3'] : 'default_value',
                        isset($_POST['q4']) ? $_POST['q4'] : 'default_value',
                        isset($_POST['q5']) ? $_POST['q5'] : 'default_value',
                        isset($_POST['q6']) ? $_POST['q6'] : 'default_value',
                        isset($_POST['q7']) ? $_POST['q7'] : 'default_value',
                        isset($_POST['q8']) ? $_POST['q8'] : 'default_value',
                        isset($_POST['q9']) ? $_POST['q9'] : 'default_value',
                        isset($_POST['q10']) ? $_POST['q10'] : 'default_value'
                    );
                    //$answers = array($_POST['q1'], $_POST['q2'], $_POST['q3'], $_POST['q4'], $_POST['q5'], $_POST['q6'], $_POST['q7'], $_POST['q8'], $_POST['q9'], $_POST['q10']);
                    $score = 0;

                    for ($i = 0; $i < count($answers); $i++) {
                        $sql = "SELECT answer FROM quiz WHERE question_number = " . ($i + 1); // Add 1 to the question number to match the database
                        $result = mysqli_query($mysqli, $sql);
                        $row = mysqli_fetch_assoc($result); // Fetch the answer from the result object
                        $correct_answer = $row['answer'];
                        if(isset($answers[$i])){
                            if ($answers[$i] == $correct_answer) {
                                $score++;
                            }
                        }
                        
                    }
                    echo $score . "/ 10";
                    mysqli_close($mysqli);



                }


            ?>
        </div>
<?php
    include "assets/php/footer.php";
?>