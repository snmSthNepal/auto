@extends('common.backend.app')
    <!--Table CSS-->
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
                    content: "Last Service Date";
                }

                td:nth-of-type(7):before {
                    content: "Service Booking";
                }

                td:nth-of-type(8):before {
                    content: "Total Km";
                }

                td:nth-of-type(9):before {
                    content: "Bike Number";
                }

                td:nth-of-type(10):before {
                    content: "Comment";
                }

                td:nth-of-type(10):before {
                    content: "Status";
                }
            }
        </style >
    @endsection

    @section('content')
        <!--Servicing Content Start-->
        <div class="w3-main" style="margin-left:350px;margin-top:43px;" id="service">
            <div class="row table-responsive">
                <table role="table" class="table table-hover" id="serviceTable">
                    <thead role="rolegroup">
                        <tr role="row">
                            <th role="columnheader" scope="col"> Bike </th>
                            <th role="columnheader" scope="col"> Servicing Type </th>
                            <th role="columnheader" scope="col"> Warranty Type </th>
                            <th role="columnheader" scope="col"> Email </th>
                            <th role="columnheader" scope="col"> Phone </th>
                            <th role="columnheader" scope="col"> Last Service Date </th>
                            <th role="columnheader" scope="col"> Service Booking </th>
                            <th role="columnheader" scope="col"> Total Km </th>
                            <th role="columnheader" scope="col"> Bike Number </th>
                            <th role="columnheader" scope="col"> Comment </th>
                            <th role="columnheader" scope="col"> Status </th>
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
                                <td role="cell">{{ $result-> lastDate }}</td>
                                <td role="cell">{{ $result-> serviceDate }}</td>
                                <td role="cell">{{ $result-> totalKm }}</td>
                                <td role="cell">{{ $result-> bikeNum }}</td>
                                <td role="cell">{{ $result-> comment }}</td>
                                <form action="{{ route('servicingStatus') }}" class="replyForm" method="post">
                                    @csrf
                                    <input type="text" name="servicingID" value="{{ $result -> servicingID }}" hidden>
                                    <input type="text" name="email" value="{{ $result -> email }}" hidden>
                                    <input type="text" name="name" value="{{ $result -> name }}" hidden>
                                    @if($result->status=="pending")
                                        <td class="btn-group">
                                            <button type="submit" value="accepted" name="replyStatus" class="btn btn-success accept"> Accept </button>
                                            &nbsp
                                            <button type="submit" value="rejected" name="replyStatus" class="btn btn-danger reject"> Reject </button>
                                        </td>
                                    @elseif($result->status=="accepted")
                                        <td class="btn-group">
                                            <button type="submit" value="cancelled" name="replyStatus" class="btn btn-warning cancel"> Cancel </button>
                                            &nbsp
                                            <button type="submit" value="completed" name="" class="btn btn-primary com"> Complete </button>
                                        </td>
                                        <div class="form-popup2 form-container hide myForm2" style="" id="myForm2">
                                            <h1>Complete Form</h1>
                                            <label for="price"><b>Price</b></label>
                                            <input type="text" placeholder="Total Bill Amount" name="totalAmount">

                                            <label for="comment"><b>Comment</b></label>
                                            <input type="text" placeholder="Comment or any Condition" name="completeComment">

                                            <button type="submit" class="btn finishBtn" value="completed" name="replyStatus">Finish</button>
                                            <button type="button" class="btn cancel">Close</button>
                                        </div>
                                    @elseif($result->status=="completed")
                                        <td> <button class="btn btn-info" disabled> Completed </button> </td>
                                    @elseif($result->status=="cancelled")
                                        <td> <button class="btn btn-info" disabled> Cancelled </button> </td>
                                    @else
                                        <td> <button class="btn btn-info" disabled> Rejected </button> </td>
                                    @endif
                                </form>
                            </tr>
                        @endforeach
                    </tbody>
                </table> 
            </div>
        </div>

        <!--Servicing Content Finished-->
        <script>
            $(document).ready(function(){
                $('#serviceBtn').addClass('w3-blue');
            });
        </script>
    @endsection

