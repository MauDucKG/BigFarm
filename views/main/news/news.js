
const display_news = () => {
    
    let par = document.getElementById("container");
    let child = document.getElementById("base");
    for (let i = 0; i < 3; i++) {
        let clone_child = child.cloneNode(true);
        par.appendChild(clone_child);
    }
}