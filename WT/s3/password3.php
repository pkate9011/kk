        <?php

        $usr = "manoj";

        $psw = "kale";

        

		$name = $_COOKIE['setname'];

        $pass = $_COOKIE['setpass'];

			

			session_start();

		//	$_SESSION['count2']=0;

		if($_SESSION['count2']<3)

		{

			

		

			if (($name == "manoj" && $pass == "kale")) 

			{

				echo "WELCOME SIR/MAM YOU ARE LOGIN SUCCESSFULLY DONE...";

			}

			else {

				$_SESSION['count2'] = $_SESSION['count2']+1;

				echo "incorrect login try again...<BR> you have ".(3 - $_SESSION['count2']). " chances" ;

			}

		}

		else {

			echo "More than 3 chances not allow for incorrect login!!!";

        }

		?>
