@extends("cmb.tabs.index")
@section("table")

<h2 class="margin-bottom-xs">Shop America</h2>

<div class="pagination">
  <a href="cmb/services/shopamerica/create" class="btn btn-lg btn-success">Create</a> 
</div>

<div class="table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Date</th>
          <th>Company Name</th>
          <th>Item Name</th>
          <th>Value</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>

        @foreach($records as $record)

        <tr>
          <th scope="row">
          	<a class="tab-modal" href="./cmb/services/shopamerica/show/{{ $record->id_pobox_items }}">{{ $record->id_pobox_items }}</a>
          </th>
          <td>{{ Date::createFromFormat('Y-m-d H:i:s', $record->created_at)->format('d-M-Y') }}</td>
          <td>{{ $record->company_name }}</td>
          <td>{{ $record->item_description }}</td>
          <td>$ {{ $record->declared_value }}</td>
          <td>{{ $record->claim_status }}</td>
        </tr>



        @endforeach
       </tbody>
    </table>
  </div>
@stop

