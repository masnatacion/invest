

@extends("cmb.tabs.index")
@section("table")
<div class="table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Date</th>
          <th>Payment</th>
          <th>Description</th>
          <th>Amount</th>
          <th>Type</th>
        </tr>
      </thead>
      <tbody>

        @foreach($records as $record)

        <tr>


          <td>{{ $record->id_payments }}</td>
          <td>{{ $record->paydate }}</td>
          <td>{{ $record->paymethod }}</td>
          <td>{{ $record->description }}</td>
          <td>{{ $record->amount }}</td>
          <td>{{ $record->ptype }}</td>

        </tr>



        @endforeach
       </tbody>
    </table>
  </div>
@stop
        

