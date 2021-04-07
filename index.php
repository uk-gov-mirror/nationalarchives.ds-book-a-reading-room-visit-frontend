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
            padding: 2em;
        }
        h1 {
            font-size: 1.5em;
            font-family: 'Open Sans', serif;
        }
        h2 {
            font-size: 1.1em;
            margin: 1em 0 0.5em;
        }
        .standfirst {
            font-family: 'Roboto Mono', serif;
        }
        ul {
            margin: 0;
            padding: 0;

        }
        li {
            padding: 0.7em;
            display: block;
            border-bottom: 1px dotted #ccc;
            list-style-position: outside;
            list-style-type: square;
            font-size: 0.8em;
            color: #666;
        }
        li:last-of-type {
            border-bottom: 0;
        }
        a, a:visited {
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
            margin: 0;
        }
        ul ul li {
            padding: 1em 0 1.5em 4.5em;
            background: #efefef;
            font-size: 0.7em;

        }
        hr {
            margin: 0.5em 0 0.5em;
            border: 2px solid #ccc;
        }
    </style>
</head>
<body>
<h1>Static HTML for Kew Booking Service</h1>
<p class="standfirst">This is a collection of HTML templates for front-end development of the KBS user interface.</p>
<hr>
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
    <li><span>5.1</span><a href="order_documents_(standard).html">Order documents (standard visit)</a><br>order_documents_(standard).html</li>
    <li><span>5.2</span><a href="order_documents_(bulk).html">Order documents (bulk visit)</a><br>order_documents_(bulk).html</li>
    <li><span>6</span><a href="order_complete.html">Order complete (standard visit)</a><br>order_complete.html</li>
</ul>
<hr>
<h2>Error examples</h2>
<ul>
    <li><span>1.1</span><a href="return_to_your_booking_(with_errors).html">Return to your booking</a><br>return_to_your_booking_(with_errors).html</li>
    <li><span>3</span><a href="enter_your_details_(with_errors).html">Enter your details</a><br>enter_your_details_(with_errors).html</li>

</ul>

</body>
</html>

