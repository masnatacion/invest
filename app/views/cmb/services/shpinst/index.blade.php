@extends("cmb.tabs.index")


@section("table")


<h2 class="margin-bottom-xs">Shpping instructions</h2>
<div class="pagination">
  <a href="cmb/services/shpinst/create" class="btn btn-lg btn-success">Create</a> 
</div>


<div class="table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Date</th>
          <th>Shippers Name</th>
          <th>Shippers Company</th>
          <th>Shipping Service</th>
          <th>Consignee Name</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>

        @foreach($records as $record)

        <tr>
          <th scope="row">
            <a class="tab-modal" href="./cmb/services/shpinst/show/{{ $record->id_cmb_nf_shpinst }}">{{ $record->id_cmb_nf_shpinst }}</a>
          </th>
          <td>{{ Date::createFromFormat('Y-m-d H:i:s', $record->created_at)->format('d-M-Y') }}</td>
          <td>{{ $record->shippers_name }}</td>
          <td>{{ $record->shippers_company }}</td>
          <td>{{ $record->shipping_service }}</td>
          <td>{{ $record->consignee_name }}</td>
          <td>{{ $record->status }}</td>
        </tr>



        @endforeach
       </tbody>
    </table>
  </div>
@stop