  <input type="password" 
  class="<?=isset($type_class) && $type_class!="" ? $type_class :'';?><?=(@$required != ""?'required':'');?> 
  form_builder_field form-control <?=$input_class != "" ? $input_class:''; ?> <?=$the_id?> 
  input-<?=$type;?> field_<?=$the_id?>" 
  id="<?=$the_id?>" name="<?=$the_name?>" 
  value="<?=(@$dbval != ""?$dbval:(isset($_REQUEST[$the_name])?$_REQUEST[$the_name]:''));?>" 
  <?=(@$required != ""?'required="required"':'');?> 
  placeholder="<?=$the_label?>" 
  data-id="<?=$the_id?>" 
  minlength="<?=(isset($min) && $min !="") ? $min : '';?>" maxlength="<?=(isset($max) && $max !="") ? $max : '';?>">
  <div class="description response"><?=@$desc || @$description !=""?@$desc || @$description :'';?></div>

