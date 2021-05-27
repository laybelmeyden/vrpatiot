<nav class="main__items" id="main__menu">
    <div class="container main__items_navs">
        <a href="/#about__main">О конкурсе<div></div></a>
        <a href="/#nominations">НОМИНАЦИИ<div></div></a>
        <a href="/#news">НОВОСТИ<div></div></a>
        <a href="/#org">ОРГАНИЗАТОР<div></div></a>
        <a href="/#footer">Обратная связь<div></div></a>
    </div>
    <div class="container cls">
    <div class="burger-icon" id="mobile__menu">
        <div class="burger-container">
            <span class="burger-bun-top"></span>
            <span class="burger-filling"></span>
            <span class="burger-bun-bot"></span>
        </div>
    </div>
    </div>
</nav>

<script>
    if(document.querySelector('body').clientWidth <= 1201){
    document.querySelector('#mobile__menu').addEventListener('click', ()=>{
        document.querySelector('#main__menu').classList.toggle('active');
        document.querySelector('body').classList.toggle('no_scroll');
        document.querySelector('.cls').classList.toggle('active__cls');
    })
    document.querySelectorAll('.main__items_navs a').forEach(e => e.addEventListener('click', () => {
        document.querySelector('#main__menu').classList.toggle('active');
        document.querySelector('body').classList.toggle('no_scroll');
        document.querySelector('.cls').classList.toggle('active__cls');
    }))
}
</script>