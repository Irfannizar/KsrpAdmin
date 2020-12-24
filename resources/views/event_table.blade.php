<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
       
      <thead>
          <tr>
            
            <th>Title</th>
            <th>Date</th>
            <th>Inventory</th>
            <th>Action</th>
            
          </tr>
        </thead>
        
        <tbody>
      
        @foreach($events as $event)
            <tr>
                          <td>{{ $event->title }}</td>
                          <td>{{ $event->date }}</td>
                          <td>{{ $event->limit_register }}</td>
                          <td>
                          <form method = "GET"  
                          action = "{{ route('event.show', $event->id) }}">
                         @if ($event->limit_register==0)
                         <h6>Out of Stock</h6>
                         @else
                          <button class = "btn btn-primary" type="submit">Details</button>
                         @endif
                        </form>
                          </td>
            </tr>
        @endforeach
        </tbody>
       
      </table>