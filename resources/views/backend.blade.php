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
            <h4>Evaluate</h4>
          </div>
        </div>
        <div class="w3-quarter">
          <div class="w3-container w3-blue w3-padding-16">
            <div class="w3-left"><i class="fa fa-wrench w3-xxxlarge"></i></div>
            <div class="w3-right">
              <h3>{{ $serviceNumber['sn'] }}</h3>
            </div>
            <div class="w3-clear"></div>
            <h4>Servicing</h4>
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
               <!-- <td><i class="fa fa-users w3-text-yellow w3-large"></i></td>
                <td>New record, over 40 users.</td>
                <td><i>17 mins</i></td>
              </tr>
              <tr>
                <td><i class="fa fa-comment w3-text-red w3-large"></i></td>
                <td>New comments.</td>
                <td><i>25 mins</i></td>
              </tr>
              <tr>
                <td><i class="fa fa-bookmark w3-text-blue w3-large"></i></td>
                <td>Check transactions.</td>
                <td><i>28 mins</i></td>
              </tr>
              <tr>
                <td><i class="fa fa-laptop w3-text-red w3-large"></i></td>
                <td>CPU overload.</td>
                <td><i>35 mins</i></td>
              </tr>
              <tr>
                <td><i class="fa fa-share-alt w3-text-green w3-large"></i></td>
                <td>New shares.</td>
                <td><i>39 mins</i></td>
              </tr>-->
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

@include('common.backend.scripts')
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
