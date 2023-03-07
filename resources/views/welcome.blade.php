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
