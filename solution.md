## Step 1

From viewing the source, random.js can be found. This is a js file encoded in JS Fuck. On decoding, we can see the password. This will get us to the next level.


## Step 2

Again, the php source is given and the password is compared using `strcasecmp`. This has a well known vulnerabilty,i.e comparing array and string would return True. Here sending password as `imp[]` would return the next level.


## Step 3

The souce is provided for this phase too and we are required to send the string `flag`. But the filter removes one instance on `flag` fromt the query we send. So `flflagag` would be converted to `flag`. 