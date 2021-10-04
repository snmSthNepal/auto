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
    <div class="w3-main" style="margin-left:350px;margin-top:43px;" id="addShowroom">
        <!-- Evaluate Content Start -->
            <div class="row table-responsive">
                <table  role="table" class="table table-hover" id="evaluateTable">
                <thead role="rowgroup">
                    <tr role="row">
                        <th role="columnheader" scope="col"> ID </th>
                        <th role="columnheader" scope="col"> User ID </th>
                        <th role="columnheader" scope="col"> Showroom Name </th>
                        <th role="columnheader" scope="col"> Address </th>
                        <th role="columnheader" scope="col"> Company </th>
                        <th role="columnheader" scope="col"> Status </th>
                        <th role="columnheader" scope="col"> Option </th>
                    </tr>
                </thead>
                <tbody role="rowgroup" id="eR">
                    @foreach($data as $result)
                        @if($result->status=="invalid")
                            <tr role="row" id="invalid">
                                <td role="cell">{{ $result-> id }}</td>
                                <td role="cell">{{ $result-> userID }}</td>
                                <td role="cell">{{ $result-> name }}</td>
                                <td role="cell">{{ $result-> address }}</td>
                                <td role="cell">{{ $result-> company }}</td>
                                <td role="cell">{{ $result-> status }}</td>
                                <td role="cell">
                                    <form action="{{ route('changeShowroomStatus') }}" method="post">
                                        @csrf
                                        <input type="text" name="id" value={{ $result->id }} class="hide">
                                        <button type="submit" class="btn btn-success" name="status" value="valid">Make Valid</button>
                                    </form>
                                </td>
                            </tr>
                        @elseif($result->status=="valid")
                            <tr role="row" id="valid">
                                <td role="cell">{{ $result-> id }}</td>
                                <td role="cell">{{ $result-> userID }}</td>
                                <td role="cell">{{ $result-> name }}</td>
                                <td role="cell">{{ $result-> address }}</td>
                                <td role="cell">{{ $result-> company }}</td>
                                <td role="cell">{{ $result-> status }}</td>
                                <td role="cell">
                                    <form action="{{ route('changeShowroomStatus') }}" method="post">
                                        @csrf
                                        <input type="text" name="id" value={{ $result->id }} class="hide">
                                        <button type="submit" class="btn btn-danger" name="status" value="invalid">Make Invalid</button>
                                    </form>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>  
                </table>
            </div>
        </div>
        <!-- Evaluate Content Finished -->
    </div>
<script>
    $(document).ready(function(){
        $('.btnValidate').addClass('w3-blue');
    });
</script>
    @endsection
