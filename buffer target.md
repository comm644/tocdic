См.: [[целевой буфер]].

#shortcut




<hr/>

#tocico

<b>buffer target</b> -   The "order up to" level of a stock buffer in TOC distribution.  It is computed as the "maximum" forecasted consumption of an item within the average replenishment time for that item factored by the unreliability of the replenishment time.  The buffer target is adjusted downward (usually 1/3 the buffer target) for a "too much green" condition (too many reviews where the inventory status was 
<hr/>
<img src="./tocico_dictionary_2nd_editio-19_1.png"/>
19 
green) and is adjusted upward (usually 1/3 the buffer target) for a "too much red" condition (too many reviews where the inventory status was red). 
Example:  Suppose an item has a maximum weekly consumption of 100 units and an average replenishment time of two weeks with rare occasions of replenishment lead time (RLT) being 3 weeks. Suppose to protect for these rare occasions we increase the buffer size by 50% or .5.
The buffer target is: Buffer target = 2 week RLT x max weekly consumption 100 x 1.5 unreliability
  


  
=
 2 weeks

x

100 units/week






 x  1.5 
 


  
=  300 units. 
 Illustration:  A stock buffer for an SKU is shown below.

 

Syn.:[[buffer max]].
 


