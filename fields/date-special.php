  <div class="<?=$input_class != "" ? $input_class:''; ?>">

    <?php if(isset($dbval)){ $time = strtotime($dbval);$the_date = date('d-m-Y',$time);}elseif(isset($_REQUEST[$the_name])){ $time = strtotime($_REQUEST[$the_name]);$the_date = date('d-m-Y',$time);}?>
    <input type="text" 
    class="form_builder_field <?=(@$required != ""?'required':'');?> form-control <?=$the_id?> input-<?=$type;?> field_<?=$the_id?>"
     id="<?=$the_id?>" name="<?=$the_name?>" 
     value="<?=(@$dbval != ""?$dbval:(isset($_REQUEST[$the_name])?$_REQUEST[$the_name]:''));?>" 
     <?=(@$required != ""?'required="required"':'');?> 
     data-id="<?=$the_id?>" 
     data-date="<?=$the_date;?>">
     <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
     <script>
(function($){
  //$('head').append('<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript" />');
  $('head').append('<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />');
  
  $('#<?=$the_name?>').datepicker({
    uiLibrary: 'bootstrap4',
    format: 'dd mmm yyyy' 
  });
  
})(jQuery);
</script>    
</div>
<div class="response description"><?=@$desc || @$description !=""?@$desc || @$description :'';?></div>