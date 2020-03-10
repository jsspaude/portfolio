<svg id="featuresSVG" data-svg="features" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" overflow="visible" transition="1s all ease" transform="scale(.1,.2)">
    <filter id="desktop-dropshadow" height="130%">
        <feGaussianBlur in="SourceAlpha" stdDeviation="3"/> <!-- stdDeviation is how much to blur -->
        <feOffset dx="1" dy="1" result="offsetblur"/> <!-- how much to offset -->
        <feComponentTransfer>
            <feFuncA class="slopeEffect" data-js="slopeEffect" type="linear" slope="0.1"/> <!-- slope is the opacity of the shadow -->
        </feComponentTransfer>
        <feMerge> 
            <feMergeNode/> <!-- this contains the offset blurred image -->
            <feMergeNode in="SourceGraphic"/> <!-- this contains the element that the filter is applied to -->
        </feMerge>
    </filter>
    <rect id="screen-desktop" y="10%" x="0%" data-svg='features' class="outer-screen" width="150" height="100" filter='url(#desktop-dropshadow)'/>
</svg>