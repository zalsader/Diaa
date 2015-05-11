<?php namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class ResourceForm extends Form
{
    public function buildForm()
    {
        $this
        ->add('title', 'text')
        ->add('URI', 'text',[
          'label' => 'URI'
          ])
        ->add('rtype', 'text',[ // TODO make this a selection.
          'label' => 'Type'
          ])
        ->add('rmedium', 'text',[
          'label' => 'Medium'
          ])
        ->add('Create', 'submit', [
                'attr' => ['class' => 'btn btn-primary']
            ])
        ;
        // Add fields here...
    }
}
