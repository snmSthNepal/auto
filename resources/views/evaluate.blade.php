@extends('common.app')

@section('content')
        <div class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title">
                            <h2>Evaluation</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- BEGIN Main Container col2-right -->
        <div class="main-container col2-right-layout">
            <div class="main container">
                <div class="row">
                    <div class="col-main col-sm-9 wow bounceInUp animated animated" style="visibility: visible;">
                        <div id="messages_product_view"></div>
                        <form action="/newEvaluation" id="contactForm" method="post" autocomplete="on">
                            @csrf
                            <div class="static-contain">
                                <fieldset class="group-select">
                                    <ul>
                                        <li id="billing-new-address-form">
                                            <fieldset class="">
                                                <ul>
                                                    <li>
                                                        <div class="input-box">
                                                            <select class="" id="company" name="company" data-width="100%" tabindex="-98" value="">
                                                                <option value="">Select Company</option>
                                                                <option value="hero">Hero</option>
                                                                <option value="honda">Honda</option>
                                                                <option value="suzuki">Suzuki</option>
                                                                <option value="tvs">TVS</option>
                                                                <option value="yamaha">Yamaha</option>
                                                            </select>  
                                                        </div>
                                                        <div class="input-box">
                                                            <select class="" data-width="100%" tabindex="-98" id="bikeName" name="bikeName" value="{{ old('bikeName') }}">
                                                                <option>Select ride</option>
                                                                <optgroup id="rideOption" label="Select a company first">
                                                                </optgroup>
                                                                <optgroup id="hero" label="hero" hidden>
                                                                    <option value="impulse">Impulse</option>
                                                                    <option value="xtreme">Xtreme</option>
                                                                </optgroup>
                                                                <optgroup id="honda" label="honda" hidden>
                                                                    <option value="unicorn">Unicorn</option>
                                                                    <option value="dio">Dio</option>
                                                                </optgroup>
                                                                <optgroup id="suzuki" label="suzuki" hidden>
                                                                    <option value="suzuki1">suzuki1</option>
                                                                    <option value="suzuki2">suzuki2</option>
                                                                </optgroup>
                                                                <optgroup id="tvs" label="tvs" hidden>
                                                                    <option value="tvs1">tvs1</option>
                                                                    <option value="tvs2">tvs2</option>
                                                                </optgroup>
                                                                <optgroup id="yamaha" label="yamaha" hidden>
                                                                    <option value="v1">R15 v1</option>
                                                                    <option value="v2">R15 v2</option>
                                                                    <option value="v3">R15 v3</option>
                                                                </optgroup>
                                                            </select>  
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="input-box">
                                                            <select class="" data-width="100%" tabindex="-98" id="state" name="state" value="{{ old('state') }}" required>
                                                                <option value="" readonly>Condition</option>
                                                                <option value="new">New</option>
                                                                <option value="likeNew">Like new</option>
                                                                <option value="used">Used</option>
                                                            </select>
                                                        </div>
                                                        <div class="input-box">
                                                            <select class="" data-width="100%" tabindex="-98" id="model" name="model" value="{{ old('model') }}">
                                                                <option>Select Model</option>
                                                                <option>2010 </option>
                                                                <option>2011</option>
                                                                <option>2012</option>
                                                                <option>2013 </option>
                                                                <option>2014</option>
                                                                <option>2015</option>
                                                                <option>2016 </option>
                                                                <option>2017</option>
                                                                <option>2018</option>
                                                            </select>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="input-box">
                                                            <input name="email" id="email" title="Email" placeholder="yourEmail@example.com" class="input-text required-entry validate-email" type="text" value="{{ old('email') }}">
                                                        </div>
                                                        <div class="input-box">
                                                            <input type="tel" name="phone" id="phone" title="telephone" placeholder="Your Contact Number*" class="input-text" pattern="[0-9]{10}" value="{{ old('phone') }}">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="input-box">
                                                            <input type="text" id="name" name="name" class="input-text" placeholder="Full Name Please *" value="{{ old('name') }}">
                                                            <input type="text" id="date" name="date" class="input-text" value="" style="display: none;" value="{{ old('date') }}">
                                                        </div>
                                                        <div class="input-box">
                                                            <input type="text" id="bikeNum" name="bikeNum" class="input-text" placeholder="Bike Number *" value="{{ old('bikeNum') }}" required>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ui-filter-slider input-box">
                                                            <div class="sidebar-widget-body m-t-10" >
                                                            <b>Expected Price range*</b>
                                                                <div class="price-range-holder">
                                                                    <span class="min-max">
                                                                        <span class="pull-left">Nrs. 10000</span>
                                                                        <span class="pull-right">Nrs.500000</span>
                                                                    </span>
                                                                    <input id="expectedPrice" name="expectedPrice" type="text" class="price-slider" value="{{ old('expectedPrice') }}" style="display:block">
                                                                </div>
                                                                <!-- /.price-range-holder -->
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="input-box">
                                                            <select id="showroomID" name="showroomID" class="hide" value="{{ old('showroomID') }}">
                                                                <option value="" readonly> Select Showroom * </option>
                                                                <option value="2" selected> Auto Point </option>
                                                                <!--@foreach($showroom as $data)
                                                                    <option value = {{ $data->id }}>{{ $data->name }} </option>
                                                                @endforeach-->
                                                            </select>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <textarea id="comment" name="comment" placeholder="Personal Comment" class="input-text" cols="5" rows="2" value="{{ old('comment') }}"></textarea>
                                                    </li>
                                                </ul>
                                            </fieldset>
                                        </li>
                                            <button type="submit" class="button submit" style="margin-top: 0;"><span><span>Submit</span></span></button>
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
<script>
    $(document).ready(function(){
        $('#evaluateHeader').css('color', 'blue');
        $("#company").change(function(){
            $('#bikeName').prop('selectedIndex',0);
            var selectedCompany = $(this).children("option:selected").val();
            if (selectedCompany == "hero") {
                hideRide(selectedCompany, "honda", "suzuki", "tvs", "yamaha");
            }else if (selectedCompany == "honda") {
                hideRide(selectedCompany, "hero", "suzuki", "tvs", "yamaha");
            }else if(selectedCompany == "suzuki"){
                hideRide(selectedCompany, "hero", "honda", "tvs", "yamaha");
            }else if(selectedCompany == "tvs"){
                hideRide(selectedCompany, "hero", "honda", "suzuki", "yamaha");
            }else if(selectedCompany == "yamaha"){
                hideRide(selectedCompany, "hero", "honda", "suzuki", "tvs");
            }
        });
        function hideRide(selectedCompany, com1, com2, com3, com4){
            $('#rideOption').hide();
            $('#' + selectedCompany).show();
            $('#' + com1).hide();
            $('#' + com2).hide();
            $('#' + com3).hide();
            $('#' + com4).hide();
        }

        //Automatic date fillup
        $('#company').change(function(){
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
@endsection
        



