// JavaScript Document
function newpassword()//New password checking fron confirm password
    {
        var n,o,n1,o1,a,b;
        n=document.getElementById("t3");
        o=document.getElementById("t4");
        n1=document.getElementById("n1");
        o1=document.getElementById("o1");
        a=n.value;
        b=o.value;
        n1.innerHTML="";
        o1.innerHTML="";
        if(a!=b)
            {
                o1.innerHTML="Not matched with password enter again";
                o.select();
                return false;
            }
    }

function adminreg()
{
    var t1,t2,t3,t4,t5,t6,s1,s2,s3,s4,s5,s6;
    var a,b,c,d,e,f;
    
    t1=document.getElementById("T1");
    t2=document.getElementById("T2");
    t3=document.getElementById("T3");
    t4=document.getElementById("T4");
    t5=document.getElementById("T5");
    t6=document.getElementById("T6");
    s1=document.getElementById("s1");
    s2=document.getElementById("s2");
    s3=document.getElementById("s3");
    s4=document.getElementById("s4");
    s5=document.getElementById("s5");
    s6=document.getElementById("s6");
    
    a=t1.value;
    b=t2.value;
    c=t3.value;
    d=t4.value;
    e=t5.value;
    f=t6.value;
    
    s1.innerHTML="";
    s2.innerHTML="";
    s3.innerHTML="";
    s4.innerHTML="";
    s5.innerHTML="";
    s6.innerHTML="";
    
    if(a==null||a=="")
        {
            s1.innerHTML="*Enter Name";
            t1.focus();
            return false;
        }
    else if(b==null||b=="")
        {
            s2.innerHTML="*Enter Address";
            t2.focus();
            return false;
        }
    else if(c==null||c=="")
        {
            s3.innerHTML="*Enter Contact";
            t3.focus();
            return false;
        }
    else if(d==null||d=="")
        {
            s4.innerHTML="*Enter Email";
            t4.focus();
            return false;
        }
    else if(e==null||e=="")
        {
            s5.innerHTML="Enter Password";
            t5.focus();
            return false;
        }
    else if(f==null||f=="")
        {
            s6.innerHTML="*Enter Confirm Password";
            t6.focus();
            return false;
        }
    else if(e!=f)
        {
            s6.innerHTML="*Not Matched";
            t6.select();
            return false;
        }
}

function medicalreg()
{
    var t1,t2,t3,t4,t5,t6,t7,t8,s1,s2,s3,s4,s5,s6,s7,s8;
    var a,b,c,d,e,f,g,h;
    
    t1=document.getElementById("p1");
    t2=document.getElementById("p2");
    t3=document.getElementById("p3");
    t4=document.getElementById("p4");
    t5=document.getElementById("p5");
    t6=document.getElementById("p6");
    t7=document.getElementById("p7");
    t8=document.getElementById("p8");
    
    s1=document.getElementById("s1");
    s2=document.getElementById("s2");
    s3=document.getElementById("s3");
    s4=document.getElementById("s4");
    s5=document.getElementById("s5");
    s6=document.getElementById("s6");
    s7=document.getElementById("s7");
    s8=document.getElementById("s8");
    
    a=t1.value;
    b=t2.value;
    c=t3.value;
    d=t4.value;
    e=t5.value;
    f=t6.value;
    g=t7.value;
    h=t8.value;
    
    s1.innerHTML="";
    s2.innerHTML="";
    s3.innerHTML="";
    s4.innerHTML="";
    s5.innerHTML="";
    s6.innerHTML="";
    s7.innerHTML="";
    s8.innerHTML="";
    
    if(a==null||a=="")
        {
            s1.innerHTML="*Enter Medical Name";
            t1.focus();
            return false;
        }
    else if(b==null||b=="")
        {
            s2.innerHTML="*Enter Owner Name";
            t2.focus();
            return false;
        }
    else if(c==null||c=="")
        {
            s3.innerHTML="*Enter Licence No.";
            t3.focus();
            return false;
        }
    else if(d==null||d=="")
        {
            s4.innerHTML="*Enter Contact";
            t4.focus();
            return false;
        }
    else if(e==null||e=="")
        {
            s5.innerHTML="*Enter Email";
            t5.focus();
            return false;
        }
    else if(f==null||f=="")
        {
            s6.innerHTML="*Enter Address";
            t6.focus();
            return false;
        }
    else if(g==null||g=="")
        {
            s7.innerHTML="Enter Password";
            t7.focus();
            return false;
        }
    else if(h==null||h=="")
        {
            s8.innerHTML="*Enter Confirm Password";
            t8.focus();
            return false;
        }
    else if(g!=h)
        {
            s8.innerHTML="*Not Matched";
            t8.select();
            return false;
        }
}

function medicinereg()
{
    var t1,t2,t3,t4,s1,s2,s3,s4;
    var a,b,c,d;
    
    t1=document.getElementById("T1");
    t2=document.getElementById("T2");
    t3=document.getElementById("T3");
    t4=document.getElementById("T4");
    
    s1=document.getElementById("s1");
    s2=document.getElementById("s2");
    s3=document.getElementById("s3");
    s4=document.getElementById("s4");
    
    
    a=t1.value;
    b=t2.value;
    c=t3.value;
    d=t4.value;
    
    
    s1.innerHTML="";
    s2.innerHTML="";
    s3.innerHTML="";
    s4.innerHTML="";
    
    
    if(a==null||a=="")
        {
            s1.innerHTML="*Enter Medicine Name";
            t1.focus();
            return false;
        }
    else if(b==null||b=="")
        {
            s2.innerHTML="*Enter Company Name";
            t2.focus();
            return false;
        }
    else if(c==null||c=="")
        {
            s3.innerHTML="*Enter Description";
            t3.focus();
            return false;
        }
    else if(d==null||d=="")
        {
            s4.innerHTML="*Enter Price";
            t4.focus();
            return false;
        }
    
}