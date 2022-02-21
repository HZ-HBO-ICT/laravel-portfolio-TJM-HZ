<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FAQ</title>
</head>
<body>
    <ul>
        @foreach($faqs as $faq)
            <li>{{$faq->question}}</li>
            <ul><li>{{$faq->answer}}</li></ul>
        @endforeach
    </ul>
</body>
</html>
