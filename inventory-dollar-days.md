См.: [[доллар-дни-запасов]].

#shortcut




<hr/>

#tocico

## inventory-dollar-days

<b>inventory-dollar-days</b> - (IDD) - A measure of the effectiveness of a supply chain that measures whether the supply chain did things that it shouldn't have done, the result of which is that the supply chain is holding inventory of products customers don't want. The system should strive for the minimum IDDs necessary to reliably maintain zero throughput-dollar-days. 


Usage: IDD accounts for the time from when inventory is first put in stock until it is actually needed by a customer and the monetary value of the inventory being held. IDD is calculated by multiplying the monetary value of each inventory unit in stock by the number of days since that inventory entered the responsibility of that link. The resulting unit of measure is "dollar-days". IDD is neither monetary nor time based. Attempts to compare dollar-days to other monetary measures are invalid. IDDs can be compared only to other IDD levels. 

Example: Consider the IDD for a Part #A243 which has a throughput value of $33. There are currently 144 parts in stock. Of those 144 units, 50 were added to stock just 2 days ago. Fifty more have been in the bin for 22 days, and the remaining 44 units have been in stock for 42 days.  The current IDD for Part #A243 is 100,584. ((50x33x2) + (50x33x22) + (44x33x42)). 



See:[[inventory-value-days]], [[throughput-dollar-days]].
