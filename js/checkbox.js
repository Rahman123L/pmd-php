function checkbox() {
    return {
        showDelete: false,
        checkboxes: [false, false],
        selectAll: false,
        toggleAllCheckboxes() {
            this.selectAll = !this.selectAll;
            this.checkboxes = this.checkboxes.map(() => this.selectAll);
        },
        toggleCheckbox(index) {
            this.checkboxes = this.checkboxes.map((_, i) => i === index ? true : false);
        }
    }
}