<div class="grid-container">
    <h2 class="header">Portfolio</h2>
    <div class="grid-x grid-padding-x grid-padding-y portfolio-items">
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

    <h2 class="header">Testimonials</h2>
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
    <h2 id="portfolioModal-title"></h2>
    <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>

    <div class="grid-x grid-padding-x grid-padding-y">
        <div class="cell small-12 large-6">
            <div id="portfolioModal-screenshots"></div>
        </div>
        <div class="cell small-12 large-6">
            <p id="portfolioModal-description"></p>
            <div id="portfolioModal-links"></div>
        </div>
    </div>
</div>