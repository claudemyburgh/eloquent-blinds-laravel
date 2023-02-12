export class SideScroll extends HTMLElement {
    public startX: null | number
    public scrollLeftPosition: null | number
    public velocity: number;

    public smoothing: number;

    public bounciness: number;
    public animation: any;
    private links: NodeListOf<HTMLElement>;

    get isDown(): boolean {
        return this._isDown;
    }

    set isDown(value: boolean) {
        this._isDown = value;
    }

    protected _isDown: boolean;

    constructor() {
        super();
        this._isDown = false
        this.startX = null
        this.scrollLeftPosition = null
        this.velocity = 0
        this.smoothing = 0.5;
        this.bounciness = 0.58;
        this.links = this.querySelectorAll('a')
    }

    connectedCallback() {
        this.addEventListener('mousedown', this.mouseDown.bind(this))
        this.addEventListener('mouseup', this.mouseUp.bind(this))
        this.addEventListener('mouseleave', this.mouseLeave.bind(this))
        this.addEventListener('mousemove', this.mouseMove.bind(this))
        this.animation = requestAnimationFrame(this.update.bind(this));
    }

    disconnectedCallback() {
        this.removeEventListener('mousedown', this.mouseDown)
        this.removeEventListener('mouseup', this.mouseUp)
        this.removeEventListener('mouseleave', this.mouseLeave)
        this.removeEventListener('mousemove', this.mouseMove)
        cancelAnimationFrame(this.animation);
    }

    protected mouseDown(e: MouseEvent) {
        this.isDown = true
        e.preventDefault()
        e.stopPropagation();
        this.classList.add('active')
        this.startX = e.pageX - this.offsetLeft
        this.scrollLeftPosition = this.scrollLeft
    }

    protected mouseUp() {
        this.isDown = false
        this.classList.remove('active')
    }

    protected mouseLeave() {
        this.isDown = false
        this.classList.remove('active')
    }

    protected mouseMove(e: MouseEvent) {
        if (!this.isDown) return
        e.preventDefault()
        e.stopPropagation();
        const x = e.pageX - this.offsetLeft
        const walk = (x - this.startX) * 1.2
        this.scrollLeft = this.scrollLeftPosition - walk
        this.velocity = -walk
    }

    protected update() {
        if (!this.isDown) {
            this.scrollLeft += this.velocity + this.smoothing
            this.velocity *= this.bounciness
            if (Math.abs(this.velocity) < 0.1) {
                this.stopInertia()
            }
        }
        requestAnimationFrame(this.update.bind(this))
    }

    protected stopInertia() {
        this.velocity = 0;
    }




}

customElements.define('side-scroll', SideScroll)
