@extends('common.backend.userApp')
    @section('style')
        <style >
            /*
	                Max width before this PARTICULAR table gets nasty. This query will take effect for any screen smaller than 760px and also iPads specifically.
	                */
            @media only screen
            and (max-width: 760px), (min-device-width: 350px)
            and (max-device-width: 1024px) {
                /* Force table to not be like tables anymore */
                table, thead, tbody, th, td, tr

            {
                display: block;
            }

            /* Hide table headers (but not display: none;, for accessibility) */
            thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px;
            }

            tr {
                margin: 0 0 1rem 0;
            }

                tr:nth-child(odd) {
                    background: #ccc;
                }

            td {
                /* Behave  like a "row" */
                border: none;
                border-bottom: 1px solid #eee;
                position: relative;
                padding-left: 50%;
            }

                td:before {
                    /* Now like a table header */
                    position: absolute;
                    /* Top/left values mimic padding */
                    top: 0;
                    left: 6px;
                    width: 45%;
                    padding-right: 10px;
                    white-space: nowrap;
                    font-weight: bold;
                }

                /*
		                Label the data
                    You could also use a data-* attribute and content for this. That way "bloats" the HTML, this way means you need to keep HTML and CSS in sync. Lea Verou has a clever way to handle with text-shadow.
		                */
                td:nth-of-type(1):before {
                    content: "Bike";
                }

                td:nth-of-type(2):before {
                    content: "Servicing Type";
                }

                td:nth-of-type(3):before {
                    content: "Warranty Type";
                }

                td:nth-of-type(4):before {
                    content: "Email";
                }

                td:nth-of-type(5):before {
                    content: "Phone";
                }

                td:nth-of-type(6):before {
                    content: "Comment";
                }

                td:nth-of-type(7):before {
                    content: "Last Service Date";
                }

                td:nth-of-type(8):before {
                    content: "Booking For";
                }

                td:nth-of-type(9):before {
                    content: "Total Km";
                }
                td:nth-of-type(10):before {
                    content: "Bike Number";
                }
            }
        </style>
    @endSection
    @section('content')
        <!-- !PAGE CONTENT! -->
        <div class="w3-main" style="margin-left:350px;margin-top:43px;" id="service">
            <div class="row table-responsive">
                <table role="table" class="table table-hover" id="serviceTable">
                    <thead role="rowgroup">
                        <tr role="row">
                            <th role="columnheader" scope="col"> Bike </th>
                            <th role="columnheader" scope="col"> Servicing Type </th>
                            <th role="columnheader" scope="col"> Warranty Type </th>
                            <th role="columnheader" scope="col"> Email </th>
                            <th role="columnheader" scope="col"> Phone </th>
                            <th role="columnheader" scope="col"> Comment </th>
                            <th role="columnheader" scope="col"> Last Service Date </th>
                            <th role="columnheader" scope="col"> Service Booking </th>
                            <th role="columnheader" scope="col"> Total Km </th>
                            <th role="columnheader" scope="col"> Bike Number </th>
                        </tr>
                    </thead>
                    <tbody role="rowgroup" id="sR">
                        @foreach($serviceResult as $result)
                        <tr role="row">
                            <td role="cell">{{ $result-> bikeName }}</td>
                            <td role="cell">{{ $result-> servicingType }}</td>
                            <td role="cell">{{ $result-> warrantyType }}</td>
                            <td role="cell">{{ $result-> email }}</td>
                            <td role="cell">{{ $result-> phone }}</td>
                            <td role="cell">{{ $result-> comment }}</td>
                            <td role="cell">{{ $result-> lastDate }}</td>
                            <td role="cell">{{ $result-> serviceDate }}</td>
                            <td role="cell">{{ $result-> totalKm }}</td>
                            <td role="cell">{{ $result-> bikeNum }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table> 
            </div>
        </div>
    @endsection


