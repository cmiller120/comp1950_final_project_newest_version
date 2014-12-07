<!--
 Created with Webformgenerator by easyclick.ch
 www.easyclick.ch
 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="css/style.css" media="screen" rel="stylesheet" type="text/css"/>
    <link href="css/uniform.css" media="screen" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.tools.js"></script>
    <script type="text/javascript" src="js/jquery.uniform.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</head>
<body>

<div class="TTWForm-container">
     
     
     <div id="form-title" class="form-title field">
          <h2>
               Quiz # 2
          </h2>
     </div>
     
     
     <form action="process_form.php" class="TTWForm" method="post" novalidate="">
          
          
          <div id="field2-container" class="field f_100">
               <label for="field2">
                    Name:
               </label>
               <input type="text" name="name" id="field2" required="required">
          </div>
          
          
          <div id="field1-container" class="field f_100">
               <label for="field1">
                    Student Number:
               </label>
               <input type="text" name="student_number" id="field1" required="required">
          </div>
          
          
          <div id="field3-container" class="field f_100">
               <label for="field3">
                    1. What does the acronym XHTML stand for(1 mark)?
               </label>
               <textarea rows="5" cols="20" name="quesiton_1" id="field3"></textarea>
          </div>
          
          
          <div id="field6-container" class="field f_100">
               <label for="field6">
                    2. XHTML 1.0 is meant to be "well formed", which carries a series of strict
                    rules for how to write code.Briefly state three of these rules: (3 marks)
               </label>
               <input type="text" name="question_2-1" id="field6" required="required">
          </div>
          
          
          <div id="field7-container" class="field f_100">
               <label for="field7">
               </label>
               <input type="text" name="question_2-2" id="field7" required="required">
          </div>
          
          
          <div id="field8-container" class="field f_100">
               <label for="field8">
               </label>
               <input type="text" name="question_2-3" id="field8" required="required">
          </div>
          
          
          <div id="field9-container" class="field f_100">
               <label for="field9">
                    3. XHTML 1.0 has three approved DOCTYPEs. One is called Frameset. Name
                    one of the other two. (1 mark)
               </label>
               <input type="text" name="question_3" id="field9" required="required">
          </div>
          
          
          <div id="field10-container" class="field f_100">
               <label for="field10">
                    4. Write out the complete HTML5 DOCTYPE. (1 mark)
               </label>
               <input type="text" name="quesiton_4" id="field10" required="required">
          </div>
          
          
          <div id="field11-container" class="field f_100">
               <label for="field11">
                    5. HTML5 introduces a series of new semantic tags like header and footer.
                    Name two other new semantic tags in HTML5. (2 marks)
               </label>
               <input type="text" name="question_5-1" id="field11" required="required">
          </div>
          
          
          <div id="field12-container" class="field f_100">
               <label for="field12">
               </label>
               <input type="text" name="question_5-2" id="field12" required="required">
          </div>
          
          
          <div id="field13-container" class="field f_100">
               <label for="field13">
                    6. Which of the various Markup Languages is the current W3C standard recommendation?
                    (1 mark)
               </label>
               <input type="text" name="question_6" id="field13" required="required">
          </div>
          
          
          <div id="field4-container" class="field radio-group required f_100">
               <label for="field4-1">
                    7. HTML5 will include rules for how browser handle errors in the code.
                    (1 mark)
               </label>
               
               
               <div class="option clearfix">
                    <input type="radio" name="field4" id="field4-1" value="True">
                    <span class="option-title">
                         True
                    </span>
               </div>
               
               
               <div class="option clearfix">
                    <input type="radio" name="field4" id="field4-2" value="False">
                    <span class="option-title">
                         False
                    </span>
               </div>
          </div>
          
          
          <div id="form-submit" class="field f_100 clearfix submit">
               <input type="submit" value="Submit">
          </div>
     </form>
</div>

</body>
</html>