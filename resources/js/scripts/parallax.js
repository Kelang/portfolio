window.addEventListener('scroll', () => {
    let parent = document.getElementById('parallax-container');
    let children = parent.getElementsByTagName('svg');

    console.log(children);

    for(let i = 0; i < children.length; i++) {

      children[i].style.transform = 'translateY(+' + (window.pageYOffset *0.5 * i / children.length) + 'px)';
    }
 }, false)