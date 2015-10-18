function getData(){
                $(document).ready(
                    function(){
                          $("#userFNameValue").load("http://localhost/infobox/model/database.php", function(responseTxt, statusTxt, xhr){
        // $("#userFNameValue").load(xhr.setRequestHeader);          
        if(statusTxt == "success"){
            data = JSON.parse(responseTxt); /// Parsing the object
            allRecords = data.record;
        
            for(x in allRecords){                
                //alert(allRecords[x].roll);
               $("#serverdata").append("<Div>" + allRecords[x].name + "  " + allRecords[x].roll + " " + "</Div>");
            }
        }
        if(statusTxt == "error")
            alert("Error: " + xhr.status + ": " + xhr.statusText);
    });   
                    }
                );
            }



function showBasicForm(){
    $("#basicForm").show();
}