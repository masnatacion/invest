
  @yield("top")       

@if(isset($records) and count($records) > 0)

	
  @yield("table")	

  
  <div class="text-center"> 
    <p class="margin-top-lg">{{ "Displaying ".$records->getFrom() ." - ".$records->getTo(). " of ".number_format($records->getTotal())." result(s)"; }}</p>
    {{ $records->links() }} 
  </div>



@elseif(isset($records))
{{ trans('crud.not_records_found'); }}  
@endif
        

<script type="text/javascript">

  $(".show-tabs.active .search").click(function(){
      var tab = $(".show-tabs.active");
      var id = tab.attr("id");
      var form = tab.find("form");

      tabpost("#"+id,form);
      return false;
  });

  $(".show-tabs.active .pagination a").click(function(){
      var id = $(".show-tabs.active").attr("id");
      tabajax("#"+id,$(this).attr("href"));
      return false;
  });

  $(".tab-modal").click(function(event){
      event.preventDefault();
      var $me = $(this);
      $(".loading").removeClass("hidden")
      
      $('#modal .modal-content').load($me.attr("href"),function(result){
          
          $('#modal').modal({show:true}).css("z-index",1041);
          
      });
    });
</script>