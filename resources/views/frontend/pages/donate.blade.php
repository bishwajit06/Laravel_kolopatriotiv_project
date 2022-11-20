@extends('layouts.frontend.master')

@section('title','GoFundMe')

@push('css')

@endpush

@section('content')
<section class="py-5 bg-light">
    <div class="container-fluid">
      <div class="container">
        <div class="row g-4 justify-content-center">
          <div class="col-md-8 p-3 p-md-5 bg-white">
            <div class="row align-items-center">
              <div class="col-md-3 mb-3 mb-md-0">
                <img src="{{asset('assets/frontend/images/logo-donation.jpg')}}" class="img-thumbnail" alt="Image not found">
              </div>
              <div class="col-md-9">
                <h6>You're supporting</h6>
                <h5>Save Ukrainian children</h5>
              </div>
            </div>
            <br><hr><br>
            <form action="{{route('donate.store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                      <div class="mb-3">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email address" required>
                      </div>
                    </div>
                  </div>
                  <br>
                  <ul class="list-group">
                    {{-- <li class="list-group-item p-4">
                      <img src="{{asset('assets/frontend/images/paypal.png')}}" class="img-fluid" alt="Image not found">
                      <button type="submit" class="btn btn-warning rounded-1" name="payment" value="paypal">Pay with paypal or card</button>
                    </li> --}}
                    <li class="list-group-item p-4">
                      <div class="py-3">
                        <img src="{{asset('assets/frontend/images/btc.png')}}" class="img-fluid" alt="Image not found">
                        <button type="submit" class="btn btn-primary rounded-1" name="payment" value="btc">Pay with cryptocurrencies</button>
                      </div>
                    </li>
                  </ul>
            </form>
            <br>
            <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Don't display my name publicly on the campaign.
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                  Get occasional marketing updates from Kolo Patriotiv. You may unsubscribe at any time.
                </label>
              </div>
            </div>
            
            <br><hr><br>
            <div class="d-flex">
              <div class="flex-shrink-0">
                <img src="{{asset('assets/frontend/images/icon-color-protect.png')}}" class="img-fluid" alt="Image not found">
              </div>
              <div class="flex-grow-1 ms-3">
                <h6 class="m-0 fw-bolder">Kolo Patriotiv protects your donation</h6>
                <p>We guarantee you a full refund for up to a year in the rare case that <br>fraud occurs. See our Kolo Patriotiv Giving Guarantee.</p>
              </div>
            {{-- </div>
            <form action="https://www.paypal.com/donate" method="post" target="_top">
              <!-- Identify your business so that you can collect the payments. -->
              <input type="hidden" name="business" value="venessayanez878@hotmail.com">
              <!-- Specify details about the contribution -->
              <input type="hidden" name="no_recurring" value="0">
              <input type="hidden" name="item_name" value="Friends of the Park">
              <input type="hidden" name="item_number" value="Fall Cleanup Campaign">
              <input type="hidden" name="currency_code" value="USD">
              <!-- Display the payment button. -->
              <input type="image" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" alt="Donate">
              <img alt="" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
            </form> --}}
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@push('js')

@endpush