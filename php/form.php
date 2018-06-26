      <form method="post" action="  " id="inquiryForm">
        <h2>Contact Form</h2>
        <p>Have a question or comment? Fill in the form and hit Submit.</p>

        <p>
         <label for="name">Your name</label>
          <input type="text" name="name" id="name" maxlength="30" minlength="2" type="text" required>
          <p class="error">
            <span>Your name must contain 5 to 30 characters.</span>
          </p>
        </p>

        <p>
          <label for="email">Your email - We'll never share it with anyone else.</label>
          <input type="email" name="email" id="email" required>
          <p class="error">
            <span>Please type in a correct email.</span>
          </p>
        </p>

        <p>
          <label for="subject">Your subject</label>
          <input type="text" name="subject" id="subject" maxlength="20" minlength="2" required>
          <p class="error">
            <span>Your subject must contain 2 to 20 words.</span>
          </p>
        </p>

        <p>
          <label for="message">Your message</label>
          <textarea name="message" id="message" rows="5" required></textarea>
          <p class="error">
            <span>Your message must contain 10 to 100 words.</span>
          </p>
        </p>

        <input class="submit" type="submit" value="Submit">
      </form>
<script>
$("#inquiryForm").validate();
</script>
