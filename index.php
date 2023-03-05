<!-- 

TODO: figure out the favicon
TODO: OMG, WTF is up with the accessibility on Mac!?
TODO: Fix the github link on the About page
TODO: Find a "professional" photo to go on the About page
TODO: Add some more graphic elements to the Contact Page
TODO: Dark mode and light mode
TODO: Go to top buttons
TODO: More interest in footers? 
-->


<?php include './assets/inc/header.php'; ?>


<main>
  <h1 class="name"><span class="hilight">Charlene Slimp</span></h1>
  <h1 class="name">Software Engineer</h1>
  <div id="hero">
  </div>
  <h2 class="leftie">Senior Software Engineer with over 10 years of experience in a wide variety of technologies and languages.</h2>
  <section id="orderedList">
    <ol>
      <li>Passionate about Accessibility and Responsiveness - true cross-viewport agnosticism.</li>
      <li>True enjoyment in testing, quality assurance, pair/mob programming, and code reviews.</li>
    </ol>
    <ol>
      <li>Exposure to and experience in a wide variety of industries - eager to learn new subjects!</li>
      <li>I believe code/computers should make our lives easier - easy for business, easy for consumers.</li>
    </ol>
  </section>

  <section id="port1"class="carousel">
    <h2>Website Portfolio</h2>
      <!-- Website Portfolio Carousel -->
      <div class="carousel">
      <!-- Full-width images with number and caption text -->
      <div class="mySlides fade">
        <img src = "./assets/images/Augur-Azure2.jpg" alt = "Screenshot of front page for Augur Azure website">
        <div class="slide-text"><a href="https://angry-sinoussi-7ea391.netlify.app/">Augur Azure</a></div>
      </div>

      <div class="mySlides fade">
        <img src="./assets/images/Bang-Seafood.png" alt = "Screenshot of front page for Bang Seafood">
        <div class="slide-text"><a href="https://brave-hawking-735dda.netlify.app/">Bang Seafood</a></div>
      </div>

      <div class="mySlides fade">
        <img src="./assets/images/CareGiversHeart.PNG" alt="Screenshot of front page of The Caregiver's Heart">
        <div class="slide-text"><a href="https://www.thecaregiversheart.com/">The Caregiver's Heart</a></div>
      </div>

      <div class="mySlides fade">
            <img src="./assets/images/Padgetts.PNG" alt="Screenshot of front page of Padgett's Estate Agent">
            <div class="slide-text"><a href="https://www.richardpadgett.co.uk/">Padgett's Estate Agent</a></div>
      </div>

      <div class="mySlides fade">
        <img src="./assets/images/MY-APP-STAT.PNG" alt="Screenshot of front page of MY-APP-STAT">
        <div class="slide-text"><a href="http://www.myappstat.com/">MY-APP-STAT</a></div>
      </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
      <span class="dot" onclick="currentSlide(4)"></span>
      <span class="dot" onclick="currentSlide(5)"></span>
    </div> 
  </section>
<!-- JavaScript and Python Portfolio -->
<section id="port2"class="carousel">
    <h2>JavaScript and Python Portfolio</h2>
  <!-- Full-width images with number and caption text -->
    <div class="mySlides2 fade">
      <img src="./assets/images/Countdown.png" alt="Screenshot of Countdown to Halloween">
      <div class="slide-text"><a href="https://www.charleneslimp.com/Halloween/CountDownTimer.html">Countdown to Halloween</a></div>
    </div>

    <div class="mySlides2 fade">
      <img src="./assets/images/g2-calc.png" alt="Screenshot of Leads Calculator">
      <div class="slide-text"><a href="https://htmlpreview.github.io/?https://github.com/EddieSavageOG/workTrafficCalculator/blob/main/calc2.html">Leads Calculator</a></div>
    </div>

    <div class="mySlides2 fade">
      <img src="./assets/images/NASA-api.png" alt="Screenshot of NASA Photo Selector">
      <div class="slide-text"><a href="https://htmlpreview.github.io/?https://github.com/EddieSavageOG/NASAPictures/blob/main/index.html">NASA Photo Selector</a></div>
    </div>

  <!-- Next and previous buttons -->
      <a class="prev" onclick="plusSlides2(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides2(1)">&#10095;</a>
    </div>
    <br>

<!-- The dots/circles -->
    <div style="text-align:center">
      <span class="dot2" onclick="currentSlide2(1)"></span>
      <span class="dot2" onclick="currentSlide2(2)"></span>
      <span class="dot2" onclick="currentSlide2(3)"></span>
    </div> 
  </section>

  
  <h2 class="leftie">Decades of experience, always learning new things, can't stop, won't stop.</h2>
  <section id="orderedList">
    <ol>
      <li>Visit the <a href="about.html">About page</a> to discover my background.</li>
      <li>Check out my <a href="index.html#port1">Website Portfolio</a> for those websites that are still live.</li>
      <li>Or persue my <a href="index.html#port2">JavaScript and Python Portfolio</a> for more fun projects!</li>
      <li>You can visit my <a href="https://github.com/EddieSavageOG">Github</a> to see what other projects I've been playing with.</li>
      <li>I'd love to hear from you! Feel free to shoot me a message on my <a href = "contact.html">Contact page</a>!</li>
    </ol>
  </section>
</main> 


<?php include './assets/inc/footer.php'; ?>