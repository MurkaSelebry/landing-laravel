<form method="POST" action="/apply">
      @csrf
      <label for="name">Name:</label>
      <input type="text" id="name" name="name">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email">
      <label for="phone">Phone:</label>
      <input type="tel" id="phone" name="phone">
      <button type="submit">Apply</button>
</form>
