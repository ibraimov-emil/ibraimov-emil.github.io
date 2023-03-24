<?php

 $flag=true;//чтобы при ошибке не засчитало вывод

 $cash_result = $cash - $bring_cash;
               require_once("qtwoq.php");
			   if($sendMoney){
			   $upSql=$mysqli->query("UPDATE $db_table SET cash = '$cash_result' WHERE id = '$id'");
			   
			   $result_query_insert = $mysqli->query("INSERT INTO payments (id, cash, qiwi, date) VALUES ('$id','$bring_cash','$bring_qiwi','$date')");
              
             
                   
			   $success_box	="средства успешно выведены";
			   }else{
				   $error_box = "*Обратитесь в тех. поддержку.";
                   $flag = false;
			   }
			   
			   

?>
