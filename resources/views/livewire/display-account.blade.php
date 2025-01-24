
<<div>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
      <div class="row" data-bs-theme="dark">
      <div class="col-auto">
      </div>
      </div>
      <livewire:flash-message/>
       <table class="table table-bordered">
       <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">AccountNumber</th>
        <th scope="col">Pin</th>
      </tr>
    </thead>
    <tbody>
     @foreach ($approved as $approved )
      <tr>
        <th scope="row">{{$approved->id}}</th>
        <td>{{$approved->accountno}}</td>
        <td>{{$approved->pin}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </html>
  </div>
  
  

