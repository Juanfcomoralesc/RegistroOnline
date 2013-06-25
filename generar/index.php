<?php

require_once 'funciones.php';

                 $r=filter(limpiaxss($_GET['registro']));
                 $query=select("SELECT * FROM usuarios WHERE codigo like '%$r%'");
                 if(isset($r) && $query==1){ 
             



                 

					
					
			  


require('fpdf/fpdf.php');

class PDF extends FPDF
{


function Header()
{

// Logo
    $this->Image('logo.jpg',0,0,210);
   $this->Ln(50);
   
   
   
    global $title;

  
    $this->SetFont('Arial','B',13);

  
    $this->SetDrawColor(0);

    $this->SetTextColor(0,0,0);
  
    $this->SetLineWidth(1);
   
    $this->Cell(0,20,$title,0,0,'L',0); 
 
    $this->Ln(10);
	
	
	global $title2;
	   $this->SetFont('Arial','B',13);
	 $this->SetTextColor(97,97,97);
	
    $this->Cell(125,11,$title2,0,0,'C',0); 
	
	
    $this->Ln(20);
	
	global $title3;
	   $this->SetFont('Arial','B',13);
	 $this->SetTextColor(97,97,97);
	
    $this->Cell(133,-18,$title3,0,0,'C',0); 
	
	
    $this->Ln(25);
}

function Footer()
{
  
    $this->SetY(-15);
    $this->SetFont('Arial','',8);
    $this->SetTextColor(128);
    $this->Cell(0,10,'Página '.$this->PageNo(),0,0,'R');
}

function ChapterTitle($num, $label)
{
   
    $this->SetFont('Arial','',12);
   
    $this->SetFillColor(200,220,255);
   

   
    $this->Ln(4);
}




function ChapterBody($file)
{

        
		
		
		
		
		                 
                

		
	/*
	+--------------+   +------------------------------------------+
	|   salones    |   |                usuarios                  |
	+--------------+   +------------------------------------------+
	|id|salon|turno|   |id|nombre|turno|fecha|hora|ip|codigo|salon|
	
	
	*/
	
	
	
	
	
$query=_select("SELECT * FROM salones INNER JOIN usuarios ON salones.id = usuarios.salon WHERE codigo like '%$r%'");
switch ($query[2]) {
    case 1:
        $horario="8:00 a 12:00 hrs";
        break;
    case 2:
        $horario="13:00 a 17:00 hrs";
        break;
    case 3:
        $horario="17:00 a 21:00 hrs";
        break;
}




   
    $txt="Debera presentarse los dias 22 al 25 de enero en el horario ".$horario." en el salon ".$query[1]." del edificio A.





																			   
																			   




																			   

";
    

	
    $this->SetFont('helvetica','',12);
    
	$this->SetXY(35,100); 
  
    $this->MultiCell(162,6,$txt); 
  
    $this->Ln();
   
    $this->SetFont('','','I'); 
    $this->SetXY(37,250);
  
}

function PrintChapter($num, $title, $file)
{
    $this->AddPage();
    $this->ChapterTitle($num,$title);
    $this->ChapterBody($file);
}
}


$query=_select("SELECT * FROM usuarios WHERE codigo like '%$r%'");
$pdf = new PDF();
$title = "                    ".$query[1];
$title2 = 'Curso propedéutico matemáticas ';
$title3 = 'Facultad de Ciencias Administrativas';
$pdf->SetTitle($title);
$pdf->PrintChapter(1,'','');
$pdf->Output('Ajustes.pdf','I'); 






                           
 


				 
				 
				 
           }
		   
		  
		   else{
           
					 ob_start(); header('Location: ..\index.php?error=1'); ob_end_flush();
                  }

?>