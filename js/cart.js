function addtocart(json, quantity, size) {
    let part = JSON.parse(localStorage.getItem('product_to_add'));
    if(!part){
        localStorage.setItem('product_to_add', JSON.stringify([{name: json.name, quantity: quantity, price: json.price, size: size}]))
    }else{
        part.push({name: json.name, quantity: quantity, price: json.price, size: size});
        localStorage.setItem('product_to_add', JSON.stringify(part));
    }
}

function showlocalstorage(){
    if(localStorage.getItem('product_to_add')){
        JSON.parse(localStorage.getItem('product_to_add')).forEach((element) => {
            let table = document.getElementById("cart_products");
            let row = table.insertRow(-1);
            row.insertCell(0).appendChild(document.createTextNode(element.name.replaceAll('-', ' ')))
            row.insertCell(1).appendChild(document.createTextNode(element.size))
            row.insertCell(2).appendChild(document.createTextNode(element.quantity))
            row.insertCell(3).appendChild(document.createTextNode(element.price + ' €'))
        })
    }
}

function apply_coupon(discount_amount, gueltig){
    if(localStorage.getItem('product_to_add')){
        if(gueltig == 1) {
            let total_price = 0;
            JSON.parse(localStorage.getItem('product_to_add')).forEach((element) => {
                total_price = total_price + (element.price * element.quantity);
            })
            console.log((total_price * (1 - (discount_amount / 100)) + " With Discount"));
            let table = document.getElementById("cart_products_total");
            let row = table.insertRow(-1);
            row.insertCell(0).appendChild(document.createTextNode(total_price + ' €'));
        } else{
            alert("Bitte gib eine  gültigen Rabattcode ein!");
        }
    }
}

function totalprice(){
    if(localStorage.getItem('product_to_add')){
        let total_price = 0;
        JSON.parse(localStorage.getItem('product_to_add')).forEach((element) => {
            total_price = total_price + (element.price * element.quantity);
        })
        let table = document.getElementById("cart_products_total");
        let row = table.insertRow(-1);
        row.insertCell(0).appendChild(document.createTextNode(total_price + ' €'));
    }
}
