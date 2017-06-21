function checkFile(){
    $.ajax({
        dataType: "json",
        url: "checkFile.php"
    }).done(function(data){
        if(data[0] === '1'){
            toMainframe();
        }
    });
}
