export default function CollapseModule() {
    const clBlock = document.querySelectorAll(".collapse-block");
    if (clBlock) {
        clBlock.forEach((item) => {
            const clBody = item.querySelectorAll('.collapse-body');
            const clItems = item.querySelectorAll('.collapse-item')
            if (clBody) {
                $(clBody[0]).slideDown();
                clBody[0].parentElement.classList.add("active");
            }
            if (clItems) {
                clItems.forEach(item => {
                    if (item.classList.contains('active')) {
                        const body = item.querySelector(".collapse-body")
                        $(body).slideDown();
                    }
                })
            }
            const head = item.querySelectorAll('.collapse-head');
            head.forEach(item => {
                item.addEventListener('click', () => {
                    clBody.forEach(item => {
                        $(item).slideUp();
                    })
                    clItems.forEach(item => {
                        $(item).removeClass("active");
                    })
                    const body = item.parentElement.querySelector(".collapse-body")
                    if (body.style.display == "none" || body.style.display == "") {
                        $(body).slideDown();
                        $(item.parentElement).addClass("active");
                    } else {
                        $(body).slideUp();
                        $(item.parentElement).removeClass("active");
                    }
                })
            })
        });
    }

    const clfree = document.querySelector(".prod-collapse__block");

    if (clfree) {
        const clItems = clfree.querySelectorAll('.prod-collapse__item')
        clItems.forEach(items => {
            const head = items.querySelector('.prod-collapse__head');
            const body = items.querySelector('.prod-collapse__body');
            head.addEventListener('click', () => {
                $(body).slideToggle();
                head.parentElement.classList.toggle('active');
            })
            // $(body).slideUp();
        })
    }
}