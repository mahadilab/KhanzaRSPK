<?php
	include_once "conf/command.php";
  	if ($_GET['act']=="login"){
            if(($_GET['usere']=="admin")&&($_GET['passwordte']=="akusayangsamakamu")) {
                session_start();
                $_SESSION['ses_admin']="admin";
                $url = "index.php?act=List&no_rawat=".$_GET['no_rawat']."&tanggal=".$_GET['tanggal']."&jam=".$_GET['jam']."&kd_jenis_prw=".$_GET['kd_jenis_prw'];			
            }else{
                    session_start();
                    session_destroy();
                    if (cekSessiAdmin()){
                        session_unregister("ses_admin");
                    }
                    $url = "index.php?act=HomeAdmin";
            }
	    header("Location:".$url);
            
	}
    
?>
