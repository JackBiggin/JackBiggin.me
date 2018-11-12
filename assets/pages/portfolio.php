<div class="grid-container">
    <h2 class="handwritten">Here's some cool stuff I've made</h2>
    <div class="grid-x grid-padding-x grid-padding-y">
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
    
    <h2 class="handwritten">And here's some nice things people have said about me</h2>
    <div class="grid-x grid-padding-x grid-padding-y">
        <div class="cell small-0 medium-2"></div>
        <div class="cell small-12 medium-8">
            <div class="orbit testimonial-slider-container" role="region" aria-label="testimonial-slider" data-orbit>
                <ul class="orbit-container">
                    <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
                    <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>

                    <li class="is-active orbit-slide testimonial">
                        <img src="https://media.licdn.com/dms/image/C4D03AQGaVSj58p1KaA/profile-displayphoto-shrink_800_800/0?e=1547683200&v=beta&t=iDw32lJv9yrIJohZPoVOUV3KGTwnyT98J7ITSXWcR1s" />
                        <div class="name">Patrick Carter</div>
                        <div class="title">LSR Station Manager 2018/19</div>
                        <p>Jack is a dedicated and intelligent member of the team who works harder than pretty much anyone I know. He thinks outside the box and finds solutions to problems that nobody else could. He is clearly an outstanding member of any team.</p>
                        <div class="verify"><a href="https://linkedin.com/in/JackBiggin"><i class="fas fa-check-circle"></i> Verified on LinkedIn</a></div>
                    </li>

                    <li class="orbit-slide testimonial">
                        <img src="https://media.licdn.com/dms/image/C4D03AQECK9oUeXSr7g/profile-displayphoto-shrink_800_800/0?e=1547683200&v=beta&t=OgQE1GE9D5vZdAUr7QvVNlmaVKi4PLMyfZT-Hm3hBaw" />
                        <div class="name">Emma Rice</div>
                        <div class="title">LSR Station Manager 2016/17</div>
                        <p>Jack is a key team member at Leeds Student Radio. His technical ability is imperative in keeping our online radio station working. [...] I would therefore highly recommend Jack for any position. His intellect and character would be of benefit to any employer. </p>
                        <div class="verify"><a href="https://linkedin.com/in/JackBiggin"><i class="fas fa-check-circle"></i> Verified on LinkedIn</a></div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="cell small-0 medium-2"></div>
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