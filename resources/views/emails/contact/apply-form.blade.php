@component('mail::message')

# Applied Sucessfully From
<strong>Applied from {{ $data['email'] }}</strong>


<strong>Name</strong> {{ $data['name'] }}


<strong>Message</strong>{{ $data['message'] }}
<strong>Address</strong>{{ $data['address'] }}
<strong>Number</strong>{{ $data['number'] }}
<strong>Course</strong>{{ $data['Course'] }}





@endcomponent
