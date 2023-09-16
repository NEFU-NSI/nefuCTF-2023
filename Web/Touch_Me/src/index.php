
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Touch me if you can</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      html, body {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100%;
        margin: 0;
        font-family: sans-serif;
        font-size: 18px;
      }

      body {
        max-width: 400px;
        padding: 1rem;
        box-sizing: border-box;
      }

      button {
        display: block;
        padding: 0.75rem 1.25rem;
        border: 0;
        border-radius: 4px;
        background-color: hsl(218deg 92% 57%);
        color: #fff;
        user-select: none;
        font-size: 1rem;
        transform-style: preserve-3d;
      }

      button:before,
      button:after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        border-radius: 4px;
        background-color: hsl(218deg 92% 35%);
        transform: translateZ( -5px );
      }

      button:after {
        background-color: hsl(218deg 92% 20%);
        transform: translateZ( -10px );
      }

      .button-wrapper {
        position: relative;
        perspective: 400px;
        align-self: flex-start;
      }

      hgroup {
        width: 100%;
        margin: 0 0 2rem 0;
      }

      h1 {
        font-size: 1.5rem;
        font-weight: 600;
        margin: 0 0 1rem 0;
      }

      h3 {
        font-size: 1rem;
        font-weight: 500;
        margin: 0 0 0.5rem 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: #888;
      }

      a {
        color: inherit;
        text-decoration: none;
      }
    </style>
  </head>
  <body>

    <hgroup>
      <h1>FLAGÁÇπÂáªÂç≥ÈÄÅ</h1>
      <h3><a href="http://ctf.nefu.edu.cn/" tabindex="-1">‚Äî NEFU CTF</a></h3>
      <!-- not this -->
    </hgroup>

    <div class="button-wrapper">
      <button style="transition: all 0.1s ease 0s; transform: translate(0px, 0px) rotateX(0deg) rotateY(0deg); box-shadow: rgba(0, 0, 0, 0.15) 0px 0px 0px;">Touch Me</button>
    </div>

    <script>
      const button = document.querySelector( 'button' );

      const distanceBetween = ( p1x, p1y, p2x, p2y ) => {
        const dx = p1x-p2x;
        const dy = p1y-p2y;
        return Math.sqrt( dx*dx + dy*dy );
      };

      document.addEventListener( 'mousemove', event => {
        const radius = Math.max( button.offsetWidth*0.75, button.offsetHeight*0.75, 100 );

        const bx = button.parentNode.offsetLeft + button.offsetLeft + button.offsetWidth/2;
        const by = button.parentNode.offsetTop + button.offsetTop + button.offsetHeight/2;

        const dist = distanceBetween( event.clientX, event.clientY, bx, by );
        const angle = Math.atan2( event.clientY - by, event.clientX - bx );

        const ox = -1 * Math.cos( angle ) * Math.max( ( radius - dist ), 0 );
        const oy = -1 * Math.sin( angle ) * Math.max( ( radius - dist ), 0 );

        const rx = oy / 2;
        const ry = -ox / 2;

        button.style.transition = `all 0.1s ease`;
        button.style.transform = `translate(${ox}px, ${oy}px) rotateX(${rx}deg) rotateY(${ry}deg)`;
        button.style.boxShadow = `0px ${Math.abs(oy)}px ${Math.abs(oy)/radius*40}px rgba(0,0,0,0.15)`;
      } );

      const nocheat = () => button.textContent = 'No cheating Ì†ΩÌπÖ‚Äç‚ôÇÔ∏è';
      const notouch = () => button.textContent = 'This thing doesn\'t work with touch Ì†ΩÌ∏¢';

      button.addEventListener( 'click', event => button.textContent = 'You win Ì†ºÌæâÌ†ΩÌπÉ This is your flag: flag{ToUch_M3_1f_y0u_cAn}' );
      button.addEventListener( 'keydown', event => { event.preventDefault(); nocheat(); } );
      button.click = nocheat;

      if( navigator.userAgent.match( /Android|iPhone|iPad|iPod/i ) ) notouch();
      window.addEventListener( 'touchstart', notouch );
    </script>



<deepl-input-controller><template shadowrootmode="open"><link rel="stylesheet" href="chrome-extension://cofdbpoegempjloogbagkncekinflcnj/build/content.css"><div><div class="dl-input-translation-container svelte-ju4595"><div></div></div></div></template></deepl-input-controller></body></html>
