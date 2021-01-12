<?php session_start(); ?>
<script>
    // axios
    // 買進
    var fuckbuy = document.getElementById("fuckBuy");
    let fucktbody = document.querySelector("#buyList");
    var fuckarray = [];
    fuckbuy.addEventListener("click", function() {
        fuckarray = [];
        fucktbody.childNodes.forEach(function(qq) {
            for (var i = 0; i < 4; i++) {
                fuckarray.push(qq.childNodes[i].innerText);
            }
            // console.log(fuckarray )
        })


        let fuckdata = new FormData()
        fuckarray.forEach(function(aaa) {
            fuckdata.append("fuck[]", aaa)
        })

        // console.log("aaaaaaaaaaa",fuckdata);
        axios.post("/LaravelDemo/resources/views/buy.php", fuckdata)
            .then((res) => {
                console.log(res);
                if (res.data) {
                    location.href = "user.php";
                } else {
                    alert("先學會算數再來買股")
                }
            }).catch((ero) => {
                console.log(ero);
            })
    })
    // 賣出
    var fucksell = document.getElementById("fuckSell");
    let fucktbody2 = document.querySelector("#buyList2");
    var fuckarray2 = [];
    var smallid="";
    // 點擊選取
    fucktbody2.childNodes.forEach(function(nn) {
        // 小table
        nn.addEventListener("click", function() {
            fuckarray2 = [];
            smallid="";
            // console.log(fucktbody2.children);
            Array.from(fucktbody2.children).forEach(function(ee) {
                // el.style.backgroundColor = "inherit";
                ee.removeAttribute("style");
                // console.log(ee);
            })
            this.style.background = "black";
            this.style.color = "white";
            smallid=this.childNodes[0].innerText;
            for (var i = 0; i < 3; i++) {
                fuckarray2.push(this.childNodes[i].innerText);
            }
        })
        

    })
    // 賣出股票按鈕
    fucksell.addEventListener("click", function() {
        // 大table
        var tableget = document.getElementById("table"); //獲取第一個表格 
        var array = tableget.getElementsByTagName("tr"); //所有t
        let tbody = document.querySelector("#buyList");

        for (var i = 0; i < array.length; i++) {
            //大table的id
            var now_money="";
            var id = array[i].children[0].innerText;
            // console.log(id);/
            if(smallid==id){
                // 獲取大table市價
                now_money=array[i].children[2].innerText;
                console.log("賣出的"+id);
                fuckarray2.push(now_money);
                break;
            }
            
        }
        console.log(fuckarray2);


        let fuckdata2 = new FormData()
        fuckarray2.forEach(function(bbb) {
            fuckdata2.append("fuck2[]", bbb)
        })

        
        axios.post("/LaravelDemo/resources/views/sell.php", fuckdata2)
            .then((res2) => {
                console.log(res2);
                if (res2.data) {
                    location.href = "user.php";
                } else {
                    alert("賣出失敗")
                }
            }).catch((ero2) => {
                console.log(ero2);
            })


    })

    
</script>