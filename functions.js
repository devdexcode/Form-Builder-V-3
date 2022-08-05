/* * * * * * * * * * *
 * * VALIDATION  * * * 
 * * * * * * * * * * */ 
    function form_validator(submit_btn,req_class){
        // $(submit_btn).on('click',function(e){
        // e.preventDefault();
        $.each($(req_class),function(){
            let _this    =  $(this);
            let the_type =  _this[0].type;
            // debugger;
            let the_name = _this.attr('name');
            if(_this.val() === ""){
                handle_error( 'Please provide '+make_label(_this.prop("id"))  ,_this );
                ValidationError = 1;
                return false;
            }else if( _this.val().length < _this.attr('minlength') ){ //debugger;
                handle_error( 'The '+make_label(_this.prop("id"))+' must be at least '+_this.attr('minlength')+' characters!' ,_this);
                ValidationError = 1;
                return false;
            }else if(the_type =='radio' && $("input[name='"+the_name+"']:checked").length == 0){
                    handle_error( 'Please choose '+make_label(_this.prop("name")) ,_this);
                    ValidationError = 1;
                    return false;
            }else if(the_type =='checkbox' && $("input[name='"+the_name+"']:checked").length == 0){
                // handle_error( 'Please provide '+make_label(_this.prop("id")) ,_this);
                handle_error( 'This field is required!' , _this);
                ValidationError = 1;
                return false;
            } else if(the_type =='email' && isValidEmail(_this.val())==false){
                handle_error( 'Please enter a valid email!' ,_this);
                ValidationError = 1;
                return false;
            }else{
                remove_error(_this);
                ValidationError = 0;
                console.log('Good to go...');
                _this.closest('.form_builder_row').find('.response').hide();
                _this.removeClass('border-danger');
                // return true;
            }

        });//ends each loop

    }//ENDS JQUERY FORM VALIDATION 


/* * * * * * * * * * * * * * * * * * * * **
* STARTS ON CHANGE                        *
* * * * * * * * * * * * * * * * * * * * ***/ 
       $('.form_builder_field.required').on('focusout',function(e){
            let _this    =  $(this);
            let the_name = _this.attr('name');
            if(_this.val() != ""){
                _this.closest('.form_builder_row').find('.response').hide();
                _this.removeClass('border-danger');
            }else if(_this.val() == ""){
                err = 'Please provide '+make_label(_this.prop("id"))  ;
                _this.closest('.form_builder_row').find('.response').show();
                _this.closest('.form_builder_row').find('.response').html(err).addClass('text-danger');
                _this.addClass('border-danger');
    
                Error = 1;
                return false;
            }else if( _this.val() >= _this.attr('minlength') ){
                _this.closest('.form_builder_row').find('.response').hide();
                _this.removeClass('border-danger');
            }else if( _this.val() <  _this.attr('minlength') ){
                err =  'The '+make_label(_this.prop("id"))+' must be at least '+_this.attr('minlength')+'characters!';
                _this.closest('.form_builder_row').find('.response').show();
                _this.closest('.form_builder_row').find('.response').html(err).addClass('text-danger');
                _this.addClass('border-danger');                
                Error = 1;
                return false;
            }else if(the_type =='radio' && $("input[name='"+the_name+"']:checked").length == 1){
                _this.closest('.form_builder_row').find('.response').hide();
                _this.removeClass('border-danger');
            }else if(the_type =='radio' && $("input[name='"+the_name+"']:checked").length == 0){
                err =   'Please choose '+make_label(_this.prop("id")) ;
                _this.closest('.form_builder_row').find('.response').show();
                _this.closest('.form_builder_row').find('.response').html(err).addClass('text-danger');
                _this.addClass('border-danger');                
                Error = 1;
                return false;
            }else if(the_type =='checkbox' && $("input[name='"+the_name+"']:checked").length == 0){
                _this.closest('.form_builder_row').find('.response').hide();
                _this.removeClass('border-danger');
            }else if(the_type =='checkbox' && $("input[name='"+the_name+"']:checked").length == 1){
                err =  'This field is required!' ;
                _this.closest('.form_builder_row').find('.response').show();
                _this.closest('.form_builder_row').find('.response').html(err).addClass('text-danger');
                _this.addClass('border-danger');                
                Error = 1;
                return false;
            }else if(the_type =='email' && isValidEmail(_this.val())==true){
                _this.closest('.form_builder_row').find('.response').hide();
                _this.removeClass('border-danger');
            }else if(the_type =='email' && isValidEmail(_this.val())==false){
                err =  'Please enter a valid email!' ;
                _this.closest('.form_builder_row').find('.response').show();
                _this.closest('.form_builder_row').find('.response').html(err).addClass('text-danger');
                _this.addClass('border-danger');
                Error = 1;
                return false;
            }
        });//on change

/* * * * * * * * * * * * * * * * * * * *
* HELPER FUNCTIONS                     *
** * * * * * * * * * * * * * * * * * * */ 
function handle_error(err, field){
    field.closest('.form_builder_row').find('.response').show();
    field.closest('.form_builder_row').find('.response').html(err).addClass('text-danger');
    field.addClass('border-danger');
    
    $('html, body').animate({
            scrollTop: field.offset().top
        }, 2000);
        field.focus();
}

function remove_error(field){
    field.closest('.form_builder_row').find('.response').hide();
    field.removeClass('border-danger');
    // $('.form_builder_submit').prop('disabled', false);
}
    
function make_label(target){
    let object_label = target.replace(/_/g, ' ').replace(/#/g, '');
    return object_label;
}
   
/**************************************
 * Universal Functions 
 **************************************/
 function isValidEmail(email) {
    var EmailRegex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return EmailRegex.test(email);
} 

 $('.alpha_only, .alpha').bind('keyup blur',function(){ 
    var node = $(this);
    node.val(node.val().replace(/[^a-z]/g,'') ); }
);
$('.alpha_space_only, .alpha_space').bind('keyup blur',function(){ 
    var node = $(this);
    node.val(node.val().replace(/[^a-z ]/g,'') ); }
 );
 $('.alpha_space_dash_only, .alpha-space').bind('keyup blur',function(){ 
    var node = $(this);
    node.val(node.val().replace(/[^a-z -]/g,'') ); }
 );
$('.numeric_only, .numeric, .numbers_only').bind('keyup blur',function(){ 
   var node = $(this);
   node.val(node.val().replace(/[^0-9]/g,'') ); }
);
$('.alpha_numeric_only, .alpha_numeric').bind('keyup blur',function(){ 
   var node = $(this);
   node.val(node.val().replace(/[^a-z0-9]/g,'') ); }
);
$('.alpha_numeric_dash, .no_special_chars').bind('keyup blur',function(){ 
   var node = $(this);
   node.val(node.val().replace(/[^a-z0-9 -]/g,'') ); }
);