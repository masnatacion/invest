@extends("cmb.tabs.index")
@section("table")
<div class="table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Shippers Name</th>
          <th>Consignee Name</th>
          <th>Comments</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>

        @foreach($records as $record)

        <tr>
          <th scope="row">
            <a class="tab-modal" href="./cmb/services/problems/show/{{ $record->id_cmb_nf_probshp }}">{{ $record->id_cmb_nf_probshp }}</a>
          </th>
          <td>{{ $record->shippers_name }}</td>
          <td>{{ $record->consignee_name }}</td>
          <td>{{ $record->comments }}</td>
          <td>{{ $record->status }}</td>

        </tr>



        @endforeach
       </tbody>
    </table>
  </div>
@stop
