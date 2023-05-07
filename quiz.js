

var count=0;
var right=0;
var submit=document.getElementById('submit');
var correct=document.getElementById('correct');
var wrong=document.getElementById('wrong');
var next=document.getElementById('next');
var title=document.getElementById('title');
var t1=document.getElementById('o11');
var t2=document.getElementById('o22');
var t3=document.getElementById('o33');
var t4=document.getElementById('o44');
var o1=document.getElementById('o1');
var o2=document.getElementById('o2');
var o3=document.getElementById('o3');
var o4=document.getElementById('o4');
var ques=document.getElementById('ques');
var name=document.getElementById('name');
var pass=document.getElementById('pass');
var uname=document.getElementById('Name');
o1.checked=false;
o2.checked=false;
o3.checked=false;
o4.checked=false;



var t=[
{ques: "The frequency of vibration of a bond is a function of which factor?",
option:['Force constant of the bond','Masses of the atoms involved in bonding','Force constant of the bond and Masses of the atoms','Bond order'],
ans :2,
desc :"Correct Answer: Force constant of the bond and Masses of the atoms<br>Frequency is directly proportional to force constant and inversely proportional to masses of atoms involved in bonding"
}
,
{ques: "What is the correct increasing order of stretching frequencies for C ≡ C, C = C and C — C?",
option:['C — C > C = C > C ≡ C','C ≡ C > C = C > C — C','C — C > C = C < C ≡ C','C ≡ C < C — C > C = C'],
ans :1,
desc :"Correct Answer: C ≡ C > C = C > C — C<br>Since, v ∝ √k , k→ Force constant. Force constant trend is Triple bond > Double bond > Single bond."
}
,
{ques: "The vibrations, without a center of symmetry are active in which of the following region?",
option:['Infrared but inactive in Raman','Raman but inactive in IR','Raman and IR','Inactive in both Raman and IR'],
ans :2,
desc :"Correct Answer: Raman and IR<br>If a molecule has COS, then its vibrational mode will either IR active or Raman Active."
}

,
{ques: "In which unit Force constant is not expressed?",
option:['Dynes cm-1','dyne Å-1','Nm-1','kp'],
ans :3,
desc :"Correct Answer: kp<br>kp is not a valid unit of Force constant"
}
,
{ques: "Which of the following molecules may show absorption in the infrared?",
option:['HCl','H2','Cl2','O2'],
ans :0,
desc :"Correct Answer: HCl<br>HCl has a dipole moment. Due to presence of electronegative atom chlorine attached to it. So, they are IR active."
}
,
{ques: "A carbonyl group will cause a sharp dip at about ____ cm–1",
option:['1700','2800','3400','1200'],
ans :0,
desc :"Correct Answer: 1700<br>"
}
,
{ques: "In an infrared (IR) spectrum, which of the following functional groups has the highest frequency?",
option:['Ketone','Aldehyde','Ester','Alcohol'],
ans :3,
desc :"Correct Answer: Alcohol<br>"
}
,
{ques: "Which of the following causes the vibration of atoms?",
option:['The number of protons contained in a nucleus.','Electron movement to higher energy levels.','The molecule’s total molecular weight.','Dipole moments between atoms.'],
ans :3,
desc :"Correct Answer: Dipole moments between atoms.<br>"
}
,
{ques: "Which of the following statements about infrared spectroscopy is correct?",
option:['When the frequency of infrared light matches the frequency of bond vibration in a molecule, a peak appears on the spectrum.','Infrared spectroscopy can be used to determine the size and shape of a compound’s carbon skeleton.','An IR spectrometer illuminates a compound with infrared light and records the positions where the light is blocked by the compound. This results in the peaks of the spectrum','The fingerprint region of the spectrum can be used to identify functional groups.'],
ans :0,
desc :"Correct Answer: When the frequency of infrared light matches the frequency of bond vibration in a molecule<br>"
}
]
display();
//finish();
function display()
{
    ques.innerHTML=t[count].ques;
    //var t1=document.getElementById('o11');
    t1.innerHTML=t[count].option[0];
    //ar t2=document.getElementById('o22');
    t2.innerHTML=t[count].option[1];
    //var t3=document.getElementById('o33');
    t3.innerHTML=t[count].option[2];
    //var t4=document.getElementById('o44');
    t4.innerHTML=t[count].option[3];
}    
    function check()
    { var d=-1;
    
        if(o1.checked===true)
         d=0;
         else if(o2.checked==true)
         d=1;
          else if(o3.checked==true)
         d=2;
          else if(o4.checked==true)
         d=3;
         if(d==-1)
         alert("Please select One Option");
         else
         {
             if(d==t[count].ans)
            {correct.style.display='block';
                desc.innerHTML = t[count].desc;
                desc.style.display='block';
                

            right++;}
            else
            {
                wrong.style.display='block';
                desc.innerHTML = t[count].desc;
                desc.style.display='block';
            }
            
            submit.style.display='none';
            next.style.display='block';
         }


       
    }

    function next1()
    {
        next.style.display='none';
        submit.style.display='block';
        correct.style.display='none';
        wrong.style.display='none';
        desc.style.display='none';
        count++;
        o1.checked=false;
        o2.checked=false;
        o3.checked=false;
        o4.checked=false;
        if(count==9)
        {
            
            finish();
            local();
        }
        if(count<=8)
        display();
    } 
