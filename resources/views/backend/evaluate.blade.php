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
                    content: "Bike Num";
                }

                td:nth-of-type(3):before {
                    content: "Condition";
                }

                td:nth-of-type(4):before {
                    content: "Model";
                }

                td:nth-of-type(5):before {
                    content: "Email";
                }

                td:nth-of-type(6):before {
                    content: "Phone";
                }

                td:nth-of-type(7):before {
                    content: "Expected Price";
                }

                td:nth-of-type(8):before {
                    content: "Comment";
                }

                td:nth-of-type(9):before {
                    content: "Date";
                }
            }
        </style>
    @endSection

    @section('content')
        <!-- Evaluate Content Start -->
        <div class="w3-main" style="margin-left:350px; margin-top:43px;" id="evaluate">

            <div class="form-popup" id="myForm">
                <form action="{{ route('replyEvaluation') }}" class="form-container" method="post">
                    @csrf
                    <h1>Reply</h1>
                    <input type="text" name="evaluateID" id="evaluateID" value="" hidden readonly required>

                    <input type="text" name="email" id="replyEmail" value="" hidden readonly required>

                    <input type="text" name="userID" id="userID" value="" hidden readonly required>

                    <input type="text" name="name" id="name" value="" hidden readonly required>

                    <label for="price"><b>Price</b></label>
                    <input type="text" placeholder="Expected Price Range" name="replyPrice" required>

                    <label for="comment"><b>Comment</b></label>
                    <input type="text" placeholder="Comment or any Condition" name="replyComment">

                    <button type="submit" class="btn" id="replyBtn">Reply</button>
                    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                </form>
            </div>

            <div class="row table-responsive">
                <table  role="table" class="table table-hover" id="evaluateTable">
                <thead role="rowgroup">
                    <tr role="row">
                        <th role="columnheader" scope="col"> Bike </th>
                        <th role="columnheader" scope="col"> Bike Number </th>
                        <th role="columnheader" scope="col"> Condition </th>
                        <th role="columnheader" scope="col"> Model </th>
                        <th role="columnheader" scope="col"> Email </th>
                        <th role="columnheader" scope="col"> Phone </th>
                        <th role="columnheader" scope="col"> Expected Price </th>
                        <th role="columnheader" scope="col"> Comment </th>
                        <th role="columnheader" scope="col"> Date </th>
                    </tr>
                </thead>
                <tbody role="rowgroup" id="eR">
                    @foreach($evaluateResult as $result)
                        @if($result->status=="complete")
                            <tr role="row" id="complete">
                                <td role="cell">{{ $result-> bikeName }}</td>
                                <td role="cell">{{ $result-> bikeNum }}</td>
                                <td role="cell">{{ $result-> state }}</td>
                                <td role="cell">{{ $result-> model }}</td>
                                <td role="cell">{{ $result-> email }}</td>
                                <td role="cell">{{ $result-> phone }}</td>
                                <td role="cell">{{ $result-> expectedPrice }}</td>
                                <td role="cell">{{ $result-> comment }}</td>
                                <td role="cell">{{ $result-> date }}</td>
                            </tr>
                        @endif
                        @if($result->status=="pending")
                            <tr role="cell" id="pending">
                                <td role="cell">{{ $result-> bikeName }}</td>
                                <td role="cell">{{ $result-> bikeNum }}</td>
                                <td role="cell">{{ $result-> state }}</td>
                                <td role="cell">{{ $result-> model }}</td>
                                <td role="cell">{{ $result-> email }}</td>
                                <td role="cell">{{ $result-> phone }}</td>
                                <td role="cell">{{ $result-> expectedPrice }}</td>
                                <td role="cell">{{ $result-> comment }}</td>
                                <td role="cell">{{ $result-> date }}</td>
                                <td role="cell"><button onclick="openForm()" value="{{ $result->email }} {{ $result->userID }} {{ $result->evaluateID }} {{ $result->name }}" class="reply btn btn-success" id="reply">Reply</button></td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>  
                </table>
            </div>
        </div>
        <!-- Evaluate Content Finished -->
<script>
    $(document).ready(function(){
        $('#evaluateBtn').addClass('w3-blue');
    });
</script>
    @endsection
