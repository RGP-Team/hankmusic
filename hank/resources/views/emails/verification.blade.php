<html lang="en-US">
<head>
    <meta charset="text/html">
</head>
<body>
    <p>{{ CustomHelper::lang('lang-hello') }} {{ $user->first_name }} {{ $user->last_name }},</p>
	   {{ CustomHelper::lang('lang-email-verification-content') }}<br/>
	   <a href="{{ $url }}">{{ $url }}</a>
</body>
</html>