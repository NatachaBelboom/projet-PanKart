/*const img = document.querySelector(".band__img img");

const elementInView = (body) => {
    const elementTop = body.getBoundingClientRect().top;

    return (
        elementTop <= (window.innerHeight || document.documentElement.clientHeight)
    );
};

const displayScrollElement = (element) => {
    img.classList.add("scrolled");
};

const hideScrollElement = (element) => {
    img.classList.remove("scrolled");
};

const handleScrollAnimation = () => {
    if (elementInView(el, 100)) {
        displayScrollElement(el);
    } else {
        hideScrollElement(el);
    }
};

window.addEventListener('scroll', () => {
    handleScrollAnimation();
});
*/


/*const scrollPercentage =
    (document.documentElement.scrollTop + document.body.scrollTop) /
    (document.documentElement.scrollHeight - document.documentElement.clientHeight);
const maxPercentage = 0.2;
console.log(scrollPercentage);
window.addEventListener("scroll", function(e) {
    console.log(e);

    if(scrollPercentage >= maxPercentage){
        img.style.padding = "0";
    }

});*/
