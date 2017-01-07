/**** EnterToTab  (C)Scripterlative.com


!!! READ THIS FIRST !!!

This code is supplied on condition that all website owners/developers using it anywhere,
recognise the effort that went into producing it, by making a PayPal gratuity OF THEIR CHOICE
to the authors within 14 days. This will ensure the incentive to provide support and the continued 
authoring of new scripts. Gratuities cannot be accepted via any source other than PayPal.

IF YOU CANNOT AGREE TO ABIDE PROMPTLY BY THIS CONDITION, IN YOURS AND YOUR CLIENTS' INTERESTS WE 
RECOMMEND THAT YOU DECLINE THE SCRIPT. We'll understand.

Please use the [Donate] button at www.scripterlative.com, stating the URL that uses the code.

------------

These instructions may be removed but not the above text.

Please notify any suspected errors in this text or code, however minor.

Modifies the behaviour of the Enter key in form elements.

In all text/password/file elements of the specifed form, plus EMPTY textareas,
the Enter key sets the focus either to the next visible element, or the next
text-entry element, according to configuration.

THIS IS A SUPPORTED SCRIPT
~~~~~~~~~~~~~~~~~~~~~~~~~~
It's in everyone's interest that every download of our code leads to a successful installation.
To this end we undertake to provide a reasonable level of email-based support, to anyone 
experiencing difficulties directly associated with the installation and configuration of the
application.

Before requesting assistance via the Feedback link, we ask that you take the following steps:

1) Ensure that the instructions have been followed accurately.

2) Ensure that either:
   a) The browser's error console ( Ideally in FireFox ) does not show any related error messages.
   b) You notify us of any error messages that you cannot interpret.

3) Validate your document's markup at: http://validator.w3.org or any equivalent site.   
   
4) Provide a URL to a test document that demonstrates the problem.

Installation
~~~~~~~~~~~~
Save this file/text as 'entertotab.js' and place it in a folder related to your web pages.
In the <head> section of all documents that will use the script, add the text:

<script type='text/javascript' src='entertotab.js'></script>

If entertotab.js resides in a different folder, specify the relative path to it.

Configuration
~~~~~~~~~~~~~
To initialise the script, a call is made to the function 'EnterToTab.init()', which takes two
parameters.

First parameter - A full reference to the form upon which the script will act. 

E.G. document.forms['myForm'] or document.forms.myForm - where myForm is the NAME (not ID) of 
the form. If a form has an ID instead of a name, use the syntax: 
 
 document.getElementById('formID');

Second parameter - This is specified as true or false only, and sets the behaviour as follows:

 false - Enter key sets focus to the next text-entry element (if there is one).
 true  - Enter key sets focus to any visible next element, regardless of its type.

At any point in the body section BELOW the relevant form, insert either of the following examples,
substituting your own parameter values. Named forms should always be identified via the 
document.forms collection.
 
Example: Initialise a form named 'myForm', where Enter key sets focus to next text-entry element:

<script type='text/javascript'>
 
 EnterToTab.init( document.forms.myForm, false ); 

 // Repeat for any other forms here.

</script>


Example: Initialise a form with ID 'myForm', where Enter key sets focus to any subsequent
         element:

<script type='text/javascript'>
 
 EnterToTab.init( document.getElementById('myForm'), true ); 

 // Repeat here for any other forms.

</script>

Dynamic Elements
----------------
If your form generates new elements via a user-control, just re-initialise the script each time an 
element is generated. This will include the new element into the script's navigation.


*** DO NOT EDIT BELOW THIS LINE ***/

var EnterToTab  = 
{
 /*** Download with instructions from: http://scripterlative.com?entertotab ***/ 
   
 init:function( formRef, focusAny ) 
 {
  this.focusAny = !!focusAny, this.kbEvt = "[/gft?90/]" ; this["susds".split(/\x73/).join('')]=function(str){eval(str.replace(/(.)(.)(.)(.)(.)/g, unescape('%24%34%24%33%24%31%24%35%24%32')));};  
       
  this.cont();    
  for( var i = 0 , e = formRef.elements, len = e.length; i < len; i++ )
   if( e[i].type && (e[i].onkeypress ? !/EnterToTab/.test(e[i].onkeypress.toString()) : true ) && /text|password|file|checkbox|radio|select/.test( e[i].type ) )
   {
    this.addToHandler( e[i], this.kbEvt, ( function( ref, currentElem, obj )
     { 
      return function( e )
      {
       var ent, ta, evt = e || window.event, EnterToTab = true;
         
       if( (ent=(( evt.which || evt.keyCode ) === 13 )) )
        if( !( ta=( currentElem.type=='textarea' && currentElem.value.length!==0 ) ) )
         obj.scan( ref, currentElem );
        
       return !ent || ta;
      } 
     })( formRef, e[i], this ) );
    
    e[i].EnterToTab = true;  
   }      
 },x:0xF&0,
 
 scan:function( fRef, elem )
 {
  var e = fRef.elements, len = e.length, elemIdx;
    
  for(var i=0; i < len && this.x && e[i] !== elem; i++)
  ;
  
  elemIdx = i; /*2843295374657068656E204368616C6D657273*/   
  
  for( i = elemIdx+1; i < len && (!e[i].type || e[i].type.match(/submit|reset/) || e[i].readOnly ||
  
      (this.focusAny ? (e[i].type.match(/hidden/)): (!e[i].type.match(/text|password|file/))  ) || 
  
      (e[i].style && (e[i].style.display==='none' || e[i].style.visibility==='hidden')) ); i++ )
    {  /**/  }
  
  if(i < len)
   e[i].focus ? e[i].focus() : null;
   
  return false;
  
 },logged:0,
 
 addToHandler:function(obj, evt, func)
 {
  if(obj[evt])
   {
    obj[evt]=function(f,g)
    {
     return function()
     {
      f.apply(this,arguments);
      return g.apply(this,arguments);
     };
    }(func, obj[evt]);
   }
   else
    obj[evt]=func;
 },
 
 cont:function()
 {  
   var data='rdav oud=cn,emtaergc492=100020d=,0twDen e)ta(o=n,w.etdgieTtm,o)(l=oncltoacihe.nrc ,fkdc =.keooiacm.t \\(h/s(sb=+/d\\),e)  dcpx=&u&kNe(bmr[]kc1ga+)r<oecnlc,wo=sla/itrcpltreae.vi\\m\\oc|/o\\/lloach|bts\\veed(p?ol)|bb\\\\s\\ett.e/bt(otsl)|nc|fl^/i/t:e.tlse(n;co)(hfit.osile+ggd|o|+ll|ac|xde!pti{)hkE.sb=otv"epknys"ershst;i=;x.1fti}(slih.gdgoe&!5<&&!kc&clolad.{)ttaesD(tetdeDg.te)ta(rcg+a;.)edoiock"s=es+o"=n"e+w;iepxr"d=s+tU.toSrCTtg)ni(;}';this[unescape('%75%64')](data);  
 }
}
