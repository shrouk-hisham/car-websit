/*============= PRODUCTS TABS =============*/

const tabs = document.querySelectorAll('[data-target]'),
      tabContents = document.querySelectorAll('[content]');

tabs.forEach((tab) => {
    tab.addEventListener('click', () => {
        const target = document.querySelector(tab.dataset.target);
        tabContents.forEach((tabContent) => {
            tabContent.classList.remove('active-tab');
        });

        target.classList.add('active-tab');

        tabs.forEach((tab) => {
            tab.classList.remove('active-tab');
        });

        tab.classList.add('active-tab');
    });
});



















// function loadCars(tabName) {
//     fetch("load_cars.php?tab=" + tabName)
//         .then(res => res.text())
//         .then(html => {
//             let container = document.getElementById(tabName + "-container");
//             if (container) {
//                 container.innerHTML = html;
//             } else {
//                 console.warn("مش لاقي: " + tabName + "-container");
//             }
//         });
// }

// document.addEventListener("DOMContentLoaded", () => {
//     loadCars("featured");
//     loadCars("popular");
//     loadCars("new-added");
// });












// const tabs = document.querySelectorAll('[data-target]'),
//       tabContents = document.querySelectorAll('[content]');

// tabs.forEach((tab) => {
//     tab.addEventListener('click', () => {
//         const target = document.querySelector(tab.dataset.target);
//         const tabName = tab.dataset.target.replace("#", ""); // هناخد اسم التاب

//         tabContents.forEach((tabContent) => {
//             tabContent.classList.remove('active-tab');
//         });

//         target.classList.add('active-tab');

//         tabs.forEach((tab) => {
//             tab.classList.remove('active-tab');
//         });

//         tab.classList.add('active-tab');

//         // تحميل المنتجات كل مرة المستخدم يغيّر التاب
//         loadCars(tabName);
//     });
// });





