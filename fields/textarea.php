  <textarea class="form_builder_field <?=(@$required != ""?'required':'');?> form-control <?=($input_class !="" ? $input_class:''); ?> <?=$the_id?> input-<?=$type;?> field_<?=$the_id?>" id="<?=$the_id?>" name="<?=$the_name?>" <?=(@$required != ""?'required="required"':'');?> placeholder="<?=$the_label?>" data-id="<?=$the_id?>"><?=(@$dbval != ""?$dbval:(isset($_REQUEST[$the_name])?$_REQUEST[$the_name]:''));?></textarea>
  <div class="description response"><?=@$desc || @$description !=""?@$desc || @$description :'';?></div>
