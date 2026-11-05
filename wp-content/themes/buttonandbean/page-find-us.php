<?php get_header(); ?>

    <div class="image-text-header">
        <img class="image-header-half" src="<?= get_template_directory_uri();?>/assets/img/button-bean-cart-vendors.jpg">
        <div class="text-header-half">
            <div class="text-header-content-container">
            <div class="chip">
                <img src="<?= get_template_directory_uri();?>/assets/img/sparkles-green.svg" alt="Green sparkles icon">
                <p>Operating out of the twin cities</p>
            </div>
            <div class="text-content">
                <h1>Find where we're headed next!</h1>
                <p>As a completely mobile coffee cart, Button & Bean was made to be everywhere and anywhere. We meet people and places where they are all across the Twin Cities area. Anything upcoming events or pop-ups we have can be checked out below!</p>
            </div>
            </div>
        </div>
    </div>

    <div class="our-schedule-section">
        <div class="container">
        <div class="schedule-text-content center-content">
            <div class="chip">
                <img src="<?= get_template_directory_uri();?>/assets/img/sparkles-green.svg" alt="Green sparkles icon">
                <p>Our Schedule</p>
            </div>
            <h2>Come visit us!</h2>
        </div>
        <div class="monthly-section">
            <div class="monthly-header">
                <h4>June</h4>
                <h4>2027</h4>
            </div>
            <div class="monthly-events">
            <div class="event-item">
                <img class="event-image" src="<?= get_template_directory_uri();?>/assets/img/placeholder-event-image.JPEG" alt="People gathering around a cute and fully stocked coffee cart ready to be served">
                <div class="event-details">
                    <h4>16, 17, 18</h4>
                    <p class="event-title">St. John’s Farmers Market</p>
                    <p>8am - 2pm</p>
                </div>
            </div>
            <div class="event-item">
                <img class="event-image" src="<?= get_template_directory_uri();?>/assets/img/placeholder-event-image.JPEG" alt="People gathering around a cute and fully stocked coffee cart ready to be served">
                <div class="event-details">
                    <h4>Every Saturday</h4>
                    <p class="event-title">St. John’s Farmers Market</p>
                    <p>8am - 2pm</p>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>


    <div class="large-cta"> 
    <img class= "large-cta-image-bg" src="<?= get_template_directory_uri();?>/assets/img/blue-blue-1px.png" alt="Button and Bean logo, an illustrated face of a women with coffee beans on her cheeks">
        <div class="cta-container-simplified container">
            <h2><span class="font-special-serif-header">What to book us for</span><br>your next market or event?</h2>
            <div class="button-blue">
                <p>Connect with us!</p>
                <img src="<?= get_template_directory_uri();?>/assets/img/top-right-arrow-blue.svg" alt="Blue arrow pointing to the north east of the page, which turns towards the left on hover">
            </div>
        </div>
    </div>

<?php get_footer(); ?>