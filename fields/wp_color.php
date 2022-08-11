  <input type="text" 
  class="cpa-color-picker <?=isset($type_class) && $type_class!="" ? $type_class :'';?><?=(@$required != ""?'required':'');?> form_builder_field form-control <?=$input_class != "" ? $input_class:''; ?> <?=$the_id?> input-<?=$type;?> field_<?=$the_id?>" 
  id="<?=$the_id?>" name="<?=$the_name?>" 
  value="<?=(@$dbval != ""?$dbval:'');?>" 
  <?=(@$required != ""?'required="required"':'');?> 
  data-id="<?=$the_id?>">
  <div class="description response"><?=@$desc || @$description !=""?@$desc || @$description :'';?></div>

