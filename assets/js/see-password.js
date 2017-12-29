$("#password").on("keyup",function(){
    if($(this).val())
        $(".fa-eye").show();
    else
        $(".fa-eye").hide();
    });

$(".fa-eye").mousedown(function(){
                $("#password").attr('type','text');
            }).mouseup(function(){
                $("#password").attr('type','password');
            }).mouseout(function(){
                $("#password").attr('type','password');
            });