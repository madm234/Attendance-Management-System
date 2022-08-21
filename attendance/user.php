<?php
include('header.php');

$obj =new boat();

$tota ="";
$count =0;
$university ="";
$course ="";
$subcourse ="";
$batch ="";
$msg ="";

if(isset($_GET['sub']))
{
  if(isset($_GET['id']))
{
  $id =$obj->safe_str($_GET['id']);
  $res =$obj->safe_str($_GET['res']);
  $stat =$obj->safe_str($_GET['stat']);

  if($res!="" && $stat!="")
  {
    $obj->updquery('student',['result'=>$res,'status'=>$stat],'id',$id);
    $obj->redirect('user.php');
  } 
}
else
{
  $msg ="Select the checkbox before posting result !";
}
}

if($_SESSION['USER_ROLE']==0 && $_SESSION['QR_USER_LOGIN'])
{
    $tota =$obj->selquery('*','student','','');
    $count =count($tota);

if(isset($_POST['submit']))
{
  $fin =array();
  $university =$obj->safe_str($_POST['university']);
  if($university!="")
  {$fin +=array('university'=>$university);}

  $course =$obj->safe_str($_POST['course']);
  if($course!="")
  {$fin +=array('course'=>$course);}

  $subcourse =$obj->safe_str($_POST['subcourse']);
  if($subcourse!="")
  {$fin +=array('subcourse'=>$subcourse);}

  $batch =$obj->safe_str($_POST['batch']);
  if($batch!="")
  {$fin +=array('batch'=>$batch);}

  $tota =$obj->selquery('*','student',$fin==[]?"":$fin,'');
  $count =count($tota);
  // echo($count);
  // print_r($tota); 
}

?>

<h3 style="text-align:center; color:red;"><b><?php echo $msg ?></b></h3>
<div class="admin_tit">
    <h2>Student Result Status</h1>
</div>

<div class="align_tab">
<div class="card w-100">

<div class="card-head">
  <p  class="tit_para">Student Result Status</p>
</div>

  <div class="card-body">

<form method="post">
          <div class="row">
              <div class="col-6 erp">
                <label for="">University &nbsp;&nbsp;&nbsp;</label>
              <select name="university">
                <option value="">Select University &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                <?php if($university=='DIT') {?><option value="DIT" selected>DIT</option> <?php }else {?><option value="DIT">DIT</option> <?php } ?>
                <?php if($university=='IIT') {?><option value="IIT" selected>IIT</option> <?php }else {?><option value="IIT">IIT</option> <?php } ?>
                <?php if($university=='NIT') {?><option value="NIT" selected>NIT</option> <?php }else {?><option value="NIT">NIT</option> <?php } ?>
                <?php if($university=='BITS') {?><option value="BITS" selected>BITS</option> <?php }else {?><option value="BITS">BITS</option> <?php } ?>
                <?php if($university=='CU') {?><option value="CU" selected>CU</option> <?php }else {?><option value="CU">CU</option> <?php } ?>
                <?php if($university=='LPU') {?><option value="LPU" selected>LPU</option> <?php }else {?><option value="LPU">LPU</option> <?php } ?>
                <?php if($university=='DU') {?><option value="DU" selected>DU</option> <?php }else {?><option value="DU">DU</option> <?php } ?>
              </select>
              </div>

              <div class="col-6 erp">
              <label for="">Course &nbsp;&nbsp;&nbsp;</label>
              <select name="course" >
                <option value="">Select Course &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                <?php if($course=='Btech') {?><option value="Btech" selected>Btech</option> <?php }else {?><option value="Btech">Btech</option> <?php } ?>
                <?php if($course=='Bca') {?><option value="Bca" selected>Bca</option> <?php }else {?><option value="Bca">Bca</option> <?php } ?>
                <?php if($course=='Ba') {?><option value="Ba" selected>Ba</option> <?php }else {?><option value="Ba">Ba</option> <?php } ?>
                <?php if($course=='Bcom') {?><option value="Bcom" selected>Bcom</option> <?php }else {?><option value="Bcom">Bcom</option> <?php } ?>
                <?php if($course=='Barch') {?><option value="Barch" selected>Barch</option> <?php }else {?><option value="Barch">Barch</option> <?php } ?>
                <?php if($course=='Bsc') {?><option value="Bsc" selected>Bsc</option> <?php }else {?><option value="Bsc">Bsc</option> <?php } ?>
              </select>
              </div>
            </div>

            <br>

            <div class="row">
              <div class="col-6 erp">
                <label for="">Sub Course &nbsp;&nbsp;&nbsp;</label>
              <select name="subcourse" >
                <option value="">Select Sub Course &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                <?php if($subcourse=='CSE') {?><option value="CSE" selected>CSE</option> <?php }else {?><option value="CSE">CSE</option> <?php } ?>
                <?php if($subcourse=='Mechanical') {?><option value="Mechanical" selected>Mechanical</option> <?php }else {?><option value="Mechanical">Mechanical</option> <?php } ?>
                <?php if($subcourse=='Accountant') {?><option value="Accountant" selected>Accountant</option> <?php }else {?><option value="Accountant">Accountant</option> <?php } ?>
                <?php if($subcourse=='Philosophy') {?><option value="Philosophy" selected>Philosophy</option> <?php }else {?><option value="Philosophy">Philosophy</option> <?php } ?>
                <?php if($subcourse=='Medicine') {?><option value="Medicine" selected>Medicine</option> <?php }else {?><option value="Medicine">Medicine</option> <?php } ?>
                <?php if($subcourse=='Civil') {?><option value="Civil" selected>Civil</option> <?php }else {?><option value="Civil">Civil</option> <?php } ?>
                <?php if($subcourse=='Biotechnology') {?><option value="Biotechnology" selected>Biotechnology</option> <?php }else {?><option value="Biotechnology">Biotechnology</option> <?php } ?>
                <?php if($subcourse=='Economic') {?><option value="Economic" selected>Economic</option> <?php }else {?><option value="Economic">Economic</option> <?php } ?>
              </select>
              </div>

              <div class="col-6 erp">
              <label for="">Batch &nbsp;&nbsp;&nbsp;</label>
              <select name="batch" >
                <option value="">Select Batch &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                <?php if($batch=='Regular') {?><option value="Regular" selected>Regular</option> <?php }else {?><option value="Regular">Regular</option> <?php } ?>
                <?php if($batch=='Repeating') {?><option value="Repeating" selected>Repeating</option> <?php }else {?><option value="Repeating">Repeating</option> <?php } ?>

              </select>
              </div>
            </div>

            <br>

            <div class="row">
              <div class="col-6 erp">
                <label for="">Report Type* &nbsp;&nbsp;&nbsp;</label>
                  <input type="radio" checked name="radio" id="">
                  <label for="">Admission Detail</label>
              </div>

              <div class="col-6 erp" style="position:relative ;">
                <input type="submit" name="submit" value="Show Report" class="btn btn-sm btn-outline-primary btnfix">
                <a href="/attendance/user.php"><img src="images/excel.png" alt="" style="position:absolute; right:0; margin-right:32px" width="35px"></a>
            </div>
 </form>
  <br>
  <br>

  <table class="table table-bordered table-hover table-light table-striped">
  <thead>
    <tr>
    <th scope="col"><p class="tit_head">Sno.</p></th>
      <th scope="col"><p class="tit_head">UNIVERSITY</p></th>
      <th scope="col"><p class="tit_head">COURSE</p></th>
      <th scope="col"><p class="tit_head">SUB COURSE</p></th>
      <th scope="col"><p class="tit_head">BATCH</p></th>
      <th scope="col"><p class="tit_head">STUDENT</p></th>
      <th scope="col"><p class="tit_head">RESULT</p></th>
      <th scope="col"><p class="tit_head">STATUS</p></th>
      <th scope="col"><p class="tit_head">POST</p></th>
    </tr>
  </thead>
  <tbody>

    <?php for($i=0;$i<$count;$i++){ ?>
      <form method="get" action="user.php">
    <tr>
    <td><input type="checkbox" name="id" checked value="<?php echo $tota[$i]['id'] ?>"></td>
      <td><?php echo $tota[$i]['university'] ?></td>
      <td><?php echo $tota[$i]['course'] ?></td>
      <td><?php echo $tota[$i]['subcourse'] ?></td>
      <td><?php echo $tota[$i]['batch'] ?></td>
      <td><?php echo $tota[$i]['username'] ?></td>
     <td>
      <select id="res" name="res">
      <option value="">Select Result &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
<?php if($tota[$i]['result']=="0-30%"){?><option selected value="0-30%">0-30%</option> <?php }else {?> <option value="0-30%">0-30%</option> <?php } ?>
<?php if($tota[$i]['result']=="31-45%"){?><option selected value="31-45%">31-45%</option> <?php }else {?> <option value="31-45%">31-45%</option> <?php } ?>
<?php if($tota[$i]['result']=="46-60%"){?><option selected value="46-60%">46-60%</option> <?php }else {?> <option value="46-60%">46-60%</option> <?php } ?>
<?php if($tota[$i]['result']=="61-70%"){?><option selected value="61-70%">61-70%</option> <?php }else {?> <option value="61-70%">61-70%</option> <?php } ?>
<?php if($tota[$i]['result']=="71-80%"){?><option selected value="71-80%">71-80%</option> <?php }else {?> <option value="71-80%">71-80%</option> <?php } ?>
<?php if($tota[$i]['result']=="81-90%"){?><option selected value="81-90%">81-90%</option> <?php }else {?> <option value="81-90%">81-90%</option> <?php } ?>
<?php if($tota[$i]['result']=="91-100%"){?><option selected value="91-100%">91-100%</option> <?php }else {?> <option value="91-100%">91-100%</option> <?php } ?>
    </select>
      </td>
      <td>
      <select id="stat" name="stat">
      <option value="">Select Status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
<?php if($tota[$i]['status']=="Pass"){?><option selected value="Pass">Pass</option> <?php }else {?> <option value="Pass">Pass</option> <?php } ?>
<?php if($tota[$i]['status']=="Fail"){?><option selected value="Fail">Fail</option> <?php }else {?> <option value="Fail">Fail</option> <?php } ?>
    </select>
      </td>
      <td>
        <input type="submit" value="Post" name="sub" class="btn btn-sm btn-success">
      </td>

    </tr>
    </form>
 <?php  } ?>

  </tbody>
</table>
  </div>
</div>
</div>
<?php } else{
 $obj->redirect('login.php'); 
}?>



<?php
include('footer.php');
?>