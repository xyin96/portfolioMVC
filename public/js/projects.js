/**
 * Created by Xiaoyu on 3/11/2015.
 */
$(function(){
    $(".querysearch").submit(function(event){
        document.location='?url=Projects/' + $(".searchbar").val();
    });
})