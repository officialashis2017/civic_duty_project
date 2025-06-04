<?php
session_start();
?>

<!doctype html>
<html lang="en">
   
    <head>
        <style>
            table
{
    color:white;
    background-color:black;
    border-radius:30px;
}
#button
{
    background-color:green;
    color:white;
    height:35px;
    width:100px;
    border-radius:25px;
}
</style>
            <body>
            
        <title>Shedule Time Table </title>
</head>
    <link rel="stylesheet" type="text/css" href="FORM.css">
<body>

<h2> CIVIC DUTY SHEDULE TIME TABLE </h2>
<?php
 if(isset($SESSION['status']))
 {
    echo "<h4>" .$SESSION['STATUS']."</h4>";
    unset($SESSION['status']);
 }
 ?>
   <HR> 
   <br>
    <table border="0" align="center"cellspacing="10">
        
            <form action="dutypdf.php" method="POST">
    <H3>MALE CVF DUTY</H3>
     
                <tr>
        <td><b>Select Date:</b></td>
       <td> <input type="date"name="date_" class="form-control" ></td>
</tr>
    
<tr><td><b>Select Time:</b></td>
                    <td><input type="time"name="time_"></td></tr>
                   <tr> <td><b>Shift:</b></td><td> <input type="radio" name="timeshift"value="Morning">Morning
                    <input type="radio" name="timeshift"value="Evening">Evening
                    <input type="radio" name="timeshift"value="Night">Night</td>
</tr>
<br>
    <tr> <td><b>Duty Location:</b></td>
   <td> <select name="dutylocation">
    <option>Select Location</option>
        <option value="AMBIKANAGAR MODEL SCHOOL">AMBIKANAGAR MODEL SCHOOL</option> 
        <option value="AKKHUTA MORE DUTY">AKKHUTA MORE DUTY</option> 
        <option value="AMBIKANAGAR BAZAR">AMBIKANAGAR BAZAR</option>
        <option value="RANIBANDH P.S">RANIBANDH P.S</option>
        <option value="AMBIKANAGAR DANGER MORE">AMBIKANAGAR DANGER MORE</option>
        <option value="RANIBANDH BDCC BANK DUTY">RANIBANDH BDCC BANK DUTY</option>
        <option value="AMBIKANAGAR PUNJAB NATIONAL BANK">AMBIKANAGAR PUNJAB NATIONAL BANK</option>
    </select>
</td>
</tr>
    

<tr><td><b>SELECT DUTY TYPE:</b></td>
    
   <td> 
   <select name="dutytype" >
   <option value="NONE">NONE</option>
   <option value="BANK">BANK</option>
   <option value="TRAFFIC">TRAFFIC</option>
   <option value="FATIGE">FATIGE</option>
   <option value="NIGHT">NIGHT</option>
   <option value="NADIGHAT">NADIGHAT</option>
   <option value="MODEL SCHOOL">MODEL SCHOOL</option>
    
</td>
</tr>
         
         
         
            <tr><td><b>Select Duty MALE CVF-1:</b></td>
        <td>   <select name="cvf1" >
                <option value="NONE">NONE</option>
                <option value="SUDIP MAHATA-MOB-9002757920">SUDIP MAHATA *MOB-9002757920</option>
                <option value="ABHIJIT MODAK-MOB-9933719349">ABHIJIT MODAK *MOB-9933719349</option>
                <option value="SWARUP ROY-MOB-8972460509">SWARUP ROY *MOB-8972460509</option>
                <option value="JADAB MAHATA-MOB-9635550722">JADAB MAHATA *MOB-9635550722</option>
                <option value="SURESANTA MAHATA-MOB-9547526593">SURESANTA MAHATA *MOB-9547526593</option>
                <option value="MITHUN MODAK-MOB-7602525253">MITHUN MODAK *MOB-7602525253</option>
                <option value="PRASANTA DAS-MOB-9933675026">PRASANTA DAS *MOB-9933675026</option>
                <option value="RAMESH MAHATA-MOB-8250089031">RAMESH MAHATA *MOB-8250089031</option>
                <option value="CHITTABRATA DHABALDEB-MOB-6295506674">CHITTABRATA DHABALDEB-MOB-6295506674</option>
                <option value="SWAPAN SARDAR-MOB-8967648623">SWAPAN SARDAR-MOB-8967648623</option>
                <option value="PINTU MAHATA-MOB-8927504953">PINTU MAHATA-MOB-8927504953</option>
                <option value="SATYAPRIYA MAHATA-MOB-9933554967">SATYAPRIYA MAHATA-MOB-9933554967</option>
                <option value="AKASH MAHATA-MOB-8159916974">AKASH MAHATA-MOB-8159916974</option>
                <option value="AMIT MAHATA-MOB-8348540106">AMIT MAHATA-MOB-8348540106</option>
                <option value="SANTANU PRAMANIK-MOB-8389824211">SANTANU PRAMANIK-MOB-8389824211</option>
            </select>
