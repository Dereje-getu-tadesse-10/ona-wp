

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
    const e = document.querySelector('.wp-container-1');
    const f = document.querySelector('.wp-container-4');
    const s = document.querySelector('.wp-container-6');
    const g = document.querySelector('.wp-container-9');
    const a = document.querySelector('.wp-container-12');

    let i = [e, f, s, g, a];
 
    i.forEach(el => {
        gsap.from(el, {
            duration: 3,
            opacity: 0,
            y: -100,
            ease: "power3.out",
            stagger: {
                amount: 5.5
            }
        });
    })
}
i();