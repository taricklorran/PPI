document.addEventListener('DOMContentLoaded', function() {
    const nodesH2 = document.querySelectorAll("h2");
    for(let node of nodesH2){
        node.addEventListener("click", () => node.nextElementSibling.style.display = 'none');
        node.addEventListener("dblclick", () => node.nextElementSibling.style.display = 'block');
    }
});
