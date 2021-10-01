<form class="form">
    <div class="card-body">
     <div class="form-group">
      <label>Full Name:</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" placeholder="Enter full name" name="name" />
      <span class="form-text text-muted">Please enter your full name</span>
      @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
     </div>
   
     <div class="separator separator-dashed my-5"></div>
     <div class="form-group">
        <label>Amount</label>
        <div class="input-group">
         <div class="input-group-prepend"><span class="input-group-text" >AUD</span></div>
         <input type="text" class="form-control" placeholder="Rent Amount Displayed Default values" name="amount"/>
        </div>
     
   
     <div class="separator separator-dashed my-5"></div>
     <div class="form-group">
        <label>Card Number</label>
        <input type="text" class="form-control" placeholder="Enter card number" name="card_number"/>
        <span class="form-text text-muted">We'll never share your card details with anyone else</span>
       </div>
    
     </div>
   
     <div class="separator separator-dashed my-5"></div>
   
     <div class="form-group">
        <label>Expiry Date</label>
        <input type="date" class="form-control" name="exp_date"/>
       </div>
    </div>
    <div class="separator separator-dashed my-5"></div>
   
    <div class="form-group">
       <label>Security Code</label>
       <input type="password" class="form-control" placeholder="Enter 3 digit security code"  name="scode"/>
      </div>
   </div>
    <div class="card-footer">
     <button type="reset" class="btn btn-primary mr-2">Submit</button>
     <button type="reset" class="btn btn-secondary">Cancel</button>
    </div>
   </form>