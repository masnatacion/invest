@extends("cmb.tabs.index")
@section("table")

  <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>POBOX</th>
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
              <a class="tab-modal" href="./cmb/warehouse/inbox/show/{{ $record->id_pobox }}">{{ $record->id_pobox }}</a>
            </th>

            <td>{{ $record->created_at }}</td>
            <td>{{ $record->description }}</td>
            <td>{{ $record->pieces }}</td>
            <td>{{ $record->tchg_weight }}</td>

            
          </tr>

          @endforeach
         </tbody>
      </table>
    </div>
          

@stop
