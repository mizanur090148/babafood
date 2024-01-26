@if(Session::has('success'))
  <div class="text-success text-center response-message"> {{ Session::get('success') }} </div>
@endif
@if(Session::has('error'))
  <div class="text-danger text-center response-message"> {{ Session::get('error') }} </div>
@endif
