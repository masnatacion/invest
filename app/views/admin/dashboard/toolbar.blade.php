        <div id="page-wrapper" class="white dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button class="navbar-minimalize minimalize-styl-2 btn btn-primary " ><i class="fa fa-bars"></i> </button>
            
        </div>
            <ul class="nav navbar-top-links navbar-left">
                <li class="hidden-xs" style="padding-top: 1em;">
                    <?php

                      $agencies = Session::get("agency");
                      $agencies = $agencies ? json_decode($agencies) : [];
                      $data     = [];

                      foreach ($agencies as $agency)
                       $data[$agency->id_agency] = $agency->company_name;
                      
                      if(count($data) > 0)
                      {
                        $id_agency = isset($_COOKIE["id_agency"]) ? $_COOKIE["id_agency"] : "";
                    ?>
                        {{ Form::combo("id_agency",$id_agency,['class' => 'form-control','placeholder'=>"Agency",'id'=>'id_agency','disable-choose'=>'disable-choose'],$data); }}
                    <?php

                      }
                    
                    ?>
                </li>

                <li style="padding-top: 1em;" class="margin-left-xs">
                    <?php

                      $tables = Session::get("tables");
                      $tables = $tables ? json_decode($tables,true) : [];
              
                    ?>
                      
                    {{ Form::open( array('url' => array(getenv('APP_ADMIN_PREFIX').'/search'), 'method' => 'POST','class'  => 'form-inline')) }}
                        <div class="form-group">
                          {{ Form::combo("table",'',['style'=>'width:10em','class' => 'form-control','placeholder'=>"",'disable-choose'=>'disable-choose'],$tables); }}
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" name="search" placeholder="ID" size="3">
                        </div>

                        {{ Form::submit(trans('crud.search'), array('class' => 'btn btn-success')) }}

                    {{ Form::close() }}
                </li>
                <li style="padding-top: 0.5em;" class="margin-left-xs">

                    {{ Form::open( array('url' => array(getenv('APP_ADMIN_PREFIX').'/search/tracking'), 'method' => 'POST','class'  => 'form-inline')) }}
                        <div class="form-group">
                          <input type="text" class="form-control" name="tracking" placeholder="Tracking" size="8">
                        </div>

                        {{ Form::submit(trans('crud.search'), array('class' => 'btn btn-info')) }}

                    {{ Form::close() }}
                </li>
                <li style="padding-top: 1em;">
                      {{ Form::open( array('url' => array(getenv('APP_ADMIN_PREFIX').'/customer/autologin'), 'target' => '_blank','method' => 'POST','class'  => 'form-inline')) }}
                        <div class="form-group">
                          <label for="exampleInputName2" class="margin-right-xs">Customer Login</label>
                          <input type="text" class="form-control" name="id" placeholder="ID" size="4">
                        </div>
                      
                        {{ Form::submit('Go', array('class' => 'btn btn-warning')) }}

                      {{ Form::close() }}
                </li>
            </ul>
              
            <ul class="nav navbar-top-links navbar-right">




                <li>
               
                    <a href="{{ getenv('APP_ADMIN_PREFIX') }}/logout">
                        <i class="fa fa-sign-out"></i> {{ trans('crud.logout') }}
                    </a>
                </li>

            </ul>

        </nav>
        </div>





   




