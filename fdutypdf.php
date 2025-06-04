

<?php
if(!empty($_POST['fsubmit']));
{
  $fdt=date('d-m-Y',strtotime($_POST ['date_d']));
  $ftm=date('h:i:sa',strtotime( $_POST['time_t']));
  $fsft= $_POST['ftimeshift'];
  $floc= $_POST['fdutylocation'];
  $fdty= $_POST['fdutytype'];
  $fcvp1= $_POST['fLCVP1'];
  $fcvp2= $_POST['fLCVP2'];
  $fcvp3= $_POST['fLCVP3'];
  
  require("fpdf/fpdf.php");
  
  $fpdf= new FPDF();
  $fpdf->AddPage();
  $fpdf->SetFont("Times","IB",15);
 
 
  $fpdf->Cell(0,10,"CIVIC POLICE VOLUNTEER FORCE DUTY SHEDULE ",1,1,'C');
  
  

  $fpdf->Cell(50,10,"Date:-",1,0);
   $fpdf->Cell(140,10,$fdt,1,1);
   
  $fpdf->Cell(50,10,"Time:-",1,0);
    $fpdf->Cell(140,10,$ftm,1,1);
	
  $fpdf->Cell(50,10,"Shift:-",1,0);
  $fpdf->Cell(140,10,$fsft,1,1);
  
  $fpdf->Cell(50,10,"Duty Location:-",1,0);
    $fpdf->Cell(140,10, $floc,1,1);
	
  $fpdf->Cell(50,10,"Duty Type:-",1,0);
  $fpdf->Cell(140,10, $fdty,1,1);
 
  $fpdf->Cell(50,10,"CVF1:-",1,0);
  $fpdf->Cell(140,10, $fcvp1,1,1);
  
  $fpdf->Cell(50,10,"CVF2:-",1,0);
  $fpdf->Cell(140,10, $fcvp2,1,1);
  
  $fpdf->Cell(50,10,"CVF3:-",1,0);
  $fpdf->Cell(140,10, $fcvp3,1,1);

   $fpdf->Cell(0,10,"*N.B:- PLEASE ATTEND DUTY TIMELY*",1,0,'C');
   $file=time().'.pdf';
  
  $fpdf->output($file,'D');
}
?>