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

function deleteProduct(pid){
      alert(pid);
      $.ajax({
        url:"http://localhost/employeeProject/restapi/api/product.php/"+pid,
        type:'DELETE',
        success:function(data){
            console.log(data)
            alert(data.message)
            getProductData()
        },
        error:function(err){
            console.log(err)
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
                                        <td onclick='deleteProduct(${data[i].pid})'>delete</td>
                                        <td>Edit</td>
                                 </tr>
            `
        }
        console.log(str);
        document.getElementById('productList').innerHTML=str;
        
    }

    window.onload= getProductData();

    let form1= document.getElementById('productForm').addEventListener('submit',(event)=>{
        event.preventDefault();
        alert("form submit");
       let pname = document.getElementById('pname').value;
       let price = document.getElementById('price').value;
       let description = document.getElementById('description').value;
       let pimage = document.getElementById('image');

      
       const formData = new FormData();
       formData.append('productname',pname)
       formData.append('price',price)
       formData.append('descripation',description)
       formData.append('image',pimage.files[0]);

        console.log(formData);
        $.ajax({
            url:'http://localhost/employeeProject/restapi/api/product.php',
            type:'POST',
            data:formData,
            success:function(data){
                console.log(data);
                alert(data[0].message)
                getProductData()
                
            },
            error:function(err){
                console.log(err);
                
            }
        })
       
    })