<div class="<?=$input_class != "" ? $input_class : '';?> <?=$the_id?> input-<?=$type;?> field_<?=$the_id?>">
    <input type="hidden" 
    value="<?=(@$dbval != "" ? @$dbval : @$val);?>" 
    id="<?=$the_name?>" name="<?=$the_name?>_value" 
    class="img_src hidden" data-id="<?=$the_id?>">
    <input type="file" class="form_builder_field <?=(@$required != ""?'required':'');?> 
    <?=$the_name?>_file btn btn-outline pull-left" 
    id="<?=$the_id?>" name="<?=$the_name?>" 
    <?=(@$required != "" ? 'required="required"' : '');?>
     accept="image/*" 
     style="width:70%;"
     onChange="document.getElementById('<?=$the_id?>_preview').src = window.URL.createObjectURL(this.files[0]);document.getElementById('<?=$the_id?>_preview').style.display = 'block'"/>
    <!-- <button type="button" id="<?=$the_name?>_btn" class="btn btn-info btn-upload">Upload</button> -->
    <img src="<?=(@$dbval != "" ? $dbval : '');?>" id="<?=$the_name?>_preview" class="img-disp pull-right img-thumbnail" style="max-width:90px;display:none;"/>
    <div class="col-sm-12 text-danger" id="<?=$the_name?>_photo_resp"></div>
    <div class="description response"><?=@$desc || @$description !=""?@$desc || @$description :'';?></div>
</div>