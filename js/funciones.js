function producto1() {
    nombre1 ='Polos Manga Corta VueJS';
    talla1 = document.getElementById("talla1").value;
    combo1 = document.getElementById("talla1");
    selected1 = combo1.options[combo1.selectedIndex].text;
    cantidad1 = document.getElementById("cant1").value;

    if (selected1=='-- Seleccionar Talla --') {
        precio1=0;
    }else if (selected1=='Small') {
        precio1=28;
    }else if (selected1=='Medium') {
        precio1=32;
    }else{
        precio1=36;
    }

    PagoBase1 = precio1*cantidad1;

     if (cantidad1>=1 && cantidad1<4) {
        descuento1 = 0;
        regalo1=0;
    }else if (cantidad1>=4 && cantidad1<8) {
        descuento1 = Math.round(0.05*PagoBase1);
        regalo1=1;
    }else if (cantidad1>=8 && cantidad1<12) {
        descuento1 = Math.round(0.10*PagoBase1);
        regalo1=2;
    }else{
        descuento1 = Math.round(0.15*PagoBase1);
        regalo1=3;
    }

    PagoNeto1=PagoBase1-descuento1;

    document.getElementById("nombre1").innerHTML = nombre1;
    document.getElementById("selected1").innerHTML = selected1;
    document.getElementById("cantidad1").innerHTML = cantidad1;
    document.getElementById("precio1").innerHTML = precio1;


    document.getElementById("PagoBase1").innerHTML = PagoBase1;
    document.getElementById("descuento1").innerHTML = descuento1;
    document.getElementById("PagoNeto1").innerHTML = PagoNeto1;
    document.getElementById("regalo1").innerHTML = regalo1;
}


function producto2() {
    nombre2 ='Polos Manga Corta AngularJS ';
    talla2 = document.getElementById("talla2").value;
    combo2 = document.getElementById("talla2");
    selected2 = combo2.options[combo2.selectedIndex].text;
    cantidad2 = document.getElementById("cant2").value;

    if (selected2=='-- Seleccionar Talla --') {
        precio2=0;
    }else if (selected2=='Small') {
        precio2=28;
    }else if (selected2=='Medium') {
        precio2=32;
    }else{
        precio2=36;
    }

    PagoBase2 = precio2*cantidad2;

     if (cantidad2>=1 && cantidad2<4) {
        descuento2 = 0;
        regalo2=0;
    }else if (cantidad2>=4 && cantidad2<8) {
        descuento2 = Math.round(0.05*PagoBase2);
        regalo2=1;
    }else if (cantidad2>=8 && cantidad2<12) {
        descuento2 = Math.round(0.10*PagoBase2);
        regalo2=2;
    }else{
        descuento2 = Math.round(0.15*PagoBase2);
        regalo2=3;
    }

    PagoNeto2=PagoBase2-descuento2;

    document.getElementById("nombre2").innerHTML = nombre2;
    document.getElementById("selected2").innerHTML = selected2;
    document.getElementById("cantidad2").innerHTML = cantidad2;
    document.getElementById("precio2").innerHTML = precio2;


    document.getElementById("PagoBase2").innerHTML = PagoBase2;
    document.getElementById("descuento2").innerHTML = descuento2;
    document.getElementById("PagoNeto2").innerHTML = PagoNeto2;
    document.getElementById("regalo2").innerHTML = regalo2;
}


function producto3() {
    nombre3 ='Polos Manga Corta React ';
    talla3 = document.getElementById("talla3").value;
    combo3 = document.getElementById("talla3");
    selected3 = combo3.options[combo3.selectedIndex].text;
    cantidad3 = document.getElementById("cant3").value;

    if (selected3=='-- Seleccionar Talla --') {
        precio3=0;
    }else if (selected3=='Small') {
        precio3=28;
    }else if (selected3=='Medium') {
        precio3=32;
    }else{
        precio3=36;
    }

    PagoBase3 = precio3*cantidad3;

     if (cantidad3>=1 && cantidad3<4) {
        descuento3 = 0;
        regalo3=0;
    }else if (cantidad3>=4 && cantidad3<8) {
        descuento3 = Math.round(0.05*PagoBase3);
        regalo3=0;
    }else if (cantidad3>=8 && cantidad3<12) {
        descuento3 = Math.round(0.10*PagoBase3);
        regalo3=1;
    }else{
        descuento3 = Math.round(0.15*PagoBase3);
        regalo3=2;
    }

    PagoNeto3=PagoBase3-descuento3;

    document.getElementById("nombre3").innerHTML = nombre3;
    document.getElementById("selected3").innerHTML = selected3;
    document.getElementById("cantidad3").innerHTML = cantidad3;
    document.getElementById("precio3").innerHTML = precio3;


    document.getElementById("PagoBase3").innerHTML = PagoBase3;
    document.getElementById("descuento3").innerHTML = descuento3;
    document.getElementById("PagoNeto3").innerHTML = PagoNeto3;
    document.getElementById("regalo3").innerHTML = regalo3;
}


