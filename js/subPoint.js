function app() {
    return {
        menus: [],
        showButtons: false,
        hiddenButtons: true,
        addmenu() {
            this.menus.push({
                title: '',
                submenus: []
            });
            this.updateButtonStates();
        },
        addSubmenu(parentMenu) {
            const newSubmenu = {
                title: '',
                submenus: []
            };
            parentMenu.submenus.push(newSubmenu);
        },
        hapus(menuIndex) {
            this.menus.splice(menuIndex, 1);
            this.updateButtonStates();
        },
        hapusSubmenu(parentMenu, submenuIndex) {
            parentMenu.submenus.splice(submenuIndex, 1);
        },
        hapusAll() {
            this.menus = [];
            this.updateButtonStates();
        },
        updateButtonStates() {
            this.showButtons = this.menus.length > 0;
            this.hiddenButtons = this.menus.length === 0;
        }
    }
}