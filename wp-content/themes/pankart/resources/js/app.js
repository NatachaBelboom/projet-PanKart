const app = {
    init(){
        this.burgerMenu = document.querySelector('.more-info__header');
        this.leNav = document.querySelector('.top__menu');
        this.burgerMenu.addEventListener('click', (e) => {this.f_burger(e)} );

    },
    f_burger(e){
        e.preventDefault()
        console.log(this);
        this.leNav.classList.toggle('menu__responsive');
    }
}
app.init();