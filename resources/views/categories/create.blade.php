<form action="/categories" method="post">
    @csrf
    Title: <input type="text" name="title"><br>
    Content: <textarea name="content"></textarea><br>
    <button>Send</button>
</form>
