<div class="alert alert-info" id="ajax_notification" role="alert">Follow Up Report: </div>
<form class="form-inline" id="primary_filter" action="<?php echo base_url().'/generic_resport/json_data';?>" method="post">
    <div class="form-group">
        <label for="admit_date">Admit Date: </label>        
        <input class="form-control" type="date" value='' name="admit_date" id="admit_date" size="10" />
    </div>
    <div class="form-group">
        <label for="visit_name">Visit Type: </label>     <br>   
        <select name="visit_name" id="visit_name" class="form-control" >
            <option value="">Visit Type</option>
            <?php 
            foreach($visit_name as $v){
                echo "<option value='".$v->visit_name_id."'";
                if($this->input->post('visit_name') && $this->input->post('visit_name') == $v->visit_name_id) echo " selected ";
                echo ">".$v->visit_name."</option>";
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="">&nbsp; </label><br>
        <button type="submit" id="submit" class="btn btn-default">Submit</button>
    </div>       
</form>

<!--<input type="hidden" name="column_query_strings" id="column_query_strings" value="SBP >=:sbp,nsbp;DBP >=:dbp,ndbp;RBS >=:rbs,nrbs;HB <=:hb,nhb;hb1ac >=:hb1ac,nhb1ac">-->
<!--<p hidden id="column_query_strings">1#SBP >=:sbp~nsbp;2#DBP >=:dbp~ndbp;3#RBS >=:rbs~nrbs;4#HB <=:hb~nhb;5#HBA1C >=:hb1ac~nhb1ac</p>-->
<!--<p hidden id="row_query_strings" >1#Condition met;2#Condition not met</p>-->
<!--<p hidden id="original_row_query_strings" >1#Condition met;2#Condition not met</p>-->
<p hidden id="table_id">detailed_table</p>
<p hidden id="display_route_header">true</p>
<p hidden id="display_query_header">false</p>
<p hidden id="display_column_name">false</p>
<p hidden id="combine_columns">true</p>
<p hidden id="query_strings">follow_up_report</p>
<!--<p hidden id="original_table_id">report_table</p>-->
<!--
<table class="table table-striped" id="report_table">
    <thead>
        <tr>
            <th>#</th>
        </tr>
    </thead>
    <tbody>
    
    </tbody>
    <tfoot>
        
    </tfoot>
</table>
-->
<br><br>
<table class="table table-striped table-bordered" id="detailed_table" >
    <thead>
        
    </thead>
    <tbody><!-- tr td -->
    
    </tbody>
    <tfoot><!-- tr td -->
        
    </tfoot>
</table>
</div>