</td>
        </tr>
            <tr><td><b>Select Duty MALE CVF-2:</b></td>
           <td> <select name="cvf2">
                
                <option value="NONE">NONE</option>
                <option value="SUDIP MAHATA-MOB-9002757920">SUDIP MAHATA *MOB-9002757920</option>
                <option value="ABHIJIT MODAK-MOB-9933719349">ABHIJIT MODAK *MOB-9933719349</option>
                <option value="SWARUP ROY-MOB-8972460509">SWARUP ROY *MOB-8972460509</option>
                <option value="JADAB MAHATA-MOB-9635550722">JADAB MAHATA *MOB-9635550722</option>
                <option value="SURESANTA MAHATA-MOB-9547526593">SURESANTA MAHATA *MOB-9547526593</option>
                <option value="MITHUN MODAK-MOB-7602525253">MITHUN MODAK *MOB-7602525253</option>
                <option value="PRASANTA DAS-MOB-9933675026">PRASANTA DAS *MOB-9933675026</option>
                <option value="RAMESH MAHATA-MOB-8250089031">RAMESH MAHATA *MOB-8250089031</option>
                <option value="CHITTABRATA DHABALDEB-MOB-6295506674">CHITTABRATA DHABALDEB-MOB-6295506674</option>
                <option value="SWAPAN SARDAR-MOB-8967648623">SWAPAN SARDAR-MOB-8967648623</option>
                <option value="PINTU MAHATA-MOB-8927504953">PINTU MAHATA-MOB-8927504953</option>
                <option value="SATYAPRIYA MAHATA-MOB-9933554967">SATYAPRIYA MAHATA-MOB-9933554967</option>
                <option value="AKASH MAHATA-MOB-8159916974">AKASH MAHATA-MOB-8159916974</option>
                <option value="AMIT MAHATA-MOB-8348540106">AMIT MAHATA-MOB-8348540106</option>
                <option value="SANTANU PRAMANIK-MOB-8389824211">SANTANU PRAMANIK-MOB-8389824211</option>
            </select></td>
</tr>

            <tr><td><b>Select Duty MALE CVF-3:</b></td>
           <td> <select name="cvf3">
                <option value="NONE">NONE</option>
                <option value="SUDIP MAHATA-MOB-9002757920">SUDIP MAHATA *MOB-9002757920</option>
                <option value="ABHIJIT MODAK-MOB-9933719349">ABHIJIT MODAK *MOB-9933719349</option>
                <option value="SWARUP ROY-MOB-8972460509">SWARUP ROY *MOB-8972460509</option>
                <option value="JADAB MAHATA-MOB-9635550722">JADAB MAHATA *MOB-9635550722</option>
                <option value="SURESANTA MAHATA-MOB-9547526593">SURESANTA MAHATA *MOB-9547526593</option>
                <option value="MITHUN MODAK-MOB-7602525253">MITHUN MODAK *MOB-7602525253</option>
                <option value="PRASANTA DAS-MOB-9933675026">PRASANTA DAS *MOB-9933675026</option>
                <option value="RAMESH MAHATA-MOB-8250089031">RAMESH MAHATA *MOB-8250089031</option>
                <option value="CHITTABRATA DHABALDEB-MOB-6295506674">CHITTABRATA DHABALDEB-MOB-6295506674</option>
                <option value="SWAPAN SARDAR-MOB-8967648623">SWAPAN SARDAR-MOB-8967648623</option>
                <option value="PINTU MAHATA-MOB-8927504953">PINTU MAHATA-MOB-8927504953</option>
                <option value="SATYAPRIYA MAHATA-MOB-9933554967">SATYAPRIYA MAHATA-MOB-9933554967</option>
                <option value="AKASH MAHATA-MOB-8159916974">AKASH MAHATA-MOB-8159916974</option>
                <option value="AMIT MAHATA-MOB-8348540106">AMIT MAHATA-MOB-8348540106</option>
                <option value="SANTANU PRAMANIK-MOB-8389824211">SANTANU PRAMANIK-MOB-8389824211</option>
            </select></td>
</tr>
<tr>
    <td colspan="2" align="center"><input type="submit" id="button" name="msubmit"></td>
</tr>
</form>
</table>
</body>


  <body>             
  <?php
 if(isset($SESSION['status']))
 {
    echo "<h4>" .$SESSION['STATUS']."</h4>";
    unset($SESSION['status']);
 }
 ?>
<style>
            table
{
    color:white;
    background-color:black;
    border-radius:30px;
}
#button
{
    background-color:green;
    color:white;
    height:35px;
    width:100px;
    border-radius:25px;
}
</style>

<table border="0" align="center"cellspacing="10">
                <H3>FEMALE CVF DUTY</H3>
                <form action="fdutypdf.php" method="POST">
                <tr><td><b>Select Date:</b></td>
                    <td><input type="date"name="date_d"></td>
</tr>
                
                <tr><td><b>Select Time:</b></td>
                    <td><input type="time" name="time_t">
               </td></tr> 
                    <tr> <td> <b>Shift:</b> </td> <td><input type="radio" name="ftimeshift"value="Morning">Morning
                    <input type="radio" name="ftimeshift" value="Evening">Evening
                    <input type="radio" name="ftimeshift"value="Night">Night
