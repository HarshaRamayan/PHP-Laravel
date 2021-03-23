$(document).ready(function(){    
         $.get("server.php?Operation=getdosas",function(data){
             data=JSON.parse(data);
             let snippet="";
             let i=0;
             while(i<data.result.length)
             {
                 snippet+=`<li class="list-group-item">
                              <div class="d-flex">
                                 <img src="${data.result[i].imglocation}" height="100" width="150"> 
                                 <div class="ml-3"> <b>${data.result[i].title}</b><br> Description: ${data.result[i].description}<br> Price: $${data.result[i].price}</div>
                              </div>
                           </li>`;
                i++;
            }
            $("#list").append(snippet);    
         });
});