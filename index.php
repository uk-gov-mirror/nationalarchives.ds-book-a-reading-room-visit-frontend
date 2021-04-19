<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kew booking system - frontend</title>
    <style>
        body {
            font-family: 'Open Sans', serif;
            font-size: 1.1em;
            padding: 3em 0.5em;
        }
        h1 {
            font-size: 1.5em;
            font-family: 'Open Sans', serif;
        }
        h2 {
            font-size: 1.1em;
            margin: 4em 0 0.5em;
        }
        a, a:visited {
            font-weight: bold;
            color: #134571;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .standfirst {
            font-family: 'Roboto Mono', serif;
        }
        ul {
            margin: 0;
            padding: 0;

        }
        li {
            padding: 1.2em;
            background-color: #efefef;
            display: block;
            border: 1px solid #ccc;
            list-style-position: outside;
            list-style-type: square;
            font-size: 0.8em;
            color: #666;
            border-left: 6px solid #134571;
            margin-bottom: 4px;
        }

        li a, li a:visited {
            font-size: 1.4em;
            font-weight: bold;
            color: #134571;
        }
        span {
            display: inline-block;
            width: 45px;
            font-size: 1.4em;
            font-weight: bold;
            color: #222;
        }
        ul ul {

        }
        ul ul li {
            padding: 1em 0 1.5em 4.5em;
            font-size: 0.7em;
            border-top: 0;
            border-right: 1px solid #ccc;
            border-left: 6px solid #ccc;
            background-color: #fff;
            margin-top: -4px;


        }
        hr {
            margin: 3em 0 0.5em;
            border-bottom: 4px solid #999;
            height: 0;
            display: block;

        }
        @media screen and (min-width: 768px) {
            body {
                padding: 2em;
            }
        }
    </style>
</head>
<body>
<h1>Static HTML for Kew Booking Service</h1>
<p class="standfirst">This is a collection of HTML templates for front-end development of the KBS user interface.</p>

<h2>Page templates</h2>
<ul>
    <li><span>1</span><a href="service_homepage.html">Service homepage</a><br>service_homepage.html</li>
    <ul>
        <li><span>1.1</span><a href="return_to_your_booking.html">Return to your booking</a><br>return_to_your_booking.html</li>
    </ul>
    <li><span>2.1</span><a href="select_a_date_(standard).html">Select a date (standard visit)</a><br>select_a_date_(standard).html</li>
    <li><span>2.2</span><a href="select_a_date_(bulk).html">Select a date (bulk visit)</a><br>select_a_date_(bulk).html</li>
    <li><span>3</span><a href="enter_your_details.html">Enter your details</a><br>enter_your_details.html</li>
    <li><span>4</span><a href="reservation_confirmation.html">Reservation confirmation</a><br>reservation_confirmation.html</li>
    <ul>
        <li><span>4.1</span><a href="continue_later.html">Continue later</a><br>continue_later.html</li>
        <li><span>4.2</span><a href="thank_you.html">Thank you</a><br>thank_you.html</li>
    </ul>
    <li><span>5.1</span><a href="order_documents_(standard).html">Order documents (standard visit)</a><br>order_documents_(standard).html</li>
    <li><span>5.2</span><a href="order_documents_(bulk).html">Order documents (bulk visit)</a><br>order_documents_(bulk).html</li>
    <li><span>6</span><a href="order_complete.html">Order summary</a><br>order_complete.html</li>
    <ul>
        <li><span>6.1</span><a href="cancel_your_visit.html">Cancel your visit</a><br>cancel_your_visit.html</li>
        <li><span>6.2</span><a href="cancel_your_visit_confirmation.html">Cancellation confirmation</a><br>cancel_your_visit_confirmation.html</li>
    </ul>
</ul>

<h2>Error examples</h2>
<ul>
    <li><span>0</span><a href="error.html">Generic error page</a><br>error.html</li>
    <li><span>1.1</span><a href="return_to_your_booking_(with_errors).html">Return to your booking</a><br>return_to_your_booking_(with_errors).html</li>
    <li><span>3</span><a href="enter_your_details_(with_errors).html">Enter your details</a><br>enter_your_details_(with_errors).html</li>
</ul>

<h2>Emails</h2>
<p>These should be converted to an email-friendly version before integrating using the <a href="https://templates.mailchimp.com/resources/inline-css/">Mailchimp CSS inliner tool</a>. They should then be saved in the 'emails/converted'.</p>
<ul>
    <li><span>1</span><a href="emails/src/reservation_confirmation.html">Provisional booking confirmation</a><br>Sent to customer after completing 'Enter your details'</a></li>
    <li><span>2</span><a href="emails/src/booking_confirmation.html">Booking confirmation</a><br>Sent to customer once deadline for ordering documents has passed.</li>
    <li><span>3</span><a href="emails/src/dsd_booking_confirmation.html">DSD booking confirmation</a><br>Sent to DSD once deadline for ordering documents has passed.</li>
    <li><span>4</span><a href="emails/src/booking_cancellation.html">Booking cancellation (manual)</a><br>Sent to customer if DSD or customer cancels booking.</li>
    <li><span>5</span><a href="emails/src/automatic_cancellation.html">Booking cancellation (automatic)</a><br>Sent to customer if the booking is automatically cancelled.</li>
    <li><span>6</span><a href="emails/src/valid_order_reminder.html">Valid order reminder</a><br>Sent to customer 2 days before the document ordering deadline for valid orders.</li>
    <li><span>7</span><a href="emails/src/invalid_order_reminder.html">Invalid order reminder</a><br>Sent to customer 2 days before the document ordering deadline for invalid orders.</li>
</ul>

<h2>Website pages</h2>
<p>These are pages from the main website that are </p>
<ul>
    <li><span>1</span><a href="about-the-book-a-reading-room-visit-service.html">About the book a reading room visit service</a><br>The page linked to from 'find out more' links</li>
    <li><span>2</span><a href="what-can-i-expect-when-i-visit.html">What can I expect when I visit?</a><br>The 'What can I expect?' page from the Visit Us section of the site</li>
    <li><span>3</span><a href="privacy-policy.html">Privacy policy</a><br>The privacy policy page</li>
    <li><span>4</span><a href="terms-of-use.html">Terms of use</a><br>The terms of use</li>
</ul>
</body>
</html>

