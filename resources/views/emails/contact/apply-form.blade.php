<img height="150" src="public_path('user/logo.jpg')" width="200px "alt="Image"/>
@component('mail::message')

# Applied Sucessfully From this Applicantants




<strong>Applied from: {{ $data['email'] }}</strong>


<strong>Name:</strong> {{ $data['name'] }}


<strong>Message:</strong>{{ $data['message'] }}
<strong>Address:</strong>{{ $data['address'] }}
<strong>Number:</strong>{{ $data['number'] }}<br>
<strong>Course:</strong>{{ $data['Course'] }}





@endcomponent
