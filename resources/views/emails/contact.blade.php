<h3>New Enquiry Form Submission</h3>
<p><strong>Name:</strong> @if(isset($salutation)) {{$salutation}} @endif {{ $name }}</p>
<p><strong>Phone:</strong> {{ $phone }}</p>
<p><strong>Email:</strong> {{ $email }}</p>
@if(isset($city))
<p><strong>City:</strong> {{ $city }}</p>
@endif
@if(isset($messages))
<p><strong>Message:</strong> {{ $messages }}</p>
@endif
@if(isset($jsonData))
<p><strong>Link:</strong> {{ $jsonData }}</p>
@endif
@if(isset($title))
<p><strong>Title:</strong> {{ $title }}</p>
@endif
