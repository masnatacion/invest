function FormAjax()
{
    
    var me = this;

    if(arguments[0])
        me.callback = arguments[0];

    $("form[data-async] .cancel").click(function(event){
        event.preventDefault();
        var $me = $(this);

        $('#modal').modal('hide');
    });

    $('form[data-async]').on('submit', function(event) {
        
        var $form = $(this);

        var formData = new FormData($form);

         
        
        $.ajax({
            type        : $form.attr('method'),
            url         : $form.attr('action'),
            data        : formData,
            cache       : false,
            contentType : false,
            processData : false,
            beforeSend  : function(){
                $form.html("<img src='./img/loading.gif'/>"); 
            }
        }).done(function(data){

          FormAjax(me.callback(data));  
          
        });

        return false;
    });
}