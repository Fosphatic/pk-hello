<?php

namespace Fosphatic\Hello\Controller;

use Pagekit\Application as App;

class HelloMailController {

    /**
    * @Route("/helloMail" , methods="POST")
    * @Request({"data":"array"}, csrf=true)
    * //csrf is safe post okey?
    */
    public function sendMailAction($data = []){

        if (empty($data)) {
            return [
                'status' => 400,
                'error' => 'Bad Request'
            ];
        }

        $form = Hello::create([
          'name' => @$data['name'],
          'email'=> @$data['email'],
          'message' => @$data['message']
        ]);

        $mail = App::mailer()->create();
        $mail->setTo('sven@suchan.me')
        ->setSubject('Example Mail')
        ->setBody(App::view('hello:views/mailTemplate.php' , compact('data')), 'text/html')
        ->send();

        return [
            'status' => 200,
            'message' => 'Mail Send :D'
        ];

    }
}
