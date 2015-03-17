/**
 * Created by Xiaoyu on 3/11/2015.
 */
$(function(){
    $(".querysearch").submit(function(event){
        event.preventDefault();
        jsLoad(1,'Projects:' + $(".searchbar").val().replace(/\//g,','));
    });
})