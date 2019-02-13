modalRandom = 0 // this is horribly hacky but it'll work for now

function openPortfolioItem(id) {
    modalRandom = Math.floor(Math.random() * 100000);
    var popup = new Foundation.Reveal($('#portfolioModal'))

    $.ajax('./assets/json/projects.json')
    .done(function(projectData){
        console.log(projectData)
        projectName = projectData[id]['name']
        projectDescription = projectData[id]['description']
        projectButtons = projectData[id]['links']
        projectScreenshots = projectData[id]['screenshots']
        
        $('#portfolioModal-title').html(projectName)
        $('#portfolioModal-description').html(projectDescription)

        projectLinks = ""
        projectButtons.forEach(link => {
            switch(link['type']) {
                case "github":
                    icon = '<i class="fab fa-github"></i>'
                    break
                case "website":
                    icon = '<i class="fas fa-globe"></i>'
                    break           
                case "devpost":
                    icon = '<i class="fab fa-dev"></i>'
                    break
                default:
                    icon = '<i class="fas fa-link"></i>'
                    break
            }
            projectLinks += '<a href="' + link['link'] + '" class="button">' + icon + ' ' + link['text'] + '</a>'
        });

        $('#portfolioModal-links').html(projectLinks)

        projectSlider = '<div class="orbit" id="portfolio-gallery" role="region" data-orbit>'
        projectSlider +=    '<div class="orbit-wrapper">'
        projectSlider +=        '<div class="orbit-controls"><button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button><button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button></div>'
        projectSlider +=        '<ul class="orbit-container">'
        
        firstProject = true
        projectScreenshots.forEach(screenshot => {
            if(firstProject) {
                projectSlider += '<li class="is-active orbit-slide">'
            } else {
                projectSlider += '<li class="orbit-slide">'
            }

            firstProject = false
            projectSlider += '<figure class="orbit-figure">'
            projectSlider +=    '<img class="orbit-image" src="' + screenshot['image'] + '">'
            projectSlider += '</figure>'

        })

        projectSlider +=        '</ul>'
        projectSlider +=    '</div>'
        projectSlider += '</div>'
        $('#portfolioModal-screenshots').html(projectSlider)

        var portfolioGallery = new Foundation.Orbit($('#portfolio-gallery'));
        waitForEl($('#portfolio-gallery'), function() {
            popup.open()
        })
    });
}

var waitForEl = function(selector, callback) { // https://gist.github.com/chrisjhoughton/7890303
    if (jQuery(selector).length) {
      callback();
    } else {
      setTimeout(function() {
        waitForEl(selector, callback);
      }, 100);
    }
  };
  

$('#portfolioModal').on('open.zf.reveal', function(){ // I don't know why this is needed, but it is. It's what makes sure the gallery loads.
    Foundation.reInit($('#portfolio-gallery'))

    waitForEl($('portfolio-gallery'), function() {
        Foundation.reInit($('#portfolio-gallery'))
    });

    setTimeout(function(){
        Foundation.reInit($('#portfolio-gallery')) // this is absolutely horrible but might work for now
    }, 200)
});

$('#portfolioModal').on('open.zf.close', function(){
    $('#portfolio-gallery').foundation('_destroy')
});