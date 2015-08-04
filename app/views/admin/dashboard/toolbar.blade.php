        <div id="page-wrapper" class="white dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button class="navbar-minimalize minimalize-styl-2 btn btn-primary " ><i class="fa fa-bars"></i> </button>
            
        </div>
            <ul class="nav navbar-top-links navbar-left">


                <li style="padding-top: 1em;" class="margin-left-xs">
                    <?php


                      $tables = ["inmuebles"=>"inmuebles"]
              
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





   




