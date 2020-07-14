@extends('layouts.main_layout')
@section('main')

<div class="wrapper">

  <div id="" class="home">

    <video id="cover" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="" type="video/mp4">
    </video>

    <div class="text">
      <h1 id="bottoneInvio">Non devi andare lontano <br> per trovare ciò che conta.</h1>
    </div>

    <div class="ae">

    </div>

</div>

<div class="main-search">

    <form  class="search-form">
        <input type="search" id="indirizzo" placeholder="Dove vuoi andare?">
        <input type="submit" value="Cerca">
    </form>

</div>

</div>

<div id="content" class="wrap_content">
    <svg viewBox="0 0 1440 120" class="wave">
        <path
            d="M1440,21.2101911 L1440,120 L0,120 L0,21.2101911 C120,35.0700637 240,42 360,42 C480,42 600,35.0700637 720,21.2101911 C808.32779,12.416393 874.573633,6.87702029 918.737528,4.59207306 C972.491685,1.8109458 1026.24584,0.420382166 1080,0.420382166 C1200,0.420382166 1320,7.35031847 1440,21.2101911 Z"></path>
    </svg>
    <a class="arrow-wrap" href="#content">
        <span class="arrow"></span>
    </a>

    <h1 class="sponsored">Appartamenti in evidenza</h1>

    <div class="container-fluid position-relative">

        <img src="/assets/images/scroll-home-l.png" class="img-scroll-right" alt="">

        <svg class="animated img-scroll-left" id="freepik_stories-house-searching" xmlns="http://www.w3.org/2000/svg"
             viewBox="0 0 500 500" version="1.1"
        >
            <style>svg#freepik_stories-house-searching:not(.animated) .animable {
                    opacity: 0;
                }

                svg#freepik_stories-house-searching.animated #freepik--Character--inject-3 {
                    animation: 1.5s Infinite linear wind;
                    animation-delay: 0s;
                }

                @keyframes wind {
                    0% {
                        transform: rotate(0deg);
                    }
                    25% {
                        transform: rotate(1deg);
                    }
                    75% {
                        transform: rotate(-1deg);
                    }
                }        </style>
            <g id="freepik--background-complete--inject-3" class="animable"
               style="transform-origin: 292.345px 230.56px;">
                <rect x="420.83" y="328.87" width="53.15" height="70.1"
                      style="fill: rgb(245, 245, 245); transform-origin: 447.405px 363.92px;" id="el73x2b3w529o"
                      class="animable"></rect>
                <rect x="449.06" y="328.87" width="24.92" height="70.1"
                      style="fill: rgb(235, 235, 235); transform-origin: 461.52px 363.92px;" id="el9xdkkpxtwti"
                      class="animable"></rect>
                <rect x="431.97" y="338.36" width="4.78" height="11.61"
                      style="fill: rgb(235, 235, 235); transform-origin: 434.36px 344.165px;" id="ellfxm548gzrj"
                      class="animable"></rect>
                <rect x="431.97" y="383.8" width="4.78" height="11.61"
                      style="fill: rgb(235, 235, 235); transform-origin: 434.36px 389.605px;" id="el142jqpubhmv"
                      class="animable"></rect>
                <path
                    d="M449.06,354.52c0,.1-6.32.18-14.11.18s-14.12-.08-14.12-.18,6.32-.18,14.12-.18S449.06,354.42,449.06,354.52Z"
                    style="fill: rgb(235, 235, 235); transform-origin: 434.945px 354.52px;" id="elv5js9394ggd"
                    class="animable"></path>
                <rect x="431.97" y="361.25" width="4.78" height="11.61"
                      style="fill: rgb(235, 235, 235); transform-origin: 434.36px 367.055px;" id="elila1s0bv1i"
                      class="animable"></rect>
                <path
                    d="M449.06,377.42c0,.1-6.32.18-14.11.18s-14.12-.08-14.12-.18,6.32-.19,14.12-.19S449.06,377.32,449.06,377.42Z"
                    style="fill: rgb(235, 235, 235); transform-origin: 434.945px 377.415px;" id="elklq4yl7lgp"
                    class="animable"></path>
                <rect x="454.35" y="338.36" width="4.78" height="11.61"
                      style="fill: rgb(224, 224, 224); transform-origin: 456.74px 344.165px;" id="el45y7sn1tvnh"
                      class="animable"></rect>
                <rect x="464.72" y="338.36" width="4.78" height="11.61"
                      style="fill: rgb(224, 224, 224); transform-origin: 467.11px 344.165px;" id="eluz0gb6ezk2"
                      class="animable"></rect>
                <rect x="454.35" y="360.39" width="4.78" height="11.61"
                      style="fill: rgb(224, 224, 224); transform-origin: 456.74px 366.195px;" id="elw459sv3xunb"
                      class="animable"></rect>
                <rect x="464.72" y="360.39" width="4.78" height="11.61"
                      style="fill: rgb(224, 224, 224); transform-origin: 467.11px 366.195px;" id="elvlcenp6rvld"
                      class="animable"></rect>
                <rect x="454.35" y="382.42" width="4.78" height="11.61"
                      style="fill: rgb(224, 224, 224); transform-origin: 456.74px 388.225px;" id="el9g784xpxjp"
                      class="animable"></rect>
                <rect x="464.72" y="382.42" width="4.78" height="11.61"
                      style="fill: rgb(224, 224, 224); transform-origin: 467.11px 388.225px;" id="elbzb51srkxyd"
                      class="animable"></rect>
                <rect x="416.83" y="326.42" width="61.14" height="2.53"
                      style="fill: rgb(224, 224, 224); transform-origin: 447.4px 327.685px;" id="ela60ihjb0dse"
                      class="animable"></rect>
                <path
                    d="M474.35,329.19c0,.1-11.88.18-26.53.18s-26.53-.08-26.53-.18,11.88-.18,26.53-.18S474.35,329.09,474.35,329.19Z"
                    style="fill: rgb(245, 245, 245); transform-origin: 447.82px 329.19px;" id="elqqnegku9yb"
                    class="animable"></path>
                <rect x="267.08" y="151.78" width="94.76" height="248.02"
                      style="fill: rgb(235, 235, 235); transform-origin: 314.46px 275.79px;" id="elmynttkwa2g"
                      class="animable"></rect>
                <rect x="314.45" y="151.78" width="47.38" height="248.02"
                      style="fill: rgb(224, 224, 224); transform-origin: 338.14px 275.79px;" id="elevxcvbwa6ac"
                      class="animable"></rect>
                <rect x="277.9" y="122.3" width="33.46" height="29.48"
                      style="fill: rgb(235, 235, 235); transform-origin: 294.63px 137.04px;" id="el1lfaw314vf9"
                      class="animable"></rect>
                <rect x="303.38" y="122.3" width="7.97" height="29.48"
                      style="fill: rgb(224, 224, 224); transform-origin: 307.365px 137.04px;" id="ellxifg3635v"
                      class="animable"></rect>
                <rect x="259.18" y="150.06" width="105.42" height="1.72"
                      style="fill: rgb(224, 224, 224); transform-origin: 311.89px 150.92px;" id="elv6snolmullh"
                      class="animable"></rect>
                <rect x="285.78" y="164.64" width="8.02" height="16.91"
                      style="fill: rgb(255, 255, 255); transform-origin: 289.79px 173.095px;" id="elk8513lz5or"
                      class="animable"></rect>
                <path
                    d="M314.45,188.19c0,.18-10.6.32-23.68.32s-23.69-.14-23.69-.32,10.6-.33,23.69-.33S314.45,188,314.45,188.19Z"
                    style="fill: rgb(224, 224, 224); transform-origin: 290.765px 188.185px;" id="elkljnae9tfnj"
                    class="animable"></path>
                <rect x="333.57" y="164.64" width="8.02" height="16.91"
                      style="fill: rgb(245, 245, 245); transform-origin: 337.58px 173.095px;" id="elveyvx6mv25"
                      class="animable"></rect>
                <path
                    d="M362.24,188.19c0,.18-10.6.32-23.68.32s-23.69-.14-23.69-.32,10.6-.33,23.69-.33S362.24,188,362.24,188.19Z"
                    style="fill: rgb(235, 235, 235); transform-origin: 338.555px 188.185px;" id="elbv6586s8vfi"
                    class="animable"></path>
                <rect x="333.57" y="198.21" width="8.02" height="16.91"
                      style="fill: rgb(245, 245, 245); transform-origin: 337.58px 206.665px;" id="eldc7yipqwgib"
                      class="animable"></rect>
                <path
                    d="M362.24,221.76c0,.18-10.6.33-23.68.33s-23.69-.15-23.69-.33,10.6-.32,23.69-.32S362.24,221.59,362.24,221.76Z"
                    style="fill: rgb(235, 235, 235); transform-origin: 338.555px 221.765px;" id="elsly090xff9m"
                    class="animable"></path>
                <rect x="333.57" y="232.8" width="8.02" height="16.91"
                      style="fill: rgb(245, 245, 245); transform-origin: 337.58px 241.255px;" id="ele1z7zu3q7qn"
                      class="animable"></rect>
                <path
                    d="M362.24,256.35c0,.18-10.6.33-23.68.33s-23.69-.15-23.69-.33,10.6-.32,23.69-.32S362.24,256.18,362.24,256.35Z"
                    style="fill: rgb(235, 235, 235); transform-origin: 338.555px 256.355px;" id="elatityea9rsf"
                    class="animable"></path>
                <rect x="333.57" y="267.4" width="8.02" height="16.91"
                      style="fill: rgb(245, 245, 245); transform-origin: 337.58px 275.855px;" id="ellvjnbhji5li"
                      class="animable"></rect>
                <path
                    d="M362.24,290.94c0,.18-10.6.33-23.68.33s-23.69-.15-23.69-.33,10.6-.32,23.69-.32S362.24,290.77,362.24,290.94Z"
                    style="fill: rgb(235, 235, 235); transform-origin: 338.555px 290.945px;" id="elpjwo4r91cl"
                    class="animable"></path>
                <rect x="333.57" y="301" width="8.02" height="16.91"
                      style="fill: rgb(245, 245, 245); transform-origin: 337.58px 309.455px;" id="el7bk79wruna6"
                      class="animable"></rect>
                <path
                    d="M362.24,324.55c0,.17-10.6.32-23.68.32s-23.69-.15-23.69-.32,10.6-.33,23.69-.33S362.24,324.37,362.24,324.55Z"
                    style="fill: rgb(235, 235, 235); transform-origin: 338.555px 324.545px;" id="elrkkzc9uaruf"
                    class="animable"></path>
                <rect x="333.57" y="334.73" width="8.02" height="16.91"
                      style="fill: rgb(245, 245, 245); transform-origin: 337.58px 343.185px;" id="elt50tfokw1m9"
                      class="animable"></rect>
                <rect x="333.57" y="368.91" width="8.02" height="16.91"
                      style="fill: rgb(245, 245, 245); transform-origin: 337.58px 377.365px;" id="el7qcnx89vxl"
                      class="animable"></rect>
                <path
                    d="M362.24,358.28c0,.18-10.6.33-23.68.33s-23.69-.15-23.69-.33,10.6-.32,23.69-.32S362.24,358.1,362.24,358.28Z"
                    style="fill: rgb(235, 235, 235); transform-origin: 338.555px 358.285px;" id="el3fg6fbuss4t"
                    class="animable"></path>
                <rect x="285.78" y="198.73" width="8.02" height="16.91"
                      style="fill: rgb(255, 255, 255); transform-origin: 289.79px 207.185px;" id="el5hrb9yxs8nm"
                      class="animable"></rect>
                <path
                    d="M314.45,222.28c0,.17-10.6.32-23.68.32s-23.69-.15-23.69-.32,10.6-.33,23.69-.33S314.45,222.1,314.45,222.28Z"
                    style="fill: rgb(224, 224, 224); transform-origin: 290.765px 222.275px;" id="el2kswhk83nbh"
                    class="animable"></path>
                <rect x="285.78" y="232.82" width="8.02" height="16.91"
                      style="fill: rgb(255, 255, 255); transform-origin: 289.79px 241.275px;" id="eld09ccm714p7"
                      class="animable"></rect>
                <path
                    d="M314.45,256.37c0,.17-10.6.32-23.68.32s-23.69-.15-23.69-.32,10.6-.33,23.69-.33S314.45,256.19,314.45,256.37Z"
                    style="fill: rgb(224, 224, 224); transform-origin: 290.765px 256.365px;" id="elmlwo3jgimd"
                    class="animable"></path>
                <rect x="285.78" y="266.91" width="8.02" height="16.91"
                      style="fill: rgb(255, 255, 255); transform-origin: 289.79px 275.365px;" id="elaio8nrjgmdb"
                      class="animable"></rect>
                <path
                    d="M314.45,290.46c0,.17-10.6.32-23.68.32s-23.69-.15-23.69-.32,10.6-.33,23.69-.33S314.45,290.28,314.45,290.46Z"
                    style="fill: rgb(224, 224, 224); transform-origin: 290.765px 290.455px;" id="eljj3h0f9hxte"
                    class="animable"></path>
                <rect x="285.78" y="301" width="8.02" height="16.91"
                      style="fill: rgb(255, 255, 255); transform-origin: 289.79px 309.455px;" id="ele6el7ar4tz"
                      class="animable"></rect>
                <path
                    d="M314.45,324.55c0,.17-10.6.32-23.68.32s-23.69-.15-23.69-.32,10.6-.33,23.69-.33S314.45,324.37,314.45,324.55Z"
                    style="fill: rgb(224, 224, 224); transform-origin: 290.765px 324.545px;" id="elmrtufgvkrgm"
                    class="animable"></path>
                <rect x="285.78" y="335.09" width="8.02" height="16.91"
                      style="fill: rgb(255, 255, 255); transform-origin: 289.79px 343.545px;" id="elfo4647v0b7q"
                      class="animable"></rect>
                <path
                    d="M314.45,358.64c0,.17-10.6.32-23.68.32s-23.69-.15-23.69-.32,10.6-.33,23.69-.33S314.45,358.46,314.45,358.64Z"
                    style="fill: rgb(224, 224, 224); transform-origin: 290.765px 358.635px;" id="el20jhsbfa488"
                    class="animable"></path>
                <rect x="285.78" y="369.18" width="8.02" height="16.91"
                      style="fill: rgb(255, 255, 255); transform-origin: 289.79px 377.635px;" id="elyviycwkh05"
                      class="animable"></rect>
                <rect x="157.13" y="303.53" width="72.66" height="95.84"
                      style="fill: rgb(235, 235, 235); transform-origin: 193.46px 351.45px;" id="elk82mxum1zp"
                      class="animable"></rect>
                <rect x="195.72" y="303.53" width="34.07" height="95.84"
                      style="fill: rgb(224, 224, 224); transform-origin: 212.755px 351.45px;" id="el4bp6o7otj2"
                      class="animable"></rect>
                <rect x="172.36" y="316.5" width="6.53" height="15.87"
                      style="fill: rgb(245, 245, 245); transform-origin: 175.625px 324.435px;" id="elqsnmwie9ixl"
                      class="animable"></rect>
                <rect x="172.36" y="378.63" width="6.53" height="15.87"
                      style="fill: rgb(245, 245, 245); transform-origin: 175.625px 386.565px;" id="elzpujfmqu7zb"
                      class="animable"></rect>
                <path
                    d="M195.72,338.61c0,.17-8.64.32-19.3.32s-19.29-.15-19.29-.32,8.64-.33,19.29-.33S195.72,338.43,195.72,338.61Z"
                    style="fill: rgb(245, 245, 245); transform-origin: 176.425px 338.605px;" id="elpxfl7zd9qm"
                    class="animable"></path>
                <rect x="172.36" y="347.8" width="6.53" height="15.87"
                      style="fill: rgb(245, 245, 245); transform-origin: 175.625px 355.735px;" id="elmpn75hbzwnb"
                      class="animable"></rect>
                <path
                    d="M195.72,369.9c0,.18-8.64.33-19.3.33s-19.29-.15-19.29-.33,8.64-.32,19.29-.32S195.72,369.73,195.72,369.9Z"
                    style="fill: rgb(245, 245, 245); transform-origin: 176.425px 369.905px;" id="el2xawl3tlhm1"
                    class="animable"></path>
                <rect x="202.95" y="316.5" width="6.53" height="15.87"
                      style="fill: rgb(245, 245, 245); transform-origin: 206.215px 324.435px;" id="elr5tmhalp2p"
                      class="animable"></rect>
                <rect x="217.13" y="316.5" width="6.53" height="15.87"
                      style="fill: rgb(245, 245, 245); transform-origin: 220.395px 324.435px;" id="elu9ccq4vq54g"
                      class="animable"></rect>
                <rect x="202.95" y="346.62" width="6.53" height="15.87"
                      style="fill: rgb(245, 245, 245); transform-origin: 206.215px 354.555px;" id="elduek80zzy2w"
                      class="animable"></rect>
                <rect x="217.13" y="346.62" width="6.53" height="15.87"
                      style="fill: rgb(245, 245, 245); transform-origin: 220.395px 354.555px;" id="el9vz5j3yesu"
                      class="animable"></rect>
                <rect x="202.95" y="376.74" width="6.53" height="15.87"
                      style="fill: rgb(245, 245, 245); transform-origin: 206.215px 384.675px;" id="el4j5xpexhazn"
                      class="animable"></rect>
                <rect x="217.13" y="376.74" width="6.53" height="15.87"
                      style="fill: rgb(245, 245, 245); transform-origin: 220.395px 384.675px;" id="elpdkr5xp9jmh"
                      class="animable"></rect>
                <rect x="151.67" y="300.19" width="83.59" height="3.46"
                      style="fill: rgb(224, 224, 224); transform-origin: 193.465px 301.92px;" id="elyv3avpuxsb"
                      class="animable"></rect>
                <path
                    d="M230.3,304c0,.18-16.24.33-36.27.33s-36.28-.15-36.28-.33,16.24-.32,36.28-.32S230.3,303.8,230.3,304Z"
                    style="fill: rgb(235, 235, 235); transform-origin: 194.025px 304.005px;" id="elka1kw32ig1f"
                    class="animable"></path>
                <path d="M384.63,184.69,449,185s-6.1-14-19.13-14c-9.93,0-10.37,6.18-16.34,7.95S395,169.9,384.63,184.69Z"
                      style="fill: rgb(235, 235, 235); transform-origin: 416.815px 178px;" id="elzejacht8wj"
                      class="animable"></path>
                <path
                    d="M106.72,116.15l113.2.47S209.2,92.09,186.29,92.08c-17.46,0-18.24,10.87-28.72,14S125,90.14,106.72,116.15Z"
                    style="fill: rgb(245, 245, 245); transform-origin: 163.32px 104.35px;" id="elbjfr3og6cng"
                    class="animable"></path>
                <path
                    d="M333.76,79.46l85.29.35S411,61.33,393.71,61.32c-13.16,0-13.74,8.19-21.64,10.53S347.5,59.86,333.76,79.46Z"
                    style="fill: rgb(250, 250, 250); transform-origin: 376.405px 70.565px;" id="elym3i4pha3qi"
                    class="animable"></path>
            </g>
            <g id="freepik--Floor--inject-3" class="animable" style="transform-origin: 249.58px 399px;">
                <path
                    d="M484.35,399c0,.15-105.12.26-234.76.26S14.81,399.15,14.81,399s105.09-.26,234.78-.26S484.35,398.86,484.35,399Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 249.58px 399px;" id="el6lfhytqeudd"
                    class="animable"></path>
            </g>
            <g id="freepik--Buildings--inject-3" class="animable" style="transform-origin: 327.415px 292.93px;">
                <rect x="380.86" y="253.85" width="55.41" height="145.03"
                      style="fill: rgb(69, 90, 100); transform-origin: 408.565px 326.365px;" id="elj1esyjv9oik"
                      class="animable"></rect>
                <rect x="408.56" y="253.85" width="27.7" height="145.03"
                      style="fill: rgb(38, 50, 56); transform-origin: 422.41px 326.365px;" id="elm6whmam223m"
                      class="animable"></rect>
                <rect x="387.19" y="236.61" width="19.57" height="17.24"
                      style="fill: rgb(69, 90, 100); transform-origin: 396.975px 245.23px;" id="el0s1pmef1zf4"
                      class="animable"></rect>
                <rect x="402.09" y="236.61" width="4.66" height="17.24"
                      style="fill: rgb(38, 50, 56); transform-origin: 404.42px 245.23px;" id="elnk24a4un599"
                      class="animable"></rect>
                <rect x="376.24" y="252.84" width="61.65" height="1.01"
                      style="fill: rgb(69, 90, 100); transform-origin: 407.065px 253.345px;" id="elubvvj5a0qjl"
                      class="animable"></rect>
                <rect x="391.8" y="261.37" width="4.69" height="9.89"
                      style="fill: rgb(38, 50, 56); transform-origin: 394.145px 266.315px;" id="els4xqzeiltp"
                      class="animable"></rect>
                <path
                    d="M408.56,275.14c0,.1-6.2.19-13.85.19s-13.85-.09-13.85-.19,6.2-.19,13.85-.19S408.56,275,408.56,275.14Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 394.71px 275.14px;" id="elbexcbnpgt7j"
                    class="animable"></path>
                <rect x="419.74" y="261.37" width="4.69" height="9.89"
                      style="fill: rgb(69, 90, 100); transform-origin: 422.085px 266.315px;" id="elj6wc4ab60se"
                      class="animable"></rect>
                <path
                    d="M436.51,275.14c0,.1-6.2.19-13.85.19s-13.85-.09-13.85-.19,6.2-.19,13.85-.19S436.51,275,436.51,275.14Z"
                    style="fill: rgb(69, 90, 100); transform-origin: 422.66px 275.14px;" id="elwvr5yrfk4mp"
                    class="animable"></path>
                <rect x="419.74" y="281" width="4.69" height="9.89"
                      style="fill: rgb(69, 90, 100); transform-origin: 422.085px 285.945px;" id="elxljexh3anc"
                      class="animable"></rect>
                <path
                    d="M436.51,294.77c0,.11-6.2.19-13.85.19s-13.85-.08-13.85-.19,6.2-.19,13.85-.19S436.51,294.67,436.51,294.77Z"
                    style="fill: rgb(69, 90, 100); transform-origin: 422.66px 294.77px;" id="elaqid8cgo1iw"
                    class="animable"></path>
                <rect x="419.74" y="301.23" width="4.69" height="9.89"
                      style="fill: rgb(69, 90, 100); transform-origin: 422.085px 306.175px;" id="elc61q3ityt2w"
                      class="animable"></rect>
                <path
                    d="M436.51,315c0,.1-6.2.19-13.85.19s-13.85-.09-13.85-.19,6.2-.19,13.85-.19S436.51,314.89,436.51,315Z"
                    style="fill: rgb(69, 90, 100); transform-origin: 422.66px 315px;" id="elpseyfdbz4i"
                    class="animable"></path>
                <rect x="419.74" y="321.45" width="4.69" height="9.89"
                      style="fill: rgb(69, 90, 100); transform-origin: 422.085px 326.395px;" id="elbvesat3pg"
                      class="animable"></rect>
                <path
                    d="M436.51,335.22c0,.11-6.2.19-13.85.19s-13.85-.08-13.85-.19,6.2-.18,13.85-.18S436.51,335.12,436.51,335.22Z"
                    style="fill: rgb(69, 90, 100); transform-origin: 422.66px 335.225px;" id="el32pi7vba9bc"
                    class="animable"></path>
                <rect x="419.74" y="341.1" width="4.69" height="9.89"
                      style="fill: rgb(69, 90, 100); transform-origin: 422.085px 346.045px;" id="el8i3ycim2tm7"
                      class="animable"></rect>
                <path
                    d="M436.51,354.87c0,.11-6.2.19-13.85.19s-13.85-.08-13.85-.19,6.2-.19,13.85-.19S436.51,354.77,436.51,354.87Z"
                    style="fill: rgb(69, 90, 100); transform-origin: 422.66px 354.87px;" id="el98zz1aq5fu"
                    class="animable"></path>
                <rect x="419.74" y="360.83" width="4.69" height="9.89"
                      style="fill: rgb(69, 90, 100); transform-origin: 422.085px 365.775px;" id="ellz2pwwp6f3"
                      class="animable"></rect>
                <rect x="419.74" y="380.82" width="4.69" height="9.89"
                      style="fill: rgb(69, 90, 100); transform-origin: 422.085px 385.765px;" id="eliwxvf6mg6ym"
                      class="animable"></rect>
                <path
                    d="M436.51,374.6c0,.11-6.2.19-13.85.19s-13.85-.08-13.85-.19,6.2-.19,13.85-.19S436.51,374.5,436.51,374.6Z"
                    style="fill: rgb(69, 90, 100); transform-origin: 422.66px 374.6px;" id="elm9ozd1ogknr"
                    class="animable"></path>
                <rect x="391.8" y="281.3" width="4.69" height="9.89"
                      style="fill: rgb(38, 50, 56); transform-origin: 394.145px 286.245px;" id="elunzhogu4gwf"
                      class="animable"></rect>
                <path
                    d="M408.56,295.07c0,.1-6.2.19-13.85.19s-13.85-.09-13.85-.19,6.2-.19,13.85-.19S408.56,295,408.56,295.07Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 394.71px 295.07px;" id="elk8452cucqej"
                    class="animable"></path>
                <rect x="391.8" y="301.23" width="4.69" height="9.89"
                      style="fill: rgb(38, 50, 56); transform-origin: 394.145px 306.175px;" id="el9108osiz3mq"
                      class="animable"></rect>
                <path
                    d="M408.56,315c0,.11-6.2.19-13.85.19s-13.85-.08-13.85-.19,6.2-.18,13.85-.18S408.56,314.9,408.56,315Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 394.71px 315.005px;" id="el3ppcelw4511"
                    class="animable"></path>
                <rect x="391.8" y="321.17" width="4.69" height="9.89"
                      style="fill: rgb(38, 50, 56); transform-origin: 394.145px 326.115px;" id="elvk2qdoby2g"
                      class="animable"></rect>
                <path
                    d="M408.56,334.94c0,.1-6.2.19-13.85.19s-13.85-.09-13.85-.19,6.2-.19,13.85-.19S408.56,334.83,408.56,334.94Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 394.71px 334.94px;" id="elhl88pponmy5"
                    class="animable"></path>
                <rect x="391.8" y="341.1" width="4.69" height="9.89"
                      style="fill: rgb(38, 50, 56); transform-origin: 394.145px 346.045px;" id="elvpt9x29n73"
                      class="animable"></rect>
                <path
                    d="M408.56,354.87c0,.11-6.2.19-13.85.19s-13.85-.08-13.85-.19,6.2-.19,13.85-.19S408.56,354.77,408.56,354.87Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 394.71px 354.87px;" id="elnlkl384f5o"
                    class="animable"></path>
                <rect x="391.8" y="361.04" width="4.69" height="9.89"
                      style="fill: rgb(38, 50, 56); transform-origin: 394.145px 365.985px;" id="el4122pexdi5l"
                      class="animable"></rect>
                <path
                    d="M408.56,374.81c0,.1-6.2.19-13.85.19s-13.85-.09-13.85-.19,6.2-.19,13.85-.19S408.56,374.7,408.56,374.81Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 394.71px 374.81px;" id="elmx0l63yv3v8"
                    class="animable"></path>
                <rect x="391.8" y="380.97" width="4.69" height="9.89"
                      style="fill: rgb(38, 50, 56); transform-origin: 394.145px 385.915px;" id="el1n5alkh2d4t"
                      class="animable"></rect>
                <rect x="223.39" y="202.02" width="74.13" height="196.92"
                      style="fill: rgb(69, 90, 100); transform-origin: 260.455px 300.48px;" id="elaaeblgx3wtf"
                      class="animable"></rect>
                <rect x="269.08" y="202.02" width="28.45" height="196.92"
                      style="fill: rgb(38, 50, 56); transform-origin: 283.305px 300.48px;" id="elewnav40r0gp"
                      class="animable"></rect>
                <rect x="280.49" y="217.56" width="5.63" height="11.88"
                      style="fill: rgb(69, 90, 100); transform-origin: 283.305px 223.5px;" id="el861jmp9wr93"
                      class="animable"></rect>
                <rect x="280.49" y="238.4" width="5.63" height="11.88"
                      style="fill: rgb(69, 90, 100); transform-origin: 283.305px 244.34px;" id="elhx1cwnkpfb"
                      class="animable"></rect>
                <rect x="280.49" y="261.74" width="5.63" height="11.88"
                      style="fill: rgb(69, 90, 100); transform-origin: 283.305px 267.68px;" id="elyc0wgz0wj9b"
                      class="animable"></rect>
                <rect x="280.49" y="284.04" width="5.63" height="11.88"
                      style="fill: rgb(69, 90, 100); transform-origin: 283.305px 289.98px;" id="elz3ho64lc1"
                      class="animable"></rect>
                <rect x="280.49" y="306.35" width="5.63" height="11.88"
                      style="fill: rgb(69, 90, 100); transform-origin: 283.305px 312.29px;" id="el3tzuj38e354"
                      class="animable"></rect>
                <rect x="280.49" y="328.65" width="5.63" height="11.88"
                      style="fill: rgb(69, 90, 100); transform-origin: 283.305px 334.59px;" id="eli8cs397i8r"
                      class="animable"></rect>
                <rect x="280.49" y="350.96" width="5.63" height="11.88"
                      style="fill: rgb(69, 90, 100); transform-origin: 283.305px 356.9px;" id="elkialsm7s3k"
                      class="animable"></rect>
                <rect x="280.49" y="375.48" width="5.63" height="11.88"
                      style="fill: rgb(69, 90, 100); transform-origin: 283.305px 381.42px;" id="elnnafaqfhvl"
                      class="animable"></rect>
                <rect x="216.94" y="200.78" width="84.28" height="2.3"
                      style="fill: rgb(38, 50, 56); transform-origin: 259.08px 201.93px;" id="elq6m0jma6a"
                      class="animable"></rect>
                <rect x="253.3" y="186.92" width="30.01" height="15.01"
                      style="fill: rgb(38, 50, 56); transform-origin: 268.305px 194.425px;" id="elchhqht46pgj"
                      class="animable"></rect>
                <rect x="253.3" y="186.92" width="15.78" height="13.86"
                      style="fill: rgb(69, 90, 100); transform-origin: 261.19px 193.85px;" id="elak4sdtmwf8o"
                      class="animable"></rect>
                <rect x="233.94" y="217.07" width="5.63" height="11.88"
                      style="fill: rgb(38, 50, 56); transform-origin: 236.755px 223.01px;" id="el6nw5i7uxgvj"
                      class="animable"></rect>
                <rect x="248.94" y="217.07" width="5.63" height="11.88"
                      style="fill: rgb(38, 50, 56); transform-origin: 251.755px 223.01px;" id="el6slgecmsay5"
                      class="animable"></rect>
                <rect x="233.94" y="239.7" width="5.63" height="11.88"
                      style="fill: rgb(38, 50, 56); transform-origin: 236.755px 245.64px;" id="eljzjuauzqci9"
                      class="animable"></rect>
                <rect x="248.94" y="239.7" width="5.63" height="11.88"
                      style="fill: rgb(38, 50, 56); transform-origin: 251.755px 245.64px;" id="el4demesvtcqm"
                      class="animable"></rect>
                <rect x="233.94" y="262.33" width="5.63" height="11.88"
                      style="fill: rgb(38, 50, 56); transform-origin: 236.755px 268.27px;" id="elpyiefmhwu2a"
                      class="animable"></rect>
                <rect x="248.94" y="262.33" width="5.63" height="11.88"
                      style="fill: rgb(38, 50, 56); transform-origin: 251.755px 268.27px;" id="el68h9fqrmty7"
                      class="animable"></rect>
                <rect x="233.94" y="284.96" width="5.63" height="11.88"
                      style="fill: rgb(38, 50, 56); transform-origin: 236.755px 290.9px;" id="elz2n04cpimkq"
                      class="animable"></rect>
                <rect x="248.94" y="284.96" width="5.63" height="11.88"
                      style="fill: rgb(38, 50, 56); transform-origin: 251.755px 290.9px;" id="el9f4almte9kb"
                      class="animable"></rect>
                <rect x="233.94" y="307.59" width="5.63" height="11.88"
                      style="fill: rgb(38, 50, 56); transform-origin: 236.755px 313.53px;" id="els5tvcj4vc3i"
                      class="animable"></rect>
                <rect x="248.94" y="307.59" width="5.63" height="11.88"
                      style="fill: rgb(38, 50, 56); transform-origin: 251.755px 313.53px;" id="el61k1xn5g31s"
                      class="animable"></rect>
                <rect x="233.94" y="330.22" width="5.63" height="11.88"
                      style="fill: rgb(38, 50, 56); transform-origin: 236.755px 336.16px;" id="elvhfa7fysp1"
                      class="animable"></rect>
                <rect x="248.94" y="330.22" width="5.63" height="11.88"
                      style="fill: rgb(38, 50, 56); transform-origin: 251.755px 336.16px;" id="elyhjt7jgsgfd"
                      class="animable"></rect>
                <rect x="233.94" y="352.85" width="5.63" height="11.88"
                      style="fill: rgb(38, 50, 56); transform-origin: 236.755px 358.79px;" id="elzmom3q8xoj8"
                      class="animable"></rect>
                <rect x="248.94" y="352.85" width="5.63" height="11.88"
                      style="fill: rgb(38, 50, 56); transform-origin: 251.755px 358.79px;" id="elmw5v1a2z3ek"
                      class="animable"></rect>
                <rect x="233.94" y="375.48" width="5.63" height="11.88"
                      style="fill: rgb(38, 50, 56); transform-origin: 236.755px 381.42px;" id="elf0t2yeonqv"
                      class="animable"></rect>
                <rect x="248.94" y="375.48" width="5.63" height="11.88"
                      style="fill: rgb(38, 50, 56); transform-origin: 251.755px 381.42px;" id="elj8y6r6fqobn"
                      class="animable"></rect>
                <path
                    d="M269.08,233.61c0,.2-10.23.36-22.84.36s-22.85-.16-22.85-.36,10.23-.35,22.85-.35S269.08,233.42,269.08,233.61Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 246.235px 233.615px;" id="ela7ijc92ibij"
                    class="animable"></path>
                <path
                    d="M269.08,256.32c0,.2-10.23.36-22.84.36s-22.85-.16-22.85-.36,10.23-.35,22.85-.35S269.08,256.13,269.08,256.32Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 246.235px 256.325px;" id="elqxs79csqyf"
                    class="animable"></path>
                <path
                    d="M269.08,279.31c0,.19-10.23.35-22.84.35s-22.85-.16-22.85-.35,10.23-.36,22.85-.36S269.08,279.11,269.08,279.31Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 246.235px 279.305px;" id="elf1mpu9r2v2"
                    class="animable"></path>
                <path
                    d="M269.08,302.13c0,.19-10.23.35-22.84.35s-22.85-.16-22.85-.35,10.23-.36,22.85-.36S269.08,301.93,269.08,302.13Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 246.235px 302.125px;" id="eludhkl1nhota"
                    class="animable"></path>
                <path
                    d="M269.08,324.62c0,.19-10.23.35-22.84.35s-22.85-.16-22.85-.35,10.23-.36,22.85-.36S269.08,324.42,269.08,324.62Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 246.235px 324.615px;" id="elgdl8dla946"
                    class="animable"></path>
                <path
                    d="M269.08,346.5c0,.19-10.23.35-22.84.35s-22.85-.16-22.85-.35,10.23-.36,22.85-.36S269.08,346.3,269.08,346.5Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 246.235px 346.495px;" id="elx2n8nnsps7g"
                    class="animable"></path>
                <path
                    d="M269.08,370.75c0,.19-10.23.35-22.84.35s-22.85-.16-22.85-.35,10.23-.36,22.85-.36S269.08,370.55,269.08,370.75Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 246.235px 370.745px;" id="eltvswzortnup"
                    class="animable"></path>
                <path
                    d="M297.2,233.61c0,.2-6.09.36-13.6.36s-13.6-.16-13.6-.36,6.08-.35,13.6-.35S297.2,233.42,297.2,233.61Z"
                    style="fill: rgb(69, 90, 100); transform-origin: 283.6px 233.615px;" id="el0xawbo4racx"
                    class="animable"></path>
                <path
                    d="M297.2,256.32c0,.2-6.09.36-13.6.36s-13.6-.16-13.6-.36,6.08-.35,13.6-.35S297.2,256.13,297.2,256.32Z"
                    style="fill: rgb(69, 90, 100); transform-origin: 283.6px 256.325px;" id="ely8rp005ndq"
                    class="animable"></path>
                <path d="M297.2,279c0,.2-6.09.36-13.6.36S270,279.23,270,279s6.08-.35,13.6-.35S297.2,278.84,297.2,279Z"
                      style="fill: rgb(69, 90, 100); transform-origin: 283.6px 279.005px;" id="ell8lgb3ga9wd"
                      class="animable"></path>
                <path
                    d="M296.9,302.13c0,.19-6.09.35-13.6.35s-13.6-.16-13.6-.35,6.09-.36,13.6-.36S296.9,301.93,296.9,302.13Z"
                    style="fill: rgb(69, 90, 100); transform-origin: 283.3px 302.125px;" id="el8n78rffn4n7"
                    class="animable"></path>
                <path
                    d="M296.9,324.62c0,.19-6.09.35-13.6.35s-13.6-.16-13.6-.35,6.09-.36,13.6-.36S296.9,324.42,296.9,324.62Z"
                    style="fill: rgb(69, 90, 100); transform-origin: 283.3px 324.615px;" id="elp7oxf3qh938"
                    class="animable"></path>
                <path
                    d="M296.9,347.11c0,.19-6.09.35-13.6.35s-13.6-.16-13.6-.35,6.09-.36,13.6-.36S296.9,346.91,296.9,347.11Z"
                    style="fill: rgb(69, 90, 100); transform-origin: 283.3px 347.105px;" id="elir48nbicc1"
                    class="animable"></path>
                <path
                    d="M296.9,370.75c0,.19-6.09.35-13.6.35s-13.6-.16-13.6-.35,6.09-.36,13.6-.36S296.9,370.55,296.9,370.75Z"
                    style="fill: rgb(69, 90, 100); transform-origin: 283.3px 370.745px;" id="elp7ygagqmv3"
                    class="animable"></path>
            </g>
            <g id="freepik--House--inject-3" class="animable" style="transform-origin: 324.425px 348.49px;">
                <rect x="281.31" y="330.41" width="29.89" height="68.59"
                      style="fill: rgb(178, 68, 118); transform-origin: 296.255px 364.705px;" id="elhkj11kfowx7"
                      class="animable"></rect>
                <g id="elhyyqfadfru">
                    <rect x="281.31" y="330.41" width="29.89" height="68.59"
                          style="opacity: 0.2; transform-origin: 296.255px 364.705px;" class="animable"></rect>
                </g>
                <polygon
                    points="274.32 330.13 348.07 330.13 361.85 310.57 376.29 330.69 393.27 330.42 374.97 305.77 292.74 306.12 274.32 330.13"
                    style="fill: rgb(178, 68, 118); transform-origin: 333.795px 318.23px;" id="elhk3yo8g584h"
                    class="animable"></polygon>
                <g id="el1ubqd0epotj">
                    <polygon
                        points="274.32 330.13 348.07 330.13 361.85 310.57 376.29 330.69 393.27 330.42 374.97 305.77 292.74 306.12 274.32 330.13"
                        style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 333.795px 318.23px;"
                        class="animable"></polygon>
                </g>
                <polygon
                    points="311.2 330.42 311.2 399 384.85 399 384.85 330.42 376.4 330.42 361.85 310.57 348.02 330.11 311.2 330.42"
                    style="fill: rgb(178, 68, 118); transform-origin: 348.025px 354.785px;" id="el3a20n9910yy"
                    class="animable"></polygon>
                <g id="el40qy6sb761p">
                    <g style="opacity: 0.2; transform-origin: 330.22px 384.135px;" class="animable">
                        <polyline points="321.61 399 321.61 369.27 338.83 369.27 338.83 399" id="elp10jduhwxw"
                                  class="animable" style="transform-origin: 330.22px 384.135px;"></polyline>
                    </g>
                </g>
                <g id="el2s2zud2z9en">
                    <rect x="349.16" y="368.43" width="27.14" height="16.81"
                          style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 362.73px 376.835px;"
                          class="animable"></rect>
                </g>
                <g id="elxab9vb71t3">
                    <rect x="349.16" y="334.79" width="27.14" height="16.81"
                          style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 362.73px 343.195px;"
                          class="animable"></rect>
                </g>
                <g id="els6dlzkwf8jj">
                    <rect x="319.92" y="334.94" width="17.11" height="16.2"
                          style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 328.475px 343.04px;"
                          class="animable"></rect>
                </g>
                <rect x="356.87" y="368.43" width="0.25" height="16.97"
                      style="fill: rgb(178, 68, 118); transform-origin: 356.995px 376.915px;" id="elquduwuuwgbd"
                      class="animable"></rect>
                <rect x="368.15" y="368.43" width="0.25" height="16.97"
                      style="fill: rgb(178, 68, 118); transform-origin: 368.275px 376.915px;" id="el9oeeazvbyjm"
                      class="animable"></rect>
                <rect x="356.99" y="377.3" width="11.28" height="0.25"
                      style="fill: rgb(178, 68, 118); transform-origin: 362.63px 377.425px;" id="ely4edzrfoyl"
                      class="animable"></rect>
                <rect x="356.87" y="334.79" width="0.25" height="16.97"
                      style="fill: rgb(178, 68, 118); transform-origin: 356.995px 343.275px;" id="elwkj16khcj4l"
                      class="animable"></rect>
                <rect x="368.15" y="334.79" width="0.25" height="16.97"
                      style="fill: rgb(178, 68, 118); transform-origin: 368.275px 343.275px;" id="el5jgosu0eoxs"
                      class="animable"></rect>
                <rect x="356.99" y="343.66" width="11.28" height="0.25"
                      style="fill: rgb(178, 68, 118); transform-origin: 362.63px 343.785px;" id="elhg9835h125c"
                      class="animable"></rect>
                <rect x="328.35" y="334.94" width="0.25" height="16.2"
                      style="fill: rgb(178, 68, 118); transform-origin: 328.475px 343.04px;" id="elzn9oiqbz8e"
                      class="animable"></rect>
                <rect x="319.92" y="343.31" width="17.11" height="0.25"
                      style="fill: rgb(178, 68, 118); transform-origin: 328.475px 343.435px;" id="elq2v4t4orgc"
                      class="animable"></rect>
                <g id="elczxoew4kdb5">
                    <path d="M365.44,323.66a3.63,3.63,0,1,1-3.63-3.63A3.64,3.64,0,0,1,365.44,323.66Z"
                          style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 361.81px 323.66px;"
                          class="animable"></path>
                </g>
                <polygon points="335.92 319.21 340.5 313.56 340.5 299.97 330.91 299.97 330.91 319.31 335.92 319.21"
                         style="fill: rgb(178, 68, 118); transform-origin: 335.705px 309.64px;" id="elf2lbu0rb399"
                         class="animable"></polygon>
                <g id="elrrzzx1olcyd">
                    <polygon points="335.92 319.21 335.92 299.97 340.5 299.97 340.5 313.56 335.92 319.21"
                             style="opacity: 0.2; transform-origin: 338.21px 309.59px;" class="animable"></polygon>
                </g>
                <rect x="329.84" y="297.97" width="11.31" height="2"
                      style="fill: rgb(178, 68, 118); transform-origin: 335.495px 298.97px;" id="eltrz418q31si"
                      class="animable"></rect>
                <rect x="255.58" y="360.42" width="56.47" height="38.59"
                      style="fill: rgb(178, 68, 118); transform-origin: 283.815px 379.715px;" id="ela084eydbgr7"
                      class="animable"></rect>
                <g id="elhw0nkao7kk7">
                    <rect x="255.58" y="360.42" width="34.82" height="38.59"
                          style="opacity: 0.2; transform-origin: 272.99px 379.715px;" class="animable"></rect>
                </g>
                <path
                    d="M283.07,398.94a2,2,0,0,1-.05-.5c0-.39,0-.87,0-1.45,0-1.34,0-3.16-.08-5.43,0-4.7-.06-11.19-.1-18.7l.28.28H262.45l.27-.28c0,7.51-.07,14-.1,18.7,0,2.27-.06,4.09-.08,5.43,0,.58,0,1.06-.05,1.45a2.42,2.42,0,0,1,0,.5,1.51,1.51,0,0,1-.05-.5c0-.39,0-.87,0-1.45,0-1.34,0-3.16-.08-5.43,0-4.69-.06-11.19-.1-18.7v-.28h21.18v.28c-.05,7.51-.08,14-.11,18.7,0,2.27-.06,4.09-.08,5.43,0,.58,0,1.06,0,1.45A2.8,2.8,0,0,1,283.07,398.94Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 272.85px 385.76px;" id="el7csu2rifvmw"
                    class="animable"></path>
                <g id="el2fxdzvgxdle">
                    <rect x="294.76" y="371.87" width="14.67" height="3.74"
                          style="opacity: 0.2; transform-origin: 302.095px 373.74px;" class="animable"></rect>
                </g>
                <polygon points="274.32 330.13 274.32 332.12 348.02 332.12 348.02 330.11 274.32 330.13"
                         style="fill: rgb(178, 68, 118); transform-origin: 311.17px 331.115px;" id="el2gohgtpayg1"
                         class="animable"></polygon>
                <polygon points="348.02 332.12 361.81 312.77 361.85 310.57 348.07 330.13 348.02 332.12"
                         style="fill: rgb(178, 68, 118); transform-origin: 354.935px 321.345px;" id="elhi732nu6cl5"
                         class="animable"></polygon>
                <rect x="376.4" y="330.41" width="16.51" height="1.28"
                      style="fill: rgb(178, 68, 118); transform-origin: 384.655px 331.05px;" id="elx5ka64tnn3q"
                      class="animable"></rect>
                <rect x="326.87" y="364.71" width="6.09" height="2.32"
                      style="fill: rgb(38, 50, 56); transform-origin: 329.915px 365.87px;" id="elk843q298c6q"
                      class="animable"></rect>
                <g id="elj3sxykwpe7k">
                    <polygon points="274.32 330.13 274.32 332.12 348.02 332.12 348.02 330.11 274.32 330.13"
                             style="opacity: 0.3; transform-origin: 311.17px 331.115px;" class="animable"></polygon>
                </g>
                <g id="elfeyih7sufv4">
                    <polygon points="348.02 332.12 361.81 312.77 361.85 310.57 348.07 330.13 348.02 332.12"
                             style="opacity: 0.3; transform-origin: 354.935px 321.345px;" class="animable"></polygon>
                </g>
                <g id="elck910a01wcm">
                    <rect x="376.4" y="330.41" width="16.51" height="1.28"
                          style="opacity: 0.3; transform-origin: 384.655px 331.05px;" class="animable"></rect>
                </g>
                <path
                    d="M337.44,384.27c-.05,0,0-.38-.45-.67a.86.86,0,0,0-.79-.09.82.82,0,0,0,0,1.52.86.86,0,0,0,.79-.09c.41-.29.4-.68.45-.67s.17.43-.3.87a1.1,1.1,0,0,1-1.05.19,1.12,1.12,0,0,1,0-2.12,1.1,1.1,0,0,1,1.05.19C337.61,383.85,337.47,384.3,337.44,384.27Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 336.412px 384.27px;" id="elrvn58qqvin"
                    class="animable"></path>
            </g>
            <g id="freepik--Character--inject-3" class="animable animator-active"
               style="transform-origin: 126.073px 279.67px;">
                <path
                    d="M197.25,285.34s-15.51,59-36.36,70.08c-13.74,7.3-25.87-1.41-34-15.21l-29.4-47.32a11,11,0,0,1,7-13.34L129,271l24.42,43.53,31.25-38"
                    style="fill: rgb(235, 153, 110); transform-origin: 147.169px 314.532px;" id="elfc4a8jdrogo"
                    class="animable"></path>
                <path
                    d="M44.64,289.45c.54,3.84,10.21,32.07,10.21,32.07s43.88-12.41,43.42-14.59c-.38-1.77-7.24-29.89-16.4-45.74a22.47,22.47,0,0,0-16.74-11.28c-1.94-.22-6.25,1.58-7.44,2.17C48.35,256.75,40.46,259.79,44.64,289.45Z"
                    style="fill: rgb(69, 90, 100); transform-origin: 70.8826px 285.706px;" id="ela0pv21kcgzq"
                    class="animable"></path>
                <path
                    d="M113.44,248c16.85,4.69,17.61,12.35,26.05,25.86l13.29,24.2-22.14,14.11-4.06,9.1-2.19,78.26-89.21-.44,16-63.35L44.8,294.14c-.59-6.56-2.48-18.82-.46-25.15,6.33-19.78,29.94-21.89,44.46-24.89,3-.62,5.89.33,8.33,1.07"
                    style="fill: rgb(69, 90, 100); transform-origin: 93.98px 321.715px;" id="elx56q9lr0vp"
                    class="animable"></path>
                <path
                    d="M126.36,325.29a13.53,13.53,0,0,1-.06-2c0-1.4,0-3.26.07-5.5v-.05l0,0a47.74,47.74,0,0,0,2.91-6.16,13.75,13.75,0,0,0,.74-7.94c-.72-3-2.38-5.52-3.49-8a24.76,24.76,0,0,1-2-7,23.88,23.88,0,0,1-.13-4.87c0-.58.11-1,.16-1.32a1.32,1.32,0,0,1,.11-.45,15,15,0,0,1,0,1.78,26.76,26.76,0,0,0,.31,4.8,25.08,25.08,0,0,0,2.07,6.8c1.1,2.44,2.8,5,3.56,8.1a14.08,14.08,0,0,1-.79,8.26,45.12,45.12,0,0,1-3,6.18l0-.1c-.11,2.24-.19,4.1-.26,5.5A11.09,11.09,0,0,1,126.36,325.29Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 127.617px 303.645px;" id="elnu7vvy3gqdm"
                    class="animable"></path>
                <path
                    d="M114.14,245.25a2.33,2.33,0,0,1,.15.6,12.72,12.72,0,0,1,.2,1.77,16.28,16.28,0,0,1-1.08,6.45,17.28,17.28,0,0,1-5.84,7.7,16.66,16.66,0,0,1-11.4,3,19.11,19.11,0,0,1-6-1.63,18.12,18.12,0,0,1-4.77-3.26,21.14,21.14,0,0,1-5.23-8.15,21.77,21.77,0,0,1-1.25-6.42,14,14,0,0,1,0-1.78,2.36,2.36,0,0,1,.06-.61c.07,0,0,.85.14,2.38a23.43,23.43,0,0,0,1.41,6.29,20.89,20.89,0,0,0,5.22,7.9,17.35,17.35,0,0,0,4.64,3.13,18.49,18.49,0,0,0,5.8,1.57,16.18,16.18,0,0,0,11-2.81,17.12,17.12,0,0,0,7-13.71C114.26,246.1,114.07,245.26,114.14,245.25Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 96.6962px 253.89px;" id="el7k5xivyvl6j"
                    class="animable"></path>
                <path
                    d="M148.74,290.75a18,18,0,0,1-2.64,1.64c-1.65,1-3.95,2.28-6.45,3.79s-4.73,2.92-6.35,3.94a17.3,17.3,0,0,1-2.68,1.57,16.15,16.15,0,0,1,2.46-1.91c1.56-1.11,3.77-2.58,6.28-4.1s4.84-2.78,6.55-3.65A15.1,15.1,0,0,1,148.74,290.75Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 139.68px 296.22px;" id="elc5o9inyp98j"
                    class="animable"></path>
                <path
                    d="M47.38,291.79s.06.18.17.53l.42,1.56,1.57,6c1.33,5.2,3.23,12.62,5.54,21.61l-.29-.16,41.26-12.89,1-.37-.19.33a178.69,178.69,0,0,0-8.12-27.12c-3.2-8.08-6.87-15.09-11-20.14a26.86,26.86,0,0,0-6.53-5.86,14,14,0,0,0-6.2-2.18,8.41,8.41,0,0,0-1.28-.11l-1.14.06c-.35,0-.67,0-1,.07l-.78.17-1.08.22a3.26,3.26,0,0,1-.37.06,1.63,1.63,0,0,1,.35-.12l1.07-.27.79-.2c.3-.06.63-.06,1-.1l1.15-.08a9.87,9.87,0,0,1,1.3.07A14.19,14.19,0,0,1,71.36,255,26.88,26.88,0,0,1,78,260.85c4.27,5.07,8,12.1,11.23,20.2a177.38,177.38,0,0,1,8.2,27.2l0,.25-.24.08-1,.37c-15.47,4.91-29.8,9.24-41.33,12.79l-.23.07-.06-.23c-2.23-9-4.06-16.45-5.35-21.66-.62-2.57-1.1-4.59-1.44-6l-.36-1.57A2.23,2.23,0,0,1,47.38,291.79Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 72.4033px 287.305px;" id="el1y3dy0glpqv"
                    class="animable"></path>
                <path
                    d="M95.63,302.78c0,.16-9.48,2.91-21.27,6.16S53,314.69,53,314.54s9.47-2.91,21.26-6.16S95.58,302.63,95.63,302.78Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 74.315px 308.66px;" id="elwoha3ah42o"
                    class="animable"></path>
                <path
                    d="M92,174.77c-2.73-5.92-10.24-8.71-16.57-7.14s-11.33,6.74-14,12.67S58.05,192.9,58,199.42c0,3.45.15,6.94-.55,10.32s-2.36,6.72-5.26,8.6c-2.28,1.48-5.08,1.92-7.53,3.1s-4.7,3.69-4.09,6.35c.72,3.17,4.7,4.12,7.93,4.45a10.38,10.38,0,0,0,17.1,7.62c-1,4,2.53,8.12,6.59,8.6s8-2.06,10.26-5.5,2.9-7.64,3.07-11.73S85.4,223,85.8,219"
                    style="fill: rgb(178, 68, 118); transform-origin: 66.2345px 207.858px;" id="elg5x8u2e8ba8"
                    class="animable"></path>
                <path d="M138.07,182.22s3-20.1-24.66-20.47c-30.94-.41-36.52,26-31.22,39.91l15.38-15.24Z"
                      style="fill: rgb(178, 68, 118); transform-origin: 109.295px 181.703px;" id="el8a5hjk074cs"
                      class="animable"></path>
                <path
                    d="M113.8,248c.31-5.35.54-9.71.54-9.71s15.84.37,18.17-13.36,5-45.71,5-45.71h0a41.56,41.56,0,0,0-46.27.76l-1.3.9-10,63.49A17.05,17.05,0,0,0,94,263.89h0A17.05,17.05,0,0,0,113.8,248Z"
                    style="fill: rgb(255, 190, 157); transform-origin: 108.618px 218.338px;" id="el6ppklg7ruyc"
                    class="animable"></path>
                <path d="M131.86,203.59a1.74,1.74,0,1,1-1.53-2A1.76,1.76,0,0,1,131.86,203.59Z"
                      style="fill: rgb(38, 50, 56); transform-origin: 130.14px 203.32px;" id="el3b62slv792o"
                      class="animable"></path>
                <path
                    d="M133.14,201.94c-.25.21-1.4-1-3.25-1.35s-3.34.46-3.5.19.19-.52.85-.89a4.44,4.44,0,0,1,2.84-.44,4.5,4.5,0,0,1,2.54,1.37C133.13,201.39,133.26,201.85,133.14,201.94Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 129.767px 200.673px;" id="elbv8nzsx38gi"
                    class="animable"></path>
                <path d="M113.29,201.81a1.74,1.74,0,1,1-3.45-.37,1.74,1.74,0,1,1,3.45.37Z"
                      style="fill: rgb(38, 50, 56); transform-origin: 111.565px 201.625px;" id="el1koj3y8n3tmh"
                      class="animable"></path>
                <path
                    d="M114.21,200.25c-.24.21-1.4-1.05-3.24-1.35s-3.34.46-3.51.18c-.08-.12.2-.52.86-.88a4.43,4.43,0,0,1,2.84-.44,4.48,4.48,0,0,1,2.54,1.37C114.2,199.69,114.33,200.16,114.21,200.25Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 110.849px 198.982px;" id="el96ir5le3fp5"
                    class="animable"></path>
                <path
                    d="M116.6,214.55a11.6,11.6,0,0,1,3.07.22c.48.07.94.09,1.1-.23a2.87,2.87,0,0,0,0-1.55c-.15-1.32-.3-2.7-.46-4.15-.59-5.9-.89-10.69-.67-10.72s.88,4.73,1.48,10.63c.13,1.45.26,2.83.38,4.15a3.15,3.15,0,0,1-.23,2,1.2,1.2,0,0,1-.93.52,3.18,3.18,0,0,1-.81-.09A11.12,11.12,0,0,1,116.6,214.55Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 119.085px 206.77px;" id="elosfe2yg2jj"
                    class="animable"></path>
                <path d="M114.39,238.29a33.3,33.3,0,0,1-17.18-8.13s3.36,10.92,16.93,11.82Z"
                      style="fill: rgb(235, 153, 110); transform-origin: 105.8px 236.07px;" id="elyxjven8wzre"
                      class="animable"></path>
                <path
                    d="M114.79,220a3.66,3.66,0,0,0-1.81-2.92,2.9,2.9,0,0,0-2.4-.26,2.09,2.09,0,0,0-1.36,1.9,2.4,2.4,0,0,0,1.69,2,6.66,6.66,0,0,0,2.78.16,2,2,0,0,0,.75-.17.68.68,0,0,0,.38-.62"
                    style="fill: rgb(235, 153, 110); transform-origin: 112.02px 218.815px;" id="elipjchls98lm"
                    class="animable"></path>
                <path
                    d="M110.75,215c-.13,0-.43.46-.48,1.37a5,5,0,0,0,4.17,5.08c.91.13,1.45-.07,1.44-.21,0-.31-2.14-.42-3.63-2.24S111.05,215.05,110.75,215Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 113.074px 218.246px;" id="elemub472rcf"
                    class="animable"></path>
                <path d="M88,198.79c-.21-.15-7.88-3.46-10.07,5.57s8.29,8.11,8.37,7.85S88,198.79,88,198.79Z"
                      style="fill: rgb(255, 190, 157); transform-origin: 82.8146px 205.221px;" id="elm13az1tqmum"
                      class="animable"></path>
                <path
                    d="M84.15,208.42s-.19.07-.51.13a1.83,1.83,0,0,1-1.26-.24c-.94-.57-1.43-2.26-1.08-3.9a5.06,5.06,0,0,1,1-2.15,2,2,0,0,1,1.56-.94.88.88,0,0,1,.89.64c.07.28,0,.45,0,.48s.24-.11.26-.5a1,1,0,0,0-.25-.64,1.32,1.32,0,0,0-.87-.43,2.49,2.49,0,0,0-2.1,1,5.41,5.41,0,0,0-1.2,2.39c-.38,1.84.2,3.75,1.51,4.42a2,2,0,0,0,1.6.09C84.08,208.63,84.18,208.44,84.15,208.42Z"
                    style="fill: rgb(235, 153, 110); transform-origin: 82.7427px 204.882px;" id="elbf0gpv8tzev"
                    class="animable"></path>
                <path
                    d="M134.37,172.89a9.49,9.49,0,0,1,3.54,10.37c-1.36,4.32-5.39,9-16.59,8.85l2.55-2.83a19.78,19.78,0,0,1-17.94,3.14l3.14-6.08S94.91,201.35,87,202L88,186c1.91-15.1,8.38-19.63,18.17-20.44a50.64,50.64,0,0,1,10.92.19A37.48,37.48,0,0,1,134.37,172.89Z"
                    style="fill: rgb(178, 68, 118); transform-origin: 112.648px 183.676px;" id="elkhv68cari5j"
                    class="animable"></path>
                <path
                    d="M79,159.81a6.51,6.51,0,0,1,2.09.92,18,18,0,0,1,7.31,8.1,6.57,6.57,0,0,1,.7,2.17c-.17.08-1.29-3.27-4.16-6.4S78.9,160,79,159.81Z"
                    style="fill: rgb(178, 68, 118); transform-origin: 84.0488px 165.406px;" id="elqo291qytlf"
                    class="animable"></path>
                <path
                    d="M50.49,211s-.19-.2-.62-.47a3.78,3.78,0,0,0-2.12-.54,4,4,0,0,0-3,1.47,4.55,4.55,0,0,0-.49,4.35A5.26,5.26,0,0,0,48.43,219a7.31,7.31,0,0,0,5.94-1.75,10.75,10.75,0,0,0,3.61-6,8.8,8.8,0,0,0,0-3.72,16.74,16.74,0,0,0-1.34-3.67c-.56-1.21-1.16-2.4-1.63-3.65a15.24,15.24,0,0,1-.89-3.82,18.41,18.41,0,0,1,.85-7.32,24.61,24.61,0,0,1,6.77-10.34,45.28,45.28,0,0,1,6.6-5.12c.83-.53,1.49-.93,1.94-1.19a4.82,4.82,0,0,1,.7-.37,3.76,3.76,0,0,1-.64.47l-1.87,1.28A49.71,49.71,0,0,0,62,179a24.86,24.86,0,0,0-6.55,10.21,18.15,18.15,0,0,0-.79,7.1,16,16,0,0,0,.86,3.68c.46,1.21,1.06,2.38,1.63,3.61a17.18,17.18,0,0,1,1.37,3.79,9.39,9.39,0,0,1,0,3.95,11.26,11.26,0,0,1-3.84,6.28,7.77,7.77,0,0,1-6.35,1.81,5.66,5.66,0,0,1-4.48-3.55,4.91,4.91,0,0,1,.61-4.69,4.18,4.18,0,0,1,3.27-1.49,3.7,3.7,0,0,1,2.18.66A2.17,2.17,0,0,1,50.49,211Z"
                    style="fill: rgb(178, 68, 118); transform-origin: 57.246px 195.79px;" id="el6c2fdgcecql"
                    class="animable"></path>
                <path
                    d="M86.72,180.82a4.23,4.23,0,0,1-.56-1.77,11.55,11.55,0,0,1,.17-4.47,11.42,11.42,0,0,1,1.84-4.08c.68-.93,1.24-1.38,1.28-1.33s-1.81,2.21-2.56,5.54S86.9,180.79,86.72,180.82Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 87.7344px 174.993px;" id="elxneifx5j2n"
                    class="animable"></path>
                <path
                    d="M78.46,210a4.38,4.38,0,0,0-1.2,1.7,2.75,2.75,0,0,0,.18,2.1,2.87,2.87,0,0,0,2.17,1.34,3,3,0,0,0,2.46-.72,2.76,2.76,0,0,0,.81-1.95,4,4,0,0,0-.64-2s.22.08.47.39a2.77,2.77,0,0,1,.58,1.56,3.13,3.13,0,0,1-.84,2.35,3.48,3.48,0,0,1-2.92.91A3.32,3.32,0,0,1,77,214.09a3.09,3.09,0,0,1-.09-2.5,2.88,2.88,0,0,1,1-1.32C78.23,210.05,78.45,210,78.46,210Z"
                    style="fill: rgb(69, 90, 100); transform-origin: 79.9928px 212.86px;" id="elarx8clfd9ev"
                    class="animable"></path>
                <path
                    d="M140.37,186.82c-.11,0,.33-1.54.34-4a17.87,17.87,0,0,0-9.43-15.93c-2.19-1.19-3.74-1.53-3.71-1.64a3.39,3.39,0,0,1,1.09.2,15.37,15.37,0,0,1,2.81,1.08,17.38,17.38,0,0,1,9.65,16.3,16,16,0,0,1-.4,3A3.8,3.8,0,0,1,140.37,186.82Z"
                    style="fill: rgb(178, 68, 118); transform-origin: 134.352px 176.035px;" id="el5lgeryxp8li"
                    class="animable"></path>
                <path
                    d="M115.1,196.73c-.06.07-.44-.29-1.13-.71a7,7,0,0,0-2.92-1,6.89,6.89,0,0,0-3.07.39c-.77.27-1.21.54-1.26.46s.33-.45,1.1-.84a6,6,0,0,1,3.29-.59,6.17,6.17,0,0,1,3.1,1.25C114.88,196.23,115.16,196.69,115.1,196.73Z"
                    style="fill: rgb(178, 68, 118); transform-origin: 110.912px 195.573px;" id="elawk9un08mpw"
                    class="animable"></path>
                <path
                    d="M132.74,198.42a11.18,11.18,0,0,1-3.58,0,11.32,11.32,0,0,1-3.53-.55,11.26,11.26,0,0,1,3.57,0A11.26,11.26,0,0,1,132.74,198.42Z"
                    style="fill: rgb(178, 68, 118); transform-origin: 129.185px 198.146px;" id="elhgpvu0t6h07"
                    class="animable"></path>
                <path d="M197.25,285.34s5.67-13.47-2-12c-11.75,2.24-10,13.67-10,13.67Z"
                      style="fill: rgb(235, 153, 110); transform-origin: 192.213px 280.119px;" id="elueme80iagr"
                      class="animable"></path>
                <path
                    d="M208.17,224.92a10.38,10.38,0,0,0-3.07-.59c6.38,4.74,8.11,16.94,3.64,29.26-4.36,12-13.18,20.19-21,20.13l-.62-.16c-6.21-4.85-7.85-16.9-3.44-29.08s13.5-20.5,21.41-20.15a10.51,10.51,0,0,0-2.63-1.44C194,219.81,183,228.57,178,242.45c-4.89,13.48-2.35,26.8,5.59,30.37l-.16,0-15.64,40a3.44,3.44,0,0,0,6.41,2.52L190,275.18h0c8.49,3.07,19.45-5.68,24.48-19.56S216.66,228,208.17,224.92Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 192.259px 269.899px;" id="elntv4dijkfpi"
                    class="animable"></path>
                <path
                    d="M201.11,261.1a5.61,5.61,0,0,1,.48-1.22l1.46-3.23a56.92,56.92,0,0,0,3.86-11,25.6,25.6,0,0,0,0-11.48,32,32,0,0,0-1.66-4.52,4.53,4.53,0,0,1,.72,1.1,16.09,16.09,0,0,1,1.33,3.31,24.38,24.38,0,0,1,.17,11.71,49.66,49.66,0,0,1-4.05,11c-.67,1.34-1.23,2.42-1.63,3.15A5.11,5.11,0,0,1,201.11,261.1Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 204.606px 245.375px;" id="elqcepvgrmeyj"
                    class="animable"></path>
                <path
                    d="M199.47,264.3c.11.12-.37.79-1.09,1.5s-1.38,1.19-1.49,1.08.37-.78,1.09-1.49S199.36,264.19,199.47,264.3Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 198.18px 265.59px;" id="el9qjxvrycudw"
                    class="animable"></path>
                <path
                    d="M182.41,279.32c-1.21-2.29-2.62-5.45-4.75-6.93s-5.09-3.19-7.59-1a161.51,161.51,0,0,1,8.73,13.92Z"
                    style="fill: rgb(235, 153, 110); transform-origin: 176.24px 277.828px;" id="el2529flrn27r"
                    class="animable"></path>
                <path
                    d="M199.07,275.27s-.47-2.66-4.37-1.49-16.12,3.72-13.76,6.32,6.53,1.43,6.53,1.43-6.79,1.47-6.14,2.89,1.78,3.88,4.67,2.34,10.91-4.15,10.91-4.15Z"
                    style="fill: rgb(235, 153, 110); transform-origin: 189.855px 280.366px;" id="elew8r9q06hmp"
                    class="animable"></path>
                <path
                    d="M198.63,281.21s0-.26,0-.67a1.36,1.36,0,0,0-.92-1.24,5,5,0,0,0-2.55.38l-3.25.87c-2.31.61-4.41,1.12-5.94,1.46a11.56,11.56,0,0,1-2.5.45,11.17,11.17,0,0,1,2.4-.84c1.5-.45,3.58-1,5.89-1.62l3.26-.83a5,5,0,0,1,2.83-.26,1.63,1.63,0,0,1,1,1.64C198.82,281,198.65,281.22,198.63,281.21Z"
                    style="fill: rgb(38, 50, 56); transform-origin: 191.163px 280.637px;" id="elgeb9w3u7ik9"
                    class="animable"></path>
                <path
                    d="M94.35,309.52l11.8,21.88,58.58-29.5s8.62-16.56,10.05-16.35,7.77,2.94,7.77,2.94,9-4.86,10.94-3.54,4.56,17.32,2.86,22.27-19.49,14.92-19.49,14.92-48,31.52-68.87,42.59c-13.74,7.3-25.86-1.41-34-15.21L60.11,320.15"
                    style="fill: rgb(255, 190, 157); transform-origin: 128.504px 326.048px;" id="els9fmkukhwp"
                    class="animable"></path>
            </g>
            <defs>
                <filter id="active" height="200%">
                    <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>
                    <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>
                    <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                    <feMerge>
                        <feMergeNode in="OUTLINE"></feMergeNode>
                        <feMergeNode in="SourceGraphic"></feMergeNode>
                    </feMerge>
                </filter>
                <filter id="hover" height="200%">
                    <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>
                    <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>
                    <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                    <feMerge>
                        <feMergeNode in="OUTLINE"></feMergeNode>
                        <feMergeNode in="SourceGraphic"></feMergeNode>
                    </feMerge>
                    <feColorMatrix type="matrix"
                                   values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 "></feColorMatrix>
                </filter>
            </defs>
        </svg>

    </div>

    <div class="container position-relative">
        <div class="row">
            @foreach($sponsored_apartments->take(9) as $apartment_selected)

                <div class="card_apt">
                    <div class="card_apt_header">

                        <!--IMMAGINE DI SFONDO-->

                    </div>
                    <div class="card_apt_content">
                        <div class="address">

                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                            {{$apartment_selected->apartment->title}}
                        </div>
                        <div class="text_info">
                            {{$apartment_selected->apartment->description}}
                            <div class="text_info_shade"></div>
                        </div>
                    </div>
                    <div class="price_info">
                        <span class="price_w">Prezzo:</span>
                        <span class="price_v">€ {{$apartment_selected->apartment->price_per_day}}</span>
                    </div>
                    <div class="card_apt_footer">
                        <div class="icon area">
                            <i class="fa fa-home"
                               aria-hidden="true"></i>{{$apartment_selected->apartment->square_metres}}
                            <sup>2</sup>
                        </div>
                        <div class="icon room">
                            <i class="fa fa-bed" aria-hidden="true"></i>{{$apartment_selected->apartment->beds_number}}
                        </div>
                        <div class="icon bath">
                            <i class="fa fa-bath"
                               aria-hidden="true"></i>{{$apartment_selected->apartment->toilets_number}}
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="illustra">

              <img src="/assets/images/illustrate.jpg" alt="">

            </div>

        </div>

@endsection
