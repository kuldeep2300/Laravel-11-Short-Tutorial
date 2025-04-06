<h1>Welcome Page</h1>

<!-- <a href="/about">About Page</a> -->
<a href="{{ URL::to('home') }}">Home Page</a>
<a href="{{ URL::to('about') }}">About Page</a>

<a href="{{ URL::to('about', ['anil']) }}">{{ URL::to('about', ['anil']) }}</a>