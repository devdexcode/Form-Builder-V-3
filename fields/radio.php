<?php foreach($options as $option):?>
  <label class="<?=$input_class != "" ? $input_class:''; ?> "><input type="radio" 
  class="form_builder_field <?=(@$required != ""?'required':'');?> <?=$the_id?> input-<?=$type;?> field_<?=$the_id?>" 
  id="<?=$option;?>" 
  name="<?=@$the_name?>" 
  <?php echo (@$dbval == @$option?'checked="checked"':(isset($_REQUEST[@$the_name]) && $_REQUEST[@$the_name]==@$option? 'checked="checked"':''));?>
  data-id="<?=@$the_name?>"
  value="<?=$option;?>">
  <span><?=ucfirst(@$option);?></span>
</label>
<?php endforeach;?>
  <div class="response description"><?=@$desc || @$description !=""?@$desc || @$description :'';?></div>
