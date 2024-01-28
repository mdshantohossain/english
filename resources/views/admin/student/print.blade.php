<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Print</title>
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/customize/style.css" />
</head>
<body>

<div class="print">
    <div class="container">

        <div class="row">
            <div class="header">
                <div class="logo f-left">
                    <a href="{{ route('dashboard') }}">
                        <img src="{{asset('/')}}admin/assets/icon/logo.png" alt="">
                    </a>
                </div>
                <div class="content f-left">
                    <h1>English Therapy</h1>
                    <p>House#37, Road#6, Block#H, Mirpur-02 <br>
                        Mirpur Stadium, Dhaka, Bangladesh <br>
                        Phone : +88 01755-298934, +88 01610 853198 <br>
                        Email: englishtherapy18@gmail.com
                    </p>
                </div>
            </div>
        </div>

        <div class="information">
            <h3>Student's Information</h3>
        </div>

        <div class="row">
            <table>
                <tr>
                    <th height="30" >Student's Name</th>
                    <td colspan="3">{{ $student->name }}</td>
                </tr>
                <tr>
                    <th height="30" colspan="1">Phone</th>
                    <td colspan="3">{{ $student->phone }}</td>
                </tr>
                <tr>
                    <th height="30">Email</th>
                    <td colspan="3">{{ $student->email }}</td>
                </tr>
                <tr>
                    <th height="30" colspan="2">Father's Name</th>
                    <td colspan="2">{{ $student->father_name }}</td>
                </tr>
                <tr>
                    <th height="30" colspan="2">Mother's Name</th>
                    <td colspan="2">{{ $student->mother_name }}</td>
                </tr>
                <tr>
                    <th height="30" colspan="2">Present Address</th>
                    <td colspan="2">{{ $student->present_address }}</td>
                </tr>
                <tr>
                    <th height="30" colspan="2">Permanent Address</th>
                    <td colspan="2">{{ $student->permanent_address }}</td>
                </tr>
                <tr>
                    <th height="30">Date Of Birth</th>
                    <td>{{ $student->dob }}</td>
                    <th>NID Number</th>
                    <td>{{ $student->nid }}</td>
                </tr>
                <tr>
                    <th height="30" colspan="">Blood Group</th>
                    <td colspan="">{{ $student->blood_group }}</td>
                    <th colspan="">Gender</th>
                    <td colspan="">{{ $student->gender }}</td>
                </tr>
            </table>
        </div>

        <div class="student-footer">
            <div class="div-one f-left">
                Signature of Student's
            </div>
            <div class="div-two f-right">
                Signature of Authorized
            </div>
        </div>

    </div>

    <div class="container">

        <div class="row">
            <div class="header" style="height: 160px;">
                <div class="logo f-left">
                    <a href="{{ route('dashboard') }}">
                        <img src="{{asset('/')}}admin/assets/icon/logo.png" alt="">
                    </a>

                </div>
                <div class="content f-left">
                    <h1>English Therapy</h1>
                    <p>House#37, Road#6, Block#H, Mirpur-02 <br>
                        Mirpur Stadium, Dhaka, Bangladesh <br>
                        Phone : +88 01755-298934, +88 01610 853198 <br>
                        Email: englishtherapy18@gmail.com
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="money-receipt">
                <div class="center">
                    <strong>Money Receipt</strong>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="date">
                <div class="f-left">Sl No. {{$student->id}}</div>
                <div class="f-right" id="date">Date: </div>
            </div>
        </div>

        <div class="row">
            <div class="received">
                <div class="text">
                    Received with thanks from
                </div>
                <div class="border">
                    <strong>MD Shanto Hossain</strong>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="received">
                <div class="text">
                    Student ID
                </div>
                <div class="border-two">
                    <strong>{{ $student->student_id }}</strong>
                </div>
                <div class="f-left">
                    <label><input type="checkbox" name="check" {{ $student->student_type == 'Residential' ? 'checked' : ''  }} >Residential</label>
                    <label><input type="checkbox" name="check" {{ $student->student_type == 'Non-Residential' ? 'checked' : '' }}>Non Residential</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="received">
                <div class="text">
                    A sum of taka
                </div>
                <div class="border-three">
                    <strong>{{ $student->pay_amount }}</strong>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="amount">
                <div class="f-left">
                    <div class="f-left" style="margin-top: 10px">Pay Amount</div>
                    <div class="taka f-left">{{ $student->payment_amount }}</div>
                </div>
                <div class="f-right">
                    <div class="f-left" style="margin-top: 10px">Due Amount</div>
                    <div class="due-amount f-left">{{ isset($student->due_amount) ? $student->due_amount : '0' }}</div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="payment-method">
                Payment Method:
                <strong>
                    <?php
                    if ($student->payment_method == 1){
                        echo 'Cash On';
                    }else if ($student->payment_method == 2){
                        echo 'Check';
                    }else if ($student->payment_method == 3){
                        echo 'Bikash';
                    }else if ($student->payment_method == 4){
                        echo 'Nagad';
                    }else if ($student->payment_method == 5){
                        echo 'Rocket';
                    }
                    ?>
                </strong>
            </div>
        </div>

        <div class="footer-two">
            <div class="f-left">

            </div>
            <div class="div-two f-right">
                Signature of Authorized
            </div>
        </div>
    </div>
</div>



<script src="{{asset('/')}}admin/assets/customize/time.js"></script>
</body>
</html>
