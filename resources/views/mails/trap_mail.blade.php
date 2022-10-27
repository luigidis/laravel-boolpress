@component('mail::message')
# Nuovo Post
 
Un Nuovo post è stato aggiunto alla tua sezione!
 
@component('mail::button', ['url' =>  route('admin.posts.show', $post)])
{{ $post->title }}
@endcomponent
 
Grazie,<br>
{{ config('app.name') }}
@endcomponent


