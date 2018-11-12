function openPortfolioItem(id) {
    console.log(id);
    var popup = new Foundation.Reveal($('#portfolioModal'))

    $.ajax('./assets/projects.json')
    .done(function(resp){
        //$('#portfolioModal').html(resp)
        popup.open()
    });
}