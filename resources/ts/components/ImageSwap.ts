

export class ImageSwap extends HTMLElement{
    private mainImage: HTMLElement;
    private smallImages: NodeListOf<HTMLElement>;
    private initialUrl: string;
    private resetButton: HTMLButtonElement;

    constructor() {
        super();
        this.mainImage = this.querySelector('[data-image]')
        this.smallImages = this.querySelectorAll('[data-image-url]')
        this.initialUrl = this.mainImage.getAttribute('src')
        this.resetButton = this.querySelector('[data-image-reset]')
    }

    connectedCallback() {
        this.hideShowButton();
        this.smallImages?.forEach((button) => button.addEventListener('click', this.swapImage.bind(this)))
        this.resetButton.addEventListener('click', this.reset.bind(this))
        document.body.addEventListener('keydown', (event: KeyboardEvent) => {
            event.key === 'Escape' && this.reset()
        })
    }

    disconnectCallback() {
        this.smallImages?.forEach((button) => button.removeEventListener('click', this.swapImage))
        this.resetButton.removeEventListener('click', this.reset)
        document.body.removeEventListener('keydown', this.reset)
    }

    private get checkIfFirstImageIsCurrent() {
        return (this.mainImage as HTMLElement).getAttribute('src') === this.initialUrl
    }

    private hideShowButton (): void {
        if (this.checkIfFirstImageIsCurrent) {
            this.resetButton.style.display = 'none'
        }else {
            this.resetButton.style.display = 'flex'
        }
    }

    private swapImage(event) {
        ;(this.mainImage as HTMLElement).setAttribute('src', event.target.dataset.imageUrl)
        this.hideShowButton();
    }

    private reset() {
        (this.mainImage as HTMLElement).setAttribute('src', this.initialUrl)
        this.hideShowButton();
    }

}

customElements.define('image-swap', ImageSwap)
