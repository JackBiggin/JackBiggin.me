<div class="grid-container">
    <h2 class="handwritten">Here's some cool stuff I've made</h2>
    <div class="grid-x grid-padding-x grid-padding-y">
        <?php
            $portfolioItems = file_get_contents("./assets/json/projects.json");
            $portfolioItems = json_decode($portfolioItems, true);

            foreach ($portfolioItems as $item) {
                echo '<div class="cell small-12 medium-6 large-4">
                        <div class="portfolio-item" style="background-image: url(./assets/img/projects/' . $item['thumbnail'] . ');">
                            <div class="portfolio-item-text">
                                <div>
                                    <div>' . $item['name'] . '</div>
                                    <button type="button" class="button" onClick="openPortfolioItem(' . $item['id'] . ')">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>';
            }
        ?>
    </div>

    <h2 class="handwritten">And here's some nice things people have said about me</h2>
    <div class="grid-x grid-padding-x grid-padding-y">
        <div class="cell small-0 large-2"></div>
        <div class="cell small-12 medium-12 large-8">
            <div class="orbit testimonial-slider-container" role="region" aria-label="testimonial-slider" data-orbit>
                <ul class="orbit-container">
                    <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
                    <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>

                    <?php
                        $testimonials = file_get_contents("./assets/json/testimonials.json");
                        $testimonials = json_decode($testimonials, true);

                        $isFirst = true;

                        foreach ($testimonials as $testimonial) {
                            if($isFirst) {
                                $active = "is-active";
                            } else {
                                $active = "";
                            }

                            $isFirst = false;

                            echo '
                                <li class="' . $active . ' orbit-slide testimonial">
                                    <img src="' . $testimonial['picture'] . '" />
                                    <div class="name">' . $testimonial['name'] . '</div>
                                    <div class="title">' . $testimonial['role'] . '</div>
                                    <p> ' . $testimonial['testimonial'] . '</p>
                                    <div class="verify"><a href="https://linkedin.com/in/JackBiggin"><i class="fas fa-check-circle"></i> Verified on LinkedIn</a></div>
                                </li>';
                        }
                        
                    ?>
                    
                </ul>
            </div>
        </div>
        <div class="cell small-0 large-2"></div>
    </div>
</div>

<!-- Portfolio Item Modal -->
<div class="reveal large" id="portfolioModal" data-reveal data-animation-in="slide-in-down fast" data-animation-out="scale-out-down fast">
    <h1>Awesome. I Have It.</h1>
    <p class="lead">Your couch. It is mine.</p>
    <p>I'm a cool paragraph that lives inside of an even cooler modal. Wins!</p>
    <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>