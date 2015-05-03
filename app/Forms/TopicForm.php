<?php namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class TopicForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('title', 'text')
            ->add('released_on', 'date',[
                'default_value' => date("Y-m-d")
            ])
            ->add('Create', 'submit', [
                'attr' => ['class' => 'btn btn-primary']
            ])
        ;
        // Add fields here...
    }
}