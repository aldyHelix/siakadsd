<div class="container">
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong>{{ $message }}</strong>
</div>
@endif
</div>
<div class="container">
@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong>{{ $message }}</strong>
</div>
@endif
</div>
<div class="container">
@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong>{{ $message }}</strong>
</div>
@endif
</div>
<div class="container">
@if ($message = Session::get('info'))
<div class="alert alert-info alert-block">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong>{{ $message }}</strong>
</div>
@endif
</div>
<div class="container">
@if ($errors->any())
<div class="alert alert-danger">
<button type="button" class="close" data-dismiss="alert">×</button>
Cek kembali isian yang ada di bawah ini.
</div>
@endif
</div>