@extends('layouts.main')

@section('container')
<div class="title-top mb-5">
    <h3 class="fw-bold">Contact Us</h3>
</div>
<form method="post" action="{{route('contacts.store')}}">
  {{csrf_field()}}
  <div class="form-floating mb-3">
    <input for="text" class="form-control" id="inputname" placeholder="Nama" name="nama"></input>
    <laber for="inputname">Nama</label>
  </div>
  <div class="form-floating mb-3">
    <input for="email" class="form-control" id="inputemail" placeholder="Email" name="email"></input>
    <laber for="inputemail" class="form-label">Email</label>
  </div>
  <div class="form-floating mb-3">
      <textarea class="form-control" placeholder="Tinggalkan pesan disini" id="floatingTextarea2" style="height: 100px" name="pesan"></textarea>
      <label for="floatingTextArea2">Pesan</label>
  </div>
 
  <button type="submit" class="btn btn-outline-secondary">Submit</button>

</form>

@endsection