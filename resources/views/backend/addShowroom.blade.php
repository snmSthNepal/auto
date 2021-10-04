@extends('common.backend.userApp')
    <!--Table CSS-->
    @section('style')
        <style>
            * {
              box-sizing: border-box;
            }

            input[type=text], input[type=number], select, textarea {
              width: 100%;
              padding: 12px;
              border: 1px solid #ccc;
              border-radius: 4px;
              resize: vertical;
            }

            label {
              padding: 12px 12px 12px 0;
              display: inline-block;
            }

            input[type=submit] {
              background-color: #4CAF50;
              color: white;
              padding: 12px 20px;
              border: none;
              border-radius: 4px;
              cursor: pointer;
              float: right;
            }

            input[type=submit]:hover {
              background-color: #45a049;
            }

            .container {
              border-radius: 5px;
              background-color: #f2f2f2;
              padding: 20px;
            }

            .col-25 {
              float: left;
              width: 25%;
              margin-top: 6px;
            }

            .col-75 {
              float: left;
              width: 75%;
              margin-top: 6px;
            }

            /* Clear floats after the columns */
            .row:after {
              content: "";
              display: table;
              clear: both;
            }

            /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 600px) {
              .col-25, .col-75, input[type=submit] {
                width: 100%;
                margin-top: 0;
              }
            }
        </style>
    @endsection

    @section('content')
        <!--Add Showroom Content Start-->
        <div class="w3-main" style="margin-left:350px;margin-top:43px;" id="addShowroom">
            <h2>Add Your Business</h2>
            <div class="container">
                <form action="showroom" id="showroomForm" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-25">
                            <label for="name">Showroom Name</label>
                        </div>
                            <div class="col-75">
                            @if(isset($result))
                                <input type="text" id="name" name="showroomName" value="{{ $result[0]->name }}" placeholder="Showroom Name..." readonly>
                            @else
                                <input type="text" id="name" name="showroomName" value="" placeholder="Showroom Name...">
                            @endif
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="address">Address</label>
                        </div>
                        <div class="col-75">
                            @if(isset($result))
                                <input type="text" id="address" name="address" value="{{ $result[0]->address }}" placeholder="Showroom Address..." readonly>
                            @else
                                <input type="text" id="address" name="address" value="" placeholder="Showroom Address...">
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="totalQuota">Total Capacity</label>
                        </div>
                        <div class="col-75">
                            @if(isset($result))
                                <input type="number" name="totalQuota" id="totalQuota" value="{{ $result[0]->totalQuota }}" placeholder="Total Capacity" min="0" class="text-primary">
                            @else
                                <input type="number" name="totalQuota" id="totalQuota" value="" placeholder="Total Capacity" min="0">
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="bookingQuota">Booking Quota</label>
                        </div>
                        <div class="col-75">
                            @if(isset($result))
                                <input type="number" name="bookingQuota" id="bookingQuota" value="{{ $result[0]->bookingQuota }}" placeholder="Booking Quota" min="0" class="text-primary">
                            @else
                                <input type="number" name="bookingQuota" id="bookingQuota" value="" placeholder="Booking Quota" min="0">
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="company">Company</label>
                        </div>
                        <div class="col-75">
                            <select id="company" name="company" readonly>
                                @if(isset($result))
                                    @if($result[0]->company=="hero")
                                        <option value="hero" selected>hero</option>
                                    @elseif($result[0]=="honda")
                                        <option value="honda" selected>honda</option>
                                    @elseif($result[0]->company=="yamaha")
                                        <option value="yamaha">Yamaha</option>
                                    @elseif($result[0]->company=="suzuki")
                                        <option value="suzuki" selected>Suzuki</option>
                                    @elseif($result[0]->company=="tvs")
                                        <option value="tvs" selected>TVS</option>
                                    </select>
                                    @endif
                                @else
                                        <option value="hero">hero</option>
                                        <option value="honda">honda</option>
                                        <option value="yamaha">Yamaha</option>
                                        <option value="suzuki">Suzuki</option>
                                        <option value="tvs">TVS</option>
                                    @
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>

        <!--Add Showroom Content Finished-->
        <script>
            $(document).ready(function(){
                $('.btnConfig').addClass('w3-blue');
            });
        </script>
    @endsection

