!function(e){
    "use strict";
    var a=function(){};
    a.prototype.init=function(){
        c3.generate({
            bindto:"#chart",data:{
                columns:[[
                    "Desktop",150,80,70,152,250,95,150,80,70,152],
                    ["Mobile",200,130,90,240,130,220,200,130,90,240],
                    ["Tablet",300,200,160,400,250,250,300,200,160,400]],
                    type:"bar",
                    colors:{
                        Desktop:"#5ebc4c",
                        Mobile:"#f6d036",
                        Tablet:"#45bbe3"}}}),
                        c3.generate({
                            bindto:"#combine-chart",
                            data:{
                                columns:[[
                                    "SonyVaio",30,20,50,40,60,50],
                                    ["iMacs",200,130,90,240,130,220],
                                    ["Tablets",300,200,160,400,250,250],
                                    ["iPhones",200,130,90,240,130,220],
                                    ["Macbooks",130,120,150,140,160,150]],
                                    types:{
                                        SonyVaio:"bar",iMacs:"bar",Tablets:"spline",iPhones:"line",Macbooks:"bar"},colors:{SonyVaio:"#f87c7c",iMacs:"#ebeff2",Tablets:"#0cc2aa",iPhones:"#6c89d3",Macbooks:"#27ade9"},groups:[["SonyVaio","iMacs"]]},axis:{x:{type:"categorized"}}}),
                                        c3.generate({bindto:"#roated-chart",data:{columns:[["Revenue",30,200,100,400,150,250],["Pageview",50,20,10,40,15,25]],types:{Revenue:"bar"},colors:{Revenue:"#9349ef",Pageview:"#5ebc4c"}},axis:{rotated:!0,x:{type:"categorized"}}}),
                                        c3.generate({bindto:"#chart-stacked",data:{columns:[["Revenue",130,120,150,140,160,150,130,120,150,140,160,150],["Pageview",200,130,90,240,130,220,200,130,90,240,130,220]],types:{Revenue:"area-spline",Pageview:"area-spline"},
                                        colors:{Revenue:"#7277b1",Pageview:"#67bb66"}}}),c3.generate({bindto:"#donut-chart",data:{columns:[["Desktops",78],["Smart Phones",55],["Mobiles",40],["Tablets",25]],type:"donut"},donut:{title:"Candidates",width:30,label:{show:!1}},color:{pattern:["#9349ef","#ebeff2","#5ebc4c","f6d036"]}}),
                                        c3.generate({bindto:"#pie-chart",data:{columns:[["Desktops",78],["Smart Phones",55],["Mobiles",40],["Tablets",25]],type:"pie"},color:{pattern:["#f87c7c","#ebeff2","#5ebc4c","27ade9"]},pie:{label:{show:!1}}}),
                                        c3.generate({bindto:"#line-regions",data:{columns:[["data1",30,200,100,400,150,250,30,200,100,400,150,250],["data2",50,20,10,40,15,25,50,20,10,40,15,25]],regions:{data1:[{start:1,end:2,style:"dashed"},{start:3}],data2:[{end:3}]},colors:{data1:"#f87c7c",data2:"#535d80"}}}),
                                        c3.generate({bindto:"#scatter-plot",data:{xs:{setosa:"setosa_x",versicolor:"versicolor_x"},
                                        columns:[["setosa_x",3.5,3,3.2,3.1,3.6,3.9,3.4,3.4,2.9,3.1,3.7,3.4,3,3,4,4.4,3.9,3.5,3.8,3.8,3.4,3.7,3.6,3.3,3.4,3,3.4,3.5,3.4,3.2,3.1,3.4,4.1,4.2,3.1,3.2,3.5,3.6,3,3.4,3.5,2.3,3.2,3.5,3.8,3,3.8,3.2,3.7,3.3],
                                        ["versicolor_x",3.2,3.2,3.1,2.3,2.8,2.8,3.3,2.4,2.9,2.7,2,3,2.2,2.9,2.9,3.1,3,2.7,2.2,2.5,3.2,2.8,2.5,2.8,2.9,3,2.8,3,2.9,2.6,2.4,2.4,2.7,2.7,3,3.4,3.1,2.3,3,2.5,2.6,3,2.6,2.3,2.7,3,2.9,2.9,2.5,2.8],
                                        ["setosa",.2,.2,.2,.2,.2,.4,.3,.2,.2,.1,.2,.2,.1,.1,.2,.4,.4,.3,.3,.3,.2,.4,.2,.5,.2,.2,.4,.2,.2,.2,.2,.4,.1,.2,.2,.2,.2,.1,.2,.2,.3,.3,.2,.6,.4,.3,.2,.2,.2,.2],
                                        ["versicolor",1.4,1.5,1.5,1.3,1.5,1.3,1.6,1,1.3,1.4,1,1.5,1,1.4,1.3,1.4,1.5,1,1.5,1.1,1.8,1.3,1.5,1.2,1.3,1.4,1.4,1.7,1.5,1,1.1,1,1.2,1.6,1.5,1.6,1.5,1.3,1.3,1.3,1.2,1.4,1.2,1,1.3,1.2,1.3,1.3,1.1,1.3]],
                                        type:"scatter"},color:{pattern:["#f06292","#3b3e47","#45bbe0","#1ea69a"]},axis:{x:{label:"Sepal.Width",tick:{fit:!1}},y:{label:"Petal.Width"}}})},e.ChartC3=new a,e.ChartC3.Constructor=a}(window.jQuery),
                                        function(e){"use strict";window.jQuery.ChartC3.init()}();