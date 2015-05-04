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
        ->add('video_resource_id', 'text',[
          'label' => 'Course Video Link'
          ])
        ->add('img_resource_id', 'file', [
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
