@include('common.backend.header')

<body class="w3-light-grey">

@include('common.backend.menu')


<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;" id="overview">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard </b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-motorcycle w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>{{ $evaluateNumber['en'] }}</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Total Evaluation Requests</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-wrench w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>{{ $serviceNumber['sn'] }}</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Total Servicing Bookings</h4>
      </div>
    </div>
  </div>

  <div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">
      <!--<div class="w3-third">
        <h5>Regions</h5>
        <img src="/w3images/region.jpg" style="width:100%" alt="Google Regional Map">
      </div>-->
      <div class="w3-twothird">
        <h5>Feeds</h5>
        <table class="w3-table w3-striped w3-white">
          <tr>
            <td><i class="fa fa-user w3-text-blue w3-large"></i></td>
            <td>Vehicles Bought</td>
            <td><i>0</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-bell w3-text-red w3-large"></i></td>
            <td>Total Requests Made.</td>
            <td><i>{{ $evaluateNumber['en'] + $serviceNumber['sn']}}</i></td>
          </tr>
          <tr>
           <td><i class="fa fa-users w3-text-yellow w3-large"></i></td>
            <td>New users</td>
            <td><i>17 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-comment w3-text-red w3-large"></i></td>
            <td>New Evaluation Requests</td>
            <td><i>25 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-bookmark w3-text-blue w3-large"></i></td>
            <td>New Servicing Bookings</td>
            <td><i>28 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-laptop w3-text-red w3-large"></i></td>
            <td>Total In</td>
            <td><i>35 mins</i></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
    <hr>
    <div class="w3-container">
        <h5>General Stats</h5>

        <p>Successful Bookings</p>
        <div class="w3-grey">
            <div class="w3-container w3-center w3-padding w3-green" style="width:25%">+25%</div>
        </div>

        <p>Bookings Cancelled</p>
        <div class="w3-grey">
            <div class="w3-container w3-center w3-padding w3-orange" style="width:50%">50%</div>
        </div>

        <p>Inconsiderate Bookings</p>
        <div class="w3-grey">
            <div class="w3-container w3-center w3-padding w3-red" style="width:75%">75%</div>
        </div>
    </div>
    <hr>
  <!-- End page content -->
</div>
    <div class="w3-main hide" style="margin-left:350px;margin-top:43px;" id="evaluate" >
        <div class="row table-responsive">
            <table class="table table-hover" id="evaluateTable">
            <thead>
                <tr>
                    <th scope="col"> Bike </th>
                    <th scope="col"> Bike Number </th>
                    <th scope="col"> Condition </th>
                    <th scope="col"> Model </th>
                    <th scope="col"> Email </th>
                    <th scope="col"> Phone </th>
                    <th scope="col"> Expected Price </th>
                    <th scope="col"> Comment </th>
                    <th scope="col"> Date </th>
                </tr>
            </thead>
            <tbody id="eR">
                @foreach($evaluateResult as $result)
                    @if($result->status=="complete")
                        <tr id="complete">
                            <td>{{ $result-> bikeName }}</td>
                            <td>{{ $result-> bikeNum }}</td>
                            <td>{{ $result-> state }}</td>
                            <td>{{ $result-> model }}</td>
                            <td>{{ $result-> email }}</td>
                            <td>{{ $result-> phone }}</td>
                            <td>{{ $result-> expectedPrice }}</td>
                            <td>{{ $result-> comment }}</td>
                            <td>{{ $result-> date }}</td>
                        </tr>
                    @endif
            </tbody>

            <tbody id="ep">
                    @if($result->status=="pending")
                        <tr id="pending">
                            <td>{{ $result-> bikeName }}</td>
                            <td>{{ $result-> bikeNum }}</td>
                            <td>{{ $result-> state }}</td>
                            <td>{{ $result-> model }}</td>
                            <td>{{ $result-> email }}</td>
                            <td>{{ $result-> phone }}</td>
                            <td>{{ $result-> expectedPrice }}</td>
                            <td>{{ $result-> comment }}</td>
                            <td>{{ $result-> date }}</td>
                            <td><button>Reply</button></td>
                        </tr>
                    @endif
                @endforeach
            </tbody>  
            </table>
        </div>
    </div>

    <div class="w3-main hide" style="margin-left:350px;margin-top:43px;" id="service">
        <div class="row table-responsive">
            <table class="table table-hover" id="serviceTable">
                <thead>
                    <tr>
                        <th scope="col"> Bike </th>
                        <th scope="col"> Servicing Type </th>
                        <th scope="col"> Warranty Type </th>
                        <th scope="col"> Email </th>
                        <th scope="col"> Phone </th>
                        <th scope="col"> Comment </th>
                        <th scope="col"> Last Service Date </th>
                        <th scope="col"> Service Booking </th>
                        <th scope="col"> Total Km </th>
                        <th scope="col"> Bike Number </th>
                    </tr>
                </thead>
                <tbody id="sR">
                    @foreach($serviceResult as $result)
                    <tr>
                        <td>{{ $result-> bikeName }}</td>
                        <td>{{ $result-> servicingType }}</td>
                        <td>{{ $result-> warrantyType }}</td>
                        <td>{{ $result-> email }}</td>
                        <td>{{ $result-> phone }}</td>
                        <td>{{ $result-> comment }}</td>
                        <td>{{ $result-> lastDate }}</td>
                        <td>{{ $result-> serviceDate }}</td>
                        <td>{{ $result-> totalKm }}</td>
                        <td>{{ $result-> bikeNum }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table> 
        </div>
    </div>

@include('common.backend.scripts')
<script>
    $(document).ready(function(){
        console.log('jquery Running');
        $('#evaluateBtn').click(function(){
            $('#overview').addClass('hide');
            $('#service').addClass('hide');
            $('#evaluate').removeClass('hide');
        });
    })
</script>
    <script>
        $(document).ready(function(){
            $("#filter").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#eR tr, #sR tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
              });
        });
    </script>
</body>
</html>