function producto4() {
    nombre4 ='Polos Manga Corta Redux ';
    talla4 = document.getElementById("talla4").value;
    combo4 = document.getElementById("talla4");
    selected4 = combo4.options[combo4.selectedIndex].text;
    cantidad4 = document.getElementById("cant4").value;

    if (selected4=='-- Seleccionar Talla --') {
        precio4=0;
    }else if (selected4=='Small') {
        precio4=28;
    }else if (selected4=='Medium') {
        precio4=32;
    }else{
        precio4=36;
    }

    PagoBase4 = precio4*cantidad4;

     if (cantidad4>=1 && cantidad4<4) {
        descuento4 = 0;
        regalo4=0;
    }else if (cantidad4>=4 && cantidad4<8) {
        descuento4 = Math.round(0.05*PagoBase4);
        regalo4=1;
    }else if (cantidad4>=8 && cantidad4<12) {
        descuento4 = Math.round(0.10*PagoBase4);
        regalo4=2;
    }else{
        descuento4 = Math.round(0.15*PagoBase4);
        regalo4=3;
    }

    PagoNeto4=PagoBase4-descuento4;
    document.getElementById("nombre4").innerHTML = nombre4;
    document.getElementById("selected4").innerHTML = selected4;
    document.getElementById("cantidad4").innerHTML = cantidad4;
    document.getElementById("precio4").innerHTML = precio4;


    document.getElementById("PagoBase4").innerHTML = PagoBase4;
    document.getElementById("descuento4").innerHTML = descuento4;
    document.getElementById("PagoNeto4").innerHTML = PagoNeto4;
    document.getElementById("regalo4").innerHTML = regalo4;
}


function producto5() {
    nombre5 ='Polos Manga Corta NodeJS';
    talla5 = document.getElementById("talla5").value;
    combo5 = document.getElementById("talla5");
    selected5 = combo5.options[combo5.selectedIndex].text;
    cantidad5 = document.getElementById("cant5").value;

    if (selected5=='-- Seleccionar Talla --') {
        precio5=0;
    }else if (selected5=='Small') {
        precio5=28;
    }else if (selected5=='Medium') {
        precio5=32;
    }else{
        precio5=36;
    }

    PagoBase5 = precio5*cantidad5;

     if (cantidad5>=1 && cantidad5<4) {
        descuento5 = 0;
        regalo5=0;
    }else if (cantidad5>=4 && cantidad5<8) {
        descuento5 = Math.round(0.05*PagoBase5);
        regalo5=1;
    }else if (cantidad5>=8 && cantidad5<12) {
        descuento5 = Math.round(0.10*PagoBase5);
        regalo5=2;
    }else{
        descuento5 = Math.round(0.15*PagoBase5);
        regalo5=3;
    }

    PagoNeto5=PagoBase5-descuento5;
    document.getElementById("nombre5").innerHTML = nombre5;
    document.getElementById("selected5").innerHTML = selected5;
    document.getElementById("cantidad5").innerHTML = cantidad5;
    document.getElementById("precio5").innerHTML = precio5;


    document.getElementById("PagoBase5").innerHTML = PagoBase5;
    document.getElementById("descuento5").innerHTML = descuento5;
    document.getElementById("PagoNeto5").innerHTML = PagoNeto5;
    document.getElementById("regalo5").innerHTML = regalo5;
}

