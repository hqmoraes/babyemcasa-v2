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

document.querySelectorAll('p a').forEach(video=>{
    if(/^vídeo/.test(video.innerText)){
        vd = video.href.substring(video.href.lastIndexOf('/'))
        video.parentElement.innerHTML = `<iframe title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen src=https://youtube.com/embed${vd}></iframe>`
    }

})
