<?php get_header(); ?>

    <div class="contact-form-hero">
        <div class="coffee-hero-image">
            <div class="coffee-image-overlay1"></div>
            <div class="coffee-image-overlay2"></div>
            <img class="absolute" src="<?= get_template_directory_uri();?>/assets/img/coffee-cart-image.png" alt="Green coffee cart set up and ready to serve">
            <div class="image-background-header-text">
                <div class="text-content">
                    <h1>Connect wtih us!</h1>
                    <p>Want to see us at your next market or event? Looking to talk more about product?</p>
                </div>
            <div class="contact-form container">
            <h3>Lets chat - Fill out the form to get in touch!</h3>
            <form action="https://formsubmit.co/atlittle44@gmail.com" method="POST">
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email Address" required>
                <input type="text" name="subject" placeholder="Subject" required>
                <textarea name="message" rows="8" placeholder="Your Message" required></textarea>
                <button class="radial-button" type="submit">Submit your enquiry</button>
            </form>
            </div>
            </div>
        </div>
    </div>

    <div class="events-section">
        <div class="container center-content">
        <div class="chip">
            <img src="<?= get_template_directory_uri();?>/assets/img/sparkles-green.svg" alt="Green sparkles icon">
            <p>Event types</p>
        </div>
        <div class="text-content">
            <h2>Explore what's possible</h2>
            <p>We aim to help curate memorable experiences. If you don’t see something below that sounds like what you’re looking to build, don’t let that stop you from reaching out. Let’s make something magical happen!</p>
        </div>
        <div class="events-carousel">
            <div class="event-card green-event-card">
            <img src="<?= get_template_directory_uri();?>/assets/img/markets.png" alt="A table full of plants with people lining up to buy from vendors in the background">
                <h3>Local markets</h3>
            </div>
            <div class="event-card blue-event-card">
            <img src="<?= get_template_directory_uri();?>/assets/img/community-events.png" alt="Large group of women gathered around a table full of flora and craft supplies">
                <h3>Community events</h3>
            </div>
            <div class="event-card blue-event-card">
            <img src="<?= get_template_directory_uri();?>/assets/img/art-galleries.png" alt="Five individuals standing around in a gallery space, observing and taking pictures of surrounding art">
                <h3>Art galleries</h3>
            </div>
            <div class="event-card green-event-card">
            <img src="<?= get_template_directory_uri();?>/assets/img/school-functions.png" alt="People throw up their caps in celebration of a graduation">
                <h3>School functions</h3>
            </div>
            <div class="event-card green-event-card">
            <img src="<?= get_template_directory_uri();?>/assets/img/corporate-parties.png" alt="People at a long table cheers with champagne glasses in an elegant setting">
                <h3>Corporate parties</h3>
            </div>
            <div class="event-card blue-event-card">
            <img src="<?= get_template_directory_uri();?>/assets/img/weddings.png" alt="A long table with a white table cloth and central floral arragements">
                <h3>Weddings</h3>
            </div>
        </div>
        </div>
    </div>

<?php get_footer(); ?>