function producto6() {
    nombre6 ='Polos Manga Corta SASS ';
    talla6 = document.getElementById("talla6").value;
    combo6 = document.getElementById("talla6");
    selected6 = combo6.options[combo6.selectedIndex].text;
    cantidad6 = document.getElementById("cant6").value;

    if (selected6=='-- Seleccionar Talla --') {
        precio6=0;
    }else if (selected6=='Small') {
        precio6=28;
    }else if (selected6=='Medium') {
        precio6=32;
    }else{
        precio6=36;
    }

    PagoBase6 = precio6*cantidad6;

     if (cantidad6>=1 && cantidad6<4) {
        descuento6 = 0;
        regalo6=0;
    }else if (cantidad6>=4 && cantidad6<8) {
        descuento6 = Math.round(0.05*PagoBase6);
        regalo6=1;
    }else if (cantidad6>=8 && cantidad6<9) {
        descuento6 = Math.round(0.10*PagoBase6);
        regalo6=2;
    }else{
        descuento6= Math.round(0.15*PagoBase6);
        regalo6=3;
    }

    PagoNeto6=PagoBase6-descuento6;

    document.getElementById("nombre6").innerHTML = nombre6;
    document.getElementById("selected6").innerHTML = selected6;
    document.getElementById("cantidad6").innerHTML = cantidad6;
    document.getElementById("precio6").innerHTML = precio6;


    document.getElementById("PagoBase6").innerHTML = PagoBase6;
    document.getElementById("descuento6").innerHTML = descuento6;
    document.getElementById("PagoNeto6").innerHTML = PagoNeto6;
    document.getElementById("regalo6").innerHTML = regalo6;
}


function producto7() {
    nombre7 ='Polos Manga Corta HTML5 ';
    talla7 = document.getElementById("talla7").value;
    combo7 = document.getElementById("talla7");
    selected7 = combo7.options[combo7.selectedIndex].text;
    cantidad7 = document.getElementById("cant7").value;

    if (selected7=='-- Seleccionar Talla --') {
        precio7=0;
    }else if (selected7=='Small') {
        precio7=28;
    }else if (selected7=='Medium') {
        precio7=32;
    }else{
        precio7=36;
    }

    PagoBase7 = precio7*cantidad7;

     if (cantidad7>=1 && cantidad7<4) {
        descuento7 = 0;
        regalo7=0;
    }else if (cantidad7>=4 && cantidad7<8) {
        descuento7 = Math.round(0.05*PagoBase7);
        regalo7=1;
    }else if (cantidad7>=8 && cantidad7<9) {
        descuento7 = Math.round(0.10*PagoBase7);
        regalo7=2;
    }else{
        descuento7= Math.round(0.15*PagoBase7);
        regalo7=3;
    }

    PagoNeto7=PagoBase7-descuento7;

    document.getElementById("nombre7").innerHTML = nombre7;
    document.getElementById("selected7").innerHTML = selected7;
    document.getElementById("cantidad7").innerHTML = cantidad7;
    document.getElementById("precio7").innerHTML = precio7;


    document.getElementById("PagoBase7").innerHTML = PagoBase7;
    document.getElementById("descuento7").innerHTML = descuento7;
    document.getElementById("PagoNeto7").innerHTML = PagoNeto7;
    document.getElementById("regalo7").innerHTML = regalo7;
}

function producto8() {
    nombre8 ='Polos Manga Corta GitHub ';
    talla8 = document.getElementById("talla8").value;
    combo8 = document.getElementById("talla8");
    selected8 = combo8.options[combo8.selectedIndex].text;
    cantidad8 = document.getElementById("cant8").value;

    if (selected8=='-- Seleccionar Talla --') {
        precio8=0;
    }else if (selected8=='Small') {
        precio8=28;
    }else if (selected8=='Medium') {
        precio8=32;
    }else{
        precio8=36;
    }

    PagoBase8 = precio8*cantidad8;

     if (cantidad8>=1 && cantidad8<4) {
        descuento8 = 0;
        regalo8=0;
    }else if (cantidad8>=4 && cantidad8<8) {
        descuento8 = Math.round(0.05*PagoBase8);
        regalo8=1;
    }else if (cantidad8>=8 && cantidad8<9) {
        descuento8 = Math.round(0.10*PagoBase8);
        regalo8=2;
    }else{
        descuento8= Math.round(0.15*PagoBase8);
        regalo8=3;
    }

    PagoNeto8=PagoBase8-descuento8;

    document.getElementById("nombre8").innerHTML = nombre8;
    document.getElementById("selected8").innerHTML = selected8;
    document.getElementById("cantidad8").innerHTML = cantidad8;
    document.getElementById("precio8").innerHTML = precio8;


    document.getElementById("PagoBase8").innerHTML = PagoBase8;
    document.getElementById("descuento8").innerHTML = descuento8;
    document.getElementById("PagoNeto8").innerHTML = PagoNeto8;
    document.getElementById("regalo8").innerHTML = regalo8;
}


