@component('mail::message')
# Thank you for your submission.

You will be notified once your Medical Insurance Membership application has been reviewed. <br>

@component('mail::panel')
Visit our <a href="https://www.jubileeInsurance.com">website</a> to learn more about our products.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
