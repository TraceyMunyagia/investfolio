
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
              <th scope="col">Intial Deposit</th>
              <th scope="col">Monthly Deposit</th>
            </tr>
          </thead>
          <tbody>
           @foreach ($approved as $approved )
            <tr>
              <th scope="row">{{$user->id}}</th>
              <td>{{$approved->accountno}}</td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
        </html>
        </div>
        
        

