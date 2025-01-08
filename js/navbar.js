const activePage = window.location.pathname;
const navLinks = document.querySelectorAll('.nav-links a').forEach(link => {
    if (link.href.includes(`${activePage}`)) {
        link.classList.add('active');
    }
});

console.log(activePage);