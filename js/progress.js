window.onscroll = function(){
    var pos = document.documentElement.scrollTop;
    var calc_height = document.documentElement.scrollHeight - 
                        this.document.documentElement.clientHeight;
    var scroll = pos * 100 / calc_height;

    this.document.getElementById("progress").style.width = scroll + "%";
}    
