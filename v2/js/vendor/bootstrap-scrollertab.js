function tabajax(id,url)
{

    $.ajax({
        url       : url,
        type      : 'GET',
        cache     : false,
        contentType: false,
        processData: false,

        beforeSend: function(){
            $(id).html("<div class='padding-md'><img src='./img/loading.gif'/></div>");  
        },
    }).done(function(data){
      $(id).html(data);
    });


}

function tabpost(id,form)
{
    $(id).html("<div class='padding-md'><img src='./img/loading.gif'/></div>");    


    var url = form.attr("action");
    var formData = new FormData(form);

    $.ajax({
        url       : url,
        type      : 'POST',
        data      : formData,
        cache     : false,
        contentType: false,
        processData: false,

    }).done(function(data){
      $(id).html(data);
    });

}


$(function () { 

  if($('.list').length)
  {
    var hidWidth;
    var scrollBarWidths = 40;

    var widthOfList = function(){
      var itemsWidth = 0;
      $('.list li').each(function(){
        var itemWidth = $(this).outerWidth();
        itemsWidth+=itemWidth;
      });
      return itemsWidth;
    };

    var widthOfHidden = function(){
      return (($('.wrapper').outerWidth())-widthOfList()-getLeftPosi())-scrollBarWidths;
    };

    var getLeftPosi = function(){
      return $('.list').position().left;
    };

    var reAdjust = function(){
      if (($('.wrapper').outerWidth()) < widthOfList()) {
        $('.scroller-right').show();
      }
      else {
        $('.scroller-right').hide();
      }
      
      if (getLeftPosi()<0) {
        $('.scroller-left').show();
      }
      else {
        $('.item').animate({left:"-="+getLeftPosi()+"px"},'slow');
        $('.scroller-left').hide();
      }
    }

    reAdjust();

    $(window).on('resize',function(e){  
        reAdjust();
    });

    $('.scroller-right').click(function() {
      
      $('.scroller-left').fadeIn('slow');
      $('.scroller-right').fadeOut('slow');
      
      $('.list').animate({left:"+="+widthOfHidden()+"px"},'slow',function(){

      });
    });

    $('.scroller-left').click(function() {
      
      $('.scroller-right').fadeIn('slow');
      $('.scroller-left').fadeOut('slow');
      
        $('.list').animate({left:"-="+getLeftPosi()+"px"},'slow',function(){
        
        });
    }); 
  }



  // tabs
  // http://jsfiddle.net/adrienne/La2765jn/

  $('[data-toggle="tabajax"]').click(function(e) {
      var $this = $(this),
          loadurl = $this.attr('href'),
          targ = $this.attr('data-target');

      tabajax(targ,loadurl);

      $this.tab('show');

      return false;
  });



  // load first tab content
  $('.nav-tabs .active a').trigger("click")
   

});  