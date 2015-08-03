@yield("show")	

<script type="text/javascript">
$(".loading").addClass("hidden")

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
</script>