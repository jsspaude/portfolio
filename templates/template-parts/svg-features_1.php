<svg id="featuresSVG-desktop" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
    <filter id="screens-dropshadow" height="130%">
        <feGaussianBlur in="SourceAlpha" stdDeviation="3"/> <!-- stdDeviation is how much to blur -->
        <feOffset dx="1" dy="1" result="offsetblur"/> <!-- how much to offset -->
        <feComponentTransfer>
            <feFuncA id="slopeEffect" data-js="slopeEffect" type="linear" slope="0.1"/> <!-- slope is the opacity of the shadow -->
        </feComponentTransfer>
        <feMerge> 
            <feMergeNode/> <!-- this contains the offset blurred image -->
            <feMergeNode in="SourceGraphic"/> <!-- this contains the element that the filter is applied to -->
        </feMerge>
    </filter>
    <rect id="screen-desktop" y="10%" x="10%" data-svg='features' class="outer-screen" width="75%" height="50%" filter='url(#screens-dropshadow)'/>
</svg>
<svg id="featuresSVG-tablet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
    <filter id="screens-dropshadow-tablet" height="130%">
        <feGaussianBlur in="SourceAlpha" stdDeviation="3"/> <!-- stdDeviation is how much to blur -->
        <feOffset dx="1" dy="1" result="offsetblur"/> <!-- how much to offset -->
        <feComponentTransfer>
            <feFuncA id="slopeEffectTablet" data-js="slopeEffect" type="linear" slope="0.1"/> <!-- slope is the opacity of the shadow -->
        </feComponentTransfer>
        <feMerge> 
            <feMergeNode/> <!-- this contains the offset blurred image -->
            <feMergeNode in="SourceGraphic"/> <!-- this contains the element that the filter is applied to -->
        </feMerge>
    </filter>
    <rect id="screen-tablet" y="10%" x="50%" data-svg='features' class="outer-screen" width="30%" height="40%" filter='url(#screens-dropshadow-tablet)'/>
</svg>
<svg id="featuresSVG-mobile" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
    <filter id="screens-dropshadow-mobile" height="130%">
        <feGaussianBlur in="SourceAlpha" stdDeviation="3"/> <!-- stdDeviation is how much to blur -->
        <feOffset dx="1" dy="1" result="offsetblur"/> <!-- how much to offset -->
        <feComponentTransfer>
            <feFuncA id="slopeEffectMobile" data-js="slopeEffect" type="linear" slope="0.1"/> <!-- slope is the opacity of the shadow -->
        </feComponentTransfer>
        <feMerge> 
            <feMergeNode/> <!-- this contains the offset blurred image -->
            <feMergeNode in="SourceGraphic"/> <!-- this contains the element that the filter is applied to -->
        </feMerge>
    </filter>
    <rect id="screen-mobile" y="10%" x="50%" data-svg='features' class="outer-screen" width="30%" height="40%" filter='url(#screens-dropshadow-mobile)'/>
</svg>