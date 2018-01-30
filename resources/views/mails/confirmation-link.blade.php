<p>Welcome to Identihub!</p>

<p>Thanks for registering! In a bit you will be able to create projects and speed up your design workflow.
    We just need you to validate your email address by visiting the link below:</p>

<a href="{{ route('activate.check', ['token' => $activationLink->token]) }}">Click here to activate your account</a>

<p>Please note: do not wait too long as this confirmation e-mail is valid for only 24 hours.</p>