</td>
</tr>
                <tr><td><b>Duty Location:</b></td>
                <td><select name="fdutylocation">
                <option>Select Location</option>
                    <option value="AMBIKANAGAR MODEL SCHOOL">AMBIKANAGAR MODEL SCHOOL</option>
                    <option value="AKKHUTA MORE DUTY">AKKHUTA MORE DUTY</option>
                    <option value="AMBIKANAGAR BAZAR">AMBIKANAGAR BAZAR</option>
                    <option value="RANIBANDH P.S">RANIBANDH P.S</option>
                    <option value="AMBIKANAGAR DANGER MORE">AMBIKANAGAR DANGER MORE</option>
                    <option value="RANIBANDH BDCC BANK DUTY">RANIBANDH BDCC BANK DUTY</option>
                    <option value="AMBIKANAGAR PUNJAB NATIONAL BANK">AMBIKANAGAR PUNJAB NATIONAL BANK</option>
                </select>
</td>
</tr>
                
            
                     <tr><td><b>SELECT DUTY TYPE:</b></td>
                     
                    <td>
   <select name="fdutytype" >
   <option value="NONE">NONE</option>
   <option value="BANK">BANK</option>
   <option value="TRAFFIC">TRAFFIC</option>
   <option value="FATIGE">FATIGE</option>
   <option value="NIGHT">NIGHT</option>
   <option value="NADIGHAT">NADIGHAT</option>
   <option value="MODEL SCHOOL">MODEL SCHOOL</option>
</td>
</tr>
                     
            <tr><td><b>Select Duty FEMALE CVF 1:</b></td>
           <td> <select name="fLCVP1">
                <option value="NONE">NONE</option>
                <option value="BANANI MAHATA-MOB-7602995344">BANANI MAHATA-MOB-7602995344</option>
                <option value="MAMANI BHUINYA-MOB-8016790829">MAMANI BHUINYA-MOB-8016790829</option>
                <option value="MOU MAHATA-MOB-9883913961">MOU MAHATA-MOB-9883913961</option>
                <option value="MOUSUMI SING SARDAR-MOB-9641940345">MOUSUMI SING SARDAR-MOB-9641940345</option>
                <option value="CHANDANA MAHATA-MOB-8348742721">CHANDANA MAHATA-MOB-8348742721</option>
                <option value="SUJATA MAHATA-MOB-8436091347">SUJATA MAHATA-MOB-8436091347</option>
                <option value="SARATHI MUDI-MOB-7601990517">SARATHI MUDI-MOB-7601990517</option>
                <option value="BELARANI MUDI-MOB-9329112481">BELARANI MUDI-MOB-9329112481</option>
            </select>
</td>
</tr><br>
            <tr><td><b>Select Duty FEMALE CVF 2:</b></td>
           <td> <select name="fLCVP2">
                <option value="NONE">NONE</option>
                <option value="BANANI MAHATA-MOB-7602995344">BANANI MAHATA-MOB-7602995344</option>
                <option value="MAMANI BHUINYA-MOB-8016790829">MAMANI BHUINYA-MOB-8016790829</option>
                <option value="MOU MAHATA-MOB-9883913961">MOU MAHATA-MOB-9883913961</option>
                <option value="MOUSUMI SING SARDAR-MOB-9641940345">MOUSUMI SING SARDAR-MOB-9641940345</option>
                <option value="CHANDANA MAHATA-MOB-8348742721">CHANDANA MAHATA-MOB-8348742721</option>
                <option value="SUJATA MAHATA-MOB-8436091347">SUJATA MAHATA-MOB-8436091347</option>
                <option value="SARATHI MUDI-MOB-7601990517">SARATHI MUDI-MOB-7601990517</option>
                <option value="BELARANI MUDI-MOB-9329112481">BELARANI MUDI-MOB-9329112481</option>
            </select>
</td>
</tr>
            <tr><td><b>Select Duty FEMALE CVF 3:</b></td>
            <td><select name="fLCVP3">
                <option value="NONE">NONE</option>
                <option value="BANANI MAHATA-MOB-7602995344">BANANI MAHATA-MOB-7602995344</option>
                <option value="MAMANI BHUINYA-MOB-8016790829">MAMANI BHUINYA-MOB-8016790829</option>
                <option value="MOU MAHATA-MOB-9883913961">MOU MAHATA-MOB-9883913961</option>
                <option value="MOUSUMI SING SARDAR-MOB-9641940345">MOUSUMI SING SARDAR-MOB-9641940345</option>
                <option value="CHANDANA MAHATA-MOB-8348742721">CHANDANA MAHATA-MOB-8348742721</option>
                <option value="SUJATA MAHATA-MOB-8436091347">SUJATA MAHATA-MOB-8436091347</option>
                <option value="SARATHI MUDI-MOB-7601990517">SARATHI MUDI-MOB-7601990517</option>
                <option value="BELARANI MUDI-MOB-9329112481">BELARANI MUDI-MOB-9329112481</option>
            </select>
</td>
</tr>

<tr>
    <td colspan="2" align="center"><input type="submit" id="button" name="fsubmit"></td>

            
</form>
</table>
</body>
</HTML>