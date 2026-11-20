<?php get_header(); ?>

    <div class="hero-content">
        <div class="hero-overlay1"></div>
        <div class="hero-overlay2"></div>
        <video src="<?= get_template_directory_uri();?>/assets/videos/hero-video.mp4" poster="<?= get_template_directory_uri();?>/assets/img/poster.JPEG" muted plays inline autoplay loop></video>
        <div class="hero-text-content center-content">
            <div class="chip-reverse">
            <img src="<?= get_template_directory_uri();?>/assets/img/sparkles-icon-white.svg" alt="White sparkles icon"/>
                <p>More than a cup of coffee</p>
            </div>
            <div class="text-content">
                <h1>Button & Bean</h1>
                <p>A completely mobile coffee cart on a mission to craft intentional and quality coffee experiences across the Twin Cities.</p>
            </div>
            <div class="button-set">
                <a class="button-green" href="<?= get_template_directory_uri();?>/assets/pdfs/bb-menu.pdf" target="_blank">
                    <p>Our Menu</p>
                </a>
                <a class="button-blue" href="contact-us">
                    <p>Connect with us</p>
                </a>
            </div>
        </div>
    </div>

    <div class="text-ticker">
        <img src="<?= get_template_directory_uri();?>/assets/img/green-green-1px.png" alt="Green gingham pattern decorating the background"/>
        <h3>Craft</h3>
        <h3>Quality</h3>
        <h3>Inclusivity</h3>
        <h3>Community</h3>
        <h3>Presence</h3>
        <h3>Creativity</h3>
        <h3>Intentionality</h3>
    </div>

    <div class="quote-section">
        <div class="container">
            <h2>A small, diverse, and inclusive coffee company centred around the craft and experience of coffee. At Button & Bean, we embrace the slow bar philosophy: <span class="font-special-gradient">taking a moment to appreciate the process of making and enjoying coffee.</span></h2>
        </div>
    </div>

    <div class="who-we-are-section">
        <div class="container center-content">
        <div class="text-content">
            <h2><span class="font-special-serif-header">What makes us </span><br>who we are</h2>
        </div>
        <div class="cards-container">
            <div class="content-card">
                <img class="content-card-image our-story-card" src="<?= get_template_directory_uri();?>/assets/img/ourstory-image.JPEG" alt="Two joyful people prepare a pour over coffee to a customer from their coffee cart">
                <div class="content-card-text">
                    <h3>Our Story</h3>
                    <p>Button & Bean was born and built, from ideation to operation, in just two weeks. All of this was possible because of our small teams love for coffee and community, and on the back of the belief that we can create something that makes life slightly more meaningful.</p>
                </div>
                <a class="button-green" href="story">   
                    <p>Learn about the B&B Story</p>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.7142 5.28583L5.28589 14.7142M15.0001 11.6667V5H8.33339" stroke="#928A42" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
            <div class="content-card">
                <img class="content-card-image" src="<?= get_template_directory_uri();?>/assets/img/ourcoffee-image.JPEG" alt="An iced coffee sits on a table surrounded by bright flowers and creative company assets such as a business card and menu">
                <div class="content-card-text">
                    <h3>Our Coffee</h3>
                    <p>We care deeply about both the way in which coffee is crafted and the way in which it is enjoyed with others. Button & Bean believes in taking a step back and enjoying the cup of coffee for what it is and with the people around you.</p>
                </div>
                <a class="button-green" href="coffee">   
                    <p>How it's made</p>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M14.7142 5.28583L5.28589 14.7142M15.0001 11.6667V5H8.33339" stroke="#928A42" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                </a>
            </div>
        </div>
        </div>
    </div>

    <div class="events-section">
        <div class="container center-content">
        <div class="chip">
            <img src="<?= get_template_directory_uri();?>/assets/img/sparkles-green.svg" alt="Green sparkles icon">
            <p>Crafting unforgettable experiences</p>
        </div>
        <div class="text-content">
            <h2 class="font-special-serif-header">A memorable addition to your <span class="font-special-gradient">community events</span></h2>
            <p>Button & Bean operates out of local farmers markets and community events. We are passionate about curating memorable events within local Minnesota community. We would love to work together to make your event something special.</p>
        </div>
        <a class="button-green" href="contact-us">
            <p>Enquire about events</p>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.7142 5.28583L5.28589 14.7142M15.0001 11.6667V5H8.33339" stroke="#928A42" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
        <div class="events-carousel">
            <div class="event-card green-event-card">
                <div class="event-image-container">
                    <div class="event-card-overlay"></div>
                    <img src="<?= get_template_directory_uri();?>/assets/img/markets.png" alt="A table full of plants with people lining up to buy from vendors in the background">
                 </div>    
                <h3>Local markets</h3>
            </div>
            <div class="event-card blue-event-card">
                <div class="event-image-container">
                    <div class="event-card-overlay"></div>
                    <img src="<?= get_template_directory_uri();?>/assets/img/community-events.png" alt="Large group of women gathered around a table full of flora and craft supplies">
                </div>
                <h3>Community events</h3>
            </div>
            <div class="event-card blue-event-card">
                <div class="event-image-container">
                    <div class="event-card-overlay"></div>
                    <img src="<?= get_template_directory_uri();?>/assets/img/art-galleries.png" alt="Five individuals standing around in a gallery space, observing and taking pictures of surrounding art">
                </div>
                <h3>Art galleries</h3>
            </div>
            <div class="event-card green-event-card">
                <div class="event-image-container">
                    <div class="event-card-overlay"></div>
                    <img src="<?= get_template_directory_uri();?>/assets/img/school-functions.png" alt="People throw up their caps in celebration of a graduation">
                </div>    
                <h3>School functions</h3>
            </div>
            <div class="event-card green-event-card">
                <div class="event-image-container">
                    <div class="event-card-overlay"></div>
                    <img src="<?= get_template_directory_uri();?>/assets/img/corporate-parties.png" alt="People at a long table cheers with champagne glasses in an elegant setting">
                </div>
                <h3>Corporate parties</h3>
            </div>
            <div class="event-card blue-event-card">
                <div class="event-image-container">
                <div class="event-card-overlay"></div>
                <img src="<?= get_template_directory_uri();?>/assets/img/weddings.png" alt="A long table with a white table cloth and central floral arragements">
            </div>    
            <h3>Weddings</h3>
            </div>
        </div>
        </div>
    </div>

    <div class="large-cta">
    <img class= "large-cta-image-bg" src="<?= get_template_directory_uri();?>/assets/img/blue-blue-1px.png" alt="Blue gingham pattern decorating the background">
        <div class="cta-container container">
        <!-- decorative images -->
        <img class="decorative-image button-1" src="<?= get_template_directory_uri();?>/assets/img/button1.svg" alt="button">
        <img class="decorative-image button-2" src="<?= get_template_directory_uri();?>/assets/img/button2.svg" alt="button">
        <img class="decorative-image button-3" src="<?= get_template_directory_uri();?>/assets/img/button3.svg" alt="button">
        <img class="decorative-image button-4" src="<?= get_template_directory_uri();?>/assets/img/button4.svg" alt="button">
        <img class="decorative-image button-5" src="<?= get_template_directory_uri();?>/assets/img/button5.svg" alt="button">
        <img class="decorative-image button-6" src="<?= get_template_directory_uri();?>/assets/img/button6.svg" alt="button">
        <img class="decorative-image bean-1" src="<?= get_template_directory_uri();?>/assets/img/bean1.svg" alt="bean">
        <img class="decorative-image bean-2" src="<?= get_template_directory_uri();?>/assets/img/bean2.svg" alt="bean">
        <img class="decorative-image bean-3" src="<?= get_template_directory_uri();?>/assets/img/bean3.svg" alt="bean">
        <img class="decorative-image bean-4" src="<?= get_template_directory_uri();?>/assets/img/bean4.svg" alt="bean">
        <img class="decorative-image bean-5" src="<?= get_template_directory_uri();?>/assets/img/bean5.svg" alt="bean">
        <img class="decorative-image bean-6" src="<?= get_template_directory_uri();?>/assets/img/bean6.svg" alt="bean">
        <img class="cta-icon-image" src="<?= get_template_directory_uri();?>/assets/img/building-green.svg" alt="Green icon of a building">
            <div class="text-content">
                <h2>Where to find us next</h2>
                <p>Whether you have a specific date where you want to come and visit us or you want to see where we will be throughout the year, we’ve made it so that you can view the B&B schedule ahead of time!</p>
            </div>
                <a class="button-blue" href="find-us">
                    <p>Find us</p>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.7142 5.28583L5.28589 14.7142M15.0001 11.6667V5H8.33339" stroke="#3D5E5E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
        </div>
    </div>

<?php get_footer(); ?>