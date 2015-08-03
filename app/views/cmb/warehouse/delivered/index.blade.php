@extends("cmb.tabs.index")
@section("table")

  <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>AWB</th>
            <th>Date</th>
            <th>Description</th>
            <th>Pieces</th>
            <th>Weight</th>

          </tr>
        </thead>
        <tbody>

          @foreach($records as $record)
          <tr>
            <th scope="row">
              <a class="tab-modal" href="./cmb/warehouse/delivered/show/{{ $record->id_awb }}">{{ $record->id_awb }}</a>
            </th>

            <td>{{ Date::createFromFormat('Y-m-d H:i:s', $record->created_at)->format('d-M-Y') }}</td>
            <td>{{ $record->destination }}</td>
            <td>{{ $record->pieces }}</td>
            <td>{{ $record->weight }}</td>

            
          </tr>

          @endforeach
         </tbody>
      </table>
    </div>
          

@stop
