<svg id="wrench" data-svg="servRoot" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 252 252" overflow="visible">
    <filter id="dropshadowCirc" height="130%">
        <feGaussianBlur in="SourceAlpha" stdDeviation="3"/> <!-- stdDeviation is how much to blur -->
        <feOffset dx="0" dy="0" result="offsetblur"/> <!-- how much to offset -->
        <feComponentTransfer>
            <feFuncA type="linear" slope=".25"/> <!-- slope is the opacity of the shadow -->
        </feComponentTransfer>
        <feMerge> 
            <feMergeNode/> <!-- this contains the offset blurred image -->
            <feMergeNode in="SourceGraphic"/> <!-- this contains the element that the filter is applied to -->
        </feMerge>
    </filter>
    <filter id="dropshadowShape" height="130%">
        <feGaussianBlur in="SourceAlpha" stdDeviation="3"/> <!-- stdDeviation is how much to blur -->
        <feOffset dx="2" dy="2" result="offsetblur"/> <!-- how much to offset -->
        <feComponentTransfer>
            <feFuncA type="linear" slope="1"/> <!-- slope is the opacity of the shadow -->
        </feComponentTransfer>
        <feMerge> 
            <feMergeNode/> <!-- this contains the offset blurred image -->
            <feMergeNode in="SourceGraphic"/> <!-- this contains the element that the filter is applied to -->
        </feMerge>
    </filter>
    <mask id="wrenchMask">
        <circle cx="50%" cy="50%" r="50%" class='svgMask' width="150%" height="150%" fill="white"  data-svg="servicesMask"/>
    </mask>
    <g data-svg="servGroup" mask="url(#wrenchMask)">
        <rect height="252" width="252" fill="transparent"/>
        <path class="shapeFill" d="M242.6,205.2L242.6,205.2l-139.2-139c1.1-4.1,1.6-8.4,1.6-12.8c0-28.6-23.1-51.7-51.7-51.7c-5,0-9.7,0.7-14.3,2
            l42.3,39.7l-6,29.5l-28.5,9.5L3.1,41.2c-0.9,3.9-1.5,8-1.5,12.2c0,28.6,23.1,51.7,51.7,51.7c4.4,0,8.8-0.5,12.8-1.6l139,139
            l-0.1,0.1c5.9,5.9,13.8,8.4,21.4,7.6c5.8-0.6,11.5-3.1,16-7.6C252.9,232.3,252.9,215.5,242.6,205.2z" filter='url(#dropshadowShape)'/>
    </g>
    <circle cx="50%" cy="50%" r="60%" class='svgCirc' width="100%" height="100%" fill="transparent" data-svg="servicesCirc" mask="url(#wpMask)" filter='url(#dropshadowCirc)'/>
</svg>
