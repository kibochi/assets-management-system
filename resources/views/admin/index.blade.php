@extends('layouts.app')

@section('content')
<!--start horizontal menu-->
<div class="horizontal-menu">
@include('layouts.nav')
@include('layouts.nav2')
</div>
<!--end horizontalmenu-->


<!--start body wrapper-->
<div class="container-fluid page-body-wrapper">
<div class="main-panel">
<div class="content-wrapper pb-0">

@include('layouts.header')
</div>


</div>
</div>
<!--end body wrapper-->
@endsection