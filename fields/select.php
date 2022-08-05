<select class="form_builder_field <?=(@$required != ""?'required':'');?> <?=$input_class != "" ? $input_class:''; ?> <?=$the_id?> input-<?=$type;?> field_<?=$the_id?> form-control" id="<?=$the_id?>" 
  name="<?=$the_name?>" data-id="<?=$the_name?>">
  <option></option>
<?php foreach(@$options as $option):?>
    <option value="<?=(@$option);?>" <?php echo (@$dbval == @$option?'selected="selected"':((isset($_REQUEST[@$the_name]) && $_REQUEST[@$the_name]==@$option) ? 'selected="selected"':''));?>><?=ucfirst(@$option);?></option>
<?php endforeach;?>
</select>
  <div class="description response"><?=@$desc || @$description !=""?@$desc || @$description :'';?></div>
