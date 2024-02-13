<?php

    $db_username = "sadikturan";
    $db_password = "1234";

    //  if($db_username == "sadikturan" and $db_password == "1234"){
    //    echo "username veya parola doğru";
    //  }else{
    //    echo "username veya parola yanlış";
    //  }

    //  if($db_username == "sadikturan"){
    //   if($db_password == "1234"){
    //        echo "giriş başarılı";
    //    }else{
    //       echo "parola yanlış";
    //    }
    //  }

      if($db_username != "sadikturan2"){
        echo "username yanlış";
      }elseif($db_password != "12345"){
        echo "parola yanlış";
      }else{
        echo "giriş başarılı";
      }

?>



