<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit profile</title>
	<link rel="stylesheet" href="css/edit_profile.css">
</head>
<body>
	
	@include('navbar')

        <div class="all-edit-big">

            <div class="edit-big1">

                <div class="all-Forme-Edit">

                    <div class="form">
                        <input type="text" id="email" class="form__input" autocomplete="off" placeholder=" ">
                        <label for="name" class="form__label">Name</label>
                    </div>

                    <div class="form">
                        <input type="text" id="email" class="form__input" autocomplete="off" placeholder=" ">
                        <label for="email" class="form__label">Email</label>
                    </div>

                    <div class="form">
                        <input type="password" id="email" class="form__input" autocomplete="off" placeholder=" ">
                        <label for="password" class="form__label">Password</label>
                    </div>

                </div>
                  {{-- ------------------------------------------------------- --}}
                <div class="edit-imge">

                    <div id="admin_image">

                        <img src="./profile.jpeg" width="300" height="300">

                    </div>

                </div>
                    {{-- -----------------------------------------------------/- --}}
            </div>

            <div class="edit-big2">
                 
                <input type="file" name="pic" accept="image/*" style="float: left; color:aliceblue">

                <div id="admin_controls">
                    <button style="float: right;">save</button>
                </div>
            </div>


        </div>

	{{-- <section>
		<div id="admin_information">
	
			<div id="admin_image">
				<img src="./profile.jpeg" width="300" height="300">
			</div>	
	
			<div id="admin_details">


                <div class="edit-input-box">
                    <input id="edit_input" type="text" name="name">
                    <span>Name</span>
                </div>


                <div class="edit-input-box">
                    <input id="edit_input" type="email" name="email">
                    <span>Email</span>
                </div>


                <div class="edit-input-box">
                    <input id="edit_input" type="password" name="password">	
                    <span>Password</span>
                </div>


			</div>
			
		</div>
	
		<div id="admin_controls">
			<input type="file" name="pic" accept="image/*" style="float: left;">
			<button style="float: right;">save</button>
		</div>
	</section> --}}




    @include('footer')
</body>
</html>