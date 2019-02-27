import {
    Util
} from './Util.js'

export class AnimDesc{
    

    constructor(o, elementParent, fonction){

        this.description = o.description
        this.elmParent = elementParent
        this.integrerDescription()
        this.fonction = fonction
    }

    integrerDescription() {
        
        //console.log("descriptions projet");

        let elmConteneur = this.creerElement(this.elmParent,
            'section',
            '',
            'descriptionProjet')



        let elmDescription = this.creerElement(elmConteneur,
            'div',
            this.description,
            'rectangle')


    }


    creerElement(elmParent, balise, contenu, classCSS) {
        //console.log(balise)
        let noeud = document.createElement(balise)
        if (contenu != '') {
            noeud.innerHTML = contenu
        }
        noeud.classList.add(classCSS)
        elmParent.appendChild(noeud)
        return noeud
    }



}