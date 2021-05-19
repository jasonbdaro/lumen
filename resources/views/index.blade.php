<html>
    <form method="POST" action="">
        <div>
            <label for="message">Message:</label>
            <input type="text" id="message" name="message">
            <button type="submit">Send</button>
            <h1>Message: {{ $message ?? '' }}</h1>
        </div>
    </form>
</html>
