class Mobilenav{
    constructor(mobileMenu, navList, navLinks){
        this.mobiLemenu = document.querySelector(mobileMenu);
        this.navList = document.querySelector(navList);
        this.navLinks = document.querySelector(navLinks);
        this.activeClass = "active";
    }

    addClickEvent{
        this.mobileMenu.addEventListener("click", () => console.log());
    }
}