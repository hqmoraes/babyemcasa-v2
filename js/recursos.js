function menuOutrosSites(){
    fazer = document.querySelector('.outrosSites').classList.contains('esconderMenu')
    if(!!fazer){
        document.querySelector('.outrosSites').classList.remove('esconderMenu');
        document.querySelector('.outrosSites').classList.add('exibirMenu');
    }
    else{
        document.querySelector('.outrosSites').classList.remove('exibirMenu');
        document.querySelector('.outrosSites').classList.add('esconderMenu');
    }
}

function exibePosts(){
    if (document.querySelector('.categoryPLInterno').classList.contains('ocultar')){
        document.querySelector('.categoryPLInterno').classList.remove('ocultar')
        document.querySelector('.categoryPLInterno').classList.add('exibir')
        document.querySelector('.exibePosts button').classList.remove('apontarAcima')
        document.querySelector('.exibePosts button').classList.add('apontarAbaixo')
    }
    else if (document.querySelector('.categoryPLInterno').classList.contains('exibir')){
        document.querySelector('.categoryPLInterno').classList.remove('exibir')
        document.querySelector('.categoryPLInterno').classList.add('ocultar')
        document.querySelector('.exibePosts button').classList.remove('apontarAbaixo')
        document.querySelector('.exibePosts button').classList.add('apontarAcima')
    }

}

document.querySelector('.textoLogo').innerHTML = '<span class="logoP1">em</span><span class="logoP2"> Casa</span>'
document.addEventListener("DOMContentLoaded", function(){
    try {
        document.querySelectorAll('#menu-principal-1 li').forEach(li=>{
            if (window.location.href == li.querySelector('a').href) {
                li.classList.add('ativo')
            }
            else{
                li.classList.add('inativo')
            }
//        document.querySelectorAll('#menu-principal-1 li').forEach(li=>{
//            li.classList.add(li.querySelector('a').innerText)
        })
    } catch (error) {
        
    }
try {
    let ctpost = document.querySelector('.container_post').offsetHeight
    document.querySelector('.ads.verticalAdsInterno').style.height = ctpost + 'px'
} catch (error) {
    
}

});

let fecharMenu = document.querySelector('.outrosSites')
let criarBotao = document.createElement('button');
criarBotao.classList.add('botaoFechar');
criarBotao.setAttribute('onclick','menuOutrosSites()')
fecharMenu.prepend(criarBotao);


let logoFooter = document.querySelector('.logoFooter')
let logoMontado = document.querySelector('.logoMontado')

logoFooter.appendChild(logoMontado.cloneNode(true))

document.querySelector('.logoMontado a .textoLogo .logoP2').style.width = "3.8rem"

document.querySelectorAll('p a').forEach(video=>{
    if(/^vídeo/.test(video.innerText)){
        vd = video.href.substring(video.href.lastIndexOf('/'))
        video.parentElement.innerHTML = `<iframe title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen src=https://youtube.com/embed${vd}></iframe>`
    }

})

/** Carrossel de Categorias */

$('.carrossel').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
    responsive: [
        {
            breakpoint: 1400,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 1,
              infinite: true,
              dots: false
            }
          },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: false
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
  });