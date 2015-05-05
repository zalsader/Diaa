<?php namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class courseForm extends Form
{
    public function buildForm()
    {
        $this
        ->add('name', 'text')
        ->add('permalink', 'text')
        ->add('description', 'textarea')
        ->add('instructor', 'text')
        ->add('starts_on', 'date',[
                'default_value' => date("Y-m-d")
            ])
        ->add('ends_on', 'date',[
            'default_value' => date("Y-m-d")
        ])
        ->add('courseVideo[URI]', 'text',[
          'label' => 'Course Video Link'
          ])
        ->add('courseImage[URI]', 'file', [
            'label' => 'Course Image',
            'attr' => ['accept' => 'image/*']
        ])
        ->add('Create', 'submit', [
                'attr' => ['class' => 'btn btn-primary']
            ])
        ;
        // Add fields here...
    }
}
