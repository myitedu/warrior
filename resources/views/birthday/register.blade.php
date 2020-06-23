@extends('master')
@section('title', 'Subscribe Birthday Reminder')
@section('content')

    <div id="birthday_register">
        <div class="birthday_reminder_header">Birthday Reminder Form</div>
        <form method="post" action="/birthday/reminder/register">
                @if ($errors->any())
                    @php
                        $class_name = 'alert-success';
                        $msg = $errors->all()[0];
                        $any_error = $errors->all()[0]?true:false;
                            if ($any_error){
                                $class_name = 'alert-danger';
                            }
                           $no_error = ($errors->all()[0]=="0")??false;
                            if ($no_error){
                                $msg = "Your request has been updated successfully";
                            }
                    @endphp
                    <div class="alert  {{$class_name}}  msg_alert">
                            <span>{{ $msg}}</span>
                    </div>
                @endif
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input name="first_name" required="required" type="text" class="form-control" id="first_name" aria-describedby="first_nameHelp" placeholder="First Name of the birthday person">
                <small id="first_nameHelp" class="form-text text-muted">Please enter your First Name</small>
            </div>

            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input name="last_name"  required="required"  type="text" class="form-control" id="last_name" aria-describedby="last_nameHelp" placeholder="Last Name of the birthday person">
                <small id="last_nameHelp" class="form-text text-muted">Please enter your Last Name</small>
            </div>


            <div class="form-group">
                <label for="dob">DOB</label>
                <input name="dob" required="required"  type="date" class="form-control" id="dob" aria-describedby="dobHelp" placeholder="DOB of the birthday person">
                <small id="dobHelp" class="form-text text-muted">Please enter DOB of the person</small>
            </div>


            <div class="form-group">
                <label for="email_address">Email Address</label>
                <input name="email"  required="required"  type="text" class="form-control" id="email_address" aria-describedby="email_addressHelp" placeholder="Email Address of the birthday person">
                <small id="email_addressHelp" class="form-text text-muted">Please enter your Email Address</small>
            </div>

            <div class="form-group">
                <label for="your_message">Your Message</label>
                <textarea name="your_message" required="required" class="form-control" id="your_message" aria-describedby="your_messageHelp" placeholder="Your message to a birthday person"></textarea>
                <small id="your_messageHelp" class="form-text text-muted">Please enter your message</small>
            </div>

            <div class="form-group form-check">
                <input name="unsubscribe"  type="checkbox" class="form-check-input" id="unsubscribeCheck1">
                <label class="form-check-label" for="unsubscribeCheck1">Unsubscribe</label>
            </div>
            {{csrf_field()}}
            <button type="reset" class="btn btn-dark">Start Over</button>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>


    <style>
        form label{
            font-weight: bolder;
            color: #064c07;
        }
        .birthday_reminder_header{
            text-align: center;
            font-size: 2em;
            color: darkred;
            font-family: "Imprint MT Shadow";
            text-shadow: #dbcaa5 3px 1px;
        }

        body{
            background-color: #dbcaa5;
        }

        #birthday_register{
            width: 80%;
            margin: 20px auto;
            background-color: #fffcf9;
        }
    </style>

@endsection
