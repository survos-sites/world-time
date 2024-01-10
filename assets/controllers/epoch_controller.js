import { Controller } from '@hotwired/stimulus';
export default class extends Controller {
    connect() {
        this.element.textContent = "epoch time is now " +  Date.now();
    }
}
