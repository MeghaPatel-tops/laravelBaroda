 function getProductData(){
        console.log("get product called");
        $.ajax({
            url:'http://localhost/employeeProject/restapi/api/product.php',
            method:"GET",
            dataType:"JSON",

            success:function(data){
                console.log(data);
                printProduct(data)
            },
            error:function(err){
                console.log(err);
            }

        })
        
    }

    function printProduct(data){
        let str="";
        for(i=0;i<data.length;i++){
            str+=`
                <tr>
                                        <td>${i+1}</td>
                                        <td>${data[i].productname}</td>
                                        <td>${data[i].price}</td>
                                        <td><img src=${data[i].image} alt="" height="100px" width="100px">
                                        </td>
                                        <td>${data[i].descripation}</td>
                                        <td>delete</td>
                                        <td>Edit</td>
                                 </tr>
            `
        }
        console.log(str);
        document.getElementById('productList').innerHTML=str;
        
    }

    window.onload= getProductData();