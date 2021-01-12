<script>
    let url = "http://oddstabstock.ddns.net/stock?mode=real";
    // console.log(url);
    let table = document.querySelector("#table");

    const getStock = async () => {

        const res = await fetch(url);
        const text = await res.text();




        let headers = text.split('\n')[0].split(",");
        console.log(headers);
        let thead = document.createElement("thead");
        table.appendChild(thead);
        for (let i = 0; i < headers.length; i++) {
            if (i == 0 || i == 1 || i == 4 || i == 7 || i == 8) {
                let th = document.createElement("th");
                th.innerText = headers[i];

                thead.appendChild(th);
            }
        }

        let tbody = document.createElement("tbody");
        table.appendChild(tbody);
        let arr = text.split("\n");
        for (let i = 1; i < arr.length; i++) {
            // console.log(arr[i]);

            let tr = document.createElement("tr");
            let contents = arr[i].split(",");
            for (let j = 0; j < contents.length; j++) {
                if (j == 0 || j == 1 || j == 4 || j == 7 || j == 8) {
                    let td = document.createElement("td");

                    td.innerText = contents[j].replace(/\"/gi, "");
                    tr.appendChild(td);
                }
            }
            tbody.appendChild(tr);
        }
        // console.log(tbody.childNodes);
        tbody.childNodes.forEach(function(qq) {

            qq.addEventListener("dblclick", function() {

                tbody.childNodes.forEach(function(el) {
                    // el.style.backgroundColor = "inherit";
                    el.removeAttribute("style");
                }) 
                this.style.background = "pink";
                document.querySelector("#find_stock").value=this.childNodes[0].innerText;
            })

        })
    }
    window.onload = () => {
        getStock()
    }
</script>