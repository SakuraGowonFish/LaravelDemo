<script>
     // 新增股票
     var fucktr=null;
     let tbody = document.querySelector("#buyList");


    function fuckGet() {
        var tableget = document.getElementById("table"); //獲取第一個表格 
        var array = tableget.getElementsByTagName("tr"); //所有tr

        var choose = document.getElementById("find_stock"); //輸入的證券
        var much = document.getElementById("much_stock"); //輸入股數
       
        let tbody = document.querySelector("#buyList");
        for (var i = 0; i < array.length; i++) {
            var id = array[i].children[0].innerText;
            // console.log(choose.value,id);
            if(choose.value==id){
                let tr = document.createElement("tr");
                tr.addEventListener("click",function(){
                    tbody.childNodes.forEach(function(el){
                        el.style.backgroundColor="inherit";
                    })
                    fucktr=this;
                    var rowIndex = this.rowIndex; 
                    this.style.backgroundColor="pink";
                    // console.log(rowIndex);
                })
                console.log(choose.value);

                let td = document.createElement("td");
                td.innerText=id;
                tr.appendChild(td);

                let td1 = document.createElement("td");
                td1.innerText=array[i].children[1].innerText;
                tr.appendChild(td1);

                let td2 = document.createElement("td");
                td2.innerText=much.value;
                tr.appendChild(td2);

                let td3 = document.createElement("td");
                td3.innerText=parseInt(parseFloat(array[i].children[2].innerText)*parseInt(much.value)); 
                tr.appendChild(td3);

                tbody.appendChild(tr);
                break;
            }
            
        }
        
    }
    // 刪除股票
    function fuckOut()
    {
        let tbody = document.querySelector("#buyList");
        tbody.removeChild(fucktr);

    }
    
</script>