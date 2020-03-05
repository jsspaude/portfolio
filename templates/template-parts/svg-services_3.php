
<svg id="Layer_1" data-svg="servRoot" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 252 252" style="enable-background:new 0 0 252 252;" overflow="visible">
    <filter id="dropshadowCirc" height="130%">
        <feGaussianBlur in="SourceAlpha" stdDeviation="3"/> <!-- stdDeviation is how much to blur -->
        <feOffset dx="2" dy="2" result="offsetblur"/> <!-- how much to offset -->
        <feComponentTransfer>
            <feFuncA type="linear" slope="2"/> <!-- slope is the opacity of the shadow -->
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
    <mask id="puzzleMask">
        <circle cx="50%" cy="50%" r="50%" class='svgMask' width="100%" height="100%" fill="white"  data-svg="servicesMask"/>
    </mask>
    <g data-svg="servGroup" mask="url(#puzzleMask)">
        <rect width="252" height="252" fill="transparent"/>
        <path class="shapeFill" d="M115.1,113.8c-3.9,0-7.5,1.4-10.3,3.6V82.7H69.1c4.1-4,6.6-9.6,6.6-15.8c0-12.2-9.9-22.1-22.1-22.1
            s-22.1,9.9-22.1,22.1c0,6.2,2.5,11.8,6.6,15.8H2.5v27.7c3.1-1.6,6.5-2.4,10.1-2.4c12.2,0,22.1,9.9,22.1,22.1s-9.9,22.1-22.1,22.1
            c-3.6,0-7.1-0.9-10.1-2.4v27.7h30.8c-1.2-2.7-1.9-5.7-1.9-9c0-12.2,9.9-22.1,22.1-22.1s22.1,9.9,22.1,22.1c0,3.2-0.7,6.2-1.9,9h31.2
            v-34.7c2.8,2.3,6.3,3.6,10.3,3.6c9,0,16.3-7.3,16.3-16.3C131.3,121.2,124.1,113.8,115.1,113.8z" filter='url(#dropshadowShape)'/>
        <path class="shapeFill" d="M240,108c3.4,0,6.6,0.8,9.5,2.2V82.7h-35.7c4.1-4,6.6-9.6,6.6-15.8c0-12.2-9.9-22.1-22.1-22.1
            c-12.2,0-22.1,9.9-22.1,22.1c0,6.2,2.5,11.8,6.6,15.8h-35.7v34.7c2.8-2.3,6.3-3.6,10.3-3.6c9,0,16.3,7.3,16.3,16.3
            s-7.3,16.3-16.3,16.3c-3.9,0-7.5-1.4-10.3-3.6v34.7h30.4c-0.8,2.4-1.4,4.9-1.4,7.6c0,12.2,9.9,22.1,22.1,22.1
            c12.2,0,22.1-9.9,22.1-22.1c0-2.7-0.5-5.2-1.4-7.6h30.4V150c-2.9,1.4-6.1,2.2-9.5,2.2c-12.2,0-22.1-9.9-22.1-22.1
            C217.9,117.9,227.8,108,240,108z" filter='url(#dropshadowShape)'/>
    </g>
    <circle cx="50%" cy="50%" r="60%" class='svgCirc' width="100%" height="100%" fill="transparent" data-svg="servicesCirc" mask="url(#wpMask)" filter='url(#dropshadowCirc)'/>
</svg>
