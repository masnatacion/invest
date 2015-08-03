@extends("cmb.tabs.index")
@section("table")
<div class="table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Date</th>
          <th>AWB</th>
          <th>Consignee</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>

        @foreach($records as $record)

        <tr>

          <th scope="row">
            <a class="tab-modal" href="./cmb/services/claims/show/{{ $record->id_cmb_nf_claims }}">{{ $record->id_cmb_nf_claims }}</a>
          </th>
          <td>{{ $record->date_shipped }}</td>
          <td>{{ $record->id_awb }}</td>
          <td>{{ $record->consignee }}</td>
          <td>{{ $record->status }}</td>

        </tr>



        @endforeach
       </tbody>
    </table>
  </div>
@stop
        



