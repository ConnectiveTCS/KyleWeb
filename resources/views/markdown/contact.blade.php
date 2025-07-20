<x-mail::message>
# Contact Form Submission
You have received a new contact form submission.
**Name:** {{ $contact->name }}
**Email:** {{ $contact->email }}
**Phone:** {{ $contact->phone }}
**Message:**
{{ $contact->message }}

<x-mail::button :url="route('contact.show', $contact->id)">
View Submission
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