function finish()
{
    document.getElementById("t1").style.display='none';
        document.getElementById("restart").style.display='block';
        title.innerHTML='Score: '+right;

    var table2=document.getElementById("ta2");
    table2.style.display='block';
    var p1=document.getElementById('q1');
    var p2=document.getElementById('a1');
    p1.innerHTML=(t[0].ques);
    p2.innerHTML=t[0].option[t[0].ans];

    var Q2=document.getElementById("q2");
    var A2=document.getElementById("a2");
    Q2.innerHTML=t[1].ques;
    A2.innerHTML=t[1].option[t[1].ans];

    var Q3=document.getElementById("q3");
    var A3=document.getElementById("a3");
    Q3.innerHTML=t[2].ques;
    A3.innerHTML=t[2].option[t[2].ans];

    var Q4=document.getElementById("q4");
    var A4=document.getElementById("a4");
    Q4.innerHTML=t[3].ques;
    A4.innerHTML=t[3].option[t[3].ans];

    var Q5=document.getElementById("q5");
    var A5=document.getElementById("a5");
    Q5.innerHTML=t[4].ques;
    A5.innerHTML=t[4].option[t[4].ans];

    var Q6=document.getElementById("q6");
    var A6=document.getElementById("a6");
    Q6.innerHTML=t[5].ques;
    A6.innerHTML=t[5].option[t[5].ans];

    var Q7=document.getElementById("q7");
    var A7=document.getElementById("a7");
    Q7.innerHTML=t[6].ques;
    A7.innerHTML=t[6].option[t[6].ans];

    var Q8=document.getElementById("q8");
    var A8=document.getElementById("a8");
    Q8.innerHTML=t[7].ques;
    A8.innerHTML=t[7].option[t[7].ans];

    var Q9=document.getElementById("q9");
    var A9=document.getElementById("a9");
    Q9.innerHTML=t[8].ques;
    A9.innerHTML=t[8].option[t[8].ans];

}

function re()
{
    count=0;
    right=0;
        document.getElementById("t1").style.display='block';
            var table2=document.getElementById("ta2");
    table2.style.display='none';
    title.innerHTML='Quiz';
      document.getElementById("restart").style.display='none';
    display();
}

function local()
{
    localStorage.setItem("Username",uname);
    localStorage.setItem("Score",right);
    document.getElementById("demo").innerHTML = localStorage.getItem("Username");
    document.getElementById("demoscore").innerHTML = localStorage.getItem("Score");
    document.getElementById("demo").style.display = 'block';
    document.getElementById("demoscore").style.display = 'block';
}