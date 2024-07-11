class TreeNode{
    
    constructor(value){
        this.value = value;
        this.children = [];
    }
}

class Tree{

    constructor(){
        this.root = new TreeNode(null);
    }

    insert(value){
        const newNode = new TreeNode(value);
        this.root.children.push(newNode);
    }

    search(value){
        const result = [];
        const stack = [this.root];
        while(stack.length > 0){
            const node = stack.pop();
            if(node.value && node.value.toLowerCase().includes(value.toLowerCase())){
                result.push(node.value);
            }
            for(const child of node.children){
                stack.push(child);
            }
        }
        return result;
    }
}

const productTree = new Tree();

document.addEventListener(`DOMContentLoaded`,()=>{
    const productList = document.querySelectorAll('.product h3');
    productList.forEach(product => {
        productTree.insert(product.textContent);
    });
});

function searchProduct(){
    const searchBar = document.getElementById('searchBar').value ;
    const searchResults = productTree.search(searchBar);
    const productDivs = document.querySelectorAll(".product");

    productDivs.forEach(productDiv=>{
        const productName = productDiv.querySelector('h3').textContent ;
        if(searchResults.includes(productName)){
            productDiv.style.display = 'block' ;
        }else{
            productDiv.style.display = 'none' ;
        }
    });
}
