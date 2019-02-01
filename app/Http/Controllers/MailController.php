<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use Mail;
    
    use App\Http\Requests;
    use App\Http\Controllers\Controller;
    
    class MailController extends Controller {
       public function basic_email() {

          $data = array('name'=>"Virat Gandhi");
          Mail::send(['text'=>'mail'], $data, function($message) {
             $message->to('serhat.akar@viacesi.com', 'Nouveau participant')->subject
                ('Nouveau participant');
             $message->from('contact.serhatakar@gmail.com','Admin');
            });
            
        return redirect('evenements')->with('message', 'Vous vous êtes bien inscrit à cet evenement !');
        
       }
    }

