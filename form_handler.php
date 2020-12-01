<?php

class form_handler extends CI_Controller
{
    
	public function index()
	{
		$form_data = (object) $_POST;
	
		$to_email = 'maksoodaalam121@gmail.com';
		
		$from   =  $form_data->your_email; 
		
    $subject = 'Check  Eligibility By Client';
		
		$message = 
      'Name : '.$form_data->your_name.'  
      Mobile Number : '.$form_data->mobile.'  
      Total Experience : '.$form_data->experience. '  
      Email Address : '.$form_data->your_email. ' 
      Message : '.$form_data->message
      ;
    
		if( mail($to_email,$subject,$message) ) {
			echo "<center style='color:green;'><h2>Your request has been sent.</h2></center>";
          echo "
            <script>
              function abc(){ 
                  location.replace('https://www.talentera.co.in/new_talentera');
              }
              setTimeout(abc, 2000);
              //console.log('Your message has been successfully sent. <br/> We will call back to you as soon as possible.');
            </script> 
          ";
			} else {
				echo "<center style='color:red;'>There is something Error. Try After some time or contact us at +91 981-141-4567</center>";
          echo "
            <center style='color:green;'> <h2> <button onclick='abc()'> Home </button> </h2> </center>
            <script>
              function abc(){ 
                location.replace('https://www.talentera.co.in/new_talentera');
              }
              setTimeout(abc, 2000);
              console.log('Something went wrong please try again later.');
            </script>
          ";
      }
	
	}//end of index.

    public function sidebar_form()
    {
        $form_data = (object) $_POST;
        /*
        print_r($form_data);
        print_r( $form_data->your_name ); echo '<br/>';
        print_r( $form_data->your_country ); echo '<br/>';
        print_r( $form_data->highest_qualification ); echo '<br/>';
        print_r( $form_data->total_experience ); echo '<br/>';
        print_r( $form_data->phone_number ); echo '<br/>';
        print_r( $form_data->your_email ); echo '<br/>';
        print_r( $form_data->your_message ); echo '<br/>';
        */
        
        $to_email = 'info@talentera.co.in';
		
		$from   =  $form_data->your_email; 
		
	   	$subject = 'Inquiry Form By Client';
		
		$message = 
		'
		Name : '                   .$form_data->your_name.'  
		Mobile Number : '           .$form_data->phone_number. '  
		Total Experience : '        .$form_data->total_experience. '  
		Email Address : '           .$form_data->your_email. '  
		Country : '                 .$form_data->your_country.'
		Highest Qualification : '   .$form_data->highest_qualification. '  
		
		
		
		
		
		Message : '                 .$form_data->your_message.''
		;
    
		if( mail($to_email,$subject,$message) )
			{
				echo "<center style='color:green;'><h2>Your request has been sent.</h2></center>";
                echo "
                    <script>
                        function abc()
                            { 
                                location.replace('https://www.talentera.co.in/new_talentera');
                            }
                            setTimeout(abc, 2000);
                    </script> 
                ";
            
			} else {
				echo "<center style='color:red;'>There is something Error. Try After some time or contact us at +91 981-141-4567</center>";
            echo "<center style='color:green;'> <h2> <button onclick='abc()'> Home </button> </h2> </center>
            <script>
                        function abc()
                            { 
                                location.replace('https://www.talentera.co.in/new_talentera');
                            }
                            setTimeout(abc, 2000);
                    </script>
            ";
			}
        
    }

    public function contact_form()
    {
        $form_data = (object) $_POST;
        //print_r($form_data);
        
        $to_email = 'info@talentera.co.in';
		
		$from   =  $form_data->your_email; 
		
	   	$subject = $form_data->your_subject;
		
		$message = 
		'
		Name : '                   .$form_data->your_name.'    
		Email Address : '           .$form_data->your_email. '    
		
		
		
		
		
		Message : '                 .$form_data->your_message.''
		;
    
		if( mail($to_email,$subject,$message) )
			{
				echo "<center style='color:green;'><h2>Your request has been sent.</h2></center>";
                echo "
                    <script>
                        function abc()
                            { 
                                location.replace('https://www.talentera.co.in/new_talentera');
                            }
                            setTimeout(abc, 2000);
                    </script> 
                ";
            
			} else {
				echo "<center style='color:red;'>There is something Error. Try After some time or contact us at +91 981-141-4567</center>";
            echo "<center style='color:green;'> <h2> <button onclick='abc()'> Home </button> </h2> </center>
            <script>
                        function abc()
                            { 
                                location.replace('https://www.talentera.co.in/new_talentera');
                            }
                            setTimeout(abc, 2000);
                    </script>
            ";
			}
        
    }

}//end of controller.

?>