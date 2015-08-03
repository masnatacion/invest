@extends("cmb.tabs.index")
@section("table")
<div class="table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Date</th>
          <th>Shipper/Consignee</th>
          <th>Tracking/Driver</th>
          <th>Notes</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>

        @foreach($records as $record)

        <tr>
          <th scope="row">
            <a class="tab-modal" href="./cmb/services/returned/show/{{ $record->id_returned_items }}">{{ $record->id_returned_items }}</a>
          </th>
          <td>{{ $record->date }}</td>
          <td>{{ $record->shipper }} / {{ $record->consignee }}</td>
          <td>{{ $record->tracking }} / {{ $record->driver }}</td>
          <td>{{ $record->notes }}</td>
          <td>{{ $record->status }}</td>
        </tr>



        @endforeach
       </tbody>
    </table>
  </div>
@stop