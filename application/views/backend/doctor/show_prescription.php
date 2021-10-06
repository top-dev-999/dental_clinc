<?php
$edit_data      = $this->db->get_where('prescription', array('prescription_id' => $param2))->result_array();
foreach ($edit_data as $row):
$patient_info   = $this->db->get_where('patient' , array('patient_id' => $row['patient_id'] ))->result_array();
?>
    <div id="prescription_print">
        <table width="100%" border="0">
            <tr>
                <td align="center" valign="top">
                    <img src="<?php echo base_url('uploads/logo_white.png');?>" style="max-height:80px;">
                </td>

            </tr>
        </table>
        <hr>
        <table width="100%" border="0">
            <tr>
                <td align="left" valign="top">
                    <?php foreach ($patient_info as $row2){ ?>
                        <?php echo 'Patient Name: '.$row2['name']; ?><br>
                        <?php echo 'NID/PPN: '.$row2['nid'].$row2['ppno']; ?><br>
                        <?php echo 'Age: '.$row2['age']; ?><br>
                        <?php echo 'Sex: '.$row2['sex']; ?><br>
                    <?php } ?>
                </td>

            </tr>
        </table>
        <hr>
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-primary" data-collapsed="0">
                        
                    <div class="panel-body">
                                                        

                        <b><?php echo get_phrase('case_history'); ?> :</b>
                        
                        <p><?php echo $row['case_history']; ?></p>
                        
                        <hr>
                        <b><?php echo get_phrase('diagnosis'); ?> :</b>
                        
                        <p><?php echo $row['diagnosis']; ?></p>
                        
                        <hr>
                        <b><?php echo get_phrase('medication'); ?> :</b>
                        
                        <p><?php echo $row['medication']; ?></p>
                        
                        <hr>
                        
                        <b><?php echo get_phrase('note'); ?> :</b>
                        
                        <p><?php echo $row['note']; ?></p>

                    </div>

                </div>

            </div>
        </div>
        <hr>
        <table width="100%" border="0">
            <tr>

                <td align="right" valign="top">
                    <?php $doc = $this->db->get_where('doctor' , array('doctor_id' => $row['doctor_id'] ))->row();
                          echo 'Doctor Name: '.$doc->name;?><br>
                    <?php echo 'PMR/TMR: '.$doc->pmr; ?><br>
                    <?php echo 'Date: '.date("d M, Y", $row['timestamp']); ?><br>
                 
                </td>
            </tr>
        </table>
    </div>
    <br>

    <a onClick="PrintElem('#prescription_print')" class="btn btn-primary hidden-print">
        <i class="fa fa-print"></i>&nbsp;
        <?php echo get_phrase('print_prescription');?>
    </a>
<?php endforeach; ?>




<script type="text/javascript">

    function PrintElem(elem)
    {
        Popup($(elem).html());
    }

    function Popup(data)
    {
        var mywindow = window.open('', 'prescription', 'height=400,width=600');
        mywindow.document.write('<html><head><title>Prescription</title>');
        mywindow.document.write('<link rel="stylesheet" href="<?php echo base_url('assets/css/neon-theme.css');?>" type="text/css" />');
        mywindow.document.write('<link rel="stylesheet" href="<?php echo base_url('assets/js/datatables/responsive/css/datatables.responsive.css');?>" type="text/css" />');
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.print();
        mywindow.close();

        return true;
    }

</script>