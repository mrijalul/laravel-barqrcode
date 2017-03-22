@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($product as $pd)
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $pd->product_name }}</div>

                <div class="panel-body">
                    <h2>barcode</h2>
                    {!! DNS1D::getBarcodeHTML($pd->product_id, "EAN13") !!}
                    <h2>qrcode</h2>
                    <span width="50%">{!! DNS2D::getBarcodeHTML($pd->product_price, "QRCODE") !!}</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
