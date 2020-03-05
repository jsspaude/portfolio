const   abtContainer    = document.querySelector('[data-js*="abtContainer"]'),
        abtStrContainer = document.querySelector('[data-js*="abtStrContainer"]'),
        abtStrArray     = [...document.querySelector('[data-js*="abtStrContainer"]').innerHTML.trim()];

abtStrContainer.innerHTML = abtStrArray.map(str => ('<span class="about-string" data-js="abtStr">' + str + '</span>')).join('');

window.addEventListener('scroll',() => {aboutScroll();});


function aboutScroll() {
    const   abtStrArray         = [...document.querySelectorAll('[data-js*="abtStr"]')],
            abtContainerRect    = document.querySelector('[data-js*="abtContainer"]').getBoundingClientRect();

    if((abtContainerRect.top - headerHeight -50) <= 0) {
        abtContainer.classList.add('active');

        abtStrArray.forEach((string,index) => {
            setTimeout(function() {
                string.classList.add('active');
                if(string.innerHTML.match(/^J|S|S$/)){ 
                    string.classList.add('highlight');
                }
            }, index*150);
        });
    }
};

