  <div class="<?=$input_class != "" ? $input_class:''; ?>">

    <?php if(isset($dbval)){ $time = strtotime($dbval);$the_date = date('d-m-Y',$time);}elseif(isset($_REQUEST[$the_name])){ $time = strtotime($_REQUEST[$the_name]);$the_date = date('d-m-Y',$time);}?>
    <input type="date" 
    class="form_builder_field <?=(@$required != ""?'required':'');?> form-control <?=$the_id?> input-<?=$type;?> type-date field_<?=$the_id?>"
     id="<?=$the_id?>" name="<?=$the_name?>" 
     value="<?=(@$dbval != ""?$dbval:(isset($_REQUEST[$the_name])?$_REQUEST[$the_name]:''));?>" 
     <?=(@$required != ""?'required="required"':'');?> 
     data-id="<?=$the_id?>" 
     data-date="<?=$the_date;?>">
</div>
<div class="response description"><?=@$desc || @$description !=""?@$desc || @$description :'';?></div>