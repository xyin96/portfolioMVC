var nav = ["About","Projects","Blog","Contact"];
var jsLoad = function(id,url){
    var url;

    select(id);
    if(!url) {
        url = nav[id];
    }
    $.ajax({
        url: "/jsr.php?url=" + url,
        context: $(".content")[0]
    }).done(function(data){
        $(this).replaceWith(data);
        window.history.pushState({"html":data, id:id},"", "/" + url);
    })
};

var select = function(id){
    $("ul.navbar-nav > li").each(function(){$(this).attr("class","");});
    $("ul.navbar-nav > li:nth-child(" + (id + 1) + ")").attr("class","active");
}

window.onpopstate = function(e){
    if(e.state){
        console.log(e.state);
        $(".content").replaceWith(e.state.html);
        select(e.state.id)
    }
};