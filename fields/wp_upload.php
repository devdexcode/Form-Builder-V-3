<input type="text" readonly name="<?=$the_name?>" id="<?=$the_id?>" value="<?= ($dbval  != "") ? ($dbval ) : ''; ?>" 
class=" col-sm-6 form-control <?=isset($type_class) && $type_class!="" ? $type_class :'';?><?=(@$required != ""?'required':'');?> form_builder_field form-control <?=$input_class != "" ? $input_class:''; ?> <?=$the_id?> input-<?=$type;?> field_<?=$the_id?>" />
<input class="btn btn-primary" type="button" name="<?=$the_id?>" id="<?=$the_id?>-btn" class="btn btn-primary" value="Upload Image" data-id="<?=$the_id?>">
<div class="<?=$the_id?>_imagearea  col-sm-3">
    <div class="images_parent_class">
        <div class="<?=$the_id?>-delete delete_btn">X</div>
        <img src="<?= ($dbval  != "") ? ($dbval) : ''; ?>" id="<?=$the_id?>-img" class="<?= ($dbval  != "") ? 'img-thumbnail' : ''; ?>" style="margin-left: auto; margin-right: auto; display: block;"/>
    </div>
</div>

<div class="description response"><?=@$desc || @$description !=""?@$desc || @$description :'';?></div>
        <script>
var $ = jQuery;
jQuery(document).ready(function ($) {
$("#<?=$the_id?>-btn").click(function (e) {
    e.preventDefault();
    var image = wp.media({
        title: "Upload Image",
        // mutiple: true if you want to upload multiple files at once
        multiple: false
    }).open()
            .on("select", function (e) {
                // This will return the selected image from the Media Uploader, the result is an object
                var uploaded_image = image.state().get("selection").first();
                // We convert uploaded_image to a JSON object to make accessing it easier
                // Output to the console uploaded_image
                console.log(uploaded_image);
                var image_url = uploaded_image.toJSON().url;
                // Lets assign the url value to the input field
                $('#<?=$the_id?>').val(image_url);
                $('#<?=$the_id?>-img').attr('src', image_url);
                $('#<?=$the_id?>-img').addClass();
                $('.<?=$the_id?>-delete').show();
            });
});
});
$(document).on('click', '.<?=$the_id?>-delete', function () {
$('#<?=$the_id?>').val('');
$('#<?=$the_id?>-img').attr('src', '');
$('.<?=$the_id?>-delete').hide();
});
</script>
<style>.<?=$the_id?>-delete{display: none;<?= ($dbval != "") ? 'display: block;' : '' ?> color: white;font-weight: bold;cursor: pointer;position: absolute;top: -10px;right: -10px;border: 2px solid red;border-radius: 50px;text-align: center; width: 18px;height: 18px;background-color: red;}
.images_parent_class{display: inline-block;position:relative;width: 150px;height: 150px;}
.images_parent_class img{max-width:100%;width:100%;height:auto;}.<?=$the_id?>_imagearea {float: right;}</style>

  
  
  
  
  
  
  
  
  
  
  