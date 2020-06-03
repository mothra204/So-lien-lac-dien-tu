<!-- Phan body -->
<div class="container">
			<h2>Nhập Điểm</h2>
			<!-- dropdown tim thong tin -->
			<div  class="container">
					
					<button id="dropdown" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
					Tên Sinh Viên
					</button>
					<!-- Drop down name sinh vien-->
					<div id = "dropdownStudent" class="dropdown-menu">
					</div>
					<p id="importName"></p>
			</div>
			

			<!-- Drop down class -->		
			<div  class="container">
					<button id=dropdown1  type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
					Lớp
					</button>
					<div  class="dropdown-menu">
						<?php foreach($arrClass as $x => $x_value) { ?>
							<a class="dropdown-item dropdown-item-class " onchange="showClass()" onkeyup="showName(this.value)"><?php echo $x_value ?></a>
						<?php } ?>
						
                    </div>
					<p id="importclass" ></p>
            </div>
			<!-- Lay data -->
			<script>
				var elements = document.getElementsByClassName("dropdown-item-class");
				var OnChangeStudent = function() 
				{
					
					console.log(this.getAttribute("ValueID"));
					document.getElementById("importName").innerHTML +=this.getAttribute("ValueID");
				}
				var ShowID = function (value){
					var str = this.innerHTML;
					document.getElementByID("importName").innerHTML = ""+ this.innerHTML;
				}
        		var showClass = function(value) {
					var str = this.innerHTML;
					
					document.getElementById("importclass").innerHTML = ">> " + this.innerHTML;
					//Ajax
					var xhttp = new XMLHttpRequest();
					var arrStudemt = [];
					xhttp.onreadystatechange = function() 
					{
						if (this.readyState == 4 && this.status == 200) {
							arrStudemt = JSON.parse(this.responseText);
							var dropdownStudent = document.getElementById("dropdownStudent");
							
							for(var i = 0; i < arrStudemt.length; i+=2) 
							{
								//Declare
								var j = i ;
								var obj = arrStudemt[i];
								var node = document.createElement("a");                
								var textnode = document.createTextNode(obj);      
								//Init
								node.setAttribute("ValueID", arrStudemt[++j]);
								node.appendChild(textnode);                            
								node.className = "dropdown-item dropdown-item-student";
								node.onclick = OnChangeStudent;
								node.onchange = showID;
								dropdownStudent.appendChild(node);
							}
						}
					};
					
					xhttp.open("GET", "./Model/Data.php?q=" + str, true);
					xhttp.send();
        		};
				for (var i = 0; i < elements.length; i++) 
				{
                		elements[i].addEventListener('click', showClass, true);
        		}
			</script>