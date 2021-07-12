$(function(){
    $(".md-input").on("focus", function(){
        var t = $(this);
        if(!t.parent().hasClass("focus")) {
            t.parent().addClass("focus");
        }
    });
    $(".md-input").on("blur", function(){
        var t = $(this);
        if (t.val() === "") {
            t.parent().removeClass("focus");
        }
    });
    $(".md-input[required]").on("blur", function(){
        var t = $(this);
        var v = t.val() === "";
        if (v) {
            t.parent().addClass("has-error");
        } else {
            t.parent().removeClass("has-error");  
        }
    });
    
    // 코드수정 => 사용자  스크립트 여기에 작성     
    
$('#embago').click( function(){ 
      
       // alert($(this).val());
     // if($(this).val() =='true'){ $("#tog_embago").css({display:'block'});}
     $('#tog_embago2').toggle();
     $('#tog_embago').toggle();
      //$('#tog_embago1').css({display:'block'})

 });    
$('#bodytext').on('keyup', function(){ 
     //alert("ok");
    var content = $(this).val();
$('#bodysize').val( content.length ); 
    
 });
    
    
    
    
    
    
})