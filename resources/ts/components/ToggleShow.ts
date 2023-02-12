

export class ToggleShow extends HTMLElement{
    #show: boolean;
    private blockStyle: string;
    private container: HTMLElement;
    private button: Element;
    constructor() {
        super();
        this.#show = false
        this.blockStyle = this.getAttribute('block') || 'block'
        this.button = this.querySelector('button[data-container-trigger]')
        this.container = this.querySelector('[data-container]')
    }

    connectedCallback() {
        this.button.addEventListener('click', this.toggle.bind(this))
    }

    disconnectedCallback() {
        this.button.removeEventListener('click', this.toggle)
    }


    protected toggle(event) {
        event.preventDefault()
        if (this.container.style.display === this.blockStyle) {
            this.button.ariaExpanded = "false"
            this.container.style.display = 'none'
        }else {
            this.button.ariaExpanded = "true"
            this.container.style.display = this.blockStyle
        }
    }

}


customElements.define('toggle-show', ToggleShow)
