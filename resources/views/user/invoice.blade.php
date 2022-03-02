
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Invoice</title>

    <link rel="stylesheet" type="text/css" href="{{asset('public/user_asset/custom.css')}}">
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">

                                <h2>Doctors<span style="color: cadetblue;">24/7</span></h2>

                            </td>

                            <td>
                                Invoice #:
                                {{$appointment->appointmentID}}<br>
                                Created:
                                {{$appointment->created_at}}<br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                {{-- {{$appointment->address}} --}}
                            </td>

                            <td>




                            </td>
                        </tr>
                    </table>
                </td>
            </tr>



            <tr class="heading">
                <td>
                    Appointment Details
                </td>

                <td>
                    #
                </td>
            </tr>

            <tr class="item">
                <td>
                    Appointment ID
                </td>

                <td>
                    {{$appointment->appointmentID}}
                </td>
            </tr>



            <tr class="item">
                <td>
                    Patient name
                </td>

                <td>
                    {{$appointment->name}}
                </td>
            </tr>

            <tr class="item">
                <td>
                    Email
                </td>

                <td>
                    {{$appointment->email}}
                </td>
            </tr>

            <tr class="item">
                <td>
                    Mobile No
                </td>

                <td>
                    {{$appointment->contactNo}}
                </td>
            </tr>

            <tr class="item">
                <td>
                    Doctor name
                </td>

                <td>
                    {{$appointment->doctor->name}}
                </td>
            </tr>

            <tr class="item">
                <td>
                    Doctor Chamber
                </td>

                <td>
                    {{$appointment->doctor->chamber}}
                </td>
            </tr>




            <tr class="item">
                <td>
                    Appointment Time & Date
                </td>

                <td>

                    {{$appointment->appointmentTime}}
                </td>
            </tr>

            <tr class="item">
                <td>
                    Gender
                </td>

                <td>
                    {{$appointment->gender}}
                </td>
            </tr>



        </table>
    </div>
    <div class="print">
        <button onclick="myFunction()">Print this page</button>
    </div>
    <script>
        function myFunction() {
            window.print();
        }
    </script>
</body>

</html>
