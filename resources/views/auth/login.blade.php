@extends('common.app')

@section('content')
<!-- BEGIN Main Container col2-right -->
        <div class="main-container col2-right-layout">
            <div class="main container">
                <div class="row">
                    <div class="col-main col-sm-9 wow bounceInUp animated animated" style="visibility: visible;">
                        <div id="messages_product_view"></div>
                        @include('register')
                    </div>
                    @include('common/terms_of_service')
                    <!--col-right sidebar-->
                </div>
                <!--row-->
            </div>
            <!--main-container-inner-->
        </div>
        <!--main-container col2-left-layout-->
    </div>
@endsection
        



