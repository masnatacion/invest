@extends("cmb.tabs.index")
@section("table")
<div class="table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Date</th>
          <th>Name</th>
          <th>Total</th>
          <th>Balance</th>
        </tr>
      </thead>
      <tbody>

        @foreach($records as $record)

        <tr>


          <td>{{ $record->id_invoice }}</td>
          <td>{{ $record->date }}</td>
          <td>{{ $record->name }}</td>
          <td>{{ $record->total }}</td>
          <td>{{ $record->balance }}</td>

        </tr>



        @endforeach
       </tbody>
    </table>
  </div>
@stop
        


