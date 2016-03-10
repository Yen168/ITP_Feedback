<?php
require 'config.php';

echo <<< HTML
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Feedback</title>
      <link rel="stylesheet" href="css/third_party/bootstrap.min.css">
      <link rel="stylesheet" href="css/third_party/vex.css">
      <link rel="stylesheet" href="css/third_party/vex-theme-wireframe.css">
      <link rel="stylesheet" href="css/style.css">
   </head>

   <body>
      <h1>
         ITP Feedback Creator
      </h1>
      <p hidden id="user_netid">$curr_user</p>
      <p hidden id="post_key">$secrets</p>
      <div class="container">

         <p class="lead">
            <ul class="instruction">
               <p style="font-size:20px">Instruction:</p>
               <li>
                  <b>Objective Score Elements</b> can be edited (drag / add / delet), and be applied to all the students after clicking the <b>Update</b> button. 
               </li>
               <li>
                  Set <b>Gmail</b> as your default email handler <a href="https://developers.google.com/web/updates/2012/02/Getting-Gmail-to-handle-all-mailto-links-with-registerProtocolHandler?hl=en">tutorial</a>, instead of using Mac's <b>Mail</b> Application.
               </li>
            </ul>
         </p>
         <!-- <button id="saveFake" class="btn btn-default">Save</button> -->

         <div class="info">
            <div id="course_name">Course Name: </div>
            <div id="teacher_name">Teacher Name: </div>
            <div id="time_space">Course Time: </div>
            <div id="course_number">Course Number: </div>
            <br>
            <button id="SelectDialog" onclick="location.reload(true)">Other Course</button>
         </div>

         <!-- Textbox input -->
         <div class="inputHolder">
            <textarea id="all_textStart" placeholder="Stuff to stay at the begining of all emails. Eg. It's nice to have you in my class this semester..." >It's nice to have you in my class this semester.</textarea>
            <textarea id="all_textEnd" placeholder="Stuff to stay at the end of all emails. Eg. Wish you the best. Get weird!">Wish you the best. Get weird!</textarea>
         </div>

         <!-- Ranking elements at the top-->
         <div class="page-header"> 
            <h3>Objective Score Elements</h3>
         </div>

         <!-- <ul id="eval_items">
            <li class="Fabrication">Fabrication<i class="js-remove">X</i></li>
            <li class="Participation">Participation<i class="js-remove">X</i></li>
            <li class="Concept developing">Concept developing<i class="js-remove">X</i></li>
            <li class="Organizing">Organizing<i class="js-remove">X</i></li>
            <li class="Presentation">Presentation<i class="js-remove">X</i></li>
         </ul> -->

         <ul id="eval_items_new"></ul>

         <button id="add_skill" class="btn btn-default">Add</button>
         <button id="update_skill" class="btn btn-default">Update</button>

         <!-- Div for all the students -->
         <div id="studentHolder"></div>

         <!-- Bottom button to SAVE ALL data -->
         <div class="buttonHolder">
            <button id="saveFake" class="btn btn-default">Save All</button>
         </div>
      </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="js/third_party/bootstrap.min.js"></script>
      <script src="js/third_party/Sortable.js"></script>
      <script src="js/third_party/vex.combined.min.js"></script>
      <script src="js/third_party/html2canvas_v05.js"></script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/p5.js/0.4.19/p5.js"></script>
      <script type="text/javascript" src="js/script.js"></script>

   </body>
</html>
HTML;
?>
