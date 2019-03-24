window.addEventListener('scroll', () => {
    let parent = document.getElementById('parallax-container');
    let children = parent.getElementsByTagName('svg');

    

    for(let i = 0; i < children.length; i++) {

      children[i].style.transform = 'translateY(+' + (window.pageYOffset *0.5 * i / children.length) + 'px)';

      children[i].style.opacity = -(window.pageYOffset *0.000001);

      if(children[i].style.opacity == 0){
        children[i].style.opacity = 0.7;
      }

    }
 }, false)




