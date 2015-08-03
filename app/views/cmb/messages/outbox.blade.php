
        
@if(count($messages) > 0)
<div class="table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>From</th>
          <th>Date</th>
          <th>Subject</th>
          <th>Tag</th>
        </tr>
      </thead>
      <tbody>

        @foreach($messages as $message)
        <tr>
          <td>{{ $message->from_name }}</td>
          <td>{{ Date::createFromFormat('Y-m-d H:i:s', $message->created_at)->format('d-M-Y') }}</td>
          <th scope="row">{{ $message->description }}</th>
          <td>New</td>
        </tr>

        @endforeach
       </tbody>
    </table>
  </div>
@else
{{ trans('crud.not_records_found'); }}  
@endif