<div class="<?=$input_class != "" ? $input_class : '';?>">
<input type="range" 
class="form_builder_field  form-control <?=(@$required != ""?'required':'');?> <?=$the_id?> input-<?=$type;?> field_<?=$the_id?>"
name="weight" id="<?=$the_id?>" 
value="<?=(@$dbval != ""?$dbval:(isset($_REQUEST[$the_name])?$_REQUEST[$the_name]:''));?>" <?=(@$required != ""?'required="required"':'');?>
min="<?=@$min?>" max="<?=@$max?>" 
oninput="range_weight_disp.value = <?=$the_name?>.value">
   <output id="range_weight_disp"><?=$_POST[$the_name];?></output>
   <div class="description response"><?=@$desc || @$description !=""?@$desc || @$description :'';?></div>
</div>   
