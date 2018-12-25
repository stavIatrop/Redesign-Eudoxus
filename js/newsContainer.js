$(function () {

    $("#demo1").bootstrapNews({
        newsPerPage: 1,
        autoplay: false,
        
        onToDo: function () {
            console.log(this);
        }
    });
});