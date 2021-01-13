<?php

namespace Drupal\faq_module\Controller;

use Drupal\Core\Controller\ControllerBase;

class FAQController extends ControllerBase {

    public function showFAQ() {

        $questions = array(
            array('name' => 'Can I cancel my booking?'),
            array('name' => 'What should I do if I am traveling to an area that is under a travel advisory?'),
            array('name' => 'What can I do if the property is not as described?'),
            array('name' => 'Can I visit a place to stay before I book?'),
            array('name' => 'How do I know if my booking was canceled?'),
        );

        $answers = array(
            array('name' => 'Yes – any cancellation fees are determined by the property and listed in your cancellation policy. You will pay any additional costs to the property.'),
            array('name' => 'Contact the host if you have questions regarding the safety of the area. They will be able to determine if your reservation is affected by current events, and work with you if the reservation needs to be cancelled.'),
            array('name' => 'If the property is significantly different from the one depicted in the listing, you should first contact the host to make them aware of your concerns. Often times, complaints can be immediately resolved if they are aware of the issue.'),
            array('name' => 'We encourage all guests to complete their bookings through our website before meeting in person to best ensure their safety and privacy.'),
            array('name' => 'After you cancel a booking with us, you should get an email confirming the cancellation. Make sure to check your inbox and spam/junk mail folders. If you don’t receive an email within 24 hours, contact the property to confirm they got your cancellation.'),
        );

        return array(
            '#theme' => 'faq',
            '#questions' => $questions,
            '#answers' => $answers,
            '#title' => 'FAQ'
        );

        // $questions = array(
        //     array('question' => 'Can I cancel my booking?')
        // );

        // return [
        //     '#type' => 'markup',
        //     '#markup' => $questions,
        // ];
    }
}