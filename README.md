#Explain for my PHP programming flow 

 In design I combined  my custom CSS skills and bootstrap built in classes to build my own simple CSS library.
 
 In the back-end I simplified the the entire Application into small and simple <strong>slides</strong> and <strong>plugins</strong>
 for re-usability.

 Each different website <strong>slide</strong> is running inside the same <strong>(app.php)</strong> main page.
 The main functions are standalone <strong>plugins</strong> in separate files were each <strong>plugins</strong> has standard task for encapsulation.

 Each <strong>slide</strong> connected the <strong>plugins</strong> that meets its needs using 
  include(<plugin path>) inside a php tags.

The main <strong>(app.php)</strong> file contains all the universal (elements,navigation bar,variables,imports,style sheets links,and external resources) all in one main file that switching between multiple slides and <strong>plugins</strong> with scope support the <strong>slide</strong> once its requested.
