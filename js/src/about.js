const   abtContainer    = document.querySelector('[data-js*="abtContainer"]').getBoundingClientRect(),
        abtStrContainer = document.querySelector('[data-js*="abtStrContainer"]'),
        abtStrArray     = [...document.querySelector('[data-js*="abtStrContainer"]').innerHTML.trim()],
        includesArray   = ['J', 'j', 'S', 's'];
var     specialChar     = "";


abtStrContainer.innerHTML = abtStrArray.map(str => ('<span class="about-string" data-js="abtStr">' + str + '</span>')).join('');


window.addEventListener('scroll',() => { aboutScroll();});

function aboutScroll() {
    const abtStr = document.querySelectorAll('[data-js*="abtStr"]'),
            abtContainer    = document.querySelector('[data-js*="abtContainer"]').getBoundingClientRect();

    if((abtContainer.top - headerHeight -50) <= 0) {

        abtStr.forEach((string,index) => {
            setTimeout(function() {
                string.classList.add('active');
                }, index*150);
        });
    }
    console.log(abtContainer.top - headerHeight -50);
}

