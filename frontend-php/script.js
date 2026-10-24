let editData = null;
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
function editProduct(pid){
   
  
    $.ajax({
        url:`http://localhost/employeeProject/restapi/api/product.php/${pid}`,
        type:"GET",
        success:function(data){
            console.log(data)
            printFormData(data)
        },
        error:function(data){
            console.log(error)
        }
    })
}

function printFormData(data){
      
       let pname = document.getElementById('pname');
       let price = document.getElementById('price');
       let description = document.getElementById('description');
       let img1= document.getElementById('preview');
       console.log(img1);
       img1.setAttribute('src',data.image)
       img1.classList.remove('d-none')
       
       pname.value= data.productname;
       price.value = data.price;
       description.value= data.descripation;
       editData=data.pid
       
       
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

function cleaup(){
     let pname = document.getElementById('pname');
       let price = document.getElementById('price');
       let description = document.getElementById('description');
       let img1= document.getElementById('preview');
       
       img1.classList.add('d-none')
       
       pname.value="";
       price.value = "";
       description.value= "";
       editData=null;
       
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
                                        <td onclick='editProduct(${data[i].pid})'>
                                           Edit
                                        </td>
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

        if(editData==null){
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
        }
        else{
            formData.append('_method',"PUT")
             $.ajax({
            url:'http://localhost/employeeProject/restapi/api/product.php/'+editData,
            type:'POST',
            
            data:formData,
            success:function(data){
               
                alert(data.message)
                getProductData();
                cleaup();
                
            },
            error:function(err){
                console.log(err);
                
            }
        })
        }
       
       
    })