const app = {
    init(){
        this.burgerMenu = document.querySelector('.more-info__header');
        this.leNav = document.querySelector('.top__menu');
        this.burgerMenu.addEventListener('click', (e) => {this.f_burger(e)} );

        this.listen = document.querySelectorAll('.lyrics-on');
        this.paroles = document.querySelectorAll('.lyrics__container');
        this.listen.forEach(l => {
            l.addEventListener('click', (e) => {
                this.play(e);
            })
        })

    },
    f_burger(e){
        e.preventDefault()
        this.leNav.classList.toggle('menu__responsive');
    },

    play(e){
        e.preventDefault();
        this.paroles.forEach(p => {
            p.style.opacity = '0';
        })
            e.target.nextElementSibling.style.opacity = '1';
    },
}
app.init();



const mesLi = document.querySelectorAll('.bio-membres__list');

mesLi.forEach(li => {
    li.addEventListener('click', ()=> {
        mesLi.forEach(otherLi => {
            otherLi.childNodes[1].style.opacity = '0';
        })
        li.childNodes[1].style.opacity = '1';
    })
})