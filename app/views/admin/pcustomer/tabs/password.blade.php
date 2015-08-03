    @if (Session::has('success'))
      <div class="alert alert-success" role="alert">{{ Session::get('success') }} :)</div>
    @endif

    @if (Session::has('error'))
      <div class="alert alert-danger" role="alert">
        {{ Session::get('error') }} :(
      </div>
    @endif
 

    {{ Form::open( array('url' => array('admin/pcustomer/password/'.$id) ,'method' => 'POST','files'  => true)) }}

        <div class="row">
            <div class="col-md-12">
                <div class="form-group @if ($errors->has('password')) has-error @endif">

                    <label for="text">New Password</label>

                    <input class="form-control" placeholder="New Password" name="password" value="" type="password">
                     
                    <span class="help-block">{{ $errors->first('password') }}</span>
                 </div>
            </div>

            <div class="col-md-12">
                <div class="form-group @if ($errors->has('password_confirm')) has-error @endif">

                    <label for="text">New Password (repeat)</label>

                    <input class="form-control" placeholder="New Password (repeat)" name="password_confirm" value="" type="password">
                     
                    <span class="help-block">{{ $errors->first('password_confirm') }}</span>
                </div>
            </div>

            <div class="col-md-12">
                <a href="#" style="margin-bottom: .6em;" class="btn btn-md btn-success search">{{ trans('crud.change') }}</a>
            </div>
        </div>

        

    {{ Form::close() }}



<script type="text/javascript">


  $(".show-tabs.active .search").click(function(){
      var tab = $(".show-tabs.active");
      var id = tab.attr("id");
      var form = tab.find("form");

      tabpost("#"+id,form);
      return false;
  });
</script>


