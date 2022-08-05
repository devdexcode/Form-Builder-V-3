<select class="form_builder_field <?=(@$required != ""?'required':'');?> <?=$input_class != "" ? $input_class:''; ?> <?=$the_id?> input-<?=$type;?> type-select kvselect field_<?=$the_id?> form-control" id="<?=$the_id?>" 
  name="<?=$the_name?>" data-id="<?=$the_name?>">
  <option></option>
<?php foreach(@$options as $k => $v):?>
    <option value="<?=(@$k);?>" <?php echo (@$dbval == @$k?'selected="selected"':((isset($_REQUEST[@$the_name]) && $_REQUEST[@$the_name]==@$k) ? 'selected="selected"':''));?>><?=ucfirst(@$v);?></option>
<?php endforeach;?>
</select>
  <div class="description response"><?=@$desc || @$description !=""?@$desc || @$description :'';?></div>
