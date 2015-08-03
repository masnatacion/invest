
$("[addinput]").each(function(index,input){
    var input = $(input);
    var add   = input.find(".add");
    var group = input.find(".input-add-group");


    var first = "<div class='input-add-group'>"
        first+= input.find(".current-input").first().html();

        first += '<span class="input-group-btn">';
            first += '<button class="btn btn-danger remove" type="button">-</button>';
        first += '</span>';

        first+= "</div>";




    add.click(function(){

        var clone = $( first ).clone();
        clone.prependTo( input );
        clone.find(".remove").click(function(){
            clone.remove();
        });


    });





});

