<?php include './assets/inc/header.php'; ?>

<main>
  <h1>Contact me</h1>
  <p class="about-p">Thanks for visiting my website! Please feel free to drop me a note to say hello, ask about freelancing services, or tell me about your job opening.</p>
<div class="contact-content">
<form id="contact-form" method="post" action="contact.php">
      <label for="name">Name:</label><br />
      <input type="text" id="name" name="name" required>
      <br />
      <label for="email">Email:</label><br />
      <input type="email" id="email" name="email" required>
      <br />
      <label for="message">Message:</label><br />
      <textarea id="message" name="message" required></textarea>
      <br />
      <button type="submit">Submit</button>
    </form>

    <p><a href = "https://github.com/EddieSavageOG"><img src = "./assets/images/github-mark-white.png" class = "github" alt = "github logo"></a></p>
</div>
</main>

<?php include './assets/inc/footer.php'; ?>