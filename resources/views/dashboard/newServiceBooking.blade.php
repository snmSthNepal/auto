@include('common.backend.header')

<body class="w3-light-grey">

@include('common.backend.menu')


<!-- !PAGE CONTENT! -->
<div class="w3-main hide" style="margin-left:350px;margin-top:43px;" id="service">
    <header class="w3-container" style="padding-top:22px">
        <h5><b><i class="fa fa-dashboard"></i> My Dashboard </b></h5>
    </header>
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
