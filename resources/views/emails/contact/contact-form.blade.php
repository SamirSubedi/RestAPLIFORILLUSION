@component('mail::message')

# Thank you for your message
Contact From Message
<strong>Message From:{{ $data['email'] }}</strong>


<strong>Name</strong> {{ $data['name'] }}
<strong>Email</strong> {{ $data['number'] }}

<strong>Message</strong>{{ $data['message'] }}
<strong>Subject</strong>{{ $data['subject'] }}





@endcomponent
