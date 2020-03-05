<svg id="wpLogo" data-svg="servRoot" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 252 252" overflow="visible">

    <filter id="dropshadowCirc" height="130%">
        <feGaussianBlur in="SourceAlpha" stdDeviation="10"/> <!-- stdDeviation is how much to blur -->
        <feOffset dx="2" dy="2" result="offsetblur"/> <!-- how much to offset -->
        <feComponentTransfer>
            <feFuncA type="linear" slope="1"/> <!-- slope is the opacity of the shadow -->
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
    <mask id="wpMask">
        <circle cx="50%" cy="50%" r="50%" class='svgMask' width="100%" height="100%" fill="white"  data-svg="servicesMask"/>
    </mask>
    <g data-svg="servGroup" mask="url(#wpMask)">
        <rect height="252" width="252" fill="transparent"/>
        <path class="shapeFill" d="M125.9,1.7C57.4,1.7,1.6,57.5,1.6,126c0,68.6,55.8,124.3,124.3,124.3c68.5,0,124.3-55.8,124.3-124.3
            C250.3,57.5,194.5,1.7,125.9,1.7z M14.2,126c0-16.2,3.5-31.6,9.7-45.5l53.3,146.1C39.9,208.5,14.2,170.3,14.2,126z M125.9,237.8
            c-11,0-21.6-1.6-31.6-4.6l33.5-97.5l34.4,94.1c0.2,0.6,0.5,1.1,0.8,1.5C151.4,235.6,139,237.8,125.9,237.8z M141.4,73.6
            c6.7-0.4,12.8-1.1,12.8-1.1c6-0.7,5.3-9.6-0.7-9.2c0,0-18.1,1.4-29.8,1.4c-11,0-29.4-1.4-29.4-1.4c-6-0.4-6.7,8.9-0.7,9.2
            c0,0,5.7,0.7,11.7,1.1l17.4,47.7l-24.5,73.4L57.5,73.6c6.7-0.4,12.8-1.1,12.8-1.1c6-0.7,5.3-9.6-0.7-9.2c0,0-18.1,1.4-29.8,1.4
            c-2.1,0-4.6-0.1-7.2-0.1c20-30.3,54.3-50.4,93.4-50.4c29.1,0,55.6,11.1,75.5,29.3c-0.5,0-1-0.1-1.4-0.1c-11,0-18.8,9.6-18.8,19.8
            c0,9.2,5.3,17,11,26.2c4.3,7.4,9.2,17,9.2,30.8c0,9.6-3.7,20.7-8.5,36.1l-11.2,37.2L141.4,73.6z M224,72.4
            c8.7,15.9,13.7,34.2,13.7,53.6c0,41.2-22.3,77.2-55.6,96.6l34.1-98.7c6.4-15.9,8.5-28.7,8.5-40C224.8,79.8,224.5,76,224,72.4z" filter='url(#dropshadowShape' />
    </g>
    <circle cx="50%" cy="50%" r="60%" class='svgCirc' width="100%" height="100%" fill="transparent" data-svg="servicesCirc" mask="url(#wpMask)" filter='url(#dropshadowCirc)'/>

</svg>
