const selector = document.getElementById("selection");
var contents = document.querySelectorAll('.content');

//hide all content boxes when the page loads
hideAll();

//Changes the shown date's schedule depending on the option picked
selector.addEventListener('change', function(){
    var date = selector.options[selector.selectedIndex].value;
    hideAll();
    document.getElementById(date).style.display = 'block';
});

//used to hide all content boxes
function hideAll(){
    contents.forEach (function(l){
        l.style.display = 'none';
    });
}