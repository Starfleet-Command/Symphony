<h1>COINS! GET YOUR COINS HERE</h1>

<form action="{{route('users.store')}}" method="POST">
  @csrf
  <label for="fname">name:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="email">email:</label><br>
  <input type="text" id="email" name="email"><br>
  <br>
  <button type="submit">submit<br>
</form>