function producto9() {
    nombre9 ='Polos Manga Corta Bulma';
    talla9 = document.getElementById("talla9").value;
    combo9 = document.getElementById("talla9");
    selected9 = combo9.options[combo9.selectedIndex].text;
    cantidad9 = document.getElementById("cant9").value;

    if (selected9=='-- Seleccionar Talla --') {
        precio9=0;
    }else if (selected9=='Small') {
        precio9=28;
    }else if (selected9=='Medium') {
        precio9=32;
    }else{
        precio9=36;
    }

    PagoBase9 = precio9*cantidad9;

     if (cantidad9>=1 && cantidad9<4) {
        descuento9 = 0;
        regalo9=0;
    }else if (cantidad9>=4 && cantidad9<8) {
        descuento9 = Math.round(0.05*PagoBase9);
        regalo9=1;
    }else if (cantidad9>=8 && cantidad9<9) {
        descuento9 = Math.round(0.10*PagoBase9);
        regalo9=2;
    }else{
        descuento9= Math.round(0.15*PagoBase9);
        regalo9=3;
    }

    PagoNeto9=PagoBase9-descuento9;

    document.getElementById("nombre9").innerHTML = nombre9;
    document.getElementById("selected9").innerHTML = selected9;
    document.getElementById("cantidad9").innerHTML = cantidad9;
    document.getElementById("precio9").innerHTML = precio9;


    document.getElementById("PagoBase9").innerHTML = PagoBase9;
    document.getElementById("descuento9").innerHTML = descuento9;
    document.getElementById("PagoNeto9").innerHTML = PagoNeto9;
    document.getElementById("regalo9").innerHTML = regalo9;
}

function producto10() {
    nombre10 ='Polos Manga Corta TypeScript ';
    talla10 = document.getElementById("talla10").value;
    combo10 = document.getElementById("talla10");
    selected10 = combo10.options[combo10.selectedIndex].text;
    cantidad10 = document.getElementById("cant10").value;

    if (selected10=='-- Seleccionar Talla --') {
        precio10=0;
    }else if (selected10=='Small') {
        precio10=28;
    }else if (selected10=='Medium') {
        precio10=32;
    }else{
        precio10=36;
    }

    PagoBase10 = precio10*cantidad10;

     if (cantidad10>=1 && cantidad10<4) {
        descuento10 = 0;
        regalo10=0;
    }else if (cantidad10>=4 && cantidad10<8) {
        descuento10 = Math.round(0.05*PagoBase10);
        regalo10=1;
    }else if (cantidad10>=8 && cantidad10<12) {
        descuento10 = Math.round(0.10*PagoBase10);
        regalo10=2;
    }else{
        descuento10 = Math.round(0.15*PagoBase10);
        regalo10=3;
    }

    PagoNeto10=PagoBase10-descuento10;

    document.getElementById("nombre10").innerHTML = nombre10;
    document.getElementById("selected10").innerHTML = selected10;
    document.getElementById("cantidad10").innerHTML = cantidad10;
    document.getElementById("precio10").innerHTML = precio10;


    document.getElementById("PagoBase10").innerHTML = PagoBase10;
    document.getElementById("descuento10").innerHTML = descuento10;
    document.getElementById("PagoNeto10").innerHTML = PagoNeto10;
    document.getElementById("regalo10").innerHTML = regalo10;
}

function producto11() {
    nombre11 ='Polos Manga Corta Drupal ';
    talla11 = document.getElementById("talla11").value;
    combo11 = document.getElementById("talla11");
    selected11 = combo11.options[combo11.selectedIndex].text;
    cantidad11 = document.getElementById("cant11").value;

    if (selected11=='-- Seleccionar Talla --') {
        precio11=0;
    }else if (selected11=='Small') {
        precio11=28;
    }else if (selected11=='Medium') {
        precio11=32;
    }else{
        precio11=36;
    }

    PagoBase11 = precio11*cantidad11;

     if (cantidad11>=1 && cantidad11<4) {
        descuento11 = 0;
        regalo11=0;
    }else if (cantidad11>=4 && cantidad11<8) {
        descuento11 = Math.round(0.05*PagoBase11);
        regalo11=1;
    }else if (cantidad11>=8 && cantidad11<12) {
        descuento11 = Math.round(0.10*PagoBase11);
        regalo11=2;
    }else{
        descuento11 = Math.round(0.15*PagoBase11);
        regalo11=3;
    }

    PagoNeto11=PagoBase11-descuento11;

    document.getElementById("nombre11").innerHTML = nombre11;
    document.getElementById("selected11").innerHTML = selected11;
    document.getElementById("cantidad11").innerHTML = cantidad11;
    document.getElementById("precio11").innerHTML = precio11;


    document.getElementById("PagoBase11").innerHTML = PagoBase11;
    document.getElementById("descuento11").innerHTML = descuento11;
    document.getElementById("PagoNeto11").innerHTML = PagoNeto11;
    document.getElementById("regalo11").innerHTML = regalo11;
}


