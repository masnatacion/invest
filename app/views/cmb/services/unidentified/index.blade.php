@extends("cmb.tabs.index")
@section("table")
<div class="table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Date</th>
          <th>Shipper Name</th>
          <th>Consignee</th>
          <th>Pieces</th>
        </tr>
      </thead>
      <tbody>

        @foreach($records as $record)

        <tr>
          <th scope="row">
            <a class="tab-modal" href="./cmb/services/unidentified/show/{{ $record->id_cmb_nf_lost_items }}">{{ $record->id_cmb_nf_lost_items }}</a>
          </th>
          <td>{{ Date::createFromFormat('Y-m-d H:i:s', $record->created_by)->format('d-M-Y') }}</td>
          <td>{{ $record->shipper_name }} </td>
          <td>{{ $record->tracking }} / {{ $record->driver }}</td>
          <td>{{ $record->consignee }}</td>
          <td>{{ $record->pieces }}</td>
        </tr>



        @endforeach
       </tbody>
    </table>
  </div>
@stop
