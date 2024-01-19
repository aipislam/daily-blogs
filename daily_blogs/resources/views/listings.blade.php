<h1>{{$heading}}</h1>
<?php foreach($blog_text as $blog): ?>
    <h2>{{$blog['id']}}</h2>
    <p>{{$blog['content']}}</p>
<?php endforeach ?>