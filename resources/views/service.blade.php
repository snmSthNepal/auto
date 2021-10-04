@extends('common.app')

@section('content')
        <div class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title">
                            <h2 style="color: white;">Service</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BEGIN Main Container col2-right -->
        <div class="main-container col2-right-layout">
            <div class="main container">
            @if (session('notification'))
                <div class="alert alert-success">
                    {{ session('notification') }}
                </div>
            @elseif(session('sorry'))
            <div class="alert alert-danger">
                    {{ session('sorry') }}
                </div>
            @endif
                <div class="row">
                    <div class="col-main col-sm-9 wow bounceInUp animated animated" style="visibility: visible;">
                        <div id="messages_product_view"></div>
                        <form action="/newServicing" id="serviceForm" method="post">
                        @csrf
                            <div class="static-contain">
                                <fieldset class="group-select">
                                    <ul>
                                        <li id="billing-new-address-form">
                                            <fieldset class="">
                                                <ul>
                                                    <li>
                                                        <div class="input-box">
                                                            <select class="" data-width="100%" tabindex="-98" id="ride" name="bikeName" required>
                                                                <option>Select ride * </option>
                                                                    <option value="impulse"> Impulse </option>
                                                                    <option value="xtreme"> Xtreme </option>
                                                                    <option value="xtreme"> Glamour </option>
                                                                    <option value="xtreme"> Pleasure </option>
                                                                    <option value="xtreme"> Dash </option>
                                                                    <option value="xtreme"> Super Splendor </option>
                                                                    <option value="xtreme"> Splendor </option>
                                                                    <option value="xtreme"> iSmart </option>
                                                            </select>  
                                                        </div>
                                                        <div class="input-box">
                                                            <input type="text" id="name" name="name" class="input-text" placeholder="Full Name Please *">
                                                            <input type="text" id="date" name="date" class="input-text" value="" style="display: none;">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="input-box">
                                                            <select class="" name="servicingType" data-width="100%" tabindex="-98" required>
                                                                <option> Servicing Type * </option>
                                                                <option> Full Servicing </option>
                                                                <option> Half Servicing </option>
                                                                <option> Accident Case </option>
                                                            </select>
                                                        </div>
                                                        <div class="input-box">
                                                            <select class="" name="warrantyType" data-width="100%" tabindex="-98" id="warranty" required>
                                                                <option> Warranty Type * </option>
                                                                <option> Warranty </option>
                                                                <option> Expired Warranty </option>
                                                            </select>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="input-box">
                                                            <input type="number" id="totalKm" name="totalKm" placeholder="Km" class="input-text" min="0"/>
                                                        </div>
                                                        <div class="input-box">
                                                            <input name="bikeNum" id="bikeNum" placeholder="Bike Number *" class="input-text" type="text" required>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="input-box">
                                                            <input name="email" id="email" title="Email" placeholder="yourEmail@example.com" class="input-text required-entry validate-email" type="text">
                                                        </div>
                                                        <div class="input-box">
                                                            <input type="tel" id="phone" name="phone" class="input-text" placeholder="Contact Number*: 9841000000" pattern="[0-9]{10}" required>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="input-box">
                                                            <label><b>Service date * </b></label>
                                                            <input type="date" id="serviceDate" name="serviceDate" required></input>
                                                        </div>
                                                        <div class="input-box">
                                                            <label><b>Last Service &nbsp &nbsp</b></label>
                                                            <input type="date" id="lastDate" name="lastDate"></input>
                                                        </div>
                                                        <div class="input-box">
                                                            <select id="showroomID" name="showroomID" class="hide">
                                                            
                                                                <option value="" readonly> Select Showroom * </option>
                                                                <option value ="2" readonly selected>Autopoint </option>
                                                                <!--
                                                                @foreach($showroom as $data)
                                                                    <option value={{ $data->id }} selected> {{ $data->name }} </option>
                                                                @endforeach-->
                                                            </select>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <textarea name="comment" id="comment" placeholder="Personal Comment" class="input-text" cols="5" rows="2"></textarea>
                                                    </li>
                                                </ul>
                                            </fieldset>
                                        </li>
                                            <button type="submit" class="btn btn-primary btn-lg btn-block" style="margin-top: 0;"><span><span>Submit</span></span></button>
                                    </ul>
                                </fieldset>
                            </div>
                        </form>

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
    <!-- For version 1,2,3,4,6 -->


    <!-- End For version 1,2,3,4,6 -->
    </div>
    <!--page-->
    <!-- Mobile Menu-->
    @include('common/mobileMenu')
    <!-- JavaScript -->
    @include('common/script')



<script>
$(document).ready(function(){
    $('#serviceHeader').css('color', 'blue');
    $('#ride').change(function(){
        var d = new Date();
        var month = d.getMonth()+1;
        var day = d.getDate();
        var output = ((''+day).length<2 ? '0' : '') + day + '/'+
                    ((''+month).length<2 ? '0' : '') + month + '/' +
                    d.getFullYear();
        $('#date').val(output);
    });

});
</script>

<script>
    $(document).ready(function(){
        $msg = $('#notificationMsg').val();
        if($msg){
            alert($msg);
            console.log($msg);
        }
    });
</script>
@endsection