function producto12() {
    nombre12 ='Polos Manga Corta JavaScript ';
    talla12 = document.getElementById("talla12").value;
    combo12 = document.getElementById("talla12");
    selected12 = combo12.options[combo12.selectedIndex].text;
    cantidad12 = document.getElementById("cant12").value;

    if (selected12=='-- Seleccionar Talla --') {
        precio12=0;
    }else if (selected12=='Small') {
        precio12=28;
    }else if (selected12=='Medium') {
        precio12=32;
    }else{
        precio12=36;
    }

    PagoBase12 = precio12*cantidad12;

     if (cantidad12>=1 && cantidad12<4) {
        descuento12 = 0;
        regalo12=0;
    }else if (cantidad12>=4 && cantidad12<8) {
        descuento12 = Math.round(0.05*PagoBase12);
        regalo12=1;
    }else if (cantidad12>=8 && cantidad12<12) {
        descuento12 = Math.round(0.10*PagoBase12);
        regalo12=2;
    }else{
        descuento12 = Math.round(0.15*PagoBase12);
        regalo12=3;
    }

    PagoNeto12=PagoBase12-descuento12;

    document.getElementById("nombre12").innerHTML = nombre12;
    document.getElementById("selected12").innerHTML = selected12;
    document.getElementById("cantidad12").innerHTML = cantidad12;
    document.getElementById("precio12").innerHTML = precio12;


    document.getElementById("PagoBase12").innerHTML = PagoBase12;
    document.getElementById("descuento12").innerHTML = descuento12;
    document.getElementById("PagoNeto12").innerHTML = PagoNeto12;
    document.getElementById("regalo12").innerHTML = regalo12;
}


function producto13() {
    nombre13 ='Casaca System is a Sound System ';
    talla13 = document.getElementById("talla13").value;
    combo13 = document.getElementById("talla13");
    selected13 = combo13.options[combo13.selectedIndex].text;
    cantidad13 = document.getElementById("cant13").value;

    if (selected13=='-- Seleccionar Talla --') {
        precio13=0;
    }else if (selected13=='Small') {
        precio13=40;
    }else if (selected12=='Medium') {
        precio13=42;
    }else{
        precio13=45;
    }

    PagoBase13 = precio13*cantidad13;

     if (cantidad13>=1 && cantidad13<4) {
        descuento13 = 0;
        regalo13=0;
    }else if (cantidad13>=4 && cantidad13<8) {
        descuento13 = Math.round(0.05*PagoBase13);
        regalo13=1;
    }else if (cantidad13>=8 && cantidad13<12) {
        descuento13 = Math.round(0.10*PagoBase13);
        regalo13=2;
    }else{
        descuento13 = Math.round(0.15*PagoBase13);
        regalo13=3;
    }

    PagoNeto13=PagoBase13-descuento13;

    document.getElementById("nombre13").innerHTML = nombre13;
    document.getElementById("selected13").innerHTML = selected13;
    document.getElementById("cantidad13").innerHTML = cantidad13;
    document.getElementById("precio13").innerHTML = precio13;


    document.getElementById("PagoBase13").innerHTML = PagoBase13;
    document.getElementById("descuento13").innerHTML = descuento13;
    document.getElementById("PagoNeto13").innerHTML = PagoNeto13;
    document.getElementById("regalo13").innerHTML = regalo13;
}


