function openPortfolioItem(id) {
    var popup = new Foundation.Reveal($('#portfolioModal'))

    $.ajax('./assets/json/projects.json')
    .done(function(projectData){

        projectName = projectData[id]['name']
        
        $('#portfolioModal-title').html(projectName)

        popup.open()
    });
}