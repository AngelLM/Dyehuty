//define template
var template = $('#sections .section:first').clone();
var templatenum = $('#images .image:first').clone();

//define counter
var sectionsCount = 1;

//add new section
$('body').on('click', '.addsection', function() {
    sectionsCount++;
    template.clone().appendTo('#sections');
    templatenum.clone().appendTo('#images');

    return false;
});

//remove section
$('body').on('click', '.remove', function() {
    //fade out section
    sectionsCount--;
    $(".section:last").fadeOut(300, function(){
        //remove parent element (main section)
        $(".section:last").remove();
        //return false;
    });
    $(".image:last").fadeOut(300, function(){
        //remove parent element (main section)
        $(".image:last").remove();
        //return false;
    });
    return false;
});

$('body').on('click', '.generate', function() {
    for (var i = 0; i < sectionsCount; i++) {
        var textthis = $(".section:eq("+i+") #firstName").val();
        $(".image:eq("+i+") #imagen").attr("src","images/"+textthis+".png");
        $(".image:eq("+i+") #imagen").attr("alt",textthis);
    }
    return false;
});