function producto14() {
    nombre14 ='Casaca de Angular ';
    talla14 = document.getElementById("talla14").value;
    combo14 = document.getElementById("talla14");
    selected14 = combo14.options[combo14.selectedIndex].text;
    cantidad14 = document.getElementById("cant14").value;

    if (selected14=='-- Seleccionar Talla --') {
        precio14=0;
    }else if (selected14=='Small') {
        precio14=40;
    }else if (selected14=='Medium') {
        precio14=42;
    }else{
        precio14=45;
    }

    PagoBase14 = precio14*cantidad14;

     if (cantidad14>=1 && cantidad14<4) {
        descuento14 = 0;
        regalo14=0;
    }else if (cantidad14>=4 && cantidad14<8) {
        descuento14 = Math.round(0.05*PagoBase14);
        regalo14=1;
    }else if (cantidad14>=8 && cantidad14<12) {
        descuento14 = Math.round(0.10*PagoBase14);
        regalo14=2;
    }else{
        descuento14 = Math.round(0.15*PagoBase14);
        regalo14=3;
    }

    PagoNeto14=PagoBase14-descuento14;

    document.getElementById("nombre14").innerHTML = nombre14;
    document.getElementById("selected14").innerHTML = selected14;
    document.getElementById("cantidad14").innerHTML = cantidad14;
    document.getElementById("precio14").innerHTML = precio14;


    document.getElementById("PagoBase14").innerHTML = PagoBase14;
    document.getElementById("descuento14").innerHTML = descuento14;
    document.getElementById("PagoNeto14").innerHTML = PagoNeto14;
    document.getElementById("regalo14").innerHTML = regalo14;
}


function producto15() {
    nombre15 ='Casaca Tony Stark(Infinity Wars) ';
    talla15 = document.getElementById("talla15").value;
    combo15 = document.getElementById("talla15");
    selected15 = combo15.options[combo135.selectedIndex].text;
    cantidad15 = document.getElementById("cant15").value;

    if (selected15=='-- Seleccionar Talla --') {
        precio15=0;
    }else if (selected15=='Small') {
        precio15=50;
    }else if (selected15=='Medium') {
        precio15=52;
    }else{
        precio15=55;
    }

    PagoBase15 = precio15*cantidad15;

     if (cantidad15>=1 && cantidad15<4) {
        descuento15 = 0;
        regalo15=0;
    }else if (cantidad15>=4 && cantidad15<8) {
        descuento15 = Math.round(0.05*PagoBase15);
        regalo15=1;
    }else if (cantidad15>=8 && cantidad15<12) {
        descuento15 = Math.round(0.10*PagoBase15);
        regalo15=2;
    }else{
        descuento15 = Math.round(0.15*PagoBase15);
        regalo15=3;
    }

    PagoNeto15=PagoBase15-descuento15;

    document.getElementById("nombre15").innerHTML = nombre15;
    document.getElementById("selected15").innerHTML = selected15;
    document.getElementById("cantidad15").innerHTML = cantidad15;
    document.getElementById("precio15").innerHTML = precio15;


    document.getElementById("PagoBase15").innerHTML = PagoBase15;
    document.getElementById("descuento15").innerHTML = descuento15;
    document.getElementById("PagoNeto15").innerHTML = PagoNeto15;
    document.getElementById("regalo15").innerHTML = regalo15;
}


function producto16() {
    nombre16 ='Abrigo Grün-Schwarzes ';
    talla16 = document.getElementById("talla16").value;
    combo16 = document.getElementById("talla16");
    selected16 = combo16.options[combo16.selectedIndex].text;
    cantidad16 = document.getElementById("cant16").value;

    if (selected16=='-- Seleccionar Talla --') {
        precio16=0;
    }else if (selected16=='Small') {
        precio16=50;
    }else if (selected16=='Medium') {
        precio16=55;
    }else{
        precio16=58;
    }

    PagoBase16 = precio16*cantidad16;

     if (cantidad16>=1 && cantidad16<4) {
        descuento16 = 0;
        regalo16=0;
    }else if (cantidad16>=4 && cantidad16<8) {
        descuento16 = Math.round(0.05*PagoBase16);
        regalo16=1;
    }else if (cantidad16>=8 && cantidad16<12) {
        descuento16 = Math.round(0.10*PagoBase16);
        regalo16=2;
    }else{
        descuento16 = Math.round(0.15*PagoBase16);
        regalo16=3;
    }

    PagoNeto16=PagoBase16-descuento16;

    document.getElementById("nombre16").innerHTML = nombre16;
    document.getElementById("selected16").innerHTML = selected16;
    document.getElementById("cantidad16").innerHTML = cantidad16;
    document.getElementById("precio16").innerHTML = precio16;


    document.getElementById("PagoBase16").innerHTML = PagoBase16;
    document.getElementById("descuento16").innerHTML = descuento16;
    document.getElementById("PagoNeto16").innerHTML = PagoNeto16;
    document.getElementById("regalo16").innerHTML = regalo16;
}