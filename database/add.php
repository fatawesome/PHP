<?php

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form action="add.php" method="post">
       <label>
         ФИО
         <input type="text" name="fio" value="" <?php
            if (isset($_REQUEST['fio'])) {
              $fio = $_REQUEST['fio'];
            }
          ?>>
       </label><br>
       <label>
         Дата рождения
         <input type="date" name="birthday" value="" <?php
            if (isset($_REQUEST['birthday'])) {
              $birthday = $_REQUEST['birthday'];
            }
          ?>>
       </label><br>
       Пол
       <label>
         Мужской
         <input type="radio" name="sex" value="male" <?php
            if (isset($_REQUEST['sex']) && ($_REQUEST['sex'] == 'male')) {
              $sex = TRUE;
            }
          ?>>
       </label>
       <label>
         Женский
         <input type="radio" name="sex" value="female" <?php
            if (isset($_REQUEST['sex']) && ($_REQUEST['sex'] == 'female')) {
              $sex = FALSE;
            }
          ?>>
       </label><br><br>

       <input type="submit" name="submit" value="Добавить">
     </form>

     <?php
        $insert_query = "INSERT INTO `mytable`(`id`, `fio`, `birthday`, `sex`) VALUES (NULL, $fio, $birthday, $sex)";
     ?>
   </body>
 </html>
