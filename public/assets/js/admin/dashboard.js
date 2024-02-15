// media
let mediaSection = document.getElementById('mediaSection');
let mediaButton = document.getElementById('mediaButton');
let mediaFormSection = document.getElementById('mediaFormSection');
let mediaFormButton = document.getElementById('mediaFormButton');
let mediaFormCancelButton = document.getElementById('cancel');

// DashboardController
let analyticsSection = document.getElementById('analyticsSection');
let dashboardButton = document.getElementById('dashboardButton');

// Template
let templateSection = document.getElementById('templateSection');
let templateForm = document.getElementById('templateForm');
let templateButton = document.getElementById('templateButton');
let addTemplateButton = document.getElementById('addTemplateButton');

// Roles
let roleSection = document.getElementById('roleSection');
let roleButton = document.getElementById('roleButton');

// Members
let membersSection = document.getElementById('membersSection');
let membersButton = document.getElementById('membersButton');

// Media list and card
let listSection = document.getElementById('listSection');
let listButton = document.getElementById('listButton');
let cardSection = document.getElementById('cardSection');
let cardButton = document.getElementById('cardButton');

// mail form
let mailForm = document.getElementById('mailForm');
let mailButton = document.getElementById('mailButton');
let mailFormCancelButton = document.getElementById('mailFormCancelButton');

$(mediaButton).on('click', () => {
    mediaSection.classList.remove("hidden");
    analyticsSection.classList.add("hidden");
    templateSection.classList.add("hidden");
    roleSection.classList.add("hidden");
    membersSection.classList.add("hidden");
    templateForm.classList.add("hidden");
    mediaFormSection.classList.add("hidden");
    mailForm.classList.add("hidden");
})
$(mediaFormButton).on('click', () => {
    mediaFormSection.classList.remove("hidden");

    mediaSection.classList.add("hidden");
    analyticsSection.classList.add("hidden");
    templateSection.classList.add("hidden");
    roleSection.classList.add("hidden");
    membersSection.classList.add("hidden");
    templateForm.classList.add("hidden");
    mailForm.classList.add("hidden");
})
$(mediaFormCancelButton).on('click', () => {
    mediaFormSection.classList.add("hidden");
    mediaSection.classList.remove("hidden");
    mailForm.classList.add("hidden");
})

$(mediaButton).on('click', () => {
    mediaSection.classList.remove("hidden");
    analyticsSection.classList.add("hidden");
    templateSection.classList.add("hidden");
    roleSection.classList.add("hidden");
    membersSection.classList.add("hidden");
    templateForm.classList.add("hidden");
    mediaFormSection.classList.add("hidden");
    mailForm.classList.add("hidden");
})

$(dashboardButton).on('click', () => {
    analyticsSection.classList.remove("hidden");
    mediaSection.classList.add("hidden");
    templateSection.classList.add("hidden");
    roleSection.classList.add("hidden");
    membersSection.classList.add("hidden");
    templateForm.classList.add("hidden");
    mediaFormSection.classList.add("hidden");
    mailForm.classList.add("hidden");
})

$(templateButton).on('click', () => {
    templateSection.classList.remove("hidden");
    mediaSection.classList.add("hidden");
    analyticsSection.classList.add("hidden");
    roleSection.classList.add("hidden");
    membersSection.classList.add("hidden");
    templateForm.classList.add("hidden");
    mediaFormSection.classList.add("hidden");
    mailForm.classList.add("hidden");
})

$(addTemplateButton).on('click', () => {
    templateForm.classList.remove("hidden");
    templateSection.classList.add("hidden");
    mediaSection.classList.add("hidden");
    analyticsSection.classList.add("hidden");
    roleSection.classList.add("hidden");
    membersSection.classList.add("hidden");
    mediaFormSection.classList.add("hidden");
    mailForm.classList.add("hidden");
})

$(roleButton).on('click', () => {
    roleSection.classList.remove("hidden");
    mediaSection.classList.add("hidden");
    templateSection.classList.add("hidden");
    analyticsSection.classList.add("hidden");
    membersSection.classList.add("hidden");
    templateForm.classList.add("hidden");
    mediaFormSection.classList.add("hidden");
    mailForm.classList.add("hidden");
})

$(membersButton).on('click', () => {
    membersSection.classList.remove("hidden");
    mediaSection.classList.add("hidden");
    templateSection.classList.add("hidden");
    analyticsSection.classList.add("hidden");
    roleSection.classList.add("hidden");
    templateForm.classList.add("hidden");
    mediaFormSection.classList.add("hidden");
    mailForm.classList.add("hidden");
})

$(cardButton).on('click', () => {
    cardSection.classList.remove("hidden");
    listSection.classList.add("hidden");
    mailForm.classList.add("hidden");
})
$(listButton).on('click', () => {
    listSection.classList.remove("hidden");
    cardSection.classList.add("hidden");
    mailForm.classList.add("hidden");
})


$(mailButton).on('click', () => {
    mailForm.classList.remove("hidden");
    membersSection.classList.add("hidden");

})
$(mailFormCancelButton).on('click', () => {
    membersSection.classList.remove("hidden");
    mailForm.classList.add("hidden");
})
