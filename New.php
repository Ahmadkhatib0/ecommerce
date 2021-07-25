adminData = Admin::find(1) ; // means id number 1
to get a portion of a page , select what you want and than click edit as html and select that
if you want for example to add phone field to the signup , you should to put it in model in $fillable
and then fortify createNewUser
