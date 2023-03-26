@extends('layouts.shopwisemaster')
@section('content')
    <div class="sl-mainpanel">

        <div class="row">
            <div class="col-sm-10 m-auto">
                <div class="card pd-20 pd-sm-40">
                    <h2 class="card-body-title"></h2>
                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="row m-auto">
                                <div class="col-sm-6">
                                    <!-- <div class="card"> -->
                                    <h2 class="mg-b-20 mg-sm-b-30">Order View</h2><br><br>
                                    <div class="card-body">

                                        <div class="form-layout">
                                            <div class="row mg-b-20">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Name: <span
                                                                class="tx-danger">*</span></label><br>

                                                        <b> {{ Auth::user()->name }} </b><br>

                                                    </div>
                                                </div><!-- col-4 -->
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label">PaymentType: <span
                                                                class="tx-danger">*</span></label>

                                                        <b>{{ $orders->payment_type }}</b>
                                                    </div>
                                                </div><!-- col-4 -->
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Blnc Transection: <span
                                                                class="tx-danger">*</span></label>

                                                        <b>{{ $orders->blnc_transection }}</b>
                                                    </div>
                                                </div><!-- col-4 -->
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Subtotal: <span
                                                                class="tx-danger">*</span></label>

                                                        <b>{{ $orders->subtotal }}</b>
                                                    </div>
                                                </div><!-- col-4 -->
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Discount: <span
                                                                class="tx-danger">*</span></label>

                                                        <b>{{ $orders->discount }}</b>
                                                    </div>
                                                </div><!-- col-4 -->
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label">PayAmount: <span
                                                                class="tx-danger">*</span></label>

                                                        <b>{{ $orders->paying_amount }}</b>
                                                    </div>
                                                </div><!-- col-4 -->
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Shipping: <span
                                                                class="tx-danger">*</span></label>

                                                        <b>{{ $orders->shipping }}</b>
                                                    </div>
                                                </div><!-- col-4 -->
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Vat: <span
                                                                class="tx-danger">*</span></label>

                                                        <b>{{ $orders->vat }}</b>
                                                    </div>
                                                </div><!-- col-4 -->
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Status: <span
                                                                class="tx-danger">*</span></label>


                                                        @if ($orders->status == 0)
                                                            <span class="badge bg-warning">Pending</span>
                                                        @elseif($orders->status == 1)
                                                            <span class="badge bg-success">Payment Accept</span>
                                                        @elseif($orders->status == 2)
                                                            <span class="badge bg-primary">Progress</span>
                                                        @elseif($orders->status == 3)
                                                            ssdfsdf

                                                            <span class="badge bg-success">Delevared</span>
                                                        @else
                                                            <span class="badge bg-danger">Cancel</span>
                                                        @endif

                                                    </div>
                                                </div><!-- col-4 -->

                                            </div>
                                        </div>

                                    </div>
                                    <!-- </div> -->
                                </div>
                                <div class="col-sm-6">
                                    <!-- <div class="card"> -->
                                    <h2 class="mg-b-20 mg-sm-b-30">Shipping View</h2><br><br>
                                    <div class="card-body">

                                        <div class="form-layout">
                                            <div class="row mg-b-25">


                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label">division: <span
                                                                class="tx-danger">*</span></label>

                                                        <b>{{ $orders->Shipping->division }}</b>
                                                    </div>
                                                </div><!-- col-4 -->
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label">district: <span
                                                                class="tx-danger">*</span></label>

                                                        <b>{{ $orders->Shipping->district }}</b>
                                                    </div>
                                                </div><!-- col-4 -->
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label">area: <span
                                                                class="tx-danger">*</span></label>

                                                        <b>{{ $orders->Shipping->area }}</b>
                                                    </div>
                                                </div><!-- col-4 -->
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label">zip: <span
                                                                class="tx-danger">*</span></label>

                                                        <b>{{ $orders->Shipping->zip }}</b>
                                                    </div>
                                                </div><!-- col-4 -->
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label">address: <span
                                                                class="tx-danger">*</span></label>

                                                        <b>{{ $orders->Shipping->address }}</b>
                                                    </div>
                                                </div><!-- col-4 -->


                                            </div>
                                        </div>
                                    </div>


                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>


                    </div>


                </div>
                <!--    </div> -->
                <!--   </div> -->
            </div>
        </div><br><br><br>













        <div class="row">
            <div class="col-sm-10 m-auto">

                <div class="card pd-20 pd-sm-40">
                    <div class="table-wrapper">
                        <h2 class="mg-b-20 mg-sm-b-30">Order details View</h2><br><br>

                        <table class="table display responsive nowrap">
                            <thead>
                                <tr>
                                    <th class="wd-15p">product name</th>
                                    <th class="wd-15p">product code</th>
                                    <th class="wd-15p">image</th>
                                    <th class="wd-20p">color</th>
                                    <th class="wd-15p">size</th>
                                    <th class="wd-15p">price</th>

                                    <th class="wd-10p">quantity</th>
                                    <th class="wd-10p">subtotal</th>
                                    <th class="wd-10p">Review</th>


                                </tr>
                            </thead>
                            <tbody>


                                @foreach ($order_details as $item)
                                    <tr>

                                        <td>{{ $item->product->product_name }}</td>
                                        <td>{{ $item->product->product_code }}</td>
                                        <td>
                                            <img src="{{ asset('product_images/' . $item->product->image_one) }}"
                                                width="80">
                                        </td>
                                        <td>{{ $item->color }}</td>

                                        <td>{{ $item->size }}</td>
                                        <td>{{ $item->price }}</td>

                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ $item->subtotal }}</td>
                                        <td>

                                            <a href="{{ route('user.review.index', [$item->product_id]) }}"
                                                class="btn btn-sm btn-danger">Write a Review</a>
                                        </td>


                                    </tr>
                                @endforeach
                            </tbody>

                        </table><br><br>

                        <a class="btn btn-warning" href="{{ url('/home') }}"><i class="fas fa-fast-backward"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
