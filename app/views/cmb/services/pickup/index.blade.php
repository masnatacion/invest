@extends("cmb.tabs.index")
@section("table")
<h2 class="margin-bottom-xs">Pickup / Delivery</h2>
<div class="pagination">
  <a href="cmb/services/pickup/create" class="btn btn-lg btn-success">Create</a> 
</div>

<div class="table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Date</th>
          <th>Company Name</th>
          <th>Contact Name</th>
          <th>Consignee</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>

        @foreach($records as $record)

        <tr>
          <th scope="row">
            <a class="tab-modal" href="./cmb/services/pickup/show/{{ $record->id_cmb_nf_pickup }}">{{ $record->id_cmb_nf_pickup }}</a>
            
          </th>
          <td>{{ Date::createFromFormat('Y-m-d H:i:s', $record->created_at)->format('d-M-Y') }}</td>
          <td>{{ $record->company }}</td>
          <td>{{ $record->contact_name }}</td>
          <td>{{ $record->consignee }}</td>
          <td>{{ $record->status }}</td>
        </tr>



        @endforeach
       </tbody>
    </table>
  </div>
@stop