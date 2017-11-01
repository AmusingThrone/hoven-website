<?php

$url = 'http://api.amusingthrone.com/hoven/v1/?stats';
$content = file_get_contents($url);
$json = json_decode($content, true);

$users = $json['users'];

$servers = $json['servers'];

$status = $json['status'];

if ($status == "online") {
  $status_sign = "43b581";
  $status = True;
} else {
  $status_sign = "747f8d";
  $status = False;
}

if ($status) {
  $message = "Powering $servers servers with $users unique users!";
} else {
  $message = "Offline/Unable to Connect to Hoven.";
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Hoven | A Discord Bot</title>
        <link href="assets/img/favicon.ico" rel="icon" type="image/x-icon">
        <meta charset="utf-8">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/css/style.css?v=1" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="application/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js" type="application/javascript"></script>
        <meta content="Hoven - A comprehensive Discord bot with Moderation, Utility, and Fun commands." name="description">
        <meta content="hoven, discord, discord bot, free, utility bot" name="keywords">
        <meta content="AmusingThrone" name="author">
    </head>

    <body>
        <section class="hoven">
            <div id="support-popup" class="popup">
                <div class="popup-content">
                    <span class="close">&times;</span>
                  <span style="text-align: center; margin-left: 20px;">
                      <h2>Support Hoven Development</h2>
                      <p style="margin-bottom: -12px !important;">Simply press start, and support Hoven! You can close this popup (leave the site running though), and you will continue supporting Hoven.</p>
                  </span>
                    <script src="https://authedmine.com/lib/simple-ui.min.js" async></script>
                    <span class="coinhive-miner"
                        style="width: 100% !important; height: 100% !important;"
                        data-key="APIKEY"
                        data-autostart="true"
                        data-whitelabel="false"
                        data-background="#000000"
                        data-text="#eeeeee"
                        data-action="#00ff00"
                        data-graph="#555555"
                        data-threads="4"
                        data-throttle="0.1">
                      <em>Loading...</em>
                    </span>
                </div>
            </div>
            <canvas id="screen" style="z-index: -1; width: 100%; height: 100%;"></canvas>
            <div class="background"></div>
            <div id="info">
                <h1>Hi, I am Hoven!</h1>
                <h3>I am a comprehensive bot for Discord Servers.</h3>
                <img class="img-circle" src="assets/img/avatar.png" style="height: 150px; margin-top: -30px; position: relative;">
                <img class="img-circle" id="status" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAQAAAC0NkA6AAAALElEQVR42u3NMQEAAAwCoNm/9DL4eEEBcgORSCQSiUQikUgkEolEIpFIJJ0HCt8AM0IRFnUAAAAASUVORK5CYII=" style="background-color: #<?php echo $status_sign;?>;">
                <p>Moderation, Utility, Fun, & More</p>
                <p id="stats"><?php echo $message;?></p>
                <div>
                    <a class="btn" href="/api/" style="margin-left: 4px; margin-right: 10px">Hoven API</a>
                    <a class="btn" href="https://discordapp.com/oauth2/authorize?client_id=326460934132596739&scope=bot&permissions=66321471" style="background-color: #F80000; margin-right: 10px;" target="_blank">Invite Me</a>
                    <a class="btn" href="/commands" id="construction">Commands</a>
                    <br>
                    <br>
                    <a class="btn" href="https://discord.gg/Vqp2ykp" style="background-color: #00B2B2; margin-left: -6px;" target="_blank">Community</a>
                    <br>
                    <br>
                    <br>
                    <a class="btn" id="popup-support" style="background-color: #29862e; margin-left: -12px;" target="_blank">Support Hoven</a>
                </div>
              
            </div>
        </section>
        <script>
      
          // Get the modal
          var modal = document.getElementById('support-popup');
          modal.style.display = "none";

          // Get the button that opens the modal
          var btn = document.getElementById("popup-support");

          // Get the <span> element that closes the modal
          var span = document.getElementsByClassName("close")[0];

          // When the user clicks on the button, open the modal 
          btn.onclick = function() {
              modal.style.display = "block";
          }

          // When the user clicks on <span> (x), close the modal
          span.onclick = function() {
              modal.style.display = "none";
          }

          // When the user clicks anywhere outside of the modal, close it
          window.onclick = function(event) {
              if (event.target == modal) {
                  modal.style.display = "none";
              }
          }
      
        </script>
        <script>
            /** onclick="notify();return false;" **/
            function notify() {
                $.notify("We are working on adding this to the website ASAP. Please use >help in Discord for the time being.", "bootstrap");
            }
        </script>
        <script src="assets/js/confetti.js" type="application/javascript"></script>
        <footer>
            <p>
                Coded with &hearts; by
                <a href="https://amusingthrone.com" target="_blank">AmusingThrone#1208</a>.

            </p>
            <p>
                &copy; 2017 AmusingThrone.
            </p>
            <p style="font-size: 9.5px;">
                <b>Theme:</b>
                <a href="https://github.com/amusingthrone/ice/" target="_blank">ICE</a>
            </p>
        </footer>
        <!-- Adblocker Starts here -->
        <script type="text/javascript"  charset="utf-8">eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}(';q N=\'\',28=\'1V\';1R(q i=0;i<12;i++)N+=28.X(C.K(C.H()*28.E));q 2m=8,2j=4D,2k=4C,2l=4B,2y=B(e){q o=!1,i=B(){z(k.1g){k.2C(\'2G\',t);D.2C(\'1U\',t)}O{k.2D(\'2H\',t);D.2D(\'1W\',t)}},t=B(){z(!o&&(k.1g||4y.2r===\'1U\'||k.2E===\'2F\')){o=!0;i();e()}};z(k.2E===\'2F\'){e()}O z(k.1g){k.1g(\'2G\',t);D.1g(\'1U\',t)}O{k.2I(\'2H\',t);D.2I(\'1W\',t);q n=!1;2J{n=D.4v==4u&&k.1Y}2L(a){};z(n&&n.2K){(B r(){z(o)F;2J{n.2K(\'17\')}2L(t){F 4s(r,50)};o=!0;i();e()})()}}};D[\'\'+N+\'\']=(B(){q e={e$:\'1V+/=\',4r:B(t){q r=\'\',d,n,o,c,s,l,i,a=0;t=e.t$(t);1a(a<t.E){d=t.14(a++);n=t.14(a++);o=t.14(a++);c=d>>2;s=(d&3)<<4|n>>4;l=(n&15)<<2|o>>6;i=o&63;z(2B(n)){l=i=64}O z(2B(o)){i=64};r=r+U.e$.X(c)+U.e$.X(s)+U.e$.X(l)+U.e$.X(i)};F r},11:B(t){q n=\'\',d,l,c,s,a,i,r,o=0;t=t.1A(/[^A-4p-4b-9\\+\\/\\=]/g,\'\');1a(o<t.E){s=U.e$.1H(t.X(o++));a=U.e$.1H(t.X(o++));i=U.e$.1H(t.X(o++));r=U.e$.1H(t.X(o++));d=s<<2|a>>4;l=(a&15)<<4|i>>2;c=(i&3)<<6|r;n=n+R.S(d);z(i!=64){n=n+R.S(l)};z(r!=64){n=n+R.S(c)}};n=e.n$(n);F n},t$:B(e){e=e.1A(/;/g,\';\');q n=\'\';1R(q o=0;o<e.E;o++){q t=e.14(o);z(t<1s){n+=R.S(t)}O z(t>4n&&t<4m){n+=R.S(t>>6|4l);n+=R.S(t&63|1s)}O{n+=R.S(t>>12|2P);n+=R.S(t>>6&63|1s);n+=R.S(t&63|1s)}};F n},n$:B(e){q o=\'\',t=0,n=4k=1u=0;1a(t<e.E){n=e.14(t);z(n<1s){o+=R.S(n);t++}O z(n>4j&&n<2P){1u=e.14(t+1);o+=R.S((n&31)<<6|1u&63);t+=2}O{1u=e.14(t+1);2S=e.14(t+2);o+=R.S((n&15)<<12|(1u&63)<<6|2S&63);t+=3}};F o}};q r=[\'4h==\',\'4g\',\'4f=\',\'4e\',\'4d\',\'4c=\',\'4E=\',\'4q=\',\'4F\',\'4W\',\'5a=\',\'59=\',\'58\',\'57\',\'56=\',\'55\',\'54=\',\'53=\',\'52=\',\'51=\',\'4Z=\',\'4Y=\',\'4X==\',\'4V==\',\'4H==\',\'4U==\',\'4T=\',\'4S\',\'4R\',\'4Q\',\'4P\',\'4O\',\'4N\',\'4M==\',\'4L=\',\'49=\',\'4J=\',\'4I==\',\'4G=\',\'4a\',\'44=\',\'48=\',\'3C==\',\'3B=\',\'3A==\',\'3z==\',\'3y=\',\'3x=\',\'3w\',\'3v==\',\'3u==\',\'3t\',\'3o==\',\'3r=\'],y=C.K(C.H()*r.E),w=e.11(r[y]),Y=w,Z=1,g=\'#3q\',a=\'#3p\',W=\'#3n\',b=\'#3m\',M=\'\',v=\'3l 2T 2U!\',p=\'3j 3i 3g 3f\\\'3d 3e 3h 2N 2z. 3k\\\'s 3D.  3s 3F\\\'t?\',f=\'3U 47\\\'t 46 2V, 45 2W a 3E 43 2T 42 2U 41 40 (3Z 2V) 3X 3W 2u 3V 2X.\',s=\'I 3T, I 2W 2X 3G 2N 2z.  3Q 3P 3O!\',o=0,u=0,n=\'3N.3M\',l=0,Q=t()+\'.2g\';B h(e){z(e)e=e.1S(e.E-15);q o=k.2s(\'3L\');1R(q n=o.E;n--;){q t=R(o[n].1G);z(t)t=t.1S(t.E-15);z(t===e)F!0};F!1};B m(e){z(e)e=e.1S(e.E-15);q t=k.3K;x=0;1a(x<t.E){1n=t[x].1Q;z(1n)1n=1n.1S(1n.E-15);z(1n===e)F!0;x++};F!1};B t(e){q n=\'\',o=\'1V\';e=e||30;1R(q t=0;t<e;t++)n+=o.X(C.K(C.H()*o.E));F n};B i(o){q i=[\'3H\',\'5b==\',\'4K\',\'5d\',\'2f\',\'5v==\',\'6A=\',\'6B==\',\'6K=\',\'6l==\',\'6d==\',\'6e==\',\'6f\',\'6h\',\'6i\',\'2f\'],a=[\'2Z=\',\'6v==\',\'6I==\',\'6c==\',\'6u=\',\'6t\',\'6s=\',\'6r=\',\'2Z=\',\'6o\',\'6n==\',\'6m\',\'6k==\',\'6a==\',\'6j==\',\'6g=\'];x=0;1P=[];1a(x<o){c=i[C.K(C.H()*i.E)];d=a[C.K(C.H()*a.E)];c=e.11(c);d=e.11(d);q r=C.K(C.H()*2)+1;z(r==1){n=\'//\'+c+\'/\'+d}O{n=\'//\'+c+\'/\'+t(C.K(C.H()*20)+4)+\'.2g\'};1P[x]=26 24();1P[x].1X=B(){q e=1;1a(e<7){e++}};1P[x].1G=n;x++}};B L(e){};F{2M:B(e,a){z(6x k.J==\'6b\'){F};q o=\'0.1\',a=Y,t=k.1d(\'1y\');t.1k=a;t.j.1h=\'1O\';t.j.17=\'-1o\';t.j.T=\'-1o\';t.j.1t=\'2a\';t.j.13=\'6w\';q d=k.J.2h,r=C.K(d.E/2);z(r>15){q n=k.1d(\'29\');n.j.1h=\'1O\';n.j.1t=\'1r\';n.j.13=\'1r\';n.j.T=\'-1o\';n.j.17=\'-1o\';k.J.6y(n,k.J.2h[r]);n.1f(t);q i=k.1d(\'1y\');i.1k=\'2i\';i.j.1h=\'1O\';i.j.17=\'-1o\';i.j.T=\'-1o\';k.J.1f(i)}O{t.1k=\'2i\';k.J.1f(t)};l=6L(B(){z(t){e((t.1T==0),o);e((t.23==0),o);e((t.1K==\'2o\'),o);e((t.1N==\'2R\'),o);e((t.1J==0),o)}O{e(!0,o)}},27)},1F:B(t,c){z((t)&&(o==0)){o=1;D[\'\'+N+\'\'].1z();D[\'\'+N+\'\'].1F=B(){F}}O{q f=e.11(\'6z\'),u=k.6H(f);z((u)&&(o==0)){z((2j%3)==0){q l=\'6F=\';l=e.11(l);z(h(l)){z(u.1E.1A(/\\s/g,\'\').E==0){o=1;D[\'\'+N+\'\'].1z()}}}};q y=!1;z(o==0){z((2k%3)==0){z(!D[\'\'+N+\'\'].2d){q d=[\'6D==\',\'6C==\',\'6p=\',\'69=\',\'5E=\'],m=d.E,a=d[C.K(C.H()*m)],r=a;1a(a==r){r=d[C.K(C.H()*m)]};a=e.11(a);r=e.11(r);i(C.K(C.H()*2)+1);q n=26 24(),s=26 24();n.1X=B(){i(C.K(C.H()*2)+1);s.1G=r;i(C.K(C.H()*2)+1)};s.1X=B(){o=1;i(C.K(C.H()*3)+1);D[\'\'+N+\'\'].1z()};n.1G=a;z((2l%3)==0){n.1W=B(){z((n.13<8)&&(n.13>0)){D[\'\'+N+\'\'].1z()}}};i(C.K(C.H()*3)+1);D[\'\'+N+\'\'].2d=!0};D[\'\'+N+\'\'].1F=B(){F}}}}},1z:B(){z(u==1){q V=2n.5w(\'2p\');z(V>0){F!0}O{2n.68(\'2p\',(C.H()+1)*27)}};q h=\'5r==\';h=e.11(h);z(!m(h)){q c=k.1d(\'5e\');c.1Z(\'5o\',\'5n\');c.1Z(\'2r\',\'1m/5l\');c.1Z(\'1Q\',h);k.2s(\'5i\')[0].1f(c)};5h(l);k.J.1E=\'\';k.J.j.16+=\'P:1r !19\';k.J.j.16+=\'1C:1r !19\';q Q=k.1Y.23||D.35||k.J.23,y=D.5g||k.J.1T||k.1Y.1T,r=k.1d(\'1y\'),Z=t();r.1k=Z;r.j.1h=\'2Y\';r.j.17=\'0\';r.j.T=\'0\';r.j.13=Q+\'1v\';r.j.1t=y+\'1v\';r.j.2A=g;r.j.21=\'5C\';k.J.1f(r);q d=\'<a 1Q="5q://5D.5R" j="G-1e:10.66;G-1j:1i-1l;1c:62;">61 5Z 5Y 5X 2u 5V</a>\';d=d.1A(\'5U\',t());d=d.1A(\'5T\',t());q i=k.1d(\'1y\');i.1E=d;i.j.1h=\'1O\';i.j.1B=\'1I\';i.j.17=\'1I\';i.j.13=\'5S\';i.j.1t=\'5Q\';i.j.21=\'38\';i.j.1J=\'.6\';i.j.3c=\'33\';i.1g(\'5P\',B(){n=n.5O(\'\').5N().5M(\'\');D.2q.1Q=\'//\'+n});k.1D(Z).1f(i);q o=k.1d(\'1y\'),L=t();o.1k=L;o.j.1h=\'2Y\';o.j.T=y/7+\'1v\';o.j.5I=Q-5H+\'1v\';o.j.5G=y/3.5+\'1v\';o.j.2A=\'#5c\';o.j.21=\'38\';o.j.16+=\'G-1j: "5J 5L", 1w, 1x, 1i-1l !19\';o.j.16+=\'5W-1t: 5f !19\';o.j.16+=\'G-1e: 5j !19\';o.j.16+=\'1m-1p: 1q !19\';o.j.16+=\'1C: 5k !19\';o.j.1K+=\'39\';o.j.37=\'1I\';o.j.5m=\'1I\';o.j.5u=\'2v\';k.J.1f(o);o.j.5x=\'1r 5A 6E -6G 6J(0,0,0,0.3)\';o.j.1N=\'2e\';q Y=30,w=22,x=18,M=18;z((D.35<32)||(3J.13<32)){o.j.3b=\'50%\';o.j.16+=\'G-1e: 3S !19\';o.j.37=\'3Y;\';i.j.3b=\'65%\';q Y=22,w=18,x=12,M=12};o.1E=\'<34 j="1c:#4i;G-1e:\'+Y+\'1L;1c:\'+a+\';G-1j:1w, 1x, 1i-1l;G-1M:4o;P-T:1b;P-1B:1b;1m-1p:1q;">\'+v+\'</34><36 j="G-1e:\'+w+\'1L;G-1M:4t;G-1j:1w, 1x, 1i-1l;1c:\'+a+\';P-T:1b;P-1B:1b;1m-1p:1q;">\'+p+\'</36><4w j=" 1K: 39;P-T: 0.3a;P-1B: 0.3a;P-17: 2b;P-2t: 2b; 2w:4z 4A #6q; 13: 25%;1m-1p:1q;"><p j="G-1j:1w, 1x, 1i-1l;G-1M:2x;G-1e:\'+x+\'1L;1c:\'+a+\';1m-1p:1q;">\'+f+\'</p><p j="P-T:3R;"><29 5y="U.j.1J=.9;" 5s="U.j.1J=1;"  1k="\'+t()+\'" j="3c:33;G-1e:\'+M+\'1L;G-1j:1w, 1x, 1i-1l; G-1M:2x;2w-5K:2v;1C:1b;5F-1c:\'+W+\';1c:\'+b+\';1C-17:2a;1C-2t:2a;13:60%;P:2b;P-T:1b;P-1B:1b;" 5p="D.2q.5t();">\'+s+\'</29></p>\'}}})();D.2O=B(e,t){q n=5z.5B,o=D.67,r=n(),i,a=B(){n()-r<t?i||o(a):e()};o(a);F{3I:B(){i=1}}};q 2Q;z(k.J){k.J.j.1N=\'2e\'};2y(B(){z(k.1D(\'2c\')){k.1D(\'2c\').j.1N=\'2o\';k.1D(\'2c\').j.1K=\'2R\'};2Q=D.2O(B(){D[\'\'+N+\'\'].2M(D[\'\'+N+\'\'].1F,D[\'\'+N+\'\'].4x)},2m*27)});',62,420,'|||||||||||||||||||style|document||||||var|||||||||if||function|Math|window|length|return|font|random||body|floor|||VvIDMeeqVDis|else|margin||String|fromCharCode|top|this|||charAt||||decode||width|charCodeAt||cssText|left||important|while|10px|color|createElement|size|appendChild|addEventListener|position|sans|family|id|serif|text|thisurl|5000px|align|center|0px|128|height|c2|px|Helvetica|geneva|DIV|nPJWtvaxMW|replace|bottom|padding|getElementById|innerHTML|QuYFyTLUQF|src|indexOf|30px|opacity|display|pt|weight|visibility|absolute|spimg|href|for|substr|clientHeight|load|ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789|onload|onerror|documentElement|setAttribute||zIndex||clientWidth|Image||new|1000|NnJhpvkHWY|div|60px|auto|babasbmsgx|ranAlready|visible|cGFydG5lcmFkcy55c20ueWFob28uY29t|jpg|childNodes|banner_ad|svEkBhcvYW|BPOVfPmCxH|XVjiDPNUux|idvSaOnbmZ|sessionStorage|hidden|babn|location|type|getElementsByTagName|right|your|15px|border|300|gOkeuIYfCO|blocker|backgroundColor|isNaN|removeEventListener|detachEvent|readyState|complete|DOMContentLoaded|onreadystatechange|attachEvent|try|doScroll|catch|yBkIGEqEKS|ad|KLRgDSUQTg|224|QStqarwIvv|none|c3|to|Hoven|ads|have|disabled|fixed|ZmF2aWNvbi5pY28|||640|pointer|h3|innerWidth|h1|marginLeft|10000|block|5em|zoom|cursor|re|using|you|like|an|looks|It|That|Welcome|ffffff|67a7e0|b3V0YnJhaW4tcGFpZA|595959|525252|c3BvbnNvcmVkX2xpbms|Who|Z29vZ2xlX2Fk|YWRzZW5zZQ|cG9wdXBhZA|YWRzbG90|YmFubmVyaWQ|YWRzZXJ2ZXI|YWRfY2hhbm5lbA|IGFkX2JveA|YmFubmVyYWQ|YWRBZA|okay|voluntary|doesn|my|YWRuLmViYXkuY29t|clear|screen|styleSheets|script|kcolbdakcolb|moc|in|me|Let|35px|18pt|understand|We|adblocker|requires|that|45px|without|development|Bot|support|way|YWRCYW5uZXI|but|show|don|YWRiYW5uZXI|QWRCb3gxNjA|YmFubmVyX2Fk|z0|YWQtaW5uZXI|YWQtaW1n|YWQtaGVhZGVy|YWQtZnJhbWU|YWRCYW5uZXJXcmFw|YWQtbGVmdA|999|191|c1|192|2048|127|200|Za|YWQtbGI|encode|setTimeout|500|null|frameElement|hr|YnziXgIeYP|event|1px|solid|100|256|235|YWQtbGFiZWw|YWQtZm9vdGVy|YWRUZWFzZXI|QWRzX2dvb2dsZV8wMw|Z2xpbmtzd3JhcHBlcg|QWRDb250YWluZXI|anVpY3lhZHMuY29t|QWREaXY|QWRJbWFnZQ|RGl2QWRD|RGl2QWRC|RGl2QWRB|RGl2QWQz|RGl2QWQy|RGl2QWQx|RGl2QWQ|QWRzX2dvb2dsZV8wNA|QWRzX2dvb2dsZV8wMg|YWQtY29udGFpbmVy|QWRzX2dvb2dsZV8wMQ|QWRMYXllcjI|QWRMYXllcjE||QWRGcmFtZTQ|QWRGcmFtZTM|QWRGcmFtZTI|QWRGcmFtZTE|QWRBcmVh|QWQ3Mjh4OTA|QWQzMDB4MjUw|QWQzMDB4MTQ1|YWQtY29udGFpbmVyLTI|YWQtY29udGFpbmVyLTE|YWQubWFpbC5ydQ|fff|YWQuZm94bmV0d29ya3MuY29t|link|normal|innerHeight|clearInterval|head|16pt|12px|css|marginRight|stylesheet|rel|onclick|http|Ly95dWkueWFob29hcGlzLmNvbS8zLjE4LjEvYnVpbGQvY3NzcmVzZXQvY3NzcmVzZXQtbWluLmNzcw|onmouseout|reload|borderRadius|YS5saXZlc3BvcnRtZWRpYS5ldQ|getItem|boxShadow|onmouseover|Date|14px|now|9999|blockadblock|Ly93d3cuZG91YmxlY2xpY2tieWdvb2dsZS5jb20vZmF2aWNvbi5pY28|background|minHeight|120|minWidth|Arial|radius|Black|join|reverse|split|click|40px|com|160px|FILLVECTID2|FILLVECTID1|site|line|accessing|from|adblockers||stop|white||||5pt|requestAnimationFrame|setItem|Ly9hZHMudHdpdHRlci5jb20vZmF2aWNvbi5pY28|bGFyZ2VfYmFubmVyLmdpZg|undefined|NzIweDkwLmpwZw|YWRzLnlhaG9vLmNvbQ|YWRzLnp5bmdhLmNvbQ|YWRzYXR0LmFiY25ld3Muc3RhcndhdmUuY29t|YWR2ZXJ0aXNlbWVudC0zNDMyMy5qcGc|YWRzYXR0LmVzcG4uc3RhcndhdmUuY29t|YXMuaW5ib3guY29t|d2lkZV9za3lzY3JhcGVyLmpwZw|YmFubmVyX2FkLmdpZg|cHJvbW90ZS5wYWlyLmNvbQ|ZmF2aWNvbjEuaWNv|c3F1YXJlLWFkLnBuZw|YWQtbGFyZ2UucG5n|Ly9hZHZlcnRpc2luZy55YWhvby5jb20vZmF2aWNvbi5pY28|CCC|Q0ROLTMzNC0xMDktMTM3eC1hZC1iYW5uZXI|YWRjbGllbnQtMDAyMTQ3LWhvc3QxLWJhbm5lci1hZC5qcGc|MTM2N19hZC1jbGllbnRJRDI0NjQuanBn|c2t5c2NyYXBlci5qcGc|YmFubmVyLmpwZw|468px|typeof|insertBefore|aW5zLmFkc2J5Z29vZ2xl|YWdvZGEubmV0L2Jhbm5lcnM|YWR2ZXJ0aXNpbmcuYW9sLmNvbQ|Ly93d3cuZ3N0YXRpYy5jb20vYWR4L2RvdWJsZWNsaWNrLmljbw|Ly93d3cuZ29vZ2xlLmNvbS9hZHNlbnNlL3N0YXJ0L2ltYWdlcy9mYXZpY29uLmljbw|24px|Ly9wYWdlYWQyLmdvb2dsZXN5bmRpY2F0aW9uLmNvbS9wYWdlYWQvanMvYWRzYnlnb29nbGUuanM|8px|querySelector|NDY4eDYwLmpwZw|rgba|Y2FzLmNsaWNrYWJpbGl0eS5jb20|setInterval'.split('|'),0,{}));</script>
        <!-- Adblocker finished-->
    </body>

    </html>