<div>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
    @foreach($users as $user)
        <div>Hello {{$user['name']}}, this is your email: {{$user['email']}}.</div>
    @endforeach
</div>
