<section>
    <h2>Leave a Public Note/Question</h2>
    <form method="POST">
        <!-- CSRF -->
        <label for="">Name</label>
        <input type="text" name="name">
        <label for="">Email</label>
        <input type="email" name="email">
        <label for="">Message</label>
        <textarea name="message" rows="4" id=""></textarea>
        <button style="margin-top: 1rem;" type="submit">Send Message</button>
    </form>
</section>