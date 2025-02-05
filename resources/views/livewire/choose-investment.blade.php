<div class="card">
    <div class="card-header">
      Choose an Investment 
    </div>
    <div class="card-body">
        <form wire:submit="Store">
        <div class="mb-3">
            <label for="exampleInputAccountno" class="form-label">Account Number</label>
            <input wire:model="accountno" type="text" class="form-control" id="exampleInputAccountno">
               <div>
            @error('account number')
              <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
          </div>
          <div class="input-group mb-3">
            <select class="form-select" id="inputGroupType" onchange="updateCompanyOptions()">
                <option selected>Type of Investment</option>
                <option value="stocks">STOCKS</option>
                <option value="bonds">BONDS</option>
                <option value="exchangetradefunds">EXCHANGE TRADE FUNDS</option>
                <option value="moneymarketfunds">MONEY MARKET FUNDS</option>
            </select>
            <label class="input-group-text" for="inputGroupType">Select</label>
            <div>
                @error('type ')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        
        <div class="input-group mb-3">
            <select class="form-select" id="company">
                <option selected>Company</option>
                <option value="safaricom">SAFARICOM</option>
                <option value="equitygroup">EQUITY GROUP</option>
                <option value="cbk">CBK</option>
                <option value="kplc">KPLC</option>
                <option value="nse">NSE</option>
                <option value="cicassetmanagement">CIC Asset Management</option>
                <option value="oldmutual">Old Mutual</option>
            </select>
            <label class="input-group-text" for="company">Select</label>
            <div>
                @error('company ')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
    
        <script>
            function updateCompanyOptions() {
                var typeSelect = document.getElementById('inputGroupType');
                var companySelect = document.getElementById('company');
                var typeValue = typeSelect.value;
        
                // Clear current options
                company.innerHTML = '<option selected>Company</option>';
        
                // Add options based on type of investment
                if (typeValue == "stocks") {
                    companySelect.innerHTML += '<option value="safaricom">SAFARICOM</option><option value="equitygroup">EQUITY GROUP</option>';
                } else if (typeValue == "bonds") {
                    companySelect.innerHTML += '<option value="cbk">CBK</option><option value="kplc">KPLC</option>';
                } else if (typeValue == "") {
                    companySelect.innerHTML += '<option value="NSE">NSE</option>';
                } else if (typeValue == "MONEY MARKET FUNDS") {
                    companySelect.innerHTML += '<option value="CIC Asset Management">CIC Asset Management</option><option value="Old Mutual">Old Mutual</option>';
                }
            }
        </script>
        <div class="mb-3">
            <label for="exampleInputStart" class="form-label">Period of Investment(in months)</label>
            <input wire:model="period" type="number" class="form-control" id="exampleInputPeriod">
               <div>
            @error('Period')
              <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-outline-warning btn-sm">Submit</button>
        <a wire:navigate href="/investments" class="btn btn-outline-primary btn-sm">Back</a>
    </form>
    </div>
  </div>