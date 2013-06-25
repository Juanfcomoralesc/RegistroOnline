<?php session_start;
     require_once 'funciones.php';
	 
     if(isset($_POST['B325WMSTR']) && !empty($_POST['B325WMSTR'])){
	 
	     if (onepost($_POST['unposteo']) == true) {
		     $n=filter(limpiaxss($_POST['nombre']));
		     $p=filter(limpiaxss($_POST['apaterno'])); 
		     $m=filter(limpiaxss($_POST['amaterno']));
		     $t=filter(limpiaxss($_POST['turno']));
		     $nombre= $p." ".$m." ".$n;	   
		 
		                 if(detect($n) == true && detect($n) == true && detect($p) == true && detect($m) == true){ 
			 
			                if(empty($n) && fnValidateStringr($n)== false){
					        $error=1;
					        $_SESSION['datos']=array($n,$p,$m,$t,$error); ob_start(); header('Location: index.php'); ob_end_flush();
					        }elseif(isset($p) && fnValidateStringr($p)== false){
					        $error=2;
					        $_SESSION['datos']=array($n,$p,$m,$t,$error); ob_start(); header('Location: index.php'); ob_end_flush();}
					        elseif(isset($m) && fnValidateStringr($m)== false){
					        $error=3;
					        $_SESSION['datos']=array($n,$p,$m,$t,$error); ob_start(); header('Location: index.php'); ob_end_flush();}
					        elseif(empty($t) && !fnValidateStringr($t)){
					        $error=4;
					        $_SESSION['datos']=array($n,$p,$m,$t,$error); ob_start(); header('Location: index.php'); ob_end_flush();
					        }else{
					  
					             $query=select("SELECT * FROM usuarios WHERE nombre like '%$nombre%' AND ip like '%$ip%' ORDER BY nombre ASC");
                     
					             if($query>0){   
						             $_SESSION['datos']="existe"; ob_start(); header('Location: index.php'); ob_end_flush();
						 
						         }else{ 
								     /*Ver que sala esta disponible y asignarla*/
						             $querys=select("SELECT * FROM usuarios WHERE turno='".$t."'");
								
									 
									 if($querys>=0 && $querys<=2 && $t==1){  $halo=1;}
									 if($querys>=3 && $querys<=5 && $t==1){  $halo=2;}
									 if($querys>=6 && $querys<=8 && $t==1){  $halo=3;}
									 if($querys>=9 && $t==1){  $_SESSION['datos']=array($n,$p,$m,$t,"selleno","mat"); ob_start(); header('Location: index.php'); ob_end_flush(); }
									 
									 if($querys>=0 && $querys<=2 && $t==2){ $halo=4;}
									 if($querys>=3 && $querys<=5 && $t==2){  $halo=5;}
									 if($querys>=6 && $t==2){ $_SESSION['datos']=array($n,$p,$m,$t,"selleno","inter"); ob_start(); header('Location: index.php'); ob_end_flush(); }
									 
									 if($querys>=0 && $querys<=2 && $t==3){ $halo=6;}
									 if($querys>=3 && $querys<=5 && $t==3){  $halo=7;}
									 if($querys>=6 && $t==3){ $_SESSION['datos']=array($n,$p,$m,$t,"selleno","vesp"); ob_start(); header('Location: index.php'); ob_end_flush();}
									 
									 
									 
									 
						         
								         if(isset($halo)){
                                         $cuenta=select("SELECT * FROM usuarios");							
								         $ip=getRealIpAddr();
					                     $fecha= gmdate('Y-m-d');
					                     $hora= gmdate('H:i:s', hora_local(-8));
						                 $codigo = generarCodigo(10).$cuenta;
						 						 
						                 $inserta=insert("INSERT INTO usuarios (nombre, turno, fecha, hora,ip,codigo, salon ) SELECT '".strtoupper($nombre)."','".$t."','".$fecha."','".$hora."','".$ip."','".$codigo."',salones.id FROM salones WHERE salones.id='".$halo."'");
						                 $_SESSION['exito']=array("fuckyeah!",$codigo); ob_start(); header('Location: index.php'); ob_end_flush();
								 
								 }
								 
								 
								 
								     
						         }
								 
					         } 
			 
		                 }else{ 
			                 $_SESSION['datos']="xss"; ob_start(); header('Location: index.php'); ob_end_flush();        
			             }
						 
         }else{
             ob_start();  header('Location: index.php'); ob_end_flush();
         }
         
		 
     }
     else{
         ob_start();  header('Location: index.php'); ob_end_flush();
     }
?>

