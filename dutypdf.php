<?php
if(!empty($_POST['msubmit']));
{
  $dt=date('d-m-Y',strtotime($_POST ['date_']));
  $tm=date('h:i:sa',strtotime( $_POST['time_']));
  $sft= $_POST['timeshift'];
  $loc= $_POST['dutylocation'];
  $dty= $_POST['dutytype'];
  $cvp1= $_POST['cvf1'];
  $cvp2= $_POST['cvf2'];
  $cvp3= $_POST['cvf3'];
  
  require("fpdf/fpdf.php");
  
  $pdf= new FPDF();
  $pdf->AddPage();
  $pdf->SetFont("Times","IB",15);
 
 
  $pdf->Cell(0,10,"CIVIC POLICE VOLUNTEER FORCE DUTY SHEDULE ",1,1,'C');
  
  

  $pdf->Cell(50,10,"Date:-",1,0);
   $pdf->Cell(140,10,$dt,1,1);
   
  $pdf->Cell(50,10,"Time:-",1,0);
    $pdf->Cell(140,10,$tm,1,1);
	
  $pdf->Cell(50,10,"Shift:-",1,0);
  $pdf->Cell(140,10,$sft,1,1);
  
  $pdf->Cell(50,10,"Duty Location:-",1,0);
    $pdf->Cell(140,10, $loc,1,1);
	
  $pdf->Cell(50,10,"Duty Type:-",1,0);
  $pdf->Cell(140,10, $dty,1,1);
 
  $pdf->Cell(50,10,"CVF1:-",1,0);
  $pdf->Cell(140,10, $cvp1,1,1);
  
  $pdf->Cell(50,10,"CVF2:-",1,0);
  $pdf->Cell(140,10, $cvp2,1,1);
  
  $pdf->Cell(50,10,"CVF3:-",1,0);
  $pdf->Cell(140,10, $cvp3,1,1);

   $pdf->Cell(0,10,"*N.B:- PLEASE ATTEND DUTY TIMELY*",1,0,'C');
   $file=time().'.pdf';
  
  $pdf->output($file,'D');
}
?>

