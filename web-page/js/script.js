//define template
var template = $('#sections .section:first').clone();
var templatenum = $('#images .image:first').clone();

//define counter
var sectionsCount = 1;


$( document ).ready(function() {
    $("#npalabras").text(array.length+" palabras disponibles");
});


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
        var textthis = $(".section:eq("+i+") #entrada").val();
        $(".section:eq("+i+") #entrada").attr("style","background:none;");
        if (array.indexOf(textthis)==-1) {
            $(".section:eq("+i+") #entrada").attr("style","background:red;");
        }
        $(".image:eq("+i+") #imagen").attr("src","images/"+textthis+".png");
        $(".image:eq("+i+") #imagen").attr("alt",textthis);
    }
    return false;
});


//About this project -- English Version
$('body').on('click', '.en-pr', function() {
    document.getElementById('ab-pr').innerHTML = "About this project";
    document.getElementById('what-pr').innerHTML = "What is Dyehuty?";
    document.getElementById('how-pr').innerHTML = "How was this project born?";
    document.getElementById('os-pr').innerHTML = "What does it mean that this project is free?";
    document.getElementById('who-pr').innerHTML = "Who is behind this project?";
    document.getElementById('col-pr').innerHTML = "How can I help?";
    document.getElementById('1-pr').innerHTML = "Dyehuty is a free project aimed to the learning of LSE (Spanish Sign Language) as well as to create a bidirectional and bilingual LSE - Spanish dictionary.</br>This tool intends to support the learning of LSE to those who are studying it, so they can learn vocabulary in an interactive way.";
    document.getElementById('2-pr').innerHTML = "Nowadays only a few percentage of Spanish population is able to communicate with LSE, which hinders the integration of women and men with verbal and aural functional diversity within society. Thus, we want to encourage LSE learning through this project. There are plenty of dictionaries that aim to work in this direction, but they lack interactivity and they serve only as an individual text-result database.<br/>Dyehuty tries to offer a more fluid, free alternative allowing to search as many words as the user wants at the same time. Moreover, it includes an activities section that foments and facilitates LSE learning. It also adds first person view demonstration of some signs that helps in their comprehension. Finally, the project would be sustained by a community that would collaborate with the project and within which LSE knowledge would be shared.";
    document.getElementById('3-pr').innerHTML = "We encourage you to visit the <a href=&quot;licencia.html&quot;>Licencia CC-BY-SA</a> section to read more about what does it mean that this project is free and OpenSource.";
    document.getElementById('4-pr').innerHTML = "The responsible of this project's creation would be me, <a href=&quot;http://www.angel-lm.com&quot;>Ángel Larrañaga Muro</a>. As language learning assistant and Reader/junior editor I count with Jaime Oliveros García.</br>Right now and due to its recent creation, we are the only people behind this project. We hope to count with the community contributions eventually.";
    document.getElementById('5-pr').innerHTML = "More information regarding how to contribute to this project's growth can be found in the <a href=&quot;colaborar.html&quot;>Contributions</a> section. Thank you a lot for your support!";
    return false;
});