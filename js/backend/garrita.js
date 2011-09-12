
    $("document").ready(function(){

        $("#formItem").submit(function(e){
            e.preventDefault();
            //alert(this.href);
            $.post(this.action, $("#formItem").serialize(), function(data){
                $("#crear").html(data);
            });
            //$("#mitte").load(this.action);
        });
    });
    $("document").ready(function(){
        $(".linkItem").click(function(e){
            e.preventDefault();
            $("#mitte").load(this.href);
        });
    });
