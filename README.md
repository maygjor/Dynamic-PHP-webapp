#Explain for my PHP programming flow 

 In designing I combined  my custom CSS skills and bootstrap built in classes to build my own simple CSS library.
nnnnnnnnnn
 In the back end I simplified the the entire website into small and simple <strong>slides</strong> and <strong>plugins</strong>
 for re-usability.<d

 Each different website slide is running inside the same (app.php) main page.
 The main functions are standalone plugins in separate files were each plugin has standard task for encapsulation.

 Each slide connected the plugins that meets its needs using 
''<? include(<plugin path>)?>" .

The main(app.php) file contains all the universal (elements,navigation bar,variables,imports,style sheets links,and external resources) all in one main file that switching between multiple slides and plugins with scope support the slide once its requested.
