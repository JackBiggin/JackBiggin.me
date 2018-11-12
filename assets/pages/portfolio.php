<div class="grid-container">
    <div class="grid-x grid-padding-x grid-padding-y">
        <!-- <div class="cell small-12 medium-6 large-4">
            <div class="portfolio-item">
                <div class="portfolio-item-text">
                    <div>
                        <div>Example Text</div>
                        <button type="button" class="button">Learn More</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="cell small-12 medium-6 large-4">
            <div class="portfolio-item">
                <div class="portfolio-item-text">
                    <div>
                        <div>Example Text</div>
                        <button type="button" class="button">Learn More</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="cell small-12 medium-6 large-4">
            <div class="portfolio-item">
                <div class="portfolio-item-text">
                    <div>
                        <div>Example Text</div>
                        <button type="button" class="button">Learn More</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="cell small-12 medium-6 large-4">
            <div class="portfolio-item">
                <div class="portfolio-item-text">
                    <div>
                        <div>Example Text</div>
                        <button type="button" class="button">Learn More</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="cell small-12 medium-6 large-4">
            <div class="portfolio-item">
                <div class="portfolio-item-text">
                    <div>
                        <div>Example Text</div>
                        <button type="button" class="button">Learn More</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="cell small-12 medium-6 large-4">
            <div class="portfolio-item">
                <div class="portfolio-item-text">
                    <div>
                        <div>Example Text</div>
                        <button type="button" class="button">Learn More</button>
                    </div>
                </div>
            </div>
        </div> -->
        <?php
            $portfolioItems = file_get_contents("./assets/projects.json");
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
</div>

<!-- Portfolio Item Modal -->
<div class="reveal large" id="portfolioModal" data-reveal data-animation-in="slide-in-down">
    <h1>Awesome. I Have It.</h1>
    <p class="lead">Your couch. It is mine.</p>
    <p>I'm a cool paragraph that lives inside of an even cooler modal. Wins!</p>
    <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>