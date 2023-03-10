<p>Show session</p>

@foreach($sessions as $session)
    <label>id</label>
    <textarea>{{$session->id}}</textarea><br>
    <label>user_id</label>
    <textarea>{{$session->user_id}}</textarea><br>
    <label>ip_address</label>
    <textarea>{{$session->ip_address}}</textarea><br>
    <label>user_agent</label>
    <textarea>{{$session->user_agent}}</textarea><br>
    <label>payload</label>
    <textarea>{{$session->payload}}</textarea><br>
    <label>last_activity</label>
    <textarea>{{$session->last_activity}}</textarea><br>
@endforeach

<textarea></textarea>

<h1>
    Create new user
</h1>
<form method="POST" action="{{route('create')}}">
    @csrf
    <label for="txt_name">name</label>
    <input name="name" id="txt_name">
    <label for="txt_email">email</label>
    <input name="email" id="txt_email">
    <label for="txt_password">pwd</label>
    <input name="password" id="txt_password">

    <button type="submit">Click</button>
    <!-- Equivalent to... -->
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
</form>

<h1>
    Login
</h1>

<form method="POST" action="{{route('login')}}">
    @csrf
    <label for="txt_name">name</label>
    <input name="name" id="txt_name">
    <label for="txt_password">pwd</label>
    <input name="password" id="txt_password">

    <button type="submit">Click</button>
    <!-- Equivalent to... -->
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
</form>
