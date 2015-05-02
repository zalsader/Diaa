<?php namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class courseCreateForm extends Form
{
    public function buildForm()
    {
        $this
        ->add('name', 'text')
        ->add('description', 'textarea')
        ->add('instructor', 'text')
        ->add('permalink', 'text')
        ->add('starts_on', 'date',[
                'default_value' => date("Y-m-d")
            ])
        ->add('ends_on', 'date',[
            'default_value' => date("Y-m-d")
        ])
        ->add('video_resource_id', 'text')
        ->add('img_resource_id', 'file', [
            'label' => 'Image'
        ])
        ->add('Create', 'submit', [
                'attr' => ['class' => 'btn btn-primary']
            ])
        ;
        // Add fields here...
    }
}