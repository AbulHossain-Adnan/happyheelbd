@extends('layouts.shopwisemaster')
@section('content')
    <div class="sl-mainpanel">

        <div class="row">
            <div class="col-sm-10 m-auto">
                <div class="card pd-20 pd-sm-40 ">
                    <h2 class="card-body-title"></h2>
                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="row m-auto ">
                                @include('user.inc.review_form')
                            </div>

                        </div>

                    </div>
                </div>
            </div><br><br><br>
        </div>
    </div>
    </div>
@endsection

{{--

@section('scripts')
    <script>
        $('#savedata').click(function(e) {
            e.preventDefault();
            $(this).html('Sending..');

            var formData = $('#postForm').serialize();
            // var rating = $('.star_rating').data('value');
            console.log(formData);


        });
    </script>
@endsection --}}
