

// window.addEventListener("load", () => {
//     setTimeout(t, 2000);

//     i(g)
// })

const t = () => {
    const i = Array.from(document.querySelectorAll('.stats-container'));
    i.forEach(el => { 
        let d = el.children[1].children[1].previousElementSibling.firstChild.data;
        let val =  el.children[1].children[1].previousElementSibling.firstChild.data;
        // console.log(val);

        // grind number step by step to max value without gsap
      
        for (let i = 0; i < val; i++) {
            setTimeout(() => {
                el.children[1].children[1].previousElementSibling.firstChild.data = i +1;
            }, i * 10);
        }

    });
}
t();
const i = () => {
    console.log(y);
    const e = document.querySelector('.wp-container-1');
    const f = document.querySelector('.wp-container-4');
    const s = document.querySelector('.wp-container-6');
    const g = document.querySelector('.wp-container-9');
    const a = document.querySelector('.wp-container-12');

}