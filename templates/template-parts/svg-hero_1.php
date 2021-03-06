<svg id="van-skyline" data-svg="hero_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 961 205">
            <filter id="dropshadow" height="130%">
                <feGaussianBlur in="SourceAlpha" stdDeviation="3"/> <!-- stdDeviation is how much to blur -->
                <feOffset dx="2" dy="2" result="offsetblur"/> <!-- how much to offset -->
                <feComponentTransfer>
                    <feFuncA type="linear" slope="0.25"/> <!-- slope is the opacity of the shadow -->
                </feComponentTransfer>
                <feMerge> 
                    <feMergeNode/> <!-- this contains the offset blurred image -->
                    <feMergeNode in="SourceGraphic"/> <!-- this contains the element that the filter is applied to -->
                </feMerge>
            </filter>
            <path class="hero-draw hero-bg" data-svg="heroPath" filter='url(#dropshadow)' d="M78.4,174.1l40.5-39.4l40.5,28.2l72.1-74.3l39.4,34.9l65.3-60.8l27,23.7L402.8,48l81.1,77.7l54.1-42.8
                l41.7,38.3l67.6-34.9l45,37.2l40.5-28.2l40.5,52.9l31.5-37.2l33.8,73.2l32.7-47.3l30.4,56.3l22.5-41.7l37.2,52.9H-0.4l46.2-50.7
                L78.4,174.1z"/>

            <g data-svg="heroFG">
                <path class="hero-draw" data-svg="heroPath" filter='url(#dropshadow)' d="M341.4,143.1c0-16.9,38.9-16.9,38.9,0H341.4z"/>
                <path class="hero-draw" data-svg="heroPath" filter='url(#dropshadow)' d="M339.2,143.1h43.1v61.4h-43.1V143.1z"/>
            </g>
            <g data-svg="heroFG">
                <path class="hero-draw" data-svg="heroPath" filter='url(#dropshadow)' d="M258.7,26.6V15h23.7v11.5H258.7z"/>
                <path class="hero-draw" data-svg="heroPath" filter='url(#dropshadow)' d="M258.7,84V48l-7.6-5.9l-7.9-17.8h49l-4.2,17.7l-7.9,5.9l-1.1,36H258.7z"/>
                <path class="hero-draw" data-svg="heroPath" filter='url(#dropshadow)' d="M240.6,204.5V66h58.6v138.5H240.6z"/>
            </g>
            <g data-svg="heroFG">
                <path class="hero-draw" data-svg="heroPath" filter='url(#dropshadow)' d="M287.7,90.8h38v113.8h-38V90.8z"/>
            </g>
            <g data-svg="heroFG">
                <path class="hero-draw" data-svg="heroPath" filter='url(#dropshadow)' d="M454.2,204.5V54.2h18.4V26.6h60.8V84h10.1v120.5H454.2z"/>
            </g>
            <g data-svg="heroFG">
                <path class="hero-draw" data-svg="heroPath" filter='url(#dropshadow)' d="M393.2,173.8h32.1V95h44.8v109.5h-76.9V173.8z"/>
            </g>
            <g data-svg="heroFG">
                <path class="hero-draw" data-svg="heroPath" filter='url(#dropshadow)' d="M536.8,121.2h25.3V95h22v36.3v-23.7h36.3v96.9h-83.6V121.2z"/>
            </g>
            <g data-svg="heroFG">
                <path class="hero-draw" data-svg="heroPath" filter='url(#dropshadow)' d="M630.6,204.5V72.2h21.1V48h40.5v25.9h27v130.6H630.6z"/>
            </g>
            <g data-svg="heroFG">
                <path class="hero-draw" data-svg="heroPath" filter='url(#dropshadow)' d="M742.1,204.5v-34.4H775v-17.5h21.1v-43.1h21.1V81.8h32.1v122.8H742.1z"/>
            </g>
            <g data-svg="heroFG">
                <path class="hero-draw" data-svg="heroPath" filter='url(#dropshadow)' d="M665.2,155c0,0,17.7-9.9,23.7-19.7v49.3h-23.7V155z"/>
                <path class="hero-draw" data-svg="heroPath" filter='url(#dropshadow)' d="M653.4,155c0,0,17.7-9.9,23.7-19.7v49.3h-23.7V155z"/>
                <path class="hero-draw" data-svg="heroPath" filter='url(#dropshadow)' d="M641.6,155c0,0,17.7-9.9,23.7-19.7v49.3h-23.7V155z"/>
                <path class="hero-draw" data-svg="heroPath" filter='url(#dropshadow)' d="M629.7,155c0,0,17.7-9.9,23.7-19.7v49.3h-23.7V155z"/>
                <path class="hero-draw" data-svg="heroPath" filter='url(#dropshadow)' d="M506.4,135.3c0,0,19.4,29,66.7,31.5c47.3,2.5,65-31.5,65-31.5v69.3H506.4V135.3z"/>
                <path class="hero-draw" data-svg="heroPath" filter='url(#dropshadow)' d="M498.8,169.9c0,0,38,2,57.4,14.6H732v20H498.8V169.9z"/>
            </g>
        </svg>