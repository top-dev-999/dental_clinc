<?php
$patient_info = $this->crud_model->select_patient_info_by_patient_id($param2);
foreach ($patient_info as $row) { ?>
<div class="row">
    <div class="col-md-12">

        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title">
                    <h3><?php echo get_phrase('add_prescription'); ?></h3>
                </div>
            </div>

            <div class="panel-body">


        
                <form role="form" class="form-horizontal form-groups" action="<?php echo site_url('doctor/prescription/create'); ?>" 
                    method="post" enctype="multipart/form-data">
                    <input type="hidden" name="patient_id" value="<?php echo $row['patient_id']; ?>" />

        <div class="form-group">


      <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Patient'); ?></label>
            <div class="col-sm-7">

               
                       
                            <h3><?php echo $row['name']; ?></h3>
                        
              

            </div>


        </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('date'); ?></label>

                        <div class="col-sm-7">
                            <div class="date-and-time">
                                <input type="text" name="date_timestamp" class="form-control datepicker"
                                       data-format="D, dd MM yyyy"
                                        placeholder="<?php echo get_phrase('date');?>" required>
                                <input type="text" name="time_timestamp" class="form-control timepicker" data-template="dropdown" data-show-seconds="false" data-default-time="00:05 AM" data-show-meridian="false" data-minute-step="5"  placeholder="time here" required>
                            </div>
                        </div>
                    </div>


                 

                    <div class="form-group">
                        <label for="chief_complaint" class="col-sm-3 control-label"><?php echo get_phrase('chief_complaint'); ?></label>

                        <div class="col-sm-9">
                            <textarea id="chief_complaint" name="chief_complaint" class="form-control" rows="8";></textarea>
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="field-ta" class="col-sm-3 control-label"><?php echo get_phrase('medication'); ?></label>

                        <div class="col-sm-9">
                            <textarea name="medication" class="form-control html5editor" id="field-ta" data-stylesheet-url="assets/css/wysihtml5-color.css"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-ta" class="col-sm-3 control-label"><?php echo get_phrase('note'); ?></label>

                        <div class="col-sm-9">
                            <textarea name="note" class="form-control html5editor" id="field-ta" data-stylesheet-url="assets/css/wysihtml5-color.css"></textarea>
                        </div>
                    </div>

                    <div class="col-sm-3 control-label col-sm-offset-2">
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-check"></i> <?php echo get_phrase('save');?>
                        </button>
                    </div>
                </form>

            </div>

        </div>

    </div>
</div>

<?php } ?>


 
<script>


var color = 'Gold';
function get_color(){
    var x = document.getElementById("dental_condition").value;
    if(x=='1')
        return 'black';
    else if(x=='2')
        return 'green';
    else
        return 'blue';

}

function add_text(tooth){
    var x = document.getElementById("dental_condition").value;
    var cc = document.getElementById("chief_complaint").value;
    //var myTextArea = document.getElementById('chief_complaint');
    //myTextArea.innerHTML = 'Missing';
    //document.getElementById("chief_complaint").value = "Fifth Avenue, New York City";
    if(x=='1'){
      
       document.getElementById("chief_complaint").value = cc + "Missing tooth:["+tooth+"]\n";

    }else if(x=='2'){
       document.getElementById("chief_complaint").value = cc + "Cavity on tooth:["+tooth+"]\n";
      
    }


}



/* Child upper right*/
$('.child-tooth-51-parent').css('fill', 'Gold');

$('.child-tooth-51-parent').click(function(){
  $('.child-tooth-51-parent').css('fill', get_color());
  add_text('51');
});

$('.child-tooth-52-parent').css('fill', 'Gold');

$('.child-tooth-52-parent').click(function(){
  $('.child-tooth-52-parent').css('fill', get_color());
    add_text('52');
});

$('.child-tooth-53-parent').css('fill', 'Gold');

$('.child-tooth-53-parent').click(function(){
  $('.child-tooth-53-parent').css('fill', get_color());
    add_text('53');
});

$('.child-tooth-54-parent').css('fill', 'Gold');

$('.child-tooth-54-parent').click(function(){
  $('.child-tooth-54-parent').css('fill', get_color());
    add_text('54');
});

$('.child-tooth-55-parent').css('fill', 'Gold');

$('.child-tooth-55-parent').click(function(){
  $('.child-tooth-55-parent').css('fill', get_color());
    add_text('55');
});

/* Child upper left*/
$('.child-tooth-61-parent').css('fill', 'Gold');

$('.child-tooth-61-parent').click(function(){
  $('.child-tooth-61-parent').css('fill', get_color());
    add_text('61');
});

$('.child-tooth-62-parent').css('fill', 'Gold');

$('.child-tooth-62-parent').click(function(){
  $('.child-tooth-62-parent').css('fill', get_color());
  add_text('62');
});

$('.child-tooth-63-parent').css('fill', 'Gold');

$('.child-tooth-63-parent').click(function(){
  $('.child-tooth-63-parent').css('fill', get_color());
  add_text('63');
});

$('.child-tooth-64-parent').css('fill', 'Gold');

$('.child-tooth-64-parent').click(function(){
  $('.child-tooth-64-parent').css('fill', get_color());
  add_text('64');
});

$('.child-tooth-65-parent').css('fill', 'Gold');

$('.child-tooth-65-parent').click(function(){
  $('.child-tooth-65-parent').css('fill', get_color());
  add_text('65');
});


/* Child lower right*/
$('.child-tooth-81-parent').css('fill', 'Gold');

$('.child-tooth-81-parent').click(function(){
  $('.child-tooth-81-parent').css('fill', get_color());
  add_text('81');
});

$('.child-tooth-82-parent').css('fill', 'Gold');

$('.child-tooth-82-parent').click(function(){
  $('.child-tooth-82-parent').css('fill', get_color());
    add_text('82');
});

$('.child-tooth-83-parent').css('fill', 'Gold');

$('.child-tooth-83-parent').click(function(){
  $('.child-tooth-83-parent').css('fill', get_color());
    add_text('83');
});

$('.child-tooth-84-parent').css('fill', 'Gold');

$('.child-tooth-84-parent').click(function(){
  $('.child-tooth-84-parent').css('fill', get_color());
    add_text('84');
});

$('.child-tooth-85-parent').css('fill', 'Gold');

$('.child-tooth-85-parent').click(function(){
  $('.child-tooth-85-parent').css('fill', get_color());
    add_text('85');
});




/* Child lower left*/
$('.child-tooth-71-parent').css('fill', 'Gold');

$('.child-tooth-71-parent').click(function(){
  $('.child-tooth-71-parent').css('fill', get_color());
    add_text('71');
});

$('.child-tooth-72-parent').css('fill', 'Gold');

$('.child-tooth-72-parent').click(function(){
  $('.child-tooth-72-parent').css('fill', get_color());
   add_text('72');
});

$('.child-tooth-73-parent').css('fill', 'Gold');

$('.child-tooth-73-parent').click(function(){
  $('.child-tooth-73-parent').css('fill', get_color());
   add_text('73');
});

$('.child-tooth-74-parent').css('fill', 'Gold');

$('.child-tooth-74-parent').click(function(){
  $('.child-tooth-74-parent').css('fill', get_color());
   add_text('74');
});

$('.child-tooth-75-parent').css('fill', 'Gold');

$('.child-tooth-75-parent').click(function(){
  $('.child-tooth-75-parent').css('fill', get_color());
   add_text('75');
});
/* Adult */



$('.tooth-11-parent').css('fill', 'CornflowerBlue');

$('.tooth-11-parent').click(function(){
  $('.tooth-11-parent').css('fill', get_color());
   add_text('11');
});


$('.tooth-12-parent').css('fill', 'CornflowerBlue');

$('.tooth-12-parent').click(function(){
  $('.tooth-12-parent').css('fill', get_color());
   add_text('12');
});

$('.tooth-13-parent').css('fill', 'CornflowerBlue');

$('.tooth-13-parent').click(function(){
  $('.tooth-13-parent').css('fill', get_color());
   add_text('13');
});

$('.tooth-14-parent').css('fill', 'CornflowerBlue');

$('.tooth-14-parent').click(function(){
  $('.tooth-14-parent').css('fill', get_color());
   add_text('14');
});


$('.tooth-15-parent').css('fill', 'CornflowerBlue');

$('.tooth-15-parent').click(function(){
  $('.tooth-15-parent').css('fill', get_color());
   add_text('15');
});

$('.tooth-16-parent').css('fill', 'CornflowerBlue');

$('.tooth-16-parent').click(function(){
  $('.tooth-16-parent').css('fill', get_color());
   add_text('16');
});


$('.tooth-17-parent').css('fill', 'CornflowerBlue');

$('.tooth-17-parent').click(function(){
  $('.tooth-17-parent').css('fill', get_color());
   add_text('17');
});

$('.tooth-18-parent').css('fill', 'CornflowerBlue');

$('.tooth-18-parent').click(function(){
  $('.tooth-18-parent').css('fill', get_color());
   add_text('18');
});



/*Segundo Quadrante*/

$('.tooth-21-parent').css('fill', 'CornflowerBlue');

$('.tooth-21-parent').click(function(){
  $('.tooth-21-parent').css('fill', get_color());
   add_text('21');
});



$('.tooth-22-parent').css('fill', 'CornflowerBlue');

$('.tooth-22-parent').click(function(){
  $('.tooth-22-parent').css('fill', get_color());
    add_text('22');
});



$('.tooth-23-parent').css('fill', 'CornflowerBlue');

$('.tooth-23-parent').click(function(){
  $('.tooth-23-parent').css('fill', get_color());
    add_text('23');
});



$('.tooth-24-parent').css('fill', 'CornflowerBlue');

$('.tooth-24-parent').click(function(){
  $('.tooth-24-parent').css('fill', get_color());
    add_text('24');
});



$('.tooth-25-parent').css('fill', 'CornflowerBlue');

$('.tooth-25-parent').click(function(){
  $('.tooth-25-parent').css('fill', get_color());
    add_text('25');
});



$('.tooth-26-parent').css('fill', 'CornflowerBlue');

$('.tooth-26-parent').click(function(){
  $('.tooth-26-parent').css('fill', get_color());
    add_text('26');
});




$('.tooth-27-parent').css('fill', 'CornflowerBlue');

$('.tooth-27-parent').click(function(){
  $('.tooth-27-parent').css('fill', get_color());
    add_text('27');
});



$('.tooth-28-parent').css('fill', 'CornflowerBlue');

$('.tooth-28-parent').click(function(){
  $('.tooth-28-parent').css('fill', get_color());
    add_text('28');
});


/*Terceiro Quadrante*/



$('.tooth-31-parent').css('fill', 'CornflowerBlue');

$('.tooth-31-parent').click(function(){
  $('.tooth-31-parent').css('fill', get_color());
    add_text('31');
});



$('.tooth-32-parent').css('fill', 'CornflowerBlue');

$('.tooth-32-parent').click(function(){
  $('.tooth-32-parent').css('fill', get_color());
    add_text('32');
});


$('.tooth-33-parent').css('fill', 'CornflowerBlue');

$('.tooth-33-parent').click(function(){
  $('.tooth-33-parent').css('fill', get_color());
    add_text('33');
});


$('.tooth-34-parent').css('fill', 'CornflowerBlue');

$('.tooth-34-parent').click(function(){
  $('.tooth-34-parent').css('fill', get_color());
    add_text('34');
});


$('.tooth-35-parent').css('fill', 'CornflowerBlue');

$('.tooth-35-parent').click(function(){
  $('.tooth-35-parent').css('fill', get_color());
    add_text('35');
});



$('.tooth-36-parent').css('fill', 'CornflowerBlue');

$('.tooth-36-parent').click(function(){
  $('.tooth-36-parent').css('fill', get_color());
    add_text('36');
});




$('.tooth-37-parent').css('fill', 'CornflowerBlue');

$('.tooth-37-parent').click(function(){
  $('.tooth-37-parent').css('fill', get_color());
    add_text('37');
});


$('.tooth-38-parent').css('fill', 'CornflowerBlue');

$('.tooth-38-parent').click(function(){
  $('.tooth-38-parent').css('fill', get_color());
    add_text('38');
});


/*Quarto Quadrante*/

$('.tooth-41-parent').css('fill', 'CornflowerBlue');

$('.tooth-41-parent').click(function(){
  $('.tooth-41-parent').css('fill', get_color());
    add_text('41');
});

$('.tooth-42-parent').css('fill', 'CornflowerBlue');

$('.tooth-42-parent').click(function(){
  $('.tooth-42-parent').css('fill', get_color());
      add_text('42');
});

$('.tooth-43-parent').css('fill', 'CornflowerBlue');

$('.tooth-43-parent').click(function(){
  $('.tooth-43-parent').css('fill', get_color());
      add_text('43');
});

$('.tooth-44-parent').css('fill', 'CornflowerBlue');

$('.tooth-44-parent').click(function(){
  $('.tooth-44-parent').css('fill', get_color());
      add_text('44');
});

$('.tooth-45-parent').css('fill', 'CornflowerBlue');

$('.tooth-45-parent').click(function(){
  $('.tooth-45-parent').css('fill', get_color());
      add_text('45');
});

$('.tooth-46-parent').css('fill', 'CornflowerBlue');

$('.tooth-46-parent').click(function(){
  $('.tooth-46-parent').css('fill', get_color());
      add_text('46');
});

$('.tooth-47-parent').css('fill', 'CornflowerBlue');

$('.tooth-47-parent').click(function(){
  $('.tooth-47-parent').css('fill', get_color());
      add_text('47');
});

$('.tooth-48-parent').css('fill', 'CornflowerBlue');

$('.tooth-48-parent').click(function(){
  $('.tooth-48-parent').css('fill', get_color());
      add_text('48');
});


</script>     
