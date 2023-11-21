<form action="/applications" method="post">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email">
    <label for="phone">Phone:</label>
    <input type="tel" id="phone" name="phone">
    <label for="comments">Comments:</label>
    <textarea id="comments" name="comments"></textarea>
    <input type="submit" value="Submit">
</form>
