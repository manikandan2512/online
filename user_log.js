

                        function validated(){
                        var name = document.n.un.value;
                        var pass = document.n.pass.value;

                        if(name == "")
                        {
                                window.alert("Please enter user name!");
				document.n.un.focus();
				return false;
			}
			if(pass==""){
				window.alert("Please enter password!");
				document.n.pass.focus();
				return false;
			}

   }
   
   function ChangeColor(box)
{
  document.all.n.un.style.background='#CCCCCC';
  document.all.n.pass.style.background='#CCCCCC';
  document.all[box].style.background='#F9AD0